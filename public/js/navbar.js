$('a[href^="#"]').on('click', function(event) {
    var target = $($(this).attr('href'));
    if (target.length) {
        event.preventDefault();
        $('.landing-page-container').stop().animate({
            scrollTop: target.offset().top - $('.landing-page-container').offset().top + $('.landing-page-container').scrollTop() - 56
        }, 1);
    }
});
