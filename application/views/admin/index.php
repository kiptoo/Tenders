
<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->   
        <h3 class="page-title">
          Dashboard
          <small>statistics and more</small>
        </h3>
        <ul class="page-breadcrumb breadcrumb">
          <li>
            <i class="icon-home"></i>
            <a href="#">Home</a> 
            <span class="icon-angle-right"></span>
          </li>
          <li><a href="#">Dashboard</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB--> 
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- CONTENT BODY GOES HERE >>>> -->
         <div class="column sortable">
             
         <div class="portlet box green">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-reorder"></i>Users</div>
                    <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
               </div>
                   
                  </div>
                  <div class="portlet-body">
                    <!--kendo Ui
                      <div id="example" class="k-content"></div>
            
                  </div>-->
                     <div id="output">
        <?php echo $output;  ?>

    </div>
               
           
        </div>
</div>    
</div>
<!-- END PAGE -->

 