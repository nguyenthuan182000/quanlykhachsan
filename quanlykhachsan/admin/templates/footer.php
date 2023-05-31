<footer class="main-footer">
    <strong>Phần mềm quản lý khách sạn <a href="http://localhost/QuanLyKhachSan/index.php">Lucy Hotel</a>.</strong>

    <div class="float-right d-none d-sm-inline-block">
        <p class="float-right">Date: <?php echo $ndk = date("d/m/Y");?></p>
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="public/layout/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="public/layout/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="public/layout/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="public/layout/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="public/layout/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="public/layout/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="public/layout/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="public/layout/plugins/jszip/jszip.min.js"></script>
<script src="public/layout/plugins/pdfmake/pdfmake.min.js"></script>
<script src="public/layout/plugins/pdfmake/vfs_fonts.js"></script>
<script src="public/layout/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="public/layout/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="public/layout/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="public/layout/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/layout/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    $(function () {
        bsCustomFileInput.init();
    });
</script>
<script src="public/layout/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="public/layout/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="public/layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="public/layout/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="public/layout/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="public/layout/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="public/layout/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="public/layout/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="public/layout/plugins/moment/moment.min.js"></script>
<script src="public/layout/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="public/layout/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="public/layout/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="public/layout/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="public/layout/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="public/layout/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="public/layout/dist/js/pages/dashboard.js"></script>
<script src="public/layout/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/layout/dist/js/adminlte.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- jQuery -->
</body>
</html>