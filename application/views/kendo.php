<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript">
            
                var mode = "";
        $(document).ready(function () {
            var gridData = [{ Name: "ABC" }, { Name: "XYZ"}];
            var schema = {
                model:
                            {
                                fields:
                                {
                                    Name:
                                    {
                                        validation: { required: true }
                                    }
                                }
                            }
            };
            var toolbar =
            [
                { name: "create", text: "Add" },
                { name: "edit", text: "Edit" },
                { name: "destroy", text: "Delete" },
                { name: "save", text: "Save" },
                { name: "cancel", text: "Cancel" }
            ]
            var columns = [{ field: "Name", title: "Name"}];
            var sortable = true;
            $("#divCodeGrid").kendoGrid({
                dataSource: {
                    data: gridData,
                    autoSync: true,
                    schema: schema
                },
                selectable: "row",
                toolbar: toolbar,
                columns: columns,
                dataBound: onDataBound,
                selectable: "row",
                scrollable: true,
                filterable: false,
                sortable: sortable,
        save: function (e) {
            var grid = $("#divCodeGrid").data("kendoGrid");
            grid.element.find('tbody tr:first').addClass('k-state-selected')
        },
        saveChanges: function (e) {
            ViewMode();
            mode = "Add";
        },
        edit: function (e) {
            if (mode == "Add") { addSelectedRow(); }
            EditMode();
        }
    });


    $("#divCodeGrid .k-grid-toolbar .k-grid-add").on("click", function (e) {
        e.preventDefault();
        mode = "Add";
        addSelectedRow();
    });

    $("#divCodeGrid .k-grid-toolbar .k-grid-edit").on("click", function (e) {
        e.preventDefault();
        mode = "Edit";
        editSelectedRow();
    });

    $("#divCodeGrid .k-grid-toolbar .k-grid-delete").on("click", function (e) {
        e.preventDefault();
        removeSelectedRow();
    });

    $("#divCodeGrid .k-grid-toolbar .k-grid-save-changes").on("click", function (e) {
        e.preventDefault();
        var grid = $("#divCodeGrid").data("kendoGrid");
        grid.saveRow();
        mode = "Add";
        ViewMode();
    });

    $("#divCodeGrid .k-grid-toolbar .k-grid-cancel-changes").on("click", function (e) {
        e.preventDefault();
        var grid = $("#divCodeGrid").data("kendoGrid");
        if (mode == "Add") {
            grid.cancelRow(); 
        }
        else {
            grid.cancelChanges();
            grid.refresh();
        }
        mode = "Add";
        ViewMode();
    });

function onDataBound() {
    ViewMode();
}

function addSelectedRow() {
    var grid = $("#divCodeGrid").data("kendoGrid");
    grid.addRow();
}

function editSelectedRow() {
    var grid = $("#divCodeGrid").data("kendoGrid");
    grid.editRow(grid.select());
}

function removeSelectedRow() {
    var grid = $("#divCodeGrid").data("kendoGrid");
    grid.removeRow(grid.select());
}
function refreshGrid() {
    var grid = $("#divCodeGrid").data("kendoGrid");
    grid.refresh();
}

function EditMode() {
    $("#divCodeGrid .k-grid-toolbar .k-grid-save-changes").show();
    $("#divCodeGrid .k-grid-toolbar .k-grid-cancel-changes").show();
    $("#divCodeGrid .k-grid-toolbar .k-grid-add").hide();
    $("#divCodeGrid .k-grid-toolbar .k-grid-edit").hide();
    $("#divCodeGrid .k-grid-toolbar .k-grid-delete").hide();
}

function ViewMode() {
    var grid = $("#divCodeGrid").data("kendoGrid");
    grid.element.find('tbody tr:first').addClass('k-state-selected')
    $("#divCodeGrid .k-grid-toolbar .k-grid-save-changes").hide();
    $("#divCodeGrid .k-grid-toolbar .k-grid-cancel-changes").hide();
    $("#divCodeGrid .k-grid-toolbar .k-grid-add").show();
    $("#divCodeGrid .k-grid-toolbar .k-grid-edit").show();
    $("#divCodeGrid .k-grid-toolbar .k-grid-delete").show();
}
        });
            </script>
    </head>
    <body>
    
        <div id="divCodeGrid">
    
    </div>
    </body>
</html>
