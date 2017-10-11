$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').stop().animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 800, 'swing');
});
