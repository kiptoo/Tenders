  <script type="text/javascript">
            $(function() {
				/**
				* the element
				*/
				var $ui 		= $('#ui_element');
				
				/**
				* on focus and on click display the dropdown, 
				* and change the arrow image
				*/
				$ui.find('.sb_input').bind('focus click',function(){
					$ui.find('.sb_down')
					   .addClass('sb_up')
					   .removeClass('sb_down')
					   .andSelf()
					   .find('.sb_dropdown')
					   .show();
				});
				
				/**
				* on mouse leave hide the dropdown, 
				* and change the arrow image
				*/
				$ui.find('.sb_search').bind('click',function(){
					$ui.find('.sb_up')
					   .addClass('sb_down')
					   .removeClass('sb_up')
					   .andSelf()
					   .find('.sb_dropdown')
					   .hide();
				});
				
				/**
				* selecting all checkboxes
				*/
				$ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click',function(){
					$(this).parent().siblings().find(':checkbox').attr('checked',this.checked).attr('disabled',this.checked);
				});
            });
        </script>
   <script type="text/x-kendo-tmpl" id="template">
     <div class="row portfolio-block">
      <div class="col-md-2">
                                <div class="portfolio-text">
                                 
                                 <span>#:contract_no#</span>
                              </div>
                              
       </div>  
            <div class="col-md-2">
                            
                               <div class="portfolio-text">
                                 
                                 <span>#:proc_name#</span>
                              </div>
       </div>              
      <div class="col-md-4">
                              <div class="portfolio-text">
                                 
                                 <div class="portfolio-text-info">
                                    <h4> #:tender_name# </h4>
                                   <p >#=descrption# </p>
                                 </div>
                              </div>
       </div>
       <div class="col-md-2">
                            
                               <div class="portfolio-text">
                                 
                                 <span>#:closing#</span>
                              </div>
       </div> 
       <div>
                             
                                 <a  class="icon-folder" title="Add to tender box." href="http://localhost/Tenders_CI/index.php/front/search/add_box/#:tender_id#"></a>        
     </div>                       
     </div>
    </script>
        <script type="text/javascript">
       
        $(document).ready(function() {
            
          $("#login").click(function(e) {
              event.preventDefault();
             var href= $(this).attr('href');
             load(href);
        });
        function load(href){
                var url = this.href;
            // show a spinner or something via css
            var dialog = $('<div style="display:none z-index:1500" class="loading"></div>').appendTo('body');
            // open the dialog
            dialog.dialog({
                width: 400,
                height: 450,
                modal: true,
                
                // add a close listener to prevent adding multiple divs to the document
                close: function(event, ui) {
                    // remove div with all data and events
                    dialog.remove();
                }
              
            });
            // load remote content
            dialog.load(href,{}, function (responseText, textStatus, XMLHttpRequest) {
                    // remove the loading class
                    dialog.removeClass('loading');
                }
            );
            //prevent the browser to follow the link
            return false;
       
        }
   // $("#s1").dropdownchecklist({ firstItemChecksAll: true });
           var dataSource = new kendo.data.DataSource({
                    transport: {
                        read: {
                            url: "http://localhost/Tenders_CI/index.php/front/search/tenders",
                            dataType: "json"
                        }
                    },
                    pageSize: 5
                    
                });
             var Type= new kendo.data.DataSource({
                 
                    serverFiltering: true,
                    transport: {
                        read: {
                            url: "http://localhost/Tenders_CI/index.php/front/search/type",
                           dataType: "json"
                        }
                    }
                    });
          var category= new kendo.data.DataSource({
                  
                    serverFiltering: true,
                    transport: {
                        read: {
                            url: "http://localhost/Tenders_CI/index.php/front/search/category",
                           dataType: "json"
                        }
                    }
                    });
                       var region= new kendo.data.DataSource({
               
                    serverFiltering: true,
                    transport: {
                        read: {
                            url: "http://localhost/Tenders_CI/index.php/front/search/region",
                         dataType: "json"  
                        }
                    }
                    });
                     var proc= new kendo.data.DataSource({
                   
                    serverFiltering: true,
                    transport: {
                        read: {
                            url: "http://localhost/Tenders_CI/index.php/front/search/entity",
                           dataType: "json"
                        }
                    }
                    });  
            $("#products").kendoMultiSelect({
                placeholder: "Selec ...",
                 dataTextField: "type_name",
                dataValueField: "type_id",
                autoBind: false,
                dataSource: Type
              /*  value: [
                    { ProductName: "Chang", ProductID: 2 },
                    { ProductName: "Uncle Bob's Organic Dried Pears", ProductID: 7 }
                ]*/
            });
                   $("#category").kendoMultiSelect({
                placeholder: "Selec ...",
                 dataTextField: "cat_name",
                dataValueField: "cat_id",
                autoBind: false,
                dataSource: category
              /*  value: [
                    { ProductName: "Chang", ProductID: 2 },
                    { ProductName: "Uncle Bob's Organic Dried Pears", ProductID: 7 }
                ]*/
          });
                   $("#region").kendoMultiSelect({
                placeholder: "Selec ...",
                 dataTextField: "reg_name",
                dataValueField: "reg_id",
                autoBind: false,
                dataSource: region
              /*  value: [
                    { ProductName: "Chang", ProductID: 2 },
                    { ProductName: "Uncle Bob's Organic Dried Pears", ProductID: 7 }
                ]*/
            });
                 $("#procurement").kendoMultiSelect({
                placeholder: "Selec ...",
                 dataTextField: "type",
                dataValueField: "entity_id",
                autoBind: false,
                dataSource: proc
               
              /*  value: [
                    { ProductName: "Chang", ProductID: 2 },
                    { ProductName: "Uncle Bob's Organic Dried Pears", ProductID: 7 }
                ]*/
            });
             $("#pager").kendoPager({
                dataSource: dataSource
            });
              $("#listView").kendoListView({
                dataSource: dataSource,
                 selectable:false,
                //width:700px,
                template: kendo.template($("#template").html())
            });
   
        
        });
    </script>
    <style scoped>
  
        .mb_footer{
            z-index: 1200;
        }
