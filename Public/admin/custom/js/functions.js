/**
 * Created by jing on 2015/3/12.
 */
/**
 * AJAX DataTable JS
 * @type {Datatable}
 */
function ajaxDataTableJs(id, url, order, columns, pageSize) {
    if (!pageSize) {
        pageSize = 30;
    }
    var grid = new Datatable();
    grid.init({
        src: $("#" + id),
        onSuccess: function (grid) {
            // execute some code after table records loaded
        },
        onError: function (grid) {
            // execute some code on network or other general error
        },
        loadingMessage: 'Loading...',
        dataTable: {  // here you can define a typical datatable settings from http://datatables.net/usage/options
            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets / global / scripts / datatable.js).
            // So when dropdowns used the scrollable div should be removed.
            "dom": "<'row'<'col-md-6 col-sm-12 text-left'l><'col-md-6 col-sm-12'f>r>t<'row'<'col-md-5 col-sm-12 text-left'i><'col-md-7 col-sm-12 text-right'p>>",
            "bStateSave": false, // save datatable state(pagination, sort, etc) in cookie.
            "language": { // 语言
                "aria": {
                    "sortAscending": ": 升序",
                    "sortDescending": ": 降序"
                },
                "emptyTable": "没有找到数据",
                "info": "当前显示的是第 _START_ 条到 _END_ 条数据/共有 _TOTAL_ 条数据",
                "infoEmpty": "",
                "infoFiltered": "",
                "lengthMenu": "每页显示 _MENU_ 条数据",
                "search": "搜索:",
                "zeroRecords": "没有找到数据",
                paginate: {
                    first: "第一页",
                    previous: "上一页",
                    next: "下一页",
                    last: "最后一页",
                    page: "当前第 ",
                    pageOf: " 页，总页数"
                }
            },
            "lengthMenu": [
                [10, 30, 50, 100, 150, -1],
                [10, 30, 50, 100, 150, "All"] // change per page values here
            ],
            "pageLength": pageSize, // default record count per page
            "ajax": {
                "url": url // ajax source
            },
            "columns": columns,

            "order": order // set first column as a default sort by asc
        }
    });
    return grid;
}

/**
 * AJAX DataTable JS 没有搜索框
 * @type {Datatable}
 */
function ajaxDataTableJsNoSearch(id, url, order, columns) {
    var grid = new Datatable();
    grid.init({
        src: $("#" + id),
        onSuccess: function (grid) {
            // execute some code after table records loaded
        },
        onError: function (grid) {
            // execute some code on network or other general error
        },
        loadingMessage: 'Loading...',
        dataTable: {  // here you can define a typical datatable settings from http://datatables.net/usage/options
            // Uncomment below line("dom" parameter) to fix the dropdown overflow issue in the datatable cells. The default datatable layout
            // setup uses scrollable div(table-scrollable) with overflow:auto to enable vertical scroll(see: assets / global / scripts / datatable.js).
            // So when dropdowns used the scrollable div should be removed.
            "dom": "<'row'<'col-md-6 col-sm-12 text-left'l><'col-md-6 col-sm-12'>r>t<'row'<'col-md-5 col-sm-12 text-left'i><'col-md-7 col-sm-12 text-right'p>>",
            "bStateSave": false, // save datatable state(pagination, sort, etc) in cookie.
            "language": { // 语言
                "aria": {
                    "sortAscending": ": 升序",
                    "sortDescending": ": 降序"
                },
                "emptyTable": "没有找到数据",
                "info": "当前显示的是第 _START_ 条到 _END_ 条数据/共有 _TOTAL_ 条数据",
                "infoEmpty": "",
                "infoFiltered": "",
                "lengthMenu": "每页显示 _MENU_ 条数据",
                "search": "搜索:",
                "zeroRecords": "没有找到数据",
                paginate: {
                    first: "第一页",
                    previous: "上一页",
                    next: "下一页",
                    last: "最后一页",
                    page: "当前第 ",
                    pageOf: " 页，总页数"
                }
            },
            "lengthMenu": [
                [10, 20, 50, 100, 150, -1],
                [10, 20, 50, 100, 150, "All"] // change per page values here
            ],
            "pageLength": 10, // default record count per page
            "ajax": {
                "url": url // ajax source
            },
            "columns": columns,

            "order": order // set first column as a default sort by asc
        }
    });
    return grid;
}

// 提示信息
function toastMsg(type, msg, title) {
    Command: toastr[type](msg, title)
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-top-right",
        "onclick": null,
        "showDuration": "500",
        "hideDuration": "500",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
}

// 检查ajax数据返回
function checkAjaxReturn(data) {
    if (data.code == 200) {
        toastMsg("success", data.msg, "提示信息");
        return true;
    }
    toastMsg("error", data.msg, "提示信息");
    // 检查权限
    if(data.code == 400) {
        return false;
    } else if (data.code == 401) {
        window.location.href = '/Admin/Login/';
        return false;
    } else if (data.code == 500) {
        return false;
    }
}

function showBlockUI(el, msg) {
    if (!msg) {
        msg = '处理中。。。';
    }
    if (!el) {
        Metronic.blockUI({target: el, boxed: true, message: msg});
    } else {
        Metronic.blockUI({boxed: true, message: msg});
    }
}

function closeBlockUI(el) {
    if (!el) {
        Metronic.unblockUI(el);
    } else {
        Metronic.unblockUI();
    }
}