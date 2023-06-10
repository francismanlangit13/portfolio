<?php
    include ('initialize.php');
    include ('code.php');
    if (strpos($_SERVER['PHP_SELF'], 'error') !== false) {
        // if error.php
    }
    else {
        include ('db_conn.php');
    }
?>
<!--- basic page needs -->
<meta charset="utf-8">
<meta name="description" content="">
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