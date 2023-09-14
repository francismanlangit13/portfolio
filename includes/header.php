<?php
    
    include ('db_conn.php');
    include ('code.php');
    $secretkey_file = base_url . 'web.conf';
    $secretkey = file_get_contents($secretkey_file);
?>
<?php 
    $c_qry = $con->query("SELECT * FROM system_setting");
    while($row = $c_qry->fetch_assoc()){
        $system[$row['meta']] = $row['meta_value'];
    }
?>
<!--- basic page needs -->
<meta charset="utf-8">
<meta name="description" content="<?= $system['description'] ?>">
<meta name="keywords" content="<?= $system['keywords'] ?>">
<meta name="author" content="<?= $system['author'] ?>">

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