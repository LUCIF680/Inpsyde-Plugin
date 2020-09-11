
(function ($) {
    "use strict";;
    $('.row').click(function(){
        console.log();
        $.ajax({     
            type: "GET",
            url: 'https://my-json-server.typicode.com/lucif680/Motaku/users/'+this.id,
            success: function (data) {
                document.getElementById('id').innerHTML = data.id;
                document.getElementById('name').innerText = data.name;
                document.getElementById('username').innerText = data.username;
                document.getElementById('blog').innerText = data.blog;
            },
        });    
    })
    

})(jQuery);