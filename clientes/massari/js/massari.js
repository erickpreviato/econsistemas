$(document).ready(function () {

    function ajustar() {
        var topo = $('.navbar').height(); // altura do topo
        var scrollTop = $(window).scrollTop(); // qto foi rolado a barra
        
        if (scrollTop > (topo + 10)) {
            $('.logotipo').css('height', '60px');
            $('main').css('top', '60px');
            $('footer').css('top', '60px');
        } else {
            $('.logotipo').css('height', '100px');
            $('main').css('top', '100px');
            $('footer').css('top', '100px');
        }
    }
    
    $(window).scroll(function() {
        ajustar();
    });
    $(window).resize(function() {
        ajustar();
    });
    
    ajustar();
    
    $('.lista-produtos div.card').on({'mouseover': function() {
        $(this).find('.card-body').css('display', 'block');
    }, 'mouseout': function(){
        $(this).find('.card-body').css('display', 'none');
    }});

    $("#img1").elevateZoom();
    $(".img-zoom").elevateZoom({zoomWindowPosition: 13});
});