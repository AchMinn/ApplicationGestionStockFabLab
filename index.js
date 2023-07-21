// Initalize page
setup();

function setup() {
    $('.menu__item').first().addClass('menu__item--current')
    $('.header__avatar').addClass('drop');
};

// Menu fx on click 
$('.menu__link').click( function() {
    
    // Menu button current selection
    $('.menu__item').removeClass('menu__item--current');
    $(this).parent().addClass('menu__item--current');

}); 
