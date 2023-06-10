<?php
    include ('db_conn.php');
    $sql = "SELECT * FROM system_info";
    $result = mysqli_query($con, $sql);
?>