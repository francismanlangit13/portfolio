<?php
    include('../includes/header.php');
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Sales <span>| Today</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Revenue <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>$3,264</h6>
                  <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Customers <span>| This Year</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Reports <span>/Today</span></h5>

              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Sales',
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }, {
                      name: 'Revenue',
                      data: [11, 32, 45, 32, 34, 52, 41]
                    }, {
                      name: 'Customers',
                      data: [15, 11, 32, 18, 9, 24, 11]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'datetime',
                      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Sales <span>| Today</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#">#2457</a></th>
                    <td>Brandon Jacob</td>
                    <td><a href="#" class="text-primary">At praesentium minu</a></td>
                    <td>$64</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2147</a></th>
                    <td>Bridie Kessler</td>
                    <td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td>
                    <td>$47</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2049</a></th>
                    <td>Ashleigh Langosh</td>
                    <td><a href="#" class="text-primary">At recusandae consectetur</a></td>
                    <td>$147</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Angus Grady</td>
                    <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                    <td>$67</td>
                    <td><span class="badge bg-danger">Rejected</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Raheem Lehner</td>
                    <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                    <td>$165</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->

        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Top Selling <span>| Today</span></h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Preview</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sold</th>
                    <th scope="col">Revenue</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#"><img src="<?php echo base_url ?>assets/images/product-1.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                    <td>$64</td>
                    <td class="fw-bold">124</td>
                    <td>$5,828</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="<?php echo base_url ?>assets/images/product-2.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                    <td>$46</td>
                    <td class="fw-bold">98</td>
                    <td>$4,508</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="<?php echo base_url ?>assets/images/product-3.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                    <td>$59</td>
                    <td class="fw-bold">74</td>
                    <td>$4,366</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="<?php echo base_url ?>assets/images/product-4.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                    <td>$32</td>
                    <td class="fw-bold">63</td>
                    <td>$2,016</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="<?php echo base_url ?>assets/images/product-5.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                    <td>$79</td>
                    <td class="fw-bold">41</td>
                    <td>$3,239</td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Top Selling -->

      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item user-activity" href="javascript:void(0)" data-section="userlog_today">Today</a></li>
            <li><a class="dropdown-item user-activity" href="javascript:void(0)" data-section="userlog_month">This Month</a></li>
            <li><a class="dropdown-item user-activity" href="javascript:void(0)" data-section="userlog_year">This Year</a></li>

          </ul>
        </div>

        <div class="card-body">
          
          <div id="userlog_today" class="activity">
            <h5 class="card-title">User Activity <span id="userlog">| <span id="filterValue">Today</span></span></h5>
            <?php
              $date = date('Y-m-d');
              $userID = $_SESSION['auth_user'] ['user_id'];
              $query = "SELECT *, 
              DATE_FORMAT(user_log.logdate, '%m-%d-%Y') as date_created, 
              DATE_FORMAT(user_log.logdate, '%h:%i:%s %p') as date_values
              FROM user_log
              INNER JOIN user ON user_log.user_id = user.user_id
              WHERE user_log.user_id = '$userID'
                    AND DATE(user_log.logdate) = '$date'
              ORDER BY user_log.logdate DESC
              LIMIT 5";
              $query_run = mysqli_query($con, $query);
              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $log){
            ?>
              <div class="activity-item d-flex">
                <div class="activite-label"><?= $log['date_created']; ?><br><?= $log['date_values']; ?></div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                  <b><?= $log['type']; ?></b> <?= $log['log']; ?>
                </div>
              </div><!-- End activity item-->
            <?php } } else{ ?>
              <div class="activity-item d-flex">
                <div class="activity-content">
                  No logs available.
                </div>
              </div><!-- End activity item-->
            <?php } ?>
          </div>

          <div id="userlog_month" style="display:none" class="activity">
            <h5 class="card-title">User Activity <span id="userlog">| <span id="filterValue">Month</span></span></h5>
            <?php
              $userID = $_SESSION['auth_user'] ['user_id'];
              $query = "SELECT *, 
              DATE_FORMAT(user_log.logdate, '%m-%d-%Y') as date_created, 
              DATE_FORMAT(user_log.logdate, '%h:%i:%s %p') as date_values
              FROM user_log
              INNER JOIN user ON user_log.user_id = user.user_id
              WHERE user_log.user_id = '$userID'
              AND user_log.logdate >= DATE_SUB(CURDATE(), INTERVAL 30 DAY)
              AND user_log.logdate < CURDATE()
              ORDER BY user_log.logdate DESC
              LIMIT 5";
              $query_run = mysqli_query($con, $query);
              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $log){
            ?>
              <div class="activity-item d-flex">
                <div class="activite-label"><?= $log['date_created']; ?><br><?= $log['date_values']; ?></div>
                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                <div class="activity-content">
                  <b><?= $log['type']; ?></b> <?= $log['log']; ?>
                </div>
              </div><!-- End activity item-->
            <?php } } else{ ?>
              <div class="activity-item d-flex">
                <div class="activity-content">
                  No logs available.
                </div>
              </div><!-- End activity item-->
            <?php } ?>
          </div>

          <div id="userlog_year" style="display:none" class="activity">
            <h5 class="card-title">User Activity <span id="userlog">| <span id="filterValue">Year</span></span></h5>
            <?php
              $userID = $_SESSION['auth_user'] ['user_id'];
              $query = "SELECT *, 
              DATE_FORMAT(user_log.logdate, '%m-%d-%Y') as date_created, 
              DATE_FORMAT(user_log.logdate, '%h:%i:%s %p') as date_values
              FROM user_log
              INNER JOIN user ON user_log.user_id = user.user_id
              WHERE user_log.user_id = '$userID'
                    AND YEAR(user_log.logdate) = YEAR(CURDATE()) - 1
              ORDER BY user_log.logdate DESC
              LIMIT 5";
              $query_run = mysqli_query($con, $query);
              if(mysqli_num_rows($query_run) > 0){
                foreach($query_run as $log){
            ?>
              <div class="activity-item d-flex">
                <div class="activite-label"><?= $log['date_created']; ?><br><?= $log['date_values']; ?></div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                  <b><?= $log['type']; ?></b> <?= $log['log']; ?>
                </div>
              </div><!-- End activity item-->
            <?php } } else{ ?>
              <div class="activity-item d-flex">
                <div class="activity-content">
                  No logs available.
                </div>
              </div><!-- End activity item-->
            <?php } ?>
          </div>

        </div>
      </div><!-- End Recent Activity -->

      <!-- Website Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item web-activity" href="javascript:void(0)" data-section="weblog_today">Today</a></li>
            <li><a class="dropdown-item web-activity" href="javascript:void(0)" data-section="weblog_month">This Month</a></li>
            <li><a class="dropdown-item web-activity" href="javascript:void(0)" data-section="weblog_year">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <div id="weblog_today" class="graph">
            <h5 class="card-title">Website Traffic <span>| Today</span></h5>
            <?php
              $query = "SELECT 
              SUM(CASE WHEN type = 'Visit' THEN 1 ELSE 0 END) AS visit_count,
              SUM(CASE WHEN type = 'Click' THEN 1 ELSE 0 END) AS click_count,
              SUM(CASE WHEN type = 'Resume' THEN 1 ELSE 0 END) AS resume_count,
              SUM(CASE WHEN type = 'Email' THEN 1 ELSE 0 END) AS email_count,
              SUM(CASE WHEN type = 'Phone' THEN 1 ELSE 0 END) AS phone_count
              FROM system_statistics
              WHERE DATE(system_statistics.date) = '$date'";
              $result = $con->query($query);
              if (!$result) {
                  die('Query Error: ' . $mysqli->error);
              }
              $row = $result->fetch_assoc();
              $visit_count = $row['visit_count'];
              $click_count = $row['click_count'];
              $resume_count = $row['resume_count'];
              $email_count = $row['email_count'];
              $phone_count = $row['phone_count'];
            ?>
            <div id="trafficChartToday" style="min-height: 400px;" class="echart"></div>
            
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChartToday")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: <?php echo $visit_count ?>,
                        name: 'Search Engine'
                      },
                      {
                        value: <?php echo $click_count ?>,
                        name: 'Project Visited'
                      },
                      {
                        value: <?php echo $resume_count ?>,
                        name: 'Download Resume'
                      },
                      {
                        value: <?php echo $email_count ?>,
                        name: 'Email Clicks'
                      },
                      {
                        value: <?php echo $phone_count ?>,
                        name: 'Phone Clicks'
                      }
                    ]
                  }]
                });
              });
            </script>
          </div>

          <div id="weblog_month" style="display:none" class="graph">
            <h5 class="card-title">Website Traffic <span>| Month</span></h5>
            <?php
              $query = "SELECT 
              SUM(CASE WHEN type = 'Visit' THEN 1 ELSE 0 END) AS visit_count,
              SUM(CASE WHEN type = 'Click' THEN 1 ELSE 0 END) AS click_count,
              SUM(CASE WHEN type = 'Resume' THEN 1 ELSE 0 END) AS resume_count,
              SUM(CASE WHEN type = 'Email' THEN 1 ELSE 0 END) AS email_count,
              SUM(CASE WHEN type = 'Phone' THEN 1 ELSE 0 END) AS phone_count
              FROM system_statistics
              WHERE DATE(system_statistics.date) = '$date'";
              $result = $con->query($query);
              if (!$result) {
                  die('Query Error: ' . $mysqli->error);
              }
              $row = $result->fetch_assoc();
              $visit_count = $row['visit_count'];
              $click_count = $row['click_count'];
              $resume_count = $row['resume_count'];
              $email_count = $row['email_count'];
              $phone_count = $row['phone_count'];
            ?>
            <div id="trafficChartMonth" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChartMonth")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: <?php echo $visit_count ?>,
                        name: 'Search Engine'
                      },
                      {
                        value: <?php echo $click_count ?>,
                        name: 'Project Visited'
                      },
                      {
                        value: <?php echo $resume_count ?>,
                        name: 'Download Resume'
                      },
                      {
                        value: <?php echo $email_count ?>,
                        name: 'Email Clicks'
                      },
                      {
                        value: <?php echo $phone_count ?>,
                        name: 'Phone Clicks'
                      }
                    ]
                  }]
                });
              });
            </script>
          </div>
        </div>
      </div><!-- End Website Traffic -->

      <!-- News & Updates Traffic -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

          <div class="news">
            <div class="post-item clearfix">
              <img src="<?php echo base_url ?>assets/images/news-1.jpg" alt="">
              <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
              <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
            </div>

            <div class="post-item clearfix">
              <img src="<?php echo base_url ?>assets/images/news-2.jpg" alt="">
              <h4><a href="#">Quidem autem et impedit</a></h4>
              <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
            </div>

            <div class="post-item clearfix">
              <img src="<?php echo base_url ?>assets/images/news-3.jpg" alt="">
              <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
              <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
            </div>

            <div class="post-item clearfix">
              <img src="<?php echo base_url ?>assets/images/news-4.jpg" alt="">
              <h4><a href="#">Laborum corporis quo dara net para</a></h4>
              <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
            </div>

            <div class="post-item clearfix">
              <img src="<?php echo base_url ?>assets/images/news-5.jpg" alt="">
              <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
              <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
            </div>

          </div><!-- End sidebar recent posts-->

        </div>
      </div><!-- End News & Updates -->

    </div><!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->
