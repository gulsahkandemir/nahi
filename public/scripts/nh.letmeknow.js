define([
    'nh.package.libs',
    'nh.api',
    'text!templates/alert-div.html'
], function(Libs, NH, alertDivHtml) {
    var Handlebars = Libs.Handlebars, $ = Libs.$, _ = Libs._;

    'use strict'; // enable ECMAScript 5 strict mode
    $.widget('nh.nh_letmeknow', {
        options: {

        },
        eles: {
            emailTxt: null,
            submitBtn: null
        },
        templates: {
            alertDiv: null
        },
        _create: function() {
            $.extend(this.options, this.element.data());

            this.eles.form = this.element.find('.js-form');
            this.eles.emailTxt = this.element.find('.js-email-txt');

            this.eles.form.submit($.proxy(this._onSubmit, this));

            this.templates.alertDiv = Handlebars.compile(alertDivHtml);
        },
        _onSubmit: function(event) {
            event.preventDefault();
            var emailTxt = this.eles.emailTxt.val();
            var timezoneOffset = new Date().getTimezoneOffset();

            NH.Api.call('emails', {
                type: "POST",
                data:{
                    email: emailTxt,
                    timezoneOffset: timezoneOffset
                },
                success: $.proxy(this._onSuccess, this),
                error: $.proxy(this._onError, this)
            });
        },
        _onSuccess: function(data) {
            var alertDiv = this.templates.alertDiv({
                type: 'success',
                html: "Thanks! We will notify you when we go live."
            });
            this.eles.emailTxt.val('');
            this.element.find('.js-alert-div').remove();
            this.element.append(alertDiv);
        },
        _onError: function(data) {
            var message = data.responseJSON.error.message ?
                data.responseJSON.error.message :
                // Default error object
                {form: 'An error occured. Please try again.'};

            // Flatten error object to an html
            var messageHtml = $.map(message, function(key, value) { return [key]; }).join('<br/>');

            var alertDiv = this.templates.alertDiv({
                type: 'error',
                html: messageHtml
            });
            this.element.find('.js-alert-div').remove();
            this.element.append(alertDiv);
        }
    });
});