<?php
    include('authentication.php');
?>
<?php 
    $c_qry = $con->query("SELECT * FROM system_setting");
    while($row = $c_qry->fetch_assoc()){
        $system[$row['meta']] = $row['meta_value'];
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="description" content="<?= $system['description'] ?>">
        <meta name="keywords" content="<?= $system['keywords'] ?>">
        <meta name="author" content="<?= $system['author'] ?>">

        <title><?= $system['name'] ?> | Admin</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url ?>assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url ?>assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url ?>assets/images/favicon/favicon-16x16.png">

        <link href="<?php echo base_url ?>assets/css/loader.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="<?php echo base_url ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?php echo base_url ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
        <link href="<?php echo base_url ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
        <link href="<?php echo base_url ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="<?php echo base_url ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?php echo base_url ?>assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Loading Screen -->
        <div class="noprint-scroll" id="loading">
            <img id="loading-image" src="<?php echo base_url ?>assets/images/system/loading.gif" alt="Loading" />
        </div>
        <?php
            include('nav-top.php');
            include('sidebar.php');
            include('message.php');
        ?>