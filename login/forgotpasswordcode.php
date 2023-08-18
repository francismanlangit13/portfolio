<?php
    include('../db_conn.php');

    //use PHPMailer\PHPMailer\PHPMailer;
    //use PHPMailer\PHPMailer\Exception;

    require ('../assets/PHPMailer/src/Exception.php');
    require ('../assets/PHPMailer/src/PHPMailer.php');
    require ('../assets/PHPMailer/src/SMTP.php');

    if(isset($_POST['forgot_btn'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_mail = "SELECT * FROM user WHERE email = '$email' AND user_status_id = 1";
        $check_mail_run = mysqli_query($con, $check_mail);

        if(mysqli_num_rows($check_mail_run) > 0){
            $row = mysqli_fetch_array($check_mail_run);
            $get_email = $row['email'];
            $fullname = $row['fname']; $row['lname']; $row['suffix'];
            $user_id = $row['user_id'];

            $date = date('Y-m-d H:i:s');
            $forgot_success = "Request reset password";
            $forgot_success_log = "success using email";
            mysqli_query($con,"INSERT INTO user_log (user_id, type, log, logdate) values('".$user_id."','".$forgot_success."','".$forgot_success_log."','$date')");

            $expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
            $expDate = date("Y-m-d H:i:s",$expFormat);
            $key = md5(2418*2);
            $addKey = substr(md5(uniqid(rand(),1)),3,10);
            $key = $key . $addKey;
            $sitelink = base_url;
            
            // Check if a record with the given user_id already exists
            $check_user = mysqli_query($con, "SELECT * FROM password_reset_temp WHERE user_id = '".$user_id."'");
            if(mysqli_num_rows($check_user) > 0) {
                // Update the existing record
                $query = "UPDATE `password_reset_temp` SET `email`='$email', `key`='$key', `expDate`='$expDate' WHERE `user_id`='$user_id'";
                $query_run = mysqli_query($con, $query);
            }
            else {
                // Insert a new record
                mysqli_query($con, "INSERT INTO password_reset_temp (`user_id`, `email`, `key`, `expDate`) VALUES ('".$user_id."', '".$email."', '".$key."', '".$expDate."')");
            }
            // Insert password_reset_temp table
            // mysqli_query($con,"INSERT INTO `password_reset_temp` (`user_id`, `email`, `key`, `expDate`) VALUES ('".$user_id."', '".$email."', '".$key."', '".$expDate."');");

            $output='<p>Dear '.$fullname.',</p>';
            $output.='<p>Please click on the following link to reset your password.</p>';
            $output.='<p>-------------------------------------------------------------</p>';
            $output.='<p><a href="'.$sitelink.'login/reset-password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">'.$sitelink.'login/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';
            $output.='<p>-------------------------------------------------------------</p>';
            $output.='<p>Please be sure to copy the entire link into your browser.
            The link will expire after 1 day for security reason.</p>';
            $output.='<p>If you did not request this forgotten password email, no action 
            is needed, your password will not be reset. However, you may want to log into 
            your account and change your security password as someone may have guessed it.</p>';   	
            $output.='<p>Thanks,</p>';
            $output.='<p>Municipal Agriculture Office Jimenez</p>';
            $body = $output;
            $default_email = emailuser;
            $subject = "Password Recovery - $default_email";
            $email_to = $email;
            $fromserver = emailuser; 

            require("../assets/PHPMailer/PHPMailerAutoload.php");
            require ("../assets/PHPMailer/class.phpmailer.php");
            require ("../assets/PHPMailer/class.smtp.php");

            $mail = new PHPMailer();
            $mail->IsSMTP();
            //$mail->SMTPDebug = 2; // Debug if the gmail doesn't send email when forgetting password.
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'TLS/STARTTLS';
            $mail->Host = 'smtp.gmail.com'; // Enter your host here
            $mail->Port = '587';
            $mail->IsHTML();
            $mail->Username = emailuser; // Enter your email here
            $mail->Password = emailpass; //Enter your passwrod here
            $mail->SetFrom(emailuser, 'Reset your password');
            //$mail->FromName = "AllPHPTricks";
            //$mail->Sender = $fromserver; // indicates ReturnPath header
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAddress($email_to);
            if(!$mail->Send()){
                $_SESSION['status'] = "Mailer Error: " . $mail->ErrorInfo;
                $_SESSION['status_code'] = "error";
                header("Location: " . base_url . "login/forgot");
                exit(0);
            }
            else{
                $_SESSION['status'] = "An email has been sent to you with instructions on how to reset your password. If your email not received check on spam folder";
                $_SESSION['status_code'] = "success";
                header("Location: " . base_url . "login/forgot");
                exit(0);
            }
        }
        else{
            $_SESSION['status'] = "No Email Found";
            $_SESSION['status_code'] = "error";
            header("Location: " . base_url . "login/forgot");
            exit(0);
        }
    }

    if(isset($_POST['changepass_btn'])){
        $password = $_POST["password"];
        $email = $_POST["email"];
        $curDate = date("Y-m-d H:i:s");
        $hash_password = md5($password);
        
        $query1 = mysqli_query($con, "UPDATE `user` SET `password`='".$hash_password."' WHERE `email`='".$email."';");
        $num_rows_affected = mysqli_affected_rows($con);
        $query2 = mysqli_query($con, "DELETE FROM `password_reset_temp` WHERE `email`='".$email."'");

        if ($query1 && $query2 > 0) {
            $user_query = "SELECT * FROM user WHERE `email`='".$email."'";
            $user_query_run = mysqli_query($con, $user_query);
            if(mysqli_num_rows($user_query_run) > 0){
                foreach($user_query_run as $data){
                    $user_id = $data['user_id'];
                }

                $date = date('Y-m-d H:i:s');
                $forgotpassword_success = "Request reset password";
                $forgotpassword_success_log = "success change new password";
                mysqli_query($con,"INSERT INTO user_log (user_id, type, log, logdate) values('".$user_id."','".$forgotpassword_success."','".$forgotpassword_success_log."','$date')");

                $_SESSION['status'] = "Password updated successfully";
                $_SESSION['status_code'] = "success";
                header("Location: " . base_url . "login");
                exit(0);
            }
        }
        else{
            $_SESSION['status'] = "Something went wrong";
            $_SESSION['status_code'] = "error";
            header("Location: " . base_url . "login/forgot");
            exit(0);
        }
    }
?>