
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
                  
                  <li><a href="#">Entity Profile</a></li>
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
                     <li><a href="#tab_1_3" data-toggle="tab">Settings</a></li>
                     <li><a href="#tab_1_4" data-toggle="tab">Tenders</a></li>
                     
                     
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_1_1">
                        <div class="row">
                         <!--  <div class="col-md-3">
                              <ul class="list-unstyled profile-nav">
                                 <li><img  src='<?php //echo    base_url('assets/uploads/photos/'.$this->session->userdata('logged_in')['meta']->file_url);?>' class="img-responsive" alt="" /> 
                                   
                                 </li>
                                 <li><a href="#">Tenders</a></li>
                                 <li><a href="#">Location<span>3</span></a></li>
                                 <li><a href="#">Users</a></li>
                                 <li><a href="#">Settings</a></li>
                              </ul>
                           </div>-->
                           <div class="col-md-9">
                              <div class="row">
                                  <div class="col-md-12 profile-info " style="margin-left:100px ">
                                      <div class="portlet box green">
                                            <div class="portlet-title">
                                          <div class="caption">Details</div>
                                          <div class="tools">
                                             <a class="collapse" href="javascript:;"></a>
                                          </div>
                                       </div>
                                          <div class="portlet-body">
                                     <h1><b><?php  echo $data->Entity['proc_name'];?></b></h1>
                                    <p><?php  echo $data->Entity['description'];?></p>
                                    <p><a href='<?php  echo "www."+$data->Entity['website'];?>'><?php  echo $data->Entity['website'];?></a></p>
                                     <p><?php  echo $data->Entity['email'];?></a></p>
                                    
                                    <ul class="list-inline">
                                       <li><i class="icon-phone"></i> <?php  echo $data->Entity['phone'];?></li>
                                       <li><i class="icon-envelope"></i><?php  echo $data->Entity['email'];?></li>
                                       <li><i class="icon-map-marker"></i><?php  echo $data->Entity['reg_name'];?></li>
                                       <li><i class="icon-globe"></i><a href='<?php  echo "www."+$data->Entity['website'];?>'><?php  echo $data->Entity['website'];?></a></li>
                                       
                                    </ul>
                                      </div>
                                      </div>
                                 </div>
                                 <!--end col-md-8-->
                              
                                 <!--end col-md-4-->
                              </div>
                              <!--end row-->
                              <div class="row" >
                                     <div class="col-md-12"  style="margin-left:100px">
                                    <div class="portlet box green">
                                       <div class="portlet-title">
                                          <div class="caption">Locations</div>
                                          <div class="tools">
                                             <a class="collapse" href="javascript:;"></a>
                                          </div>
                                       </div>
                                       <div class="portlet-body">
                                      <div id="map_canvas"></div>
                                       </div>
                                    </div>
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