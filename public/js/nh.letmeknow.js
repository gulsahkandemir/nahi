define([
    'nh.package.libs'
], function(Libs) {
    var Handlebars = Libs.Handlebars, $ = Libs.$, _ = Libs._;

    'use strict'; // enable ECMAScript 5 strict mode
    $.widget('nh.nh_letmeknow', {
        options: {
        },
        _create: function() {
            console.log("_create nh.nh_letmeknow");
        }
    });
});