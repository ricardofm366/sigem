(function($){
    $.extend({
        postJSON: function(url, data, callback, type){
            if($.isFunction(data)){
                type = type || callback;
                callback = data;
                data = undefined;
            }
            
            data = JSON.stringify(data);

            return $.ajax({
                type : 'POST',
                url : url,
                data : data,
                contentType : 'application/json; charset=utf-8',
                success: callback
            });
        }
    });

})(jQuery);