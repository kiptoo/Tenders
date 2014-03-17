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

<!--<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>-->
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
<script src='<?php echo base_url('assets/plugins/jqvmap/jqvmap/jquery.vmap.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/flot/jquery.flot.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/flot/jquery.flot.resize.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/jquery.pulsate.min.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/bootstrap-daterangepicker/moment.min.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/gritter/js/jquery.gritter.js')?>'></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->

<script src='<?php //echo base_url('assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js')?>'></script>
<script src='<?php //echo base_url('assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js')?>'></script>
<script src='<?php //echo base_url('assets/plugins/jquery.sparkline.min.js')?>'></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src='<?php echo base_url('assets/scripts/app.js')?>'></script>
<script src='<?php// echo base_url('assets/scripts/index.js')?>'></script>
<script src='<?php echo base_url('assets/scripts/tasks.js')?>'></script>
<!-- END PAGE LEVEL SCRIPTS -->  
<script>
     //$.noConflict();
  $(document).ready(function() {    
     App.init(); // initlayout and core plugins
     Index.init();
     Index.initJQVMAP(); // init index page's custom scripts
     Index.initCalendar(); // init index page's custom scripts
     Index.initCharts(); // init index page's custom scripts
     Index.initChat();
     Index.initMiniCharts();
     Index.initDashboardDaterange();
     Index.initIntro();
     Tasks.initDashboardWidget();
          PortletDraggable.init();
  });
</script>
<!-- END JAVASCRIPTS -->
</body>