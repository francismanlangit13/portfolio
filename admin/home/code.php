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