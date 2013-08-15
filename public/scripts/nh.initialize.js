define([
    'nh.package.libs'
], function(Libs) {
    var Handlebars = Libs.Handlebars, $ = Libs.$, _ = Libs._;

    $.fn.nh_initialize = function() {

        var maps = new Array();
        maps[".nh-letmeknow"] = { mid: "nh.letmeknow", fname: "nh_letmeknow" };
        maps[".bs-popover"] = { mid: "bootstrap", fname: "popover" };

        for(var selector in maps) {
            var elements = $(this).find(selector);
            if(elements.length > 0) {
                var moduleId = maps[selector].mid ;
                var functionName = maps[selector].fname;

                require([moduleId],
                    $.proxy(
                        function(elements, functionName){
                            $(elements).each(function(key, element) {
                                if(typeof $(element).data(functionName) === "undefined") {
                                    $(element)[functionName]();
                                }
                            });
                        },
                        this, elements, functionName)
                );
            }
        }
    };
});