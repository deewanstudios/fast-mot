$(document).ready(function(){
    //Init jQuery Masonry layout
    init_masonry();

});


function init_masonry(){
    var $container = $('#feedbacksection');

    $container.imagesLoaded( function(){
        $container.masonry({
          itemSelector: '.box',
          isAnimated: true,
          percentPosition: true,
        });
    });
}