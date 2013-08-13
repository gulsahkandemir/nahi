/*global require*/
'use strict';

// Require.js allows us to configure shortcut alias
require.config({
    // The shim config allows us to configure dependencies for
    // scripts that do not call define() to register a module
    shim: {
        underscore: {
            exports: '_'
        },
        bootstrap: {
            deps: ['jquery']
        },
        'jquery-ui': {
            deps: ['jquery']
        },
        handlebars: {
            exports: 'Handlebars'
        }
    },
    paths: {
        bootstrap: '../vendor/bootstrap/docs/assets/js/bootstrap',
        handlebars: '../vendor/handlebars/handlebars',
        jquery: '../vendor/jquery/jquery',
        'jquery-ui': '../vendor/jquery-ui/ui/jquery-ui',
        underscore: '../vendor/underscore/underscore',
        'requirejs-text': '../vendor/requirejs-text/text'
    }
});

require([
    'nh.package.libs', // exports Handlebars, $, _
    'nh.initialize'
], function (Libs) {
    var $ = Libs.$, Handlebars = Libs.Handlebars, _ = Libs._;

    $(document).ready(function($, undefined){
        $(document).nh_initialize();
    });
});