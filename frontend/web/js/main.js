/**
 * Created by huochai on 2016/9/28.
 */



function animateElements() {
    $('header h1').removeClass('animated');
    $('header h2').removeClass('animated');
    $('header .button').removeClass('animated');
    setTimeout(function () {
        $('header .papers').addClass('animated');
    }, 1000)
}

$(document).ready(function () {

    animateElements();

    // Trigger: Signup Modal
    $('.signup').on('click', function (e) {
        $('#signup').modal('show');
    });

    $(window).scroll(function () {
        if (location.pathname == '/') {

            if ($(window).scrollTop() > 30) {
                $('#top').addClass('solid');
            } else {
                $('#top').removeClass('solid');
            }
        }
    });

    // Smooth Scroll
    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

            var target = $(this.hash);
            // document.location.hash = target.selector;
            history.pushState({}, '', target.selector);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (target.length) {

                $('html,body').animate({
                    scrollTop: target.offset().top - 90
                }, 600);

                return false;
            }
        }
    });
});