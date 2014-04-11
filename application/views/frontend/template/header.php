<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->

    <head>
    <meta charset="utf-8" />
   <title>Metronic | Admin Dashboard Template</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <?php 
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
 
<?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
 
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>


   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href='<?php echo base_url('front_assets/assets/plugins/font-awesome/css/font-awesome.min.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('front_assets/assets/plugins/bootstrap/css/bootstrap.min.css')?>' rel="stylesheet" type="text/css"/>
  
   <!-- END GLOBAL MANDATORY STYLES -->
 <link href='<?php echo base_url('front_assets/assets/plugins/fancybox/source/jquery.fancybox.css')?>' rel="stylesheet" type="text/css"/>
  <link href='<?php echo base_url('front_assets/assets/plugins/revolution_slider/css/rs-style.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('front_assets/assets/plugins/revolution_slider/rs-plugin/css/settings.css')?>' rel="stylesheet" type="text/css"/>
    <link href='<?php echo base_url('front_assets/assets/plugins/bxslider/jquery.bxslider.css')?>' rel="stylesheet" type="text/css"/>

   <!-- BEGIN THEME STYLES --> 
   
 
   
   <link href='<?php echo base_url('front_assets/assets/css/style-metronic.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('front_assets/assets/css/style.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('front_assets/assets/css/style-responsive.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('front_assets/assets/css/themes/blue.css')?>' rel="stylesheet" type="text/css" id="style_color"/>
   <link href='<?php echo base_url('front_assets/assets/css/custom.css')?>' rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
 
   <link rel="shortcut icon" href='<?php echo base_url('favicon.ico')?>' />
   
   <!-- KENDO UI Styles -->
       
    <link  href='<?php //echo base_url('KendoUI/styles/kendo.common.min.css')?>'  rel="stylesheet"/>
    <link href='<?php //echo base_url('KendoUI/styles/kendo.metro.min.css')?>' rel="stylesheet"/>

    <script src='<?php //echo base_url('KendoUI/js/jquery.min.js')?>'></script>
    <script src='<?php //echo base_url('KendoUI/js/kendo.web.min.js')?>'></script>
    
 
</head>
 <body >
