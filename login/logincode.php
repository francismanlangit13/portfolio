<?php
    include('../db_conn.php');

    if(isset($_POST['login_btn'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $hashed_password = md5($password);
        $login_query = "SELECT * FROM user WHERE email = '$email' AND password = '$hashed_password' LIMIT 1";
        $login_query_run = mysqli_query($con, $login_query);

        if(mysqli_num_rows($login_query_run) > 0){
            foreach($login_query_run as $data){
                $user_id = $data['user_id'];
                $full_name = $data['fname'].' '.$data['lname'];
                $user_type = $data['user_type_id'];
            }

            $date = date('Y-m-d H:i:s');
            $login_success = "Login";
            $login_success_log = "success using email and password";
            mysqli_query($con,"INSERT INTO user_log (user_id, type, log, logdate) values('".$user_id."','".$login_success."','".$login_success_log."','$date')");

            $_SESSION['auth'] = true;
            $_SESSION['auth_role'] = "$user_type";
            $_SESSION['auth_user'] = [
                'user_id' =>$user_id,
                'user_name' =>$full_name,
            ];

            if($_SESSION['auth'] == true){
                $_SESSION['status'] = "Welcome $full_name!";
                $_SESSION['status_code'] = "success";
                header("Location: " . base_url . "admin");
                exit(0);
            }
        }
        else {

            $date = date('Y-m-d H:i:s');
            $login_error = "Login";
            $login_error_log = "failed invalid email or password";
            mysqli_query($con,"INSERT INTO user_log (user_id, type, log, logdate) values('".$user_id."','".$login_error."','".$login_error_log."','$date')");

            $_SESSION['status'] = "Invalid Email or Password";
            $_SESSION['status_code'] = "error";
            header("Location: " . base_url . "login");
            exit(0);
        }
    }   
    else {
        $_SESSION['status'] = "You are not allowed to access this site";
        $_SESSION['status_code'] = "error";
        header("Location: " . base_url . "login");
        
        exit(0);
    }

?>