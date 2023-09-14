<?php
    if(!defined('DB_SERVER')){
        include("initialize.php");
        $secretkey_file = base_url . 'web.conf';
        $secretkey = file_get_contents($secretkey_file);
    }
?>
<?php
    // DB connection parameters
    $host = DB_SERVER;
    $username = DB_USERNAME;
    $password = DB_PASSWORD;
    $database = DB_NAME;
    $md5_hash = md5($secretkey);
    $encode_key = sha1($md5_hash);

    $con = new mysqli($host, $username, $password, $database);
    $check_connection = "SELECT * FROM auth WHERE decode_key = '$encode_key'";
    $check_connection_query_run = mysqli_query($con, $check_connection);

    if($con->connect_error){
        header("Location: " . base_url . "error");
        die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    }
    else{
        if(mysqli_num_rows($check_connection_query_run) > 0){
            // Dead code.
        } else {
            header("Location: " . base_url . "auth");
            die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
        }
    }
?>