<?php include('../includes/header.php'); ?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Project</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../home">Home</a></li>
        <li class="breadcrumb-item active">Project</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title d-flex justify-content-between">Project List
            <a href="project_add" class="btn btn-success btn-icon-split"> 
                <span class="icon text-white">
                    <i class="bi bi-plus-lg"></i>
                </span>
                <span class="text-white">Add Project</span>
            </a>
            </h5>
            <table class="table table-striped table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Banner</th>
                  <th>Type</th>
                  <th>URL</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
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
