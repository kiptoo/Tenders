
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
                     <div>
        <?php echo $output; ?>

    </div>
               
           
        </div>
</div>    
</div>
<!-- END PAGE -->

 <script>
                $(document).ready(function () {
                    var crudServiceBaseUrl = "http://localhost/codeigniter-restserver/index.php/api/example/users/format/json"
                        dataSource = new kendo.data.DataSource({
                            transport: {
                                read:  {
                                    //url: crudServiceBaseUrl + "/Products",
                                    url:"http://localhost/codeigniter-restserver/index.php/api/example/users/format/json",
                                    dataType: "json"
                                },
                                update: {
                                    url: "",
                                    dataType: "json"
                                },
                                destroy: {
                                    url: crudServiceBaseUrl + "/Products/Destroy",
                                    dataType: "json"
                                },
                                create: {
                                    url: "http://localhost/codeigniter-restserver/index.php/api/example/user",
                                    dataType: "json"
                                  /*  complete: function (e) {
                $("#grid").data("kendoGrid").dataSource.read();
                                         }*/
                                },
                                parameterMap: function(options, operation) {
                                    if (operation !== "read" && options.models) {
                                        return {models: kendo.stringify(options.models)};
                                    }
                                }
                            },
                            batch: true,
                            pageSize: 20,
                           schema: {
                                model: {
                                    fields: {
                                        //id:{type:"number"}
                                        title: { type: "string" },
                                        slug: { type: "string" },
                                        text: { type: "string" }
                                    }
                                }
                         
                            }
                        });

                    $("#grid").kendoGrid({
                        dataSource: dataSource,
                        pageable: true,
                        height: 530,
                        toolbar: ["create"],
                        
                              columns: [
                            { field: "title", title: "Title",width: 160},
                            { field: "slug",title: "Slug",width: 160},
                            { field: "text",title: "Text",width: 150},
                             { command: ["edit", "destroy"], title: "&nbsp;", width: "100px" }
                        ],
                        editable: "popup"
                    });
                });
            </script>
            
