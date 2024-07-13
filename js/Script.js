// JavaScript source code


var carouselwidth = $('#carouselcards2 .carousel-inner')[0].scrollwidth;
var cardwidth = $(' .carousel-item').width();
    var scrollPosition = 0;
    
$('#carouselcards2 .carousel-control-next').on('click', function () {
    
        console.log('next');
    scrollPosition = scrollPosition + cardwidth;
    $('#carouselcards2 .carousel-inner').animate({ scrollLeft: scrollPosition }, 300);

        
});
$('#carouselcards2 .carousel-control-prev').on('click', function () {

    console.log('prev');
    scrollPosition = scrollPosition - cardwidth;
    $('#carouselcards2 .carousel-inner').animate({ scrollLeft: scrollPosition }, 300);


});

