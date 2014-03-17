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
   <link href='<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css')?>' rel="stylesheet" type="text/css"/>
  
   <link href='<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/plugins/uniform/css/uniform.default.css')?>' rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->

   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href='<?php echo base_url('assets/plugins/gritter/css/jquery.gritter.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')?>' rel="stylesheet" type="text/css" />
   <link href='<?php echo base_url('assets/plugins/fullcalendar/fullcalendar/fullcalendar.css')?>'  rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/plugins/jqvmap/jqvmap/jqvmap.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css')?>' rel="stylesheet" type="text/css"/>
   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   
 
   
   <link href='<?php echo base_url('assets/css/style-metronic.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/style.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/style-responsive.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/plugins.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/pages/tasks.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/themes/default.css')?>' rel="stylesheet" type="text/css" id="style_color"/>
   <link href='<?php echo base_url('assets/css/custom.css')?>' rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
 
   <link rel="shortcut icon" href='<?php echo base_url('favicon.ico')?>' />
   
   <!-- KENDO UI Styles -->
       
    <link  href='<?php //echo base_url('KendoUI/styles/kendo.common.min.css')?>'  rel="stylesheet"/>
    <link href='<?php// echo base_url('KendoUI/styles/kendo.metro.min.css')?>' rel="stylesheet"/>

    <script src='<?php //echo base_url('KendoUI/js/jquery.min.js')?>'></script>
    <script src='<?php //echo base_url('KendoUI/js/kendo.web.min.js')?>'></script>
    
 
</head>
 <body class="page-header-fixed">
        <!-- BEGIN HEADER -->   
<div class="header navbar navbar-inverse navbar-fixed-top">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="header-inner">
    <!-- BEGIN LOGO -->  
    <a class="navbar-brand" href="index.html">
        <img src='<?php echo base_url('assets/img/logo.png')?>' class="img-responsive" />
    </a>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
    <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <img src='<?php echo base_url('assets/img/menu-toggler.png')?>' alt="" />
    </a> 
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <ul class="nav navbar-nav pull-right">
     
      <!-- BEGIN USER LOGIN DROPDOWN -->
      <li class="dropdown user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img alt="" src='<?php echo base_url('assets/img/avatar1_small.jpg')?>'/>
        <span class="username">Bob Nilson</span>
        <i class="icon-angle-down"></i>
        </a>
        <ul class="dropdown-menu">
          <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a>
         
          <li class="divider"></li>
          <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a>
          </li>
          <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a>
          </li>
          <li><a href="login.html"><i class="icon-key"></i> Log Out</a>
          </li>
        </ul>
      </li>
      <!-- END USER LOGIN DROPDOWN -->
    </ul>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix"></div>
<div class="page-container">
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar navbar-collapse collapse">
  <!-- MAIN MENU GOES HERE.-->
    <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <form class="sidebar-search" action="extra_search.html" method="POST">
                  <div class="form-container">
                     <div class="input-box">
                        <a href="javascript:;" class="remove"></a>
                        <input type="text" placeholder="Search..."/>
                        <input type="button" class="submit" value=" "/>
                     </div>
                  </div>
               </form>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
              <li class="start active ">
               <a href="index.html">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               <span class="selected"></span>
               </a>
            </li>
              <li class="">
               <a href="javascript:;">
               <i class="icon-user"></i> 
               <span class="title">Users</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href='<?php echo site_url('admin/admin/user_management')?>'>Manage All users</a>
                  </li>
                   <li >
                     <a href='<?php echo site_url('admin/admin/admin_management')?>'>Manage Admin users</a>
                  </li>
                  <li >
                     <a href='<?php echo site_url('admin/admin/role_management')?>'>
                     Manage Roles</a>
                  </li>
                  <li >
                     <a href='<?php echo site_url('admin/admin/privelege_management')?>'>
                     Manage privileges</a>
                  </li>
                 
               </ul>
            </li>
           
                     <li>
               <a  href='<?php echo site_url('admin/subscribers')?>'>
               <i class="icon-envelope"></i> 
               <span class="title">Subscribers</span>
               <span class="selected"></span>
               </a>
            </li>
                 <li class="">
               <a href="javascript:;">
               <i class="icon-gear"></i> 
               <span class="title">Procurement Entity</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href='<?php echo site_url('admin/procurement')?>'>Manage Entities</a>
                  </li>
                  <li >
                     <a href='<?php echo site_url('admin/procurement/Entity_type')?>'>
                     Manage Entity types</a>
                  </li>
                 <li >
                      <i class="icon-map-marker"></i> 
                     <a href='<?php echo site_url('admin/procurement/locations')?>'>
                     Manage Locations</a>
                  </li>
                 
               </ul>
            </li>
                 <li class="">
               <a href="javascript:;">
               <i class="icon-ticket"></i> 
               <span class="title">Tenders</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href='<?php echo site_url('admin/tenders')?>'>
                         Manage Tenders</a>
                  </li>
                  <li >
                     <a href='<?php echo site_url('admin/tenders/types')?>'>
                     Manage Types</a>
                  </li>
                <li >
                     <a href='<?php echo site_url('admin/tenders/categories')?>'>
                     Manage Categories</a>
                  </li>
                 
               </ul>
            </li>
                         <li>
               <a href='<?php echo site_url('admin/regions')?>'>
               <i class="icon-map-marker"></i> 
               <span class="title">Regions</span>
               <span class="selected"></span>
               </a>
            </li>
                       <li>
               <a href='<?php echo site_url('admin/notification')?>'>
               <i class="icon-bell"></i> 
               <span class="title">Notifications</span>
               <span class="selected"></span>
               </a>
            </li>
          
    </ul>
</div>
<!-- END SIDEBAR -->