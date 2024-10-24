<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tag -->
  <?php require_once('_meta.php'); ?>

  <!-- title tag -->
  <?php require_once('_title.php'); ?>

  <!-- link stylesheet -->
  <?php require_once('_css.php'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm" data-panel-auto-height-mode="height">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Preloader -->
    <?php require_once('_preloader.php'); ?>

    <!-- Header -->
    <?php require_once('_header.php'); ?>

    <!-- Sidebar -->
    <?php require_once('_sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-use-navbar-items="false" data-loading-screen="750">
      <div class="nav navbar navbar-expand navbar-white navbar-light border-bottom p-0">
        <div class="nav-item dropdown">
          <a class="nav-link bg-danger dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Close</a>
          <div class="dropdown-menu mt-0">
            <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all">Close All</a>
            <a class="dropdown-item" href="#" data-widget="iframe-close" data-type="all-other">Close All Other</a>
          </div>
        </div>
        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>
        <ul class="navbar-nav overflow-hidden" role="tablist"></ul>
        <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>
        <!-- <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a> -->
      </div>
      <div class="tab-content">
        <div class="tab-empty">
          <h2 class="display-4">
            <img class="brand-image bg-orange img-circle" src="<?php echo base_url('assets/dist/img/vehicle-logo.png'); ?>" alt="vehicle-logo" height="60" width="60">
            Vehicle Solution
          </h2>
        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    <?php require_once('_footer.php'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Javascript -->
  <?php require_once('_js.php'); ?>

</body>

</html>