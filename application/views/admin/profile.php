
<!-- BEGIN PAGE -->
      <div class="page-content">       
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  User Profile 
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  
                  <li><a href="#">User Profile</a></li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row profile">
            <div class="col-md-12">
               <!--BEGIN TABS-->
               <div class="tabbable tabbable-custom tabbable-full-width">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_1_1" data-toggle="tab">Overview</a></li>
                     <li><a href="#tab_1_3" data-toggle="tab">Account</a></li>
                     <li><a href="#tab_1_4" data-toggle="tab">Tender box</a></li>
                     
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="list-unstyled profile-nav">
                                 <li><img  src='<?php echo    base_url('assets/uploads/photos/'.$this->session->userdata('logged_in')['meta']->file_url);?>' class="img-responsive" alt="" /> 
                                   
                                 </li>
                                 <li><a href="#">Projects</a></li>
                                 <li><a href="#">Messages <span>3</span></a></li>
                                 <li><a href="#">Friends</a></li>
                                 <li><a href="#">Settings</a></li>
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="row">
                                 <div class="col-md-8 profile-info">
                                    <h1>John Doe</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam tincidunt erat volutpat laoreet dolore magna aliquam tincidunt erat volutpat.</p>
                                    <p><a href="#">www.mywebsite.com</a></p>
                                    <ul class="list-inline">
                                       <li><i class="icon-map-marker"></i> Spain</li>
                                       <li><i class="icon-calendar"></i> 18 Jan 1982</li>
                                       <li><i class="icon-briefcase"></i> Design</li>
                                       <li><i class="icon-star"></i> Top Seller</li>
                                       <li><i class="icon-heart"></i> BASE Jumping</li>
                                    </ul>
                                 </div>
                                 <!--end col-md-8-->
                                 <div class="col-md-4">
                                    <div class="portlet sale-summary">
                                       <div class="portlet-title">
                                          <div class="caption">Sales Summary</div>
                                          <div class="tools">
                                             <a class="reload" href="javascript:;"></a>
                                          </div>
                                       </div>
                                       <div class="portlet-body">
                                          <ul class="list-unstyled">
                                             <li>
                                                <span class="sale-info">TODAY SOLD <i class="icon-img-up"></i></span> 
                                                <span class="sale-num">23</span>
                                             </li>
                                             <li>
                                                <span class="sale-info">WEEKLY SALES <i class="icon-img-down"></i></span> 
                                                <span class="sale-num">87</span>
                                             </li>
                                             <li>
                                                <span class="sale-info">TOTAL SOLD</span> 
                                                <span class="sale-num">2377</span>
                                             </li>
                                             <li>
                                                <span class="sale-info">EARNS</span> 
                                                <span class="sale-num">$37.990</span>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end col-md-4-->
                              </div>
                              <!--end row-->
                              <div class="tabbable tabbable-custom tabbable-custom-profile">
                                 <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1_11" data-toggle="tab">Latest Customers</a></li>
                                    <li ><a href="#tab_1_22" data-toggle="tab">Feeds</a></li>
                                 </ul>
                                 <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_11">
                                       <div class="portlet-body">
                          <?php         
                          echo $data->user['first_name'];
                          echo '<br>';
                        $file= $this->session->userdata('logged_in')['meta']->file_url;
                    echo    base_url('assets/uploads/photos/'.$this->session->userdata('logged_in')['meta']->file_url);
                                    /*   foreach ($data as $row) {
                               
                                 
                                 echo "<p>" .$row."</p>";
                                
                               }*/
                      ?>
                                       </div>
                                    </div>
                                    <!--tab-pane-->
                                    <div class="tab-pane" id="tab_1_22">
                                       <div class="tab-pane active" id="tab_1_1_1">
                                          <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                             <ul class="feeds">
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-success">                        
                                                               <i class="icon-bell"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               You have 4 pending tasks.
                                                               <span class="label label-danger label-sm">
                                                               Take action 
                                                               <i class="icon-share-alt"></i>
                                                               </span>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         Just now
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <a href="#">
                                                      <div class="col1">
                                                         <div class="cont">
                                                            <div class="cont-col1">
                                                               <div class="label label-success">                        
                                                                  <i class="icon-bell"></i>
                                                               </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                               <div class="desc">
                                                                  New version v1.4 just lunched!   
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="col2">
                                                         <div class="date">
                                                            20 mins
                                                         </div>
                                                      </div>
                                                   </a>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-danger">                      
                                                               <i class="icon-bolt"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               Database server #12 overloaded. Please fix the issue.                      
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         24 mins
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-info">                        
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         30 mins
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-success">                        
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         40 mins
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-warning">                        
                                                               <i class="icon-plus"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New user registered.                
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         1.5 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-success">                        
                                                               <i class="icon-bell-alt"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               Web server hardware needs to be upgraded. 
                                                               <span class="label label-inverse label-sm">Overdue</span>             
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         2 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-default">                       
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         3 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-warning">                        
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         5 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-info">                        
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         18 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-default">                       
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         21 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-info">                        
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         22 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-default">                       
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         21 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-info">                        
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         22 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-default">                       
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         21 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-info">                        
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         22 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-default">                       
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         21 hours
                                                      </div>
                                                   </div>
                                                </li>
                                                <li>
                                                   <div class="col1">
                                                      <div class="cont">
                                                         <div class="cont-col1">
                                                            <div class="label label-info">                        
                                                               <i class="icon-bullhorn"></i>
                                                            </div>
                                                         </div>
                                                         <div class="cont-col2">
                                                            <div class="desc">
                                                               New order received. Please take care of it.                 
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col2">
                                                      <div class="date">
                                                         22 hours
                                                      </div>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <!--tab-pane-->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--tab_1_2-->
                     <div class="tab-pane" id="tab_1_3">
                        <div class="row profile-account">
                           <div class="col-md-3">
                              <ul class="ver-inline-menu tabbable margin-bottom-10">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab_1-1">
                                    <i class="icon-cog"></i> Personal info</a> 
                                    <span class="after"></span>                                    
                                 </li>
                                 <li ><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a></li>
                                 <li ><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
                                 <li ><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> Privacity Settings</a></li>
                              </ul>
                           </div>
                           <div class="col-md-9">
                              <div class="tab-content">
                                 <div id="tab_1-1" class="tab-pane active">
     <?php
             $attributes = array('class' => 'register-form', 'id' => 'regform');

                echo form_open('update_reg', $attributes); ?>                               
                                   
                         
                                    	<div class="form-group">
			<label class="control-label ">First Name</label>
			<div class="input-icon">
				<i class="icon-font"></i>
			<input class="form-control placeholder-no-fix" type="text" placeholder="First Name" value='<?php echo $data->user['first_name'];?>' name="first_name"/>
			</div>
			</div>
                        <div class="form-group">
				<label class="control-label  ">Last Name</label>
				<div class="input-icon">
					<i class="icon-font"></i>
					<input class="form-control placeholder-no-fix" placeholder="Last Name" type="text" value='<?php echo $data->user['last_name'];?>' name="last_name"/>
				</div>
			</div>
                        <div class="form-group">
				<label class="control-label ">Phone</label>
				<div class="input-icon">
					<i class="icon-font"></i>
					<input class="form-control placeholder-no-fix" placeholder="phone no" type="text"value='<?php echo $data->user['phone'];?>' name="phone"/>
				</div>
			</div>
                             <div class="form-group">
				<label class="control-label ">Id No</label>
				<div class="input-icon">
					<i class="icon-font"></i>
					<input class="form-control placeholder-no-fix" placeholder="id no"type="text" value='<?php echo $data->user['idno'];?>' name="id"/>
				</div>
			</div>
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label ">Email</label>
				<div class="input-icon">
					<i class="icon-envelope"></i>
					<input class="form-control placeholder-no-fix" placeholder="Email" type="text" value='<?php echo $data->user['email'];?>' name="email"/>
				</div>
			</div>
                                 <div class="margin-top-10">
                                         
                                          <input type="submit" class="btn green" value="save Changes" />
                                          <a href="#" class="btn default">Cancel</a>
                                       </div>       
                            <?php echo form_close()?>
                                 </div>
                                 <div id="tab_2-2" class="tab-pane">
                                  
                                    
