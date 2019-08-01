$(document).ready(function () {
    $('.multiple').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows : false,
        zIndex : 1
    });

});


$(document).ready(function () {
    $('.carousel-list').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows : false,
    });
});

$(document).ready(function () {
    $('.responsive').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows : false,
    });
});


var res = $(".mini-menu");
$(".knop").on("click", funk);

$(document).click(function(e) {
    if ($(e.target).closest(res).length || $(e.target).closest('.knop').length) return;
    res.fadeOut(100);
    e.stopPropagation();
});



function funk(){
    if(res.css("display") == "none"){
        res.fadeIn(100);
    }
    else{
        res.fadeOut(100);
    }
}

$('.close').click(function() {
    $(".mini-menu").css("display", "none");
});