.tool {
                    width: 250px;
                    margin: 35px auto 50px;
                    padding: 30px;
                }
                .tool h2 {
                    text-transform: uppercase;
                    font-size: 1.2em;
                    margin-bottom: 10px;
                }
        #listView {
            padding: 10px;
            margin-left:10px;
            margin-right:10px;
            min-width: 555px;
            min-height: 510px;
             border:none; 
        }
             #pager {
            padding: 10px;
            margin-left:10px;
            margin-right:10px;
             border:none; 
        }
         .tender
        {
          //  float: left;
            width:auto;
            height: 110px;
            margin: 0;
            padding: 5px;
            cursor: pointer;
        }
    
      
   
         #filter {
       /*background:rgba(255,255,255, 0.9);
 background-color: rgba(0, 149, 197, 0.7);
  background-color: rgba(0,0,0,0.65);
             margin:0;
	padding:0;*/
	position: absolute;
	top:30%;
	left:20%;
	z-index:1000;
	width:50%;
        height:40%;/*
      border:1px solid rgba(0,0,0,0.65);*/
         }
       .search {
       /*background:rgba(255,255,255, 0.9);
 background-color: rgba(0, 149, 197, 0.7);
  background-color: rgba(0,0,0,0.65);
             margin:0;
	padding:0;*/
	position: absolute;
	top:20%;
	left:-2%;
	z-index:1000;
	width:25%;
        height:auto;/*
      border:1px solid rgba(0,0,0,0.65);*/
         }
                .show {
       /*background:rgba(255,255,255, 0.9);
 background-color: rgba(0, 149, 197, 0.7);
  background-color: rgba(0,0,0,0.65);
             margin:0;
	padding:0;*/
	position: absolute;
	top:20%;
	left:25%;
	z-index:1000;
	width:77%;
        height:auto;/*
      border:1px solid rgba(0,0,0,0.65);*/
         }
         .header
         {
          
          position: relative;
	width:67%;
        height:10px;   
         }
    </style>
   <script src='<?php //echo base_url('KendoUI/js/kendo.all.min.js')?>'></script>
   
      <script src='<?php //echo base_url('assets/plugins/jquery-1.10.2.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/jquery-migrate-1.2.1.min.js')?>'></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
  <script src='<?php echo base_url('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')?>'></script>
  <script src='<?php //echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>'></script> 
  <script src='<?php echo base_url('assets/plugins/jquery.blockui.min.js')?>'></script>
  <script src='<?php echo base_url('assets/plugins/jquery.cookie.min.js')?>'></script>
   <script src='<?php echo base_url('assets/scripts/ui.dropdownchecklist.js')?>'></script>
  
  <script src='<?php echo base_url('assets/plugins/uniform/jquery.uniform.min.js')?>'></script>
   
        <!-- BEGIN PAGE LEVEL PLUGINS -->	
<script src='<?php echo base_url('assets/plugins/jquery-validation/dist/jquery.validate.min.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/select2/select2.min.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/bootstrap-daterangepicker/moment.min.js')?>'></script>
<script src='<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')?>'></script>

<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src='<?php echo base_url('front/js/modernizr.custom.86080.js')?>'></script>
<script src='<?php echo base_url('front/js/modernizr.custom.js')?>'></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src='<?php echo base_url('assets/scripts/app.js')?>'></script>
<script src='<?php echo base_url('assets/scripts/index.js')?>'></script>
<script src='<?php echo base_url('assets/scripts/tasks.js')?>'></script>
<script src='<?php echo base_url('assets/scripts/form-samples.js')?>' type="text/javascript"></script> 
<script src='<?php echo base_url('assets/scripts/form-components.js')?>' type="text/javascript"></script> 

<!-- END PAGE LEVEL SCRIPTS -->   
<script>
  jQuery(document).ready(function() {    
     App.init(); // initlayout and core plugins
     Login.init();
         FormSamples.init();
         FormComponents.init();

    });
</script>
        </body>
</html>