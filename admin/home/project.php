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
                  <th>Type</th>
                  <th>URL</th>
                  <th>Date</th>
                  <th>Status</th>
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
      'scrollX': true, // Enable horizontal scrolling
      'ajax': {
        'url': '../ajax/project.php',
        'dataType': 'json',
        'type': 'POST',
      },
      'columns': [
        { data: 'project_id' },
        { data: 'name' },
        { data: 'description' },
        { data: 'type' },
        { data: 'url',
          render: function(data, type, row) {
            if (type === 'display' && data) {
              // Prepend 'http://' to the URL if it's not already present
              if (data.indexOf('http://') !== 0 && data.indexOf('https://') !== 0) {
                data1 = 'http://' + data;
              }
              return '<a href="' + data1 + '" target="_blank">' + data + '</a>';
            }
            return data;
          },
        },
        { data: 'date' },
        { data: 'status_name' },
        { data: null,
          orderable: false, // Disable sorting for this column
          render: function(data, type, row, meta) {
            return '<div class="text-center">' +
            '<a href="project_view?id=' + data.project_id + '"" type="button" class="btn btn-sm btn-outline-info btn-icon btn-inline-block mr-1" title="View"><i class="bx bxs-show"></i></a>' + ' ' +
            '<a href="project_edit?id=' + data.project_id + '"" class="btn btn-sm btn-outline-primary btn-icon btn-inline-block mr-1" title="Edit"><i class="bx bxs-edit"></i></a>' + ' ' +
            '<button type="button" class="btn btn-sm btn-outline-danger btn-icon" title="Delete"><i class="bx bxs-trash"></i></button>';
          }
        }
      ]
    });
  });
</script>
