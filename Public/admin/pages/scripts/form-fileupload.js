var FormFileUpload = function () {


  return {
    //main function to initiate the module
    init: function () {

      // Initialize the jQuery File Upload widget:
      $('#form').fileupload({
        disableImageResize: false,
        autoUpload: false,
        disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
        maxFileSize: 5000000,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true}
      });

      // Enable iframe cross-domain access via redirect option:
      $('#form').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
          /\/[^\/]*$/,
          '/cors/result.html?%s'
        )
      );

      // Upload server status check for browsers with CORS support:
      if ($.support.cors) {
        $.ajax({
          type: 'HEAD',
          url: $('#form').attr("action")
        }).fail(function () {
          $('<div class="alert alert-danger"/>')
            .text('Upload server currently unavailable - ' +
            new Date())
            .appendTo('#form');
        });
      }

      // Load & display existing files:
      $('#form').addClass('fileupload-processing');
      $.ajax({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: $('#form').attr("action"),
        dataType: 'json',
        context: $('#form')[0]
      }).always(function () {
        $(this).removeClass('fileupload-processing');
      }).done(function (result) {
        $(this).fileupload('option', 'done')
          .call(this, $.Event('done'), {result: result});
      });
    }

  };

}();