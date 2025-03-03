<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/plugins/select2/js/select2.full.min.js'); ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url('assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js'); ?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/inputmask/jquery.inputmask.min.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js'); ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js'); ?>"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url('assets/plugins/bs-stepper/js/bs-stepper.min.js'); ?>"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url('assets/plugins/dropzone/min/dropzone.min.js'); ?>"></script>
<!-- pace-progress -->
<script src="<?php echo base_url('assets/plugins/pace-progress/pace.min.js'); ?>"></script>
<!-- datatable fixed-columns -->
<script src="<?php echo base_url('assets/plugins/datatables-fixedcolumns/js/dataTables.fixedColumns.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js'); ?>"></script>

<!-- Dropdown input JS using class tag "select2" -->
<script>
  $(function() {
    //Initialize Select2 Elements
    $('.select2').select2();

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
      'placeholder': 'dd/mm/yyyy'
    });

    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
      'placeholder': 'mm/dd/yyyy'
    });

    //Money Euro
    $('[data-mask]').inputmask();

    //Date picker linked TD Bootstrap4
    $('#startdate').datetimepicker({
      // format: 'L'
      format: 'YYYY/MM/DD'
    });
    $('#enddate').datetimepicker({
      // format: 'L'
      format: 'YYYY/MM/DD',
      useCurrent: false
    });
    $("#startdate").on("change.datetimepicker", function(e) {
      $('#enddate').datetimepicker('minDate', e.date);
    });
    $("#enddate").on("change.datetimepicker", function(e) {
      $('#startdate').datetimepicker('maxDate', e.date);
    });
    $('#indate').datetimepicker({
      // format: 'L'
      format: 'YYYY/MM/DD',
      useCurrent: false
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({
      icons: {
        time: 'far fa-clock'
      }
    });

    //Date range picker
    $('#reservation').daterangepicker();

    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    });

    //Date range as a button
    $('#daterange-btn').daterangepicker({
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment()
      },
      function(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
    );

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    });

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox();

    //Colorpicker
    $('.my-colorpicker1').colorpicker();
    //color picker with addon
    $('.my-colorpicker2').colorpicker();

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  });
</script>