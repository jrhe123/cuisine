var Login = function () {
    var handleLogin = function () {
        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                name: {
                    required: true,
                    regex: /^[a-z0-9_]/,
                    rangelength: [5, 10]
                },
                password: {
                    required: true,
                    regex: /^[a-z0-9_]/,
                    rangelength: [5, 12]
                },
                remember: {
                    required: false
                }
            },

            messages: {
                name: {
                    required: "请输入登录账号",
                    regex: "账号只能包含数字、字母和下划线",
                    rangelength: "账号的长度必须在{0}-{1}之间"
                },
                password: {
                    required: "请输入登录密码",
                    regex: "密码只能包含数字、字母和下划线",
                    rangelength: "密码的长度必须在{0}-{1}之间"
                }
            },

            invalidHandler: function (event, validator) { //display error alert on form submit

            },

            highlight: function (element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function (form) {
                login();
                return false;
            }
        });

        $('.login-form input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    login();
                }
                return false;
            }
        });
    }

    return {
        //main function to initiate the module
        init: function () {
            handleLogin();
        }
    };
}();