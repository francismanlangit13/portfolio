<?php include('../includes/header.php'); ?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Project</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../home">Home</a></li>
        <li class="breadcrumb-item"><a href="../project">Project</a></li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <?php
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = "SELECT * FROM project WHERE project_id='$id'";
      $sql_run = mysqli_query($con, $sql);
      if(mysqli_num_rows($sql_run) > 0){
        foreach($sql_run as $row){
  ?>
  <section class="section">
    <form action="code.php" method="POST" enctype="multipart/form-data" >  
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="card mt-1">
            <div class="card-header">
              <h5><i class="bi bi-collection"></i> Project information</h5>
            </div>
            <div class="card-body mt-3">
              <div class="row"> 
                <div class="col-md-3 mb-3">
                  <label for="pname" class="required">Project Name</label>
                  <input required placeholder="Enter Project Name" type="text" id="pname" name="pname" class="form-control">
                  <div id="pname-error"></div>
                </div>

                <div class="col-md-3 mb-3">
                  <label for="ptype" class="required">Project Type</label>
                  <input required placeholder="Enter Project Type" type="text" id="ptype" name="ptype" class="form-control">
                  <div id="ptype-error"></div>
                </div> 

                <div class="col-md-3 mb-3">
                  <label for="purl" class="required">Project URL</label>
                  <input required placeholder="Enter Project URL" type="text" id="purl" name="purl" class="form-control">
                  <div id="purl-error"></div>
                </div> 

                <div class="col-md-3 mb-3">
                  <label for="pdate" class="required">Project Date</label>
                  <input required class="form-control" id="pdate" name="pdate" placeholder="MM/DD/YYY" type="date"/>
                  <div id="pdate-error"></div>
                </div>
            
                <div class="col-md-12 mb-3">
                  <label for="pdescription" class="required">Description</label>
                  <textarea required type="text" id="pdescription" name="pdescription" style="height: 177px; width:100%" class="quill-editor-full"></textarea>
                  <div id="pdescription-error"></div>
                </div>

                <div class="col-md-6">
                  <label for="pimage1" class="required">Project Picture 1</label>
                  <input type="file" name="pimage1" id="pimage1" class="form-control btn btn-secondary" style="padding: 0.6rem 0.6rem 0.6rem 1rem" accept=".jpg, .jpeg, .png" onchange="previewImage('frame1', 'pimage1')">
                </div>

                <div class="col-md-6">
                  <label for="pimage2" class="required">Project Picture 2</label>
                  <input type="file" name="pimage2" id="pimage2" class="form-control btn btn-secondary" style="padding: 0.6rem 0.6rem 0.6rem 1rem" accept=".jpg, .jpeg, .png" onchange="previewImage('frame2', 'pimage2')">
                </div>

                <div class="col-md-6 text-center">
                  <br>
                  <h5>Project Picture 1</h5>
                  <img class="mt-2 mb-5" id="frame1" src ="<?php echo base_url ?>assets/images/system/no-image.png" alt="Profile Picture" width="260px" height="180px"/>
                </div>

                <div class="col-md-6 text-center">
                  <br>
                  <h5>Project Picture 2</h5>
                  <img class="mt-2 mb-5" id="frame2" src ="<?php echo base_url ?>assets/images/system/no-image.png" alt="Profile Picture" width="260px" height="180px"/>
                </div>

                <div class="col-md-6">
                  <label for="pimage3" class="required">Project Picture 3</label>
                  <input type="file" name="image" id="pimage3" class="form-control btn btn-secondary" style="padding: 0.6rem 0.6rem 0.6rem 1rem" accept=".jpg, .jpeg, .png" onchange="previewImage('frame1', 'pimage3')">
                </div>

                <div class="col-md-6">
                  <label for="pimage4" class="required">Project Picture 4</label>
                  <input type="file" name="image" id="pimage4" class="form-control btn btn-secondary" style="padding: 0.6rem 0.6rem 0.6rem 1rem" accept=".jpg, .jpeg, .png" onchange="previewImage('frame1', 'pimage4')">
                </div>

                <div class="col-md-6 text-center">
                  <br>
                  <h5>Project Picture 3</h5>
                  <img class="mt-2 mb-5" id="frame3" src ="<?php echo base_url ?>assets/images/system/no-image.png" alt="Profile Picture" width="260px" height="180px"/>
                </div>

                <div class="col-md-6 text-center">
                  <br>
                  <h5>Project Picture 4</h5>
                  <img class="mt-2 mb-5" id="frame4" src ="<?php echo base_url ?>assets/images/system/no-image.png" alt="Profile Picture" width="260px" height="180px"/>
                </div>
              </div>
              <br>
                <div class="d-flex flex-row-reverse">
                  <button type="submit" name="add_project" id="submit-btn" style="margin-left:0.3rem;" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add</button>
                  <a href="javascript:history.back()" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
                </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <?php } } else{ ?>
    <section class="section">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="card mt-1">
            <div class="card-header">
              <h5><i class="bi bi-collection"></i> Project information</h5>
            </div>
            <div class="card-body mt-3">
              <h4>No Record Found!</h4>
              <br>
                <div class="d-flex flex-row-reverse">
                  <a href="javascript:history.back()" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
                </div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } } else{ echo '<script>window.location.href = "404";</script>'; } ?>
