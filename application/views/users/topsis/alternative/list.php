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
                                <div class="card-body">
                                    <table id="example2" class="display table table-bordered table-hover table-striped table-head-fixed nowrap text-nowrap" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>ALTERNATIVE ID</th>
                                                <th>NAME</th>
                                                <th>DESCRIPTION</th>
                                            </tr>
                                        </thead>
                                        <tbody id="list-alternative">
                                            <!-- Using JQuery Ajax to display data -->
                                        </tbody>
                                    </table>
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

    <!-- Page specific script -->
    <script>
        // global variable
        let g_aid, g_name, g_desc, g_url, g_alert;

        // declare global variable
        $(document).ready(function() {
            loadData();
        });

        // pace-progress when ajax request
        $(document).ajaxStart(function() {
            Pace.restart();
        });

        // function load list section data
        function loadData() {
            const $table = $('#example2');
            const $listAlternative = $('#list-alternative');

            $.ajax({
                url: "<?php echo base_url('users/alternative/listalternative'); ?>",
                async: true,
                dataType: 'json',
                success: function(response) {
                    if (response.length > 0) {
                        const rows = response.map((item, i) => `
                            <tr>
                                <td>${i + 1}</td>
                                <td>${item.aid}</td>
                                <td>${item.name}</td>
                                <td>${item.description}</td>
                            </tr>
                        `).join('');

                        $table.DataTable().destroy();
                        $listAlternative.html(rows);

                        /**@abstract
                         * default datatable setting
                         */
                        const table = $('#example2').DataTable({
                            pagging: true,
                            lengthChange: true,
                            searching: true,
                            ordering: true,
                            info: true,
                            autoWidth: true,
                            responsive: false,
                            scrollY: 450,
                            scrollX: true,

                            /**@abstract
                             * set load data in current page: datatable pagination load
                             */
                            "bStateSave": true,
                            "fnStateSave": function(oSettings, oData) {
                                localStorage.setItem('offersDataTables', JSON.stringify(oData));
                            },
                            "fnStateLoad": function(oSettings) {
                                return JSON.parse(localStorage.getItem('offersDataTables'));
                            }
                        });

                        table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

                        /**@abstract
                         * on row click get data row
                         */
                        $('#example2 tbody').on('click', 'tr', function() {
                            table.$('tr.selected').removeClass('selected');
                            $(this).addClass('selected');
                        });

                    } else {
                        $table.DataTable().destroy();
                        $listAlternative.html(null);

                        /**@abstract
                         * default datatable setting
                         */
                        const table = $table.DataTable({
                            paging: true,
                            lengthChange: true,
                            searching: false,
                            ordering: true,
                            info: true,
                            autoWidth: true,
                            responsive: false,
                            scrollX: true,
                        });

                        // add button wrapper in datatable
                        table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

                    }
                }
            });
        }
    </script>

</body>

</html>