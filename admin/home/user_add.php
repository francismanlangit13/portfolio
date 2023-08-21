<?php include('../includes/header.php'); ?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Project</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../home">Home</a></li>
        <li class="breadcrumb-item"><a href="../user">User</a></li>
        <li class="breadcrumb-item active">Add</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

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
                            <label for="" class="required">First Name</label>
                            <input required placeholder="Enter First Name" type="text" id="fname" name="fname" class="form-control">
                            <div id="fname-error"></div>
                        </div> 
                    
                        <div class="col-md-3 mb-3">
                            <label for="">Middle Name</label>
                            <input placeholder="Enter Middle Name" type="text" id="mname" name="mname" class="form-control">
                            <div id="mname-error"></div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="" class="required">Last Name</label>
                            <input required placeholder="Enter Last Name" type="text" id="lname" name="lname" class="form-control">
                            <div id="lname-error"></div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label for="suffix">Suffix</label>
                                <select class="form-control" id="suffix" name="suffix" required>
                                    <option value="" selected>Select Suffix</option>
                                    <option value="">None</option>
                                    <option value="Jr">Jr</option>
                                    <option value="Sr">Sr</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                    <option value="VI">VI</option>
                                </select>
                                <div id="suffix-error"></div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="" class="required">Gender</label>
                            <br>
                            <input required class="ml-2" type="radio" id="male" name="gender" value="Male"> Male
                            <input required class="ml-2"  type="radio" id="female" name="gender" value="Female"> Female
                            <div id="gender-error"></div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="" class="required">Religion</label>
                            <input required placeholder="Enter Religion" type="text" id="religion" name="religion" class="form-control">
                            <div id="religion-error"></div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="date" class="required">Date of Birth</label>
                            <input required class="form-control" id="date" name="dob" placeholder="MM/DD/YYY" type="date"/>
                            <div id="date-error"></div>
                        </div>

                        <div class="col-md-9 mb-3">
                            <label for="" class="required">Place of Birth</label>
                            <textarea required placeholder="Enter Place of Birth" type="text" id="placeofbirth" name="placeofbirth" class="form-control"></textarea>
                            <div id="placeofbirth-error"></div>
                        </div> 

                        <div class="col-md-3 mb-3">
                            <label for="" class="required">Civil Status</label>
                            <select id="civilstatus" name="civilstatus" required class="form-control">
                                <option value="" selected>Select Civil Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                            </select>
                            <div id="civilstatus-error"></div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="" class="required">Email</label>
                            <input required placeholder="Enter Email" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" id="email-input">
                            <div id="email-error"></div>
                        </div>
                    
                        <div class="col-md-4 mb-3">
                            <label for="" class="required">Phone Number</label>
                            <input required placeholder="Enter Phone Number" type="text" name="phone" pattern="09[0-9]{9}" maxlength="11" class="form-control" id="phone-input">
                            <div id="phone-error"></div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="" class="required">Role</label>
                            <select id="role" name="role" required class="form-control">
                                <option value="" selected>Select Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Staff</option>
                            </select>
                            <div id="role-error"></div>
                        </div>

                        <div class="col-md-6">
                            <label for="dp" class="required">Profile Picture</label>
                            <input required type="file" name="image" class="form-control btn btn-secondary" style="padding: 0.6rem 0.6rem 0.6rem 1rem" id="image1" accept=".jpg, .jpeg, .png" onchange="previewImage('frame1', 'image1')">
                        </div>

                        <div class="col-md-6">
                        </div>

                        <div class="col-md-5 text-center">
                            <br>
                            <h5>Current Picture</h5>
                            <img class="mt-2" id="frame1" src ="<?php echo base_url ?>assets/images/system/no-image.png" alt="Profile Picture" width="240px" height="180px"/>
                        </div>
                    </div>
                    <br>
                      <div class="d-flex flex-row-reverse">
                        <button type="submit" name="add_user" id="submit-btn" style="margin-left:0.3rem;" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add</button>
                        <a href="javascript:history.back()" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
                      </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</form>
  </section>
</main><!-- End #main -->

<?php include('../includes/footer.php'); ?>

<script type="text/javascript">
$(document).ready(function() {
  $('#dataTable').DataTable({
    'processing': true,
    'serverSide': true,
    'ajax': {
      'url': '../ajax/project.php',
      'dataType': 'json',
      'type': 'POST',
    },
    'columns': [
      { data: 'id' },
      { data: 'name' },
      { data: 'description' },
      { data: 'banner' },
      { data: 'type' },
      { data: 'url' },
      { data: 'date' },
      { data: null,
        render: function(data, type, row, meta) {
          return '<div class="text-center">' +
          '<button type="button" class="btn btn-sm btn-outline-info btn-icon btn-inline-block mr-1" title="View"><i class="bx bxs-show"></i></button>' +
          '<div class="dropdown d-inline-block">' +
          '<button type="button" class="btn btn-sm btn-outline-primary btn-icon btn-inline-block mr-1" title="Edit"><i class="bx bxs-edit"></i></button>' +
          '<div class="dropdown d-inline-block">' +
          '<button type="button" class="btn btn-sm btn-outline-danger btn-icon" title="Delete"><i class="bx bxs-trash"></i></button>' +
          '</div>' +
          '</div>' +
          '<span style="display: none;">' +
          data +
          '</span>';
        }
    }
    ]
  });
});
</script>