<?php
    include('../includes/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
      // Restore the selected filter for user activities from localStorage
      var savedFilter = localStorage.getItem('selectedUserActivityFilter');
      if (savedFilter) {
          $(".activity").hide();
          $("#" + savedFilter).show();
          var filterText = $("#" + savedFilter).data("filter-text");
          $("#filterValue").text(filterText);
      }

      $(".user-activity").click(function() {
          // Hide all sections
          $(".activity").hide();

          // Show the selected section based on the clicked filter
          var targetSection = $(this).attr("data-section");
          $("#" + targetSection).show();

          // Update the card title based on the clicked filter
          var filterText = $(this).attr("data-filter-text");
          $("#filterValue").text(filterText);

          // Save the selected filter for user activities in localStorage
          localStorage.setItem('selectedUserActivityFilter', targetSection);
      });
  });
</script>
<script>
  $(document).ready(function() {
      // Restore the selected filter for web activities from localStorage
      var savedFilter = localStorage.getItem('selectedWebActivityFilter');
      if (savedFilter) {
          $(".graph").hide();
          $("#" + savedFilter).show();
          var filterText = $("#" + savedFilter).data("filter-text");
          $("#filterValue").text(filterText);
      }

      $(".web-activity").click(function() {
          // Hide all sections
          $(".graph").hide();

          // Show the selected section based on the clicked filter
          var targetSection = $(this).attr("data-section");
          $("#" + targetSection).show();

          // Update the card title based on the clicked filter
          var filterText = $(this).attr("data-filter-text");
          $("#filterValue").text(filterText);

          // Save the selected filter for web activities in localStorage
          localStorage.setItem('selectedWebActivityFilter', targetSection);
      });
  });
</script>