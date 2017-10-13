$(window).on('load resize', function(){
    height = $(window).height();
    $('.section').css('min-height', height);


});
var globalCurrent = 1;
function slider(direction) {
    // Count all elem
    var numItems = $('.slider-wrap img').length;
    // Get current img
    var currentItem = $('.slider-wrap img.active');
    if (currentItem.length >= 2) {
        sliderReset();
    }

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
