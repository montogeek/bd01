$(function() {
    var navbar = $('.top-bar').offset().top;
    var sticky = function(){
        var scroll = $(window).scrollTop(); // our current vertical position from the top
        if(scroll > navbar){ 
            $('.top-bar').css({ 'width': '100%', 'top':0, 'left':0 , 'position': 'fixed', 'z-index':99, 'padding-left':'8.125em'});
            $('.logo').css({'opacity':1});
            $('ul.left').css({'margin-left':'0em'});
            $('ul.right').css({'margin-right':'9.375em'});
        }else{
            $('.top-bar').css({ 'position': 'relative','padding-left':'0em'});
            $('.logo').css({'opacity':0});
            $('ul.left').css({'margin-left':'-9.375em'});
            $('ul.right').css({'margin-right':'0em'});
        }   
    };
    sticky();
    $(window).scroll(function() {
        sticky();
    });
});