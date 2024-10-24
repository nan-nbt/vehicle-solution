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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    CONTACTS
                                </div>
                                <div class="card-body">
                                    <div class="row">

                                        <!-- Contact -->
                                        <div class="col-12 col-sm-6 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">
                                                <div class="card-header text-muted border-bottom-0">
                                                    CEO Founder
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="lead"><b>Titania Karista</b></h2>
                                                            <p class="text-muted text-sm"><b>About: </b> Coffee Lover </p>
                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Bekasi, Indonesia</li>
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone: +62 8960-2279-841</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <img src="<?php echo base_url('assets/dist/img/user1-128x128.jpg'); ?>" alt="user-avatar" class="img-circle img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-right">
                                                        <a href="https://api.whatsapp.com/send?phone=6289602279841" target="_whatsapp" class="btn btn-sm bg-teal">
                                                            <i class="fas fa-comments"></i>
                                                        </a>
                                                        <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=titaniakharista@gmail.com" target="_gmail" class="btn btn-sm btn-primary">
                                                            <i class="fas fa-envelope"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">
                                                <div class="card-header text-muted border-bottom-0">
                                                    CEO Founder
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="lead"><b>Titania Karista Kafka</b></h2>
                                                            <p class="text-muted text-sm"><b>About: </b> Coffee Lover </p>
                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Bekasi, Indonesia</li>
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone: +62 8960-2279-841</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-5 text-center">
                                                            <img src="<?php echo base_url('assets/dist/img/user1-128x128.jpg'); ?>" alt="user-avatar" class="img-circle img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="text-right">
                                                        <a href="https://api.whatsapp.com/send?phone=6289602279841" target="_whatsapp" class="btn btn-sm bg-teal">
                                                            <i class="fas fa-comments"></i>
                                                        </a>
                                                        <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=titaniakharista@gmail.com" target="_gmail" class="btn btn-sm btn-primary">
                                                            <i class="fas fa-envelope"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ./ Contact -->
                                    </div>
                                    <!-- ./ row -->
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
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