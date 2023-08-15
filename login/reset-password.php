<?php
  include ('../../db_conn.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A web-based Farmers monitoring management system" name="description">
    <meta content="Monitoring, Management, System, Notification" name="keywords">

    <!-- Title Page -->
    <title>Municipal Agriculture Office Jimenez | Forgot Password</title>

    <!-- Remove Banner -->
    <script src="<?php echo base_url ?>assets/js/fwhabannerfix.js"></script>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url ?>assets/img/system/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url ?>assets/img/system/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url ?>assets/img/system/favicon.png">

    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/bootstrap.min.css">
    <link href="<?php echo base_url ?>assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Loading CSS -->
    <link href="<?php echo base_url ?>assets/css/loader.css" rel="stylesheet">

    <!-- Cookie CSS -->
    <link href="<?php echo base_url ?>assets/css/cookie.css" rel="stylesheet">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/loginstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url ?>assets/fonts/icomoon/style.css">
  </head>
  <?php
    if(isset($_SESSION['auth'])){
      if ($_SESSION['auth_role'] == "1"){
        if(!isset($_SESSION['status'])){
          $_SESSION['status'] = "You are already logged in";
          $_SESSION['status_code'] = "error";
        }
        header("Location: " . base_url . "admin");
        exit(0);
      }
      elseif ($_SESSION['auth_role'] == "2"){
        if(!isset($_SESSION['status'])){
          $_SESSION['status'] = "You are already logged in";
          $_SESSION['status_code'] = "error";
        }
        header("Location: " . base_url . "staff");
        exit(0);
      }
      elseif ($_SESSION['auth_role'] == "3"){
        if(!isset($_SESSION['status'])){
          $_SESSION['status'] = "You are already logged in";
          $_SESSION['status_code'] = "error";
        }
        header("Location: " . base_url . "farmer");
        exit(0);
      }
      else{
        if(!isset($_SESSION['status'])){
            $_SESSION['status'] = "Login first to access dashboard";
            $_SESSION['status_code'] = "error";
        }
        header("Location: " . base_url . "login");
        exit(0);
      }
    }
    if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"]=="reset") && !isset($_POST["action"])){
        $key = $_GET["key"];
        $email = $_GET["email"];
        $curDate = date("Y-m-d H:i:s");
        $query = mysqli_query($con,"SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';");
        $row = mysqli_num_rows($query);
        if ($row==""){
            $_SESSION['status'] = "The link is invalid or expired.";
            $_SESSION['status_code'] = "error";
            header("Location: " . base_url . "login/forgot");
            exit(0);
        }
        else{
            $row = mysqli_fetch_assoc($query);
	        $expDate = $row['expDate'];
	        if ($expDate >= $curDate){
  ?>
    <body>
      <!-- Loading Screen -->
      <div id="loading">
          <img id="loading-image" src="<?php echo base_url ?>assets/img/system/loading.gif" alt="Loading" />
      </div>
      <div id="connectionAlert" class="alert"></div>
      <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('<?php echo base_url ?>assets/img/system/template.jpg');"></div>
        <div class="contents order-2 order-md-1">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-7">
                <h3><strong><center>Type New Password</center></strong></h3>
                <br>
                <form action="forgotpasswordcode.php" method="POST">
                  <input type="hidden" name="email" value = "<?php echo $email; ?>"/>
                  <div class="form-group first">
                    <label for="password">New Password</label>
                    <input type="password" name="password" class="form-control" minlength="8" placeholder="New Password" id="password" required>
                    <a href="javascript:void(0)"  style="position: relative; top: -2.5rem; left: 87%; cursor: pointer; color: lightgray;">
                      <img alt="show password icon" src="<?php echo base_url ?>assets/img/icons/eye-close.png" width="25rem" height="21rem" id="togglePassword">
                    </a>
                    <div id="password-error" style="margin-top:-23px;"></div>
                  </div>
                  <div class="form-group first">
                    <label for="password1">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" minlength="8" placeholder="Confirm Password" id="password1" required>
                    <a href="javascript:void(0)"  style="position: relative; top: -2.5rem; left: 87%; cursor: pointer; color: lightgray;">
                      <img alt="show password icon" src="<?php echo base_url ?>assets/img/icons/eye-close.png" width="25rem" height="21rem" id="togglePassword1">
                    </a>
                    <div id="password1-error" style="margin-top:-23px;"></div>
                  </div>
                  <button type="submit" id="submit-btn" name="changepass_btn" class="btn btn-block btn-success">Update Password</button>
                  <br>
                  <span class="ml-auto"><a href="<?php echo base_url ?>"><u>Click here to Homepage</u></a></span> 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Cookie Consent -->
      <div class="wrapper">
        <img src="<?php echo base_url ?>assets/img/icons/cookie.png" alt="">
        <div class="content">
          <header>Cookies Consent</header>
          <p>Cookies help us deliver our services. By using our services, you agree to our use of cookies. <a href="<?php echo base_url ?>cookie-policy">Cookie Policy</a>. For information on how we protect your privacy, please read our <a href="<?php echo base_url ?>privacy-policy">Privacy Policy</a>.</p>
          <div class="buttons">
            <button class="item">I accept</button>
          </div>
        </div>
      </div>
      <!-- End Cookie Consent -->

      <script src="<?php echo base_url ?>assets/js/sweetalert.js"></script>
      <?php include ('message.php'); ?>
      <script>
        var base_url = "<?php echo base_url ?>"; // global location for javascript
      </script>

      <!-- Cookie Consent -->
      <script src="<?php echo base_url ?>assets/js/cookie.js"></script>

      <!-- Disable-key -->
      <script src="<?php echo base_url ?>assets/js/disable-key.js"></script>

      <!-- Image viewer slider -->
      <script src="<?php echo base_url ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
      <script src="<?php echo base_url ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="<?php echo base_url ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="<?php echo base_url ?>assets/js/main.js"></script>

      <script src="<?php echo base_url ?>assets/js/jquery-3.3.1.min.js"></script>
      <script src="<?php echo base_url ?>assets/js/popper.min.js"></script>
      <script src="<?php echo base_url ?>assets/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url ?>assets/js/main.js"></script>
      <!-- Loading JS -->
      <script src="<?php echo base_url ?>assets/js/loader.js"></script>
      <script src="<?php echo base_url ?>assets/js/showpass.js"></script>
      <script src="<?php echo base_url ?>assets/js/underscore-min.js"></script>
      <!-- Serverstatus JS -->
      <script src="<?php echo base_url ?>assets/js/serverstatus.js"></script>
    </body>
  <?php } } } ?>
