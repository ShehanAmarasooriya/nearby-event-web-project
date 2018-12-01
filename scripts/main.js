sal({
    threshold: 0.5,
    once: true,
});

$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        var $hero = $(".hero");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $hero.height()*0.6);
    });
});

$("#btndim").click(function() {
    $("#dimmer").css({
        display: 'block',
        'z-index': 1
    }).animate({
        opacity: 0.92
    }, 500);
});

$("#btnclose").click(function() {
    $("#dimmer").css('display', 'none').animate({
        opacity: 0,
    }, 500);
});