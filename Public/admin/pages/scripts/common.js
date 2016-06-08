/**
 * Created by Administrator on 2014/12/26.
 */
/**
 * AJAX DataTable JS
 * @type {Datatable}
 */
function ajaxDataTableJs(id, url, order, columns) {
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
        [10, 20, 50, 100, 150, 10000],
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

function ajaxDataTableJsNoPages(id, url, columns) {
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
      "dom": "<'row'<'col-md-6 col-sm-12 text-left'><'col-md-6 col-sm-12'>><'row'<'col-md-5 col-sm-12 text-left'><'col-md-7 col-sm-12 text-right'>>",
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
        [10, 20, 50, 100, 150, 10000],
        [10, 20, 50, 100, 150, "All"] // change per page values here
      ],
      "pageLength": 10, // default record count per page
      "ajax": {
        "url": url // ajax source
      },
      "columns": columns,
    }
  });
  return grid;
}

// 处理ajax返回的数据
function handleAjaxReturn(code, msg) {
  if(code == 200) {
    toastMsg('success', msg, '提示信息');
  }else if(code == 400) {
    toastMsg('error', msg, '提示信息');
  }else {
    toastMsg('warning', "未知错误", '提示信息');
  }
  setTimeout('location.reload()', 1000);
}

// 提示信息
function toastMsg(type, msg, title) {
  Command: toastr[type](msg, title)
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "positionClass": "toast-top-right",
    "onclick": null,
    "showDuration": "1000",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
}