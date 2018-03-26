 <!-- /.content-wrapper -->
 <!--  <footer class="main-footer">
    
    <strong>Copyright &copy; 2018 <a href="#">KIM & RDUNITY STUDIO</a>.</strong> All rights
    reserved.
  </footer> -->


</div>
<!-- ./wrapper -->
 <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/template/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>

        <script type="text/javascript">
            base_url="http://localhost/Stikom-Project/";
        </script>

<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo base_url('assets/template/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/template/plugins/datatables/jquery.dataTables.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/template/plugins/datatables/dataTables.bootstrap.min.js"'); ?>" type="text/javascript"></script>
<!-- CK Editor -->
<script src="<?php echo base_url('assets/template/plugins/ckeditor/ckeditor.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/template/plugins/ckeditor/config.js'); ?>" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/template/plugins/slimScroll/jquery.slimscroll.min.js'); ?>" type="text/javascript"></script>
<!-- FastClick -->
<script src='<?php echo base_url('assets/template/plugins/fastclick/fastclick.min.js'); ?>'></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaxYs3Ln76Tl6kvdu4u44AuDd_VjqhFfA"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template/dist/js/app.min.js'); ?>" type="text/javascript"></script>

<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/template/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>
<!-- bootstrap timepicker -->
<script src="<?php echo base_url('assets/template/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url('assets/template/plugins/flot/jquery.flot.pie.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template/plugins/flot/jquery.flot.categories.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/custom/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo base_url('assets/custom/ckeditor//adapters/jquery.js'); ?>"></script>

<script type="text/javascript">
      $('textarea.texteditor').ckeditor();
</script>

<script>
  $(function () {
    $("#table1").DataTable();
    $('#table2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });


  
  //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });


</script>
</body>
</html>
