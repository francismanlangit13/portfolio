<?php
    include ('db_conn.php');
    $sql = "SELECT * FROM system_info";
    $result = mysqli_query($con, $sql);

    $c_qry = $con->query("SELECT * FROM system_setting");
    $system = array(); // Initialize the $system array to store settings

    while($row = $c_qry->fetch_assoc()){
        $system[$row['meta']] = $row['meta_value'];
    }

    if(isset($_POST['resume'])){
        $date = date; // Get the current date and time
        $sql = "INSERT INTO `system_statistics`(`type`, `date`) VALUES ('Resume', '$date')";
        $query_run = mysqli_query($con, $sql);
        if($query_run > 0){
            $download_url = base_url . 'assets/docs/' . $system['resume'];
            
            // Perform the download
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($download_url) . '"');
            readfile($download_url);
            exit(0);
        }
        else{
            $_SESSION['status'] = "Could not download";
            $_SESSION['status_code'] = "error";
            header("Location: " . base_url);
            exit(0);
        }
    }

    if(isset($_POST['email'])){
        $date = date; // Get the current date and time
        $email = $system['email'];  // Assuming this is the correct way to get the email from your settings
        
        $sql = "INSERT INTO `system_statistics`(`type`, `date`) VALUES ('Email', '$date')";
        $query_run = mysqli_query($con, $sql);
        
        if($query_run){
            // Return a response containing JavaScript to open the email client
            $response = '<script> window.location.href = "mailto:' . $email . '"; </script>';
            echo $response;
        }
    }

    if(isset($_POST['phone'])){
        $date = date; // Get the current date and time
        $phone = $system['number'];  // Assuming this is the correct way to get the phone from your settings
        
        $sql = "INSERT INTO `system_statistics`(`type`, `date`) VALUES ('Phone', '$date')";
        $query_run = mysqli_query($con, $sql);
        
        if($query_run){
            // Return a response containing JavaScript to open the phone client
            $response = '<script> window.location.href = "tel:' . $phone . '"; </script>';
            echo $response;
        }
    }
?>