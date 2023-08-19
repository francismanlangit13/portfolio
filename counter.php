<?php
    include('initialize.php');

    // Has visitor been counted in this session?
    // If not, record.
    if(!isset($_SESSION['hasVisited'])){
        $_SESSION['hasVisited']="yes";
        $date = date;
        $sql = "INSERT INTO `system_statistics`(`type`, `date`) VALUES ('Visit','$date')";
        $query_run = mysqli_query($con, $sql);
    }
?>