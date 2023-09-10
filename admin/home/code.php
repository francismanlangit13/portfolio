<?php include('../includes/authentication.php');

    if(isset($_POST['logout_btn'])){
        // session_destroy();
        unset( $_SESSION['auth']);
        unset( $_SESSION['auth_role']);
        unset( $_SESSION['auth_user']);

        $_SESSION['status'] = "You have successfully disconnected from your account.";
        $_SESSION['status_code'] = "success";
        header("Location: " . base_url . "login");
        exit(0);
    }

    // Update project
    if(isset($_POST["update_project"])){
        $project_id = $_POST['project_id'];
        $uploadDir = '../../assets/images/project/';

        if(isset($_FILES['pimage1']) && $_FILES['pimage1']['error'] === UPLOAD_ERR_OK) {
            $photo = $_FILES['pimage1'];
            $OLDfileImage = $_POST['oldpimage1'];
            $customFileName = 'project1_' . date('Ymd_His'); // replace with your desired file name
            $ext = pathinfo($photo['name'], PATHINFO_EXTENSION); // get the file extension
            $fileName = $customFileName . '.' . $ext; // append the extension to the custom file name
            $fileTmpname = $photo['tmp_name'];
            $fileSize = $photo['size'];
            $fileError = $photo['error'];
            $fileExt = explode('.',$fileName);
            $fileActExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            if(in_array($fileActExt, $allowed)){
                if($fileError === 0){
                    if($fileSize < 10485760){
                        unlink($uploadDir . $OLDfileImage);
                        $targetFile = $uploadDir . $fileName;

                        if (move_uploaded_file($fileTmpname, $targetFile)) {
                            $sql1 = "UPDATE `project` SET `photo` = '$fileName' WHERE `project_id` = '$project_id'";
                            $sql1_run = mysqli_query($con, $sql1);
                        }
                    }
                    else{
                        $_SESSION['status']="Project image1 file is too large file must be 10mb";
                        $_SESSION['status_code'] = "error"; 
                        header("Location: " . base_url . "admin/home/project");
                    }
                }
                else{
                    $_SESSION['status']="Project image1 file error";
                    $_SESSION['status_code'] = "error"; 
                    header("Location: " . base_url . "admin/home/project");
                }
            }
            else{
                $_SESSION['status']="Project image1 invalid file type";
                $_SESSION['status_code'] = "error"; 
                header("Location: " . base_url . "admin/home/project");
            }
        }
        if(isset($_FILES['pimage2']) && $_FILES['pimage2']['error'] === UPLOAD_ERR_OK) {
            $photo1 = $_FILES['pimage2'];
            $OLDfileImage1 = $_POST['oldpimage2'];
            $customFileName1 = 'project2_' . date('Ymd_His'); // replace with your desired file name
            $ext1 = pathinfo($photo1['name'], PATHINFO_EXTENSION); // get the file extension
            $fileName1 = $customFileName1 . '.' . $ext1; // append the extension to the custom file name
            $fileTmpname1 = $photo1['tmp_name'];
            $fileSize1 = $photo1['size'];
            $fileError1 = $photo1['error'];
            $fileExt1 = explode('.',$fileName1);
            $fileActExt1 = strtolower(end($fileExt1));
            $allowed1 = array('jpg','jpeg','png');
            if(in_array($fileActExt1, $allowed1)){
                if($fileError1 === 0){
                    if($fileSize1 < 10485760){
                        unlink($uploadDir . $OLDfileImage1);
                        $targetFile1 = $uploadDir . $fileName1;

                        if (move_uploaded_file($fileTmpname1, $targetFile1)) {
                            $sql2 = "UPDATE `project` SET `photo1` = '$fileName1' WHERE `project_id` = '$project_id'";
                            $sql2_run = mysqli_query($con, $sql2);
                        }
                    }
                    else{
                        $_SESSION['status']="Project image2 file is too large file must be 10mb";
                        $_SESSION['status_code'] = "error"; 
                        header("Location: " . base_url . "admin/home/project");
                    }
                }
                else{
                    $_SESSION['status']="Project image2 file error";
                    $_SESSION['status_code'] = "error"; 
                    header("Location: " . base_url . "admin/home/project");
                }
            }
            else{
                $_SESSION['status']="Project image2 invalid file type";
                $_SESSION['status_code'] = "error"; 
                header("Location: " . base_url . "admin/home/project");
            }
        }
        if(isset($_FILES['pimage3']) && $_FILES['photo2']['error'] === UPLOAD_ERR_OK) {
            $photo2 = $_FILES['pimage3'];
            $OLDfileImage2 = $_POST['oldpimage3'];
            $customFileName2 = 'project3_' . date('Ymd_His'); // replace with your desired file name
            $ext2 = pathinfo($photo2['name'], PATHINFO_EXTENSION); // get the file extension
            $fileName2 = $customFileName2 . '.' . $ext2; // append the extension to the custom file name
            $fileTmpname2 = $photo2['tmp_name'];
            $fileSize2 = $photo2['size'];
            $fileError2 = $photo2['error'];
            $fileExt2 = explode('.',$fileName2);
            $fileActExt2 = strtolower(end($fileExt2));
            $allowed2 = array('jpg','jpeg','png');
            if(in_array($fileActExt2, $allowed2)){
                if($fileError2 === 0){
                    if($fileSize2 < 10485760){
                        unlink($uploadDir . $OLDfileImage2);
                        $targetFile2 = $uploadDir . $fileName2;

                        if (move_uploaded_file($fileTmpname2, $targetFile2)) {
                            $sql3 = "UPDATE `project` SET `photo2` = '$fileName2' WHERE `project_id` = '$project_id'";
                            $sql3_run = mysqli_query($con, $sql3);
                        }
                    }
                    else{
                        $_SESSION['status']="Project image3 file is too large file must be 10mb";
                        $_SESSION['status_code'] = "error"; 
                        header("Location: " . base_url . "admin/home/project");
                    }
                }
                else{
                    $_SESSION['status']="Project image3 file error";
                    $_SESSION['status_code'] = "error"; 
                    header("Location: " . base_url . "admin/home/project");
                }
            }
            else{
                $_SESSION['status']="Project image3 invalid file type";
                $_SESSION['status_code'] = "error"; 
                header("Location: " . base_url . "admin/home/project");
            }
        }
        if(isset($_FILES['pimage4']) && $_FILES['pimage4']['error'] === UPLOAD_ERR_OK) {
            $photo3 = $_FILES['pimage4'];
            $OLDfileImage3 = $_POST['oldpimage4'];
            $customFileName3 = 'project4_' . date('Ymd_His'); // replace with your desired file name
            $ext3 = pathinfo($photo3['name'], PATHINFO_EXTENSION); // get the file extension
            $fileName3 = $customFileName3 . '.' . $ext3; // append the extension to the custom file name
            $fileTmpname3 = $photo3['tmp_name'];
            $fileSize3 = $photo3['size'];
            $fileError3 = $photo3['error'];
            $fileExt3 = explode('.',$fileName3);
            $fileActExt3 = strtolower(end($fileExt3));
            $allowed3 = array('jpg','jpeg','png');
            if(in_array($fileActExt3, $allowed3)){
                if($fileError3 === 0){
                    if($fileSize3 < 10485760){
                        unlink($uploadDir . $OLDfileImage3);
                        $targetFile3 = $uploadDir . $fileName3;

                        if (move_uploaded_file($fileTmpname3, $targetFile3)) {
                            $sql4 = "UPDATE `project` SET `photo3` = '$fileName3' WHERE `project_id` = '$project_id'";
                            $sql4_run = mysqli_query($con, $sql4);
                        }
                    }
                    else{
                        $_SESSION['status']="Project image4 file is too large file must be 10mb";
                        $_SESSION['status_code'] = "error"; 
                        header("Location: " . base_url . "admin/home/project");
                    }
                }
                else{
                    $_SESSION['status']="Project image4 file error";
                    $_SESSION['status_code'] = "error"; 
                    header("Location: " . base_url . "admin/home/project");
                }
            }
            else{
                $_SESSION['status']="Project image4 invalid file type";
                $_SESSION['status_code'] = "error"; 
                header("Location: " . base_url . "admin/home/project");
            }
        }
        $pname = $_POST['pname'];
        $ptype = $_POST['ptype'];
        $purl = $_POST['purl'];
        $pdate = $_POST['pdate'];
        $pdescription = $_POST['pdescription'];
        $pstatus = $_POST['pstatus'];
        
        $query = "UPDATE `project` SET `name` = '$pname', `description` = '$pdescription', `type` = '$ptype', `url` = '$purl', `date` = '$pdate', `status_id` = '$pstatus' WHERE `project_id` = '$project_id'";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['status'] = "Project updated successfully";
            $_SESSION['status_code'] = "success";
            header("Location: " . base_url . "admin/home/project");
            exit(0);
        }
        else{
            $_SESSION['status'] = "Project was not updated";
            $_SESSION['status_code'] = "error";
            header("Location: " . base_url . "admin/home/project");
            exit(0);
        }
    }
?>