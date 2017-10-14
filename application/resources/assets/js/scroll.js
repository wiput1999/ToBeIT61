// $(document).on('click', 'a[href^="#"]', function (event) {
//     var direct = $(this).attr('href');
//     event.preventDefault();
//
//     var current = window.location.pathname;
//     if (current == '/' || current == '/2017') {
//         $('html, body').stop().animate({
//             scrollTop: $($.attr(this, 'href')).offset().top
//         }, 800, 'swing');
//     } else {
//         var url = '/' + direct;
//         // console.log(url);
//         window.location.replace(url);
//     }
// });

$(function() {
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {


        var base = document.location.origin;
        var current = window.location.pathname.replace(/^\//, '');

        if (current != '') {
            // console.log(base + window.location.hash.substr(1));
            window.location.replace(base + '#' + window.location.hash.substr(1));
        }

        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
});
