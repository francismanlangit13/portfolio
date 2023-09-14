<?php
    include ('db_conn.php');
    if(!$sock = @fsockopen(base_url, 80)){
        echo 'Not Connected';
    }
    else{
        echo 'Connected';
    }
?>