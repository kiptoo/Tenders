
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
                    <!--kendo Ui-->
                      <div id="example" class="k-content">
                    <div id="grid">    
                        
                    </div>
            
                  </div>
                     
      
           
        </div>
</div>    
</div>
<!-- END PAGE -->

 <script>
                $(document).ready(function () {
                    var crudServiceBaseUrl = "http://localhost/Tenders_CI/index.php/admin/users"
                        dataSource = new kendo.data.DataSource({
                            transport: {
                                read:  {
                                   // url:+crudServiceBaseUrl + "/users_get",
                                    url:"http://localhost/Tenders_CI/index.php/admin/users/users_get",
                                    dataType: "json"
                                },
                                update: {
                                  url:+crudServiceBaseUrl + "/users_update",
                                    dataType: "json"
                                },
                                destroy: {
                                    url: crudServiceBaseUrl + "/users_delete",
                                    dataType: "json"
                                },
                                create: {
                                     url: crudServiceBaseUrl + "/users_create",
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
                                      //  user_id:{type:"number"},
                                        first_name: { type: "string" },
                                        last_name: { type: "string" },
                                        phone: { type: "string" },
                                       idno: { type: "string" },
                                        email: { type: "string" },
                                       active: { type: "boolean" },
                                       createdate: { type: "date" }
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
                          //  { field: "user_id", title: "user_id",width: 60},
                            { field: "first_name",title: "first_name",width:60},
                            { field: "last_name",title: " last_name",width: 50},
                            { field: "phone",title: "phone",width: 50},
                            { field: "idno",title: "idno",width: 50},
                            { field: "email",title: "email",width: 50},
                            { field: "active",title: "active",width: 50},
                             { field: "createdate",title: "createdate",width: 50},
                             { command: ["edit","create"], title: "&nbsp;", width: "100px" }
                        ],
                        editable: "popup"
                    });
                });
            </script>
            
