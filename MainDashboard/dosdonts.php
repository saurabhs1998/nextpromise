<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NextPromise-Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="./../index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <span class="brand-text font-weight-light"><b>User Panel</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Username</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="./index.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Diet Chart
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./weekly.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Weekly</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./monthly.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Monthly</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="./dosdonts.php" class="nav-link">
                <i class="fa fa-dot-circle nav-icon" aria-hidden="true"></i>
                <p> Do's & Dont's</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./faq.php" class="nav-link">
                <i class="fa fa-question-circle nav-icon" aria-hidden="true"></i>
                <p> FAQs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./appointment.php" class="nav-link">
                <i class="fa fa-id-card nav-icon" aria-hidden="true"></i>
                <p> Appointment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./exercise.php" class="nav-link">
                <i class="fa fa-female nav-icon" aria-hidden="true"></i>
                <p> Exercises</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./chatbox.php" class="nav-link">
                <i class="fa fa-comments nav-icon" aria-hidden="true"></i>
                <p> Chatbox</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Do's & Dont's</h1>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid" style="margin: 5%;">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <!-- col -->
            <div class="col-lg-6 col-12">
              <div class="choose-us-content mb-80">
                <div class="section-heading mb-4">
                  <h2 style="font-size: 4rem;"><b>Do's</b></h2>
                  <p><b>What are the things to do during pregnancy ?</b></p>
                </div>
                <ul>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Distinctive Doctors That Provide
                    Effortless Expertise</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Enriched Outcomes Enabled By Experienced
                    Professionals</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Wide-Ranging Thoughts Bread Exceptional
                    Ideas</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Generating Best Results Through Helping
                    Hands</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Extensive Infrastructure Generates
                    Valuable Insights</li>
                  <li><i class="fa fa-check" aria-hidden="true"></i>&nbsp; We are Results-Driven, Oriented, We
                    deliver babies</li>
                </ul>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-12">
              <div class="mb-80">
                <img src="./dist/img/baby4.jpg" alt="" width="80%" height="70%">
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="container-fluid" style="margin: 5%;">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <!-- col -->
            <div class="col-lg-6 col-12">
              <div class="mb-80">
                <img src="./dist/img/baby5.png" alt="" width="80%" height="70%">
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-12">
              <div class="choose-us-content mb-80" style="margin: 40px 40px;">
                <div class="section-heading mb-4">
                  <h2 style="font-size: 4rem;"><b>Dont's</b></h2>
                  <p><b>What are the things not to do during pregnancy ?</b></p>
                </div>
                <ul>
                  <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Distinctive Doctors That Provide
                    Effortless Expertise</li>
                  <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Enriched Outcomes Enabled By Experienced
                    Professionals</li>
                  <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Wide-Ranging Thoughts Bread Exceptional
                    Ideas</li>
                  <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Generating Best Results Through Helping
                    Hands</li>
                  <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp; Extensive Infrastructure Generates
                    Valuable Insights</li>
                  <li><i class="fa fa-times" aria-hidden="true"></i>&nbsp; We are Results-Driven, Oriented, We
                    deliver babies</li>
                </ul>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="/index.php">NextPromise</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>