</html>

<script>
  // Get references to the password fields and label
  const passwordInput = document.getElementById('password');
  const confirmPasswordInput = document.getElementById('password1');
  const confirmLabel = document.querySelector('label[for="password1"]');

  // Function to check if passwords match and update required class
  function checkPasswords() {
    if (passwordInput.value) {
      confirmLabel.classList.add('required');
    } else {
      confirmLabel.classList.remove('required');
    }

    if (passwordInput.value !== confirmPasswordInput.value) {
      confirmPasswordInput.setCustomValidity("Passwords do not match");
    } else {
      confirmPasswordInput.setCustomValidity("");
    }
  }

  // Add event listeners to the password fields
  passwordInput.addEventListener('input', checkPasswords);
  confirmPasswordInput.addEventListener('input', checkPasswords);
</script>
<script>
  $(document).ready(function() {
    // disable submit button by default
    //$('#submit-btn').prop('disabled', true);

    // debounce functions for each input field
    var debouncedCheckPassword = _.debounce(checkPassword, 500);
    var debouncedCheckCPassword = _.debounce(checkCPassword, 500);

    // attach event listeners for each input field
    $('#password').on('input', debouncedCheckPassword);
    $('#password').on('focusout', checkPassword); // Add focusout event listener
    $('#password').on('blur', debouncedCheckPassword); // Trigger on input change
    $('#password1').on('input', debouncedCheckCPassword);
    $('#password1').on('focusout', checkCPassword); // Add focusout event listener
    $('#password1').on('blur', debouncedCheckCPassword); // Trigger on input change

    function checkPassword() {
      var password = $('#password').val();

      // show error if password is empty
      if (password === '') {
        $('#password-error').text('Please input password').css('color', 'red');
        $('#password').addClass('is-invalid'); // Update selector to 'password'
        $('#submit-btn').prop('disabled', true);
        return;
      }

      // check if password format is valid
      var passwordPattern = /^.{8,}$/i;
      if (!passwordPattern.test(password)) {
        $('#password-error').text('At least 8 minimum characters').css('color', 'red');
        $('#password').addClass('is-invalid'); // Update selector to 'password'
        $('#submit-btn').prop('disabled', true);
        return;
      }

      // Clear error if password is valid
      $('#password-error').empty();
      $('#password').removeClass('is-invalid'); // Update selector to 'password'
      $('#password').addClass('is-valid'); // Update selector to 'password'
      checkIfAllFieldsValid();
    }

    function checkCPassword() {
      var password = $('#password').val();
      var password1 = $('#password1').val();

      // show error if password1 is empty
      if (password1 === '') {
        $('#password1-error').text('Please input confirm password').css('color', 'red');
        $('#password1').addClass('is-invalid'); // Update selector to 'password'
        $('#submit-btn').prop('disabled', true);
        return;
      }

      // check if password1 format is valid
      var passwordCPattern = /^.{8,}$/i;
      if (!passwordCPattern.test(password1)) {
        $('#password1-error').text('At least 8 minimum characters').css('color', 'red');
        $('#password1').addClass('is-invalid'); // Update selector to 'password'
        $('#submit-btn').prop('disabled', true);
        return;
      }

      if (password != password1) {
        $('#password1-error').text('Password does not match').css('color', 'red');
        $('#password1').addClass('is-invalid'); // Update selector to 'password'
        $('#submit-btn').prop('disabled', true);
        return;
      }

      // Clear error if password1 is valid
      $('#password1-error').empty();
      $('#password1').removeClass('is-invalid'); // Update selector to 'password'
      $('#password1').addClass('is-valid'); // Update selector to 'password'
      checkIfAllFieldsValid();
    }

    function checkIfAllFieldsValid() {
      // check if all input fields are valid and enable submit button if so
      if ($('#password-error').is(':empty') && $('#password1-error').is(':empty')) {
        $('#submit-btn').prop('disabled', false);
      }
    }
  });
</script>