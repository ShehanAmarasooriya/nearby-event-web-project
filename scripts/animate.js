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

$("#btnlogin").click(function() {
    $("#login-dimmer").css({
        display: 'block',
        'z-index': 1
    }).animate({
        opacity: 0.92
    }, 500);
});

$("#btnclose-login").click(function() {
    $("#login-dimmer").css('display', 'none').animate({
        opacity: 0,
    }, 500);
});

$("#btn-create").click(function() {
    $("#login-dimmer").css('display', 'none').animate({
        opacity: 0,
    }, 500);

    $("#signup-dimmer").css({
        display: 'block',
        'z-index': 1
    }).animate({
        opacity: 0.92
    }, 500);
});

$("#btnclose-signup").click(function() {
    $("#signup-dimmer").css('display', 'none').animate({
        opacity: 0,
    }, 500);
});

$("#btnExisting").click(function() {
    $("#signup-dimmer").css('display', 'none').animate({
        opacity: 0,
    }, 500);

    $("#login-dimmer").css({
        display: 'block',
        'z-index': 1
    }).animate({
        opacity: 0.92
    }, 500);
});