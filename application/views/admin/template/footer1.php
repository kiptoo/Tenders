<!-- BEGIN FOOTER -->
<div class="footer">
   <div class="footer-inner">
      2013 &copy; Metronic by keenthemes.
   </div>
   <div class="footer-tools">
      <span class="go-top">
      <i class="icon-angle-up"></i>
      </span>
   </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->   

<!--    KENDO UI javascript files-->

  <script src='<?php echo base_url('assets/plugins/jquery-1.10.2.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/jquery-migrate-1.2.1.min.js')?>'></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
  <script src='<?php //echo base_url('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>'></script> 
  <script src='<?php echo base_url('assets/plugins/jquery.blockui.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/jquery.cookie.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/uniform/jquery.uniform.min.js')?>'></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->	
<script src='<?php echo base_url('assets/plugins/jquery-validation/dist/jquery.validate.min.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/select2/select2.min.js')?>'></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src='<?php echo base_url('assets/scripts/app.js')?>'></script>
<script src='<?php echo base_url('assets/scripts/index.js')?>'></script>
<script src='<?php echo base_url('assets/scripts/tasks.js')?>'></script>
<script src='<?php echo base_url('assets/scripts/login.js')?>' type="text/javascript"></script> 
<!-- END PAGE LEVEL SCRIPTS -->  
<script>
  jQuery(document).ready(function() {    
     App.init(); // initlayout and core plugins
     Login.init();
  });
</script>
<!-- END JAVASCRIPTS -->
</body>