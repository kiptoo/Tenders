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


   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href='<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css')?>' rel="stylesheet" type="text/css"/>
  
   <link href='<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/plugins/uniform/css/uniform.default.css')?>' rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
 <link href='<?php echo base_url('assets/plugins/select2/select2_metro.css')?>' rel="stylesheet" type="text/css"/>
 

   <!-- BEGIN THEME STYLES --> 
   
   <link href='<?php echo base_url('assets/css/style-metronic.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/style.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/style-responsive.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/plugins.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/pages/tasks.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/themes/default.css')?>' rel="stylesheet" type="text/css" id="style_color"/>
   <link href='<?php echo base_url('assets/css/custom.css')?>' rel="stylesheet" type="text/css"/>
   <link href='<?php echo base_url('assets/css/pages/login.css')?>' rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
 
   <link rel="shortcut icon" href='<?php echo base_url('favicon.ico')?>' />
   
   
</head>
 
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<!--<img src='<?php// echo base_url('assets/img/logo-big.png')?>' alt="" /> -->
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
        <div id="output" class="content">
		<!-- BEGIN LOGIN FORM -->
             <?php
             $attributes = array('class' => 'login-form', 'id' => 'myform');
             
echo validation_errors(); 
   
             echo form_open('form', $attributes); ?>
                
                       
			<h3 class="form-title">Login to your account</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Enter any username and password.</span>
			</div>
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="input-icon">
					<i class="icon-user"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
				<?php echo form_error('username'); ?>
                                </div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="input-icon">
					<i class="icon-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
				</div>
			</div>
			<div class="form-actions">
				<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> Remember me
				</label>
				<button type="submit" class="btn green pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
			<div class="forget-password">
				<h4>Forgot your password ?</h4>
				<p>
					no worries, click <a href="javascript:;"  id="forget-password">here</a>
					to reset your password.
				</p>
			</div>
			<div class="create-account">
				<p>
					Don't have an account yet ?&nbsp; 
					<a href="javascript:;" id="register-btn" >Create an account</a>
				</p>
			</div>
		<?php echo form_close()?>
		<!-- END LOGIN FORM -->        
		<!-- BEGIN FORGOT PASSWORD FORM -->
		<form class="forget-form" action="index.html" method="post">
			<h3 >Forget Password ?</h3>
			<p>Enter your e-mail address below to reset your password.</p>
			<div class="form-group">
				<div class="input-icon">
					<i class="icon-envelope"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
				</div>
			</div>
			<div class="form-actions">
				<button type="button" id="back-btn" class="btn">
				<i class="m-icon-swapleft"></i> Back
				</button>
				<button type="submit" class="btn green pull-right">
				Submit <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
		<!-- END FORGOT PASSWORD FORM -->
		<!-- BEGIN REGISTRATION FORM -->
                 <?php
             $attributes = array('class' => 'register-form', 'id' => 'regform');

                echo form_open('reg', $attributes); ?>
                
		
			<h3 >Sign Up</h3>
			<p>Enter your personal details below:</p>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">First Name</label>
				<div class="input-icon">
					<i class="icon-font"></i>
					<input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="first_name"/>
				</div>
			</div>
                        <div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Last Name</label>
				<div class="input-icon">
					<i class="icon-font"></i>
					<input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="last_name"/>
				</div>
			</div>
                        <div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Phone</label>
				<div class="input-icon">
					<i class="icon-font"></i>
					<input class="form-control placeholder-no-fix" type="text" placeholder="Phone" name="phone"/>
				</div>
			</div>
                             <div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Id No</label>
				<div class="input-icon">
					<i class="icon-font"></i>
					<input class="form-control placeholder-no-fix" type="text" placeholder="Id No" name="id"/>
				</div>
			</div>
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Email</label>
				<div class="input-icon">
					<i class="icon-envelope"></i>
					<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
				</div>
			</div>
			
	
			<p>Enter your account details below:</p>
			<div class="form-group">
               	<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="input-icon">
					<i class="icon-user"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="input-icon">
					<i class="icon-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
				<div class="controls">
					<div class="input-icon">
						<i class="icon-ok"></i>
						<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
					</div>
				</div>
			</div>
             
                <p>customize to your options</p>
			<div class="form-group">
               	<label class="control-label visible-ie8 visible-ie9">method</label>
				<div class="input-icon">
				
                                    <select name="notification" multiple="multiple" class="form-control select2me" data-placeholder="Select category" >
                                            <option value="sms">SMS</option>
                                            <option value="email">Email</option>
                                        </select>
				</div>
			</div>
                	<div class="form-group">
               	<label class="control-label visible-ie8 visible-ie9">method</label>
				<div class="input-icon">
					
                                    <select name="notification" multiple="multiple" class="form-control select2me" data-placeholder="Select notification method" >
                                            <option value="sms">SMS</option>
                                            <option value="email">Email</option>
                                        </select>
				</div>
			</div>
                	<div class="form-group">
               	<label class="control-label visible-ie8 visible-ie9">method</label>
				<div class="input-icon">
					
                                    <select name="notification" multiple="multiple" class="form-control select2me" data-placeholder="Select notification method" >
                                            <option value="sms">SMS</option>
                                            <option value="email">Email</option>
                                        </select>
				</div>
			</div>
			<div class="form-group">
				<label>
				<input type="checkbox" name="tnc"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
				</label>  
				<div id="register_tnc_error"></div>
			</div>
			<div class="form-actions">
				<button id="register-back-btn" type="button" class="btn">
				<i class="m-icon-swapleft"></i>  Back
				</button>
				<button type="submit" id="register-submit-btn" class="btn green pull-right">
				Sign Up <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		<?php echo form_close()?>
		<!-- END REGISTRATION FORM -->
	</div>
	<!-- END LOGIN -->
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