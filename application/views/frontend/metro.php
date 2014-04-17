    
        <div id="filter" >
                       
                        <div class="portlet box blue">
                           <div class="portlet-title">
                               <div class="caption"><i class="icon-search"></i>SEARCH </div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse" ></a>
                               
                              </div>
                           </div>
                              <div class="portlet-body">
                              <!-- BEGIN FORM-->
                              <?php echo validation_errors(); 
                          $attributes = array('class' => 'horizontal-form', 'id' => 'myform');
                           echo form_open('front/front/search',$attributes); ?>
                            <!--   <form action='' class="horizontal-form">--> 
                                 <div class="form-body">
                                   
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Industry Type</label>
                                             <select id="products" name="type" ></select>
                                            
                                          </div>
                                       </div>
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label">Category</label>
                                            <!-- <input type="text" id="region" class="form-control" placeholder="">-->
                                             
                                             <select id="category" name="category" ></select>
                                             
                                          </div>
                                       </div>
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group ">
                                             <label class="control-label">Region</label>
                                             <select id="region" name="region"  ></select>
                                             
                                          </div>
                                       </div>
                                          <div class="col-md-6">
                          <div class="form-group">
                              <label class="control-label">Period</label>
                              <div class="col-md-4">
                                 <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
                                    <input type="text" class="form-control" name="from" >
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" name="to">
                                 </div>
                        
                              </div>
                           </div>
                         <!--    <div class="form-group last">
                              <label class="control-label">Period</label>
                              <div class="col-md-4">
                                 <div id="reportrange" class="btn default">
                                    <i class="icon-calendar"></i>
                                    &nbsp;<span></span> 
                                    <b class="icon-angle-down"></b>
                                 </div>
                              </div>
                           </div>-->
                                       </div>
                                       <!--/span-->
                                    </div>
                                     <div class="row">
                                             <div class="col-md-6">
                                          <div class="form-group ">
                                             <label class="control-label">Procurement Entity Type</label>
                                           <select id="procurement" multiple="multiple" class="multi-select" name="procurement" ></select>
                                             
                                          </div>
                                       </div>
                                            <div class="col-md-6">
                                          <div class="form-group ">
                                             <label class="control-label">Custom</label>
                                             <input type="text" id="custom" class="form-control" name="custom" placeholder="Text">
                                             
                                          </div>
                                       </div>
                                             <div class="col-md-10">
                                          <div class="form-group ">
                                             <div class="col-md-12">
                                              <input type="submit" id="search" class="form-control btn  blue"   value="SEARCH">
                                             </div> 
                                          </div>
                                       </div>
                                     </div>
                                 </div>
              <?php     echo   form_close()?>
                        </div>
                     
        </div>
        	  <!--<div class="searchBox">
				
                <form id="ui_element" class="sb_wrapper">
                   
						<span class="sb_down"></span>
                                                <input class="sb_input" type="text" style="width:70%"/>
						<input class="sb_search" type="submit" value=""/>
                                                
           	     <div class="sb_dropdown">
                     <div class="demo-section">
        <h2>Products</h2>
        <select id="products"></select>
    </div>
                      
                 </div>
                                                
				<ul class="sb_dropdown" style="display:none; width:90%">
						<li class="sb_filter">Filter your search</li>
						<li><input type="checkbox"/><label for="all"><strong>All Categories</strong></label></li>
						<li><input type="checkbox"/><label for="Automotive">Automotive</label></li>
						<li><input type="checkbox"/><label for="Baby">Baby</label></li>
						<li><input type="checkbox"/><label for="Beauty">Beauty</label></li>
						<li><input type="checkbox"/><label for="Books">Books</label></li>
						<li><input type="checkbox"/><label for="Cell">Cell Phones </label></li>
						<li><input type="checkbox"/><label for="Cloth">Clothing</label></li>
						<li><input type="checkbox"/><label for="Electronics">Electronics</label></li>
						<li><input type="checkbox"/><label for="Gourmet">Gourmet Food</label></li>
						<li><input type="checkbox"/><label for="Health">Health </label></li>
						<li><input type="checkbox"/><label for="Home">Home &amp; Garden</label></li>
						<li><input type="checkbox"/><label for="Industrial">Industrial </label></li>
						<li><input type="checkbox"/><label for="Jewelry">Jewelry</label></li>
						<li><input type="checkbox"/><label for="Magazines">Magazines</label></li>
					</ul>
                                      
                </form>
            </div>
-->
        		<div class="mb_footer">
            </div>
         </div> 
       