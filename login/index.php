<?php
    include ('../initialize.php');
    include ('../code.php');
    if (strpos($_SERVER['PHP_SELF'], 'error') !== false) {
        // if error.php
    }
    else {
        include ('../db_conn.php');
    }
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

        <title><?= $system['name'] ?> | Login</title>

        <!--- basic page needs -->
        <meta charset="utf-8">
        <meta name="description" content="<?= $system['description'] ?>">
        <meta name="keywords" content="<?= $system['keywords'] ?>">
        <meta name="author" content="<?= $system['author'] ?>">

        <!-- favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url ?>assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url ?>assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url ?>assets/images/favicon/favicon-16x16.png">

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
        <main>
            <div class="container">
                <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                                <div class="d-flex justify-content-center py-4">
                                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                                        <img src="<?php echo base_url ?>assets/images/logo.png" alt="">
                                        <span class="d-none d-lg-block">NiceAdmin</span>
                                    </a>
                                </div>
                                <!-- End Logo -->
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="pt-4 pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                            <p class="text-center small">Enter your email & password to login</p>
                                        </div>
                                        <form class="row g-3 needs-validation" novalidate>
                                            <div class="col-12">
                                                <label for="yourUsername" class="form-label">Email</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i class="bx bxs-envelope"></i></span>
                                                    <input type="text" name="username" class="form-control" id="yourUsername" required>
                                                    <div class="invalid-feedback">Please enter your username.</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="yourPassword" class="form-label">Password</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-dots-horizontal-rounded"></i></span>
                                                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                                                    <div class="invalid-feedback">Please enter your password!</div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100" type="submit">Login</button>
                                            </div>
                                            <div class="col-12">
                                                <p class="small mb-0">forgot your account? <a href="forgot">Reset your password</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <!-- End #main -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="<?php echo base_url ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
        <script src="<?php echo base_url ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url ?>assets/vendor/chart.js/chart.umd.js"></script>
        <script src="<?php echo base_url ?>assets/vendor/echarts/echarts.min.js"></script>
        <script src="<?php echo base_url ?>assets/vendor/quill/quill.min.js"></script>
        <script src="<?php echo base_url ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
        <script src="<?php echo base_url ?>assets/vendor/tinymce/tinymce.min.js"></script>
        <script src="<?php echo base_url ?>assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="<?php echo base_url ?>assets/js/main.min.js"></script>

    </body>

</html>