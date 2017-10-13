$(window).on('load resize', function(){
    height = $(window).height();
    $('.section').css('min-height', height);

    var buttonClicked = false;
    $('.arrow i:first-child').click(function(e) {
        if (buttonClicked) {
            e.preventDefault();
            return;
        }

        buttonClicked = true;
        slider('prev');

        setTimeout(function() {
            buttonClicked = false;
        }, 900);
    });


    $('.arrow i:last-child').click(function(e) {
        if (buttonClicked) {
            e.preventDefault();
            return;
        }

        buttonClicked = true;
        slider('next');

        setTimeout(function() {
            buttonClicked = false;
        }, 900);
    });

});
var globalCurrent = 1;
function slider(direction) {
    // Count all elem
    var numItems = $('.slider-wrap img').length;
    // Get current img
    var currentItem = $('.slider-wrap img.active');

    if (direction == 'next') {
        globalCurrent += 1;
    } else if (direction == 'prev') {
        globalCurrent -= 1;
    }


    if (globalCurrent < 1) {
        globalCurrent = numItems;
    } else if (globalCurrent > numItems) {
        globalCurrent = 1;
    }

    var currentId = '.slider-wrap #' + currentItem.attr('id');
    var nextId = '.slider-wrap #' + globalCurrent;

    if ($('.slider-wrap img.active').length >= 2) {
        $('.slider-wrap img').removeClass('active');
        $('.slider-wrap img:first-child').addClass('active');
    }

    $(currentId).fadeOut('slow');
    $(currentId).promise().done(function() {
        $(currentId).removeClass('active');
        $(nextId).addClass('active');


        $(nextId).css({
            'display' : 'none',
        });
        $(nextId).fadeIn(400);
    });

}