<?php// echo  $errors['error'];?>
            <ul>
<?php foreach ($error as $item => $value):?>
<li><?php //echo $item;?> <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
    
<?php 
 $attributes = array('class' => 'upload', 'id' => 'upload');
echo form_open_multipart('admin/profile/do_upload',$attributes);?>
                                       <div class="form-group">
                                          
                                          <div class="margin-top-10 fileupload fileupload-new" data-provides="fileupload">
                                             <div class="input-group input-group-fixed">
                                                <span class="input-group-btn">
                                                <span class="uneditable-input">
                                                <i class="icon-file fileupload-exists"></i> 
                                                <span class="fileupload-preview"></span>
                                                </span>
                                                </span>
                                                <span class="btn default btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file"  name="userfile"class="default" />
                                                </span>
                                                <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                             </div>
                                          </div>
                                         
                                       </div>
                                       <div class="margin-top-10">
                                         
                                          <input class="btn green" name="data" type="submit" value="Upload" />
                                       </div>
                           <?php echo form_close()?>
                                 </div>
                                 <div id="tab_3-3" class="tab-pane">
                    <?php
             $attributes = array('class' => 'register-form', 'id' => 'loginform');

                echo form_open('update_login', $attributes); ?>  
                                     
                                     	<div class="form-group">
               	<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="input-icon">
					<i class="icon-user"></i>
					<input class="form-control placeholder-no-fix"  value='<?php echo $data->user['username'];?>' type="text" autocomplete="off" placeholder="Username" name="username"/>
				</div>
			</div>
			<!--<div class="form-group">
				<label class="control-label">Current Password</label>
				<div class="input-icon">
					<i class="icon-lock"></i>
					<input class="form-control placeholder-no-fix" value='<?php //echo $data['password'];?>' type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
				</div>
			</div>-->
                                     <div class="form-group">
				<label class="control-label">New Password</label>
				<div class="input-icon">
					<i class="icon-lock"></i>
					<input class="form-control placeholder-no-fix"  type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label ">Re-type Your Password</label>
				<div class="controls">
					<div class="input-icon">
						<i class="icon-ok"></i>
						<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword"/>
					</div>
				</div>
			</div>
                                       <div class="margin-top-10">
                                         
                                          <input type="submit" class="btn green" value="Change Password" />
                                          <a href="#" class="btn default">Cancel</a>
                                       </div>
                               <?php echo form_close()?>
                                 </div>
                     
                              </div>
                           </div>
                           <!--end col-md-9-->                                   
                        </div>
                     </div>
                     <!--end tab-pane-->
                     <div class="tab-pane" id="tab_1_4">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="add-portfolio">
                                  <span><?php echo sizeof($data->tenders)?> Tenders in your Tender box</span>
                                 <a href='<?php echo site_url('admin/tenders/index/add#output')?>' class="btn add icn-only green">Add a new Tenders <i class="m-icon-swapright m-icon-white"></i></a>                          
                              </div>
                           </div>
                        </div>
                        <!--end add-portfolio-->
   <?php foreach($data->tenders as $file): ?>     
                        <div class="row portfolio-block">
                           <div class="col-md-2">
                              <div class="portfolio-text">
                                 <!--<img src="assets/img/profile/portfolio/logo_metronic.jpg" alt="" />-->
                                 <div class="portfolio-text-info">
                                    <h4> <?php echo $file['tender_name'] ?> </h4>
                                    <p><?php echo $file['descrption'] ?></p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-9">
                                <div class="portfolio-info">
                                 CLient
                                 <span><?php echo $file['proc_name'] ?></span>
                              </div>
                               <div class="portfolio-info">
                                 Contract No
                                 <span><?php echo $file['contract_no'] ?></span>
                              </div>
                              <div class="portfolio-info">
                                 Opening Date
                                 <span><?php echo $file['opening'] ?></span>
                              </div>
                              <div class="portfolio-info">
                                 Closing Date
                                 <span><?php echo $file['closing'] ?></span>
                              </div>
                                <div class="portfolio-info">
                                 Category
                                 <span><?php echo $file['cat_name'] ?></span>
                              </div>
                                  <div class="portfolio-info">
                                 Type
                                 <span><?php echo $file['type_name'] ?></span>
                              </div>
                                  <div class="portfolio-info">
                                 Region
                                 <span><?php echo $file['reg_name'] ?></span>
                              </div>
                           </div>
                           <div class="col-md-1">
                              <div class="portfolio-btn">
                                  <a href='<?php echo site_url('admin/tenders/index/edit/'.$file['tender_id'] ) ?>'class="btn edit bigicn-only" id="edit"><span>Edit</span></a>                      
                              </div>
                                 <div class="portfolio-btn">
                                 <a href="#" class="btn bigicn-only"><span>Delete</span></a>                      
                              </div>
                           </div>
                        </div>
              <?php endforeach; ?>          
                        <!--end row-->
             
                     </div>
                     <!--end tab-pane-->
  <!--end tab-pane-->
                  </div>
               </div>
               <!--END TABS-->
            </div>
         </div>
         <!-- END PAGE CONTENT-->
      </div>
      <!-- END PAGE -->   