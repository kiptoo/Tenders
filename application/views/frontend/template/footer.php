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


  <script src='<?php echo base_url('front_assets/assets/plugins/jquery-1.10.2.min.js')?>'></script>
  <script src='<?php echo base_url('front_assets/assets/plugins/jquery-migrate-1.2.1.min.js')?>'></script
  <script src='<?php echo base_url('front_assets/assets/plugins/bootstrap/js/bootstrap.min.js')?>'></script>
    <script src='<?php echo base_url('front_assets/assets/plugins/back-to-top.js')?>'></script>
  <script src='<?php echo base_url('front_assets/assets/plugins/hover-dropdown.js')?>'></script>
  

<!-- END CORE PLUGINS -->
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src='<?php echo base_url('front_assets/assets/plugins/fancybox/source/jquery.fancybox.pack.js')?>'></script>
<script src='<?php echo base_url('front_assets/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js')?>'></script>
<script src='<?php echo base_url('front_assets/assets/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js')?>'></script>
<script src='<?php echo base_url('front_assets/assets/plugins/bxslider/jquery.bxslider.min.js')?>'></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src='<?php echo base_url('front_assets/assets/scripts/app.js')?>'></script>
<script src='<?php echo base_url('front_assets/assets/scripts/index.js')?>'></script>

<script>
  jQuery(document).ready(function() {    
          App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider();  
  });
</script>

<!-- END JAVASCRIPTS -->
</body>
