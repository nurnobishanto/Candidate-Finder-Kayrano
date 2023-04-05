function General() {

    "use strict";

    var self = this;

    this.initiCheck = function () {
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass   : 'iradio_minimal-blue'
        });
    };

    this.initiCheckLogin = function () {
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass   : 'iradio_minimal-blue'
        });
    };

    this.initCKEditor = function (element) {
        element = element == '' ? 'description' : element;
        var elementExist = document.getElementById(element);
        if (elementExist) {
            CKEDITOR.replace(element, {
                allowedContent : true,
                filebrowserUploadUrl: application.url+'/ckeditor/image?CKEditorFuncNum=1&_token='+application._token,
                filebrowserUploadMethod: 'form',
            });
        }
    };

    this.initSettings = function () {
        self.initiCheck();
        $('.dropify').dropify();
        $('[data-toggle="tooltip"]').tooltip()
    };

    this.initSidebarToggle = function () {
        $('.sidebar-toggle').on('click', function () {
            application.load('/employer/sidebar-toggle', '', function (result) {});
        });
        $('.prevent-sidebar-toggle').on('click', function (e) {
            e.preventDefault();
            window.location = application.url+'/employer/memberships';
        });
    }

}

$(document).ready(function() {
    var general = new General();
    general.initSidebarToggle();
    general.initSettings();
    general.initiCheckLogin();
    general.initCKEditor('before-how');
    general.initCKEditor('after-how');
    general.initCKEditor('before-news');
    general.initCKEditor('after-news');
    general.initCKEditor('banner-text');

});
