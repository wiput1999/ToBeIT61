$(document).on('click', 'a[href^="#"]', function (event) {
    var direct = $(this).attr('href');
    event.preventDefault();

    var current = window.location.pathname;
    if (current == '/') {
        $('html, body').stop().animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 800, 'swing');
    } else {
        var url = '/' + direct;
        console.log(url);
        window.location.replace(url);
    }


});