</main><!-- End #main -->
<?php include('../includes/footer.php'); ?>

<script>
    $(document).ready(function() {
        // disable submit button by default
        // $('#submit-btn').prop('disabled', true);

        // debounce functions for each input field
        var debouncedCheckPname = _.debounce(checkPname, 500);
        var debouncedCheckPtype = _.debounce(checkPtype, 500);
        var debouncedCheckPurl = _.debounce(checkPurl, 500);
        var debouncedCheckPdate = _.debounce(checkPdate, 500);
        var debouncedCheckPdescription = _.debounce(checkPdescription, 500);

        // attach event listeners for each input field
        $('#pname').on('input', debouncedCheckPname);
        $('#ptype').on('input', debouncedCheckPtype);
        $('#purl').on('input', debouncedCheckPurl);
        $('#pdate').on('input', debouncedCheckPdate);
        $('#pdescription').on('input', debouncedCheckPdescription);

        $('#pname').on('blur', debouncedCheckPname);
        $('#ptype').on('blur', debouncedCheckPtype);
        $('#purl').on('blur', debouncedCheckPurl);
        $('#pdate').on('blur', debouncedCheckPdate);
        $('#pdescription').on('blur', debouncedCheckPdescription);

        function checkIfAllFieldsValid() {
            // check if all input fields are valid and enable submit button if so
            if ($('#pname-error').is(':empty') && $('#ptype-error').is(':empty') && $('#purl-error').is(':empty') && $('#pdate-error').is(':empty') && $('#pdescription-error').is(':empty')) {
                $('#submit-btn').prop('disabled', false);
            } else {
                $('#submit-btn').prop('disabled', true);
            }
        }
        
        function checkPname() {
            var pname = $('#pname').val().trim();
            
            // show error if pname is empty
            if (pname === '') {
                $('#pname-error').text('Please input project name').css('color', 'red');
                $('#pname').addClass('is-invalid');
                checkIfAllFieldsValid();
                return;
            }
            
            // Perform additional validation for pname if needed
            
            $('#pname-error').empty();
            $('#pname').removeClass('is-invalid');
            checkIfAllFieldsValid();
        }

        function checkPtype() {
            var ptype = $('#ptype').val().trim();
            
            // show error if ptype is empty
            if (ptype === '') {
                $('#ptype-error').text('Please input project type').css('color', 'red');
                $('#ptype').addClass('is-invalid');
                checkIfAllFieldsValid();
                return;
            }
            
            // Perform additional validation for ptype if needed
            
            $('#ptype-error').empty();
            $('#ptype').removeClass('is-invalid');
            checkIfAllFieldsValid();
        }

        function checkPurl() {
            var purl = $('#purl').val().trim();
            
            // show error if purl is empty
            if (purl === '') {
                $('#purl-error').text('Please input project url').css('color', 'red');
                $('#purl').addClass('is-invalid');
                checkIfAllFieldsValid();
                return;
            }
            
            // Perform additional validation for purl if needed
            
            $('#purl-error').empty();
            $('#purl').removeClass('is-invalid');
            checkIfAllFieldsValid();
        }

        function checkPdate() {
            var pdate = $('#pdate').val().trim();
            
            // show error if pdate is empty
            if (pdate === '') {
                $('#pdate-error').text('Please input project date').css('color', 'red');
                $('#pdate').addClass('is-invalid');
                checkIfAllFieldsValid();
                return;
            }
            
            // Perform additional validation for pdate if needed
            
            $('#pdate-error').empty();
            $('#pdate').removeClass('is-invalid');
            checkIfAllFieldsValid();
        }

        function checkPdescription() {
            var pdescription = $('#pdescription').val().trim();
            
            // show error if pdescription is empty
            if (pdescription === '') {
                $('#pdescription-error').text('Please input project description').css('color', 'red');
                $('#pdescription').addClass('is-invalid');
                checkIfAllFieldsValid();
                return;
            }
            
            // Perform additional validation for pdescription if needed
            
            $('#pdescription-error').empty();
            $('#pdescription').removeClass('is-invalid');
            checkIfAllFieldsValid();
        }
        
    });
</script>