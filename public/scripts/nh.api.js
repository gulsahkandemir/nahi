define([
    'nh.package.libs'
], function(Libs) {
    var Handlebars = Libs.Handlebars, $ = Libs.$, _ = Libs._;

    NH.Api = {
        version : 'v1',
        url: NH.Config.baseUrl,

        call: function(url, params) {
            return $.ajax(
                $.extend({
                    url: this.url + '/api/' + this.version + "/" + url,
                    dataType: "json"
                }, params));
        }
    };

    return NH;
});