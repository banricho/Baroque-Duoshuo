var duoshuoQuery = {short_name:"你的多说ID"};
    (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = 'http://static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] 
        || document.getElementsByTagName('body')[0]).appendChild(ds);
    })();
    
$(function(){   
    $(window).scroll(function () {
        if($(window).scrollTop() >= 200)
        {
        $('#totop').fadeIn("slow");
        }else
        {
        $('#totop').fadeOut("slow");
        }
    });
    $('#totop').click(function(){
        $('body,html').animate({scrollTop:0},200)
    });
});