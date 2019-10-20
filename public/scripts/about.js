$(window).scroll(function () {
    var y = $(window).scrollTop(),
        x = $('.seg-left').offset().top - 200;
    if (y > x) {
        $('.seg-left').addClass('fadeInUp').removeClass('fadeOutDown');
    } else {
        $('.seg-left').removeClass('fadeInUp').addClass('fadeOutDown');
    }
});
