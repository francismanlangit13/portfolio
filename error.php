<?php
    if(!defined('DB_SERVER')){
        include("initialize.php");
        // DB connection parameters
        $host = DB_SERVER;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $database = DB_NAME;

        $con = new mysqli($host, $username, $password, $database);

        if($con->connect_error){
            // Dead code.
        }
        else{
            header("Location: " . base_url);
        }
    }
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>
        <!-- Title -->
        <title>Franz | 522 Connection Timed Out</title>

        <!--- basic page needs -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">

        <!-- mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url ?>assets/css/base.css">
        <link rel="stylesheet" href="<?php echo base_url ?>assets/css/vendor.css">
        <link rel="stylesheet" href="<?php echo base_url ?>assets/css/main.css">

        <!-- script -->
        <script src="<?php echo base_url ?>assets/js/modernizr.js"></script>
        <script src="<?php echo base_url ?>assets/js/pace.min.js"></script>

        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url ?>assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url ?>assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url ?>assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo base_url ?>assets/components/site.webmanifest">
        <?php include ('loading.php'); ?>
    </head>

    <body id="top">

        <div id="preloader">
            <div id="loader"></div>
        </div>

        <!-- intro -->
        <div class="column mob-full intro-text text-center">
            <h2 style="color:white">522 | Connection Timed Out</h2>
            <p style="color:white">It looks like you found a glitch in the connection...</p>
            <p style="color:white">Possible problems</p>
            <h3>
                &#x2022; Database connection Error <br>
            </h3>
            <h3>
                &#x2022; Server configuration error <br>
            </h3>
            <h3>
                &#x2022; PHP error
            </h3>
        </div>
        <!-- Bottom -->
        <?php
            include('includes/bottom.php');
        ?>

    </body>

</html>