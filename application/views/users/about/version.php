<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tag -->
    <?php $this->load->view("layouts/_meta.php") ?>

    <!-- title tag -->
    <?php $this->load->view("layouts/_title.php") ?>

    <!-- link stylesheet -->
    <?php $this->load->view("layouts/_css.php") ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Header -->
        <?php $this->load->view("layouts/_header.php") ?>

        <!-- Sidebar -->
        <?php $this->load->view("layouts/_sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header"></section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-cog"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Version App</span>
                                    <span class="info-box-number">
                                        1.0.0
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-server"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Web Server</span>
                                    <span class="info-box-number">
                                        Apache 2.4
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-database"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Database Server</span>
                                    <span class="info-box-number">
                                        MySQL 10.4
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-cog"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Program Language</span>
                                    <span class="info-box-number">
                                        PHP 8.0
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">ADDITIONAL INFO</h5>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <img class="brand-image bg-orange img-circle" src="<?php echo base_url('assets/dist/img/vehicle-logo.png'); ?>" alt="vehicle-logo" width="70%">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <label>Definition:</label>
                                            <div class="group mb-3">
                                                <span>Decision Support System (DSS) is part of a computer-based information system (including information) that is used to support decision making in an organization or company.</span>
                                            </div>

                                            <label>Vision:</label>
                                            <div class="group mb-3">
                                                <span>To be the leading provider of innovative and sustainable vehicle solutions, revolutionizing the way people move and transforming the future of transportation.</span>
                                            </div>

                                            <label>Mission:</label>
                                            <div class="group mb-3">
                                                <span>Our mission is to design, develop, and deliver cutting-edge vehicle solutions that enhance mobility, improve efficiency, and reduce environmental impact. We strive to create products that exceed customer expectations in terms of performance, safety, and reliability, while prioritizing sustainability and contributing to a cleaner, greener world. Through continuous innovation, collaboration, and a customer-centric approach, we aim to shape the future of transportation and create a positive impact on society.</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-6 col-6">
                                            <div class="description-block border-right">
                                                <h5 class="description-header">25</h5>
                                                <span class="description-text">TOTAL ALTERNATIVE</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-6">
                                            <div class="description-block border-right">
                                                <h5 class="description-header">10</h5>
                                                <span class="description-text">TOTAL CRITERIA</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- /. row -->
                </div>
                <!-- /.container-fluid -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <?php $this->load->view("layouts/_footer.php") ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Javascript -->
    <?php $this->load->view("layouts/_js.php") ?>

</body>

</html>