/*Slick slider Home*/
$(document).ready(function(){
$('.slider').slick({
arrows: false,
dots: true,
infinite: false,
speed: 300,
slidesToShow: 5,
slidesToScroll: 5,
variableWidth: false,
adaptiveHeight:true,
autoplay: false,
autoplayspeed: 5000,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 3,
slidesToScroll: 3,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 2,
slidesToScroll: 2
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}
]
});
});
/*Slick slider Products*/
$(document).ready(function(){
$('.productslider__big').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: false,
fade: true,
swipe:false,
asNavFor: ".productslider__small"
});
$('.productslider__small').slick({
slidesToShow: 5,
slidesToScroll: 5,
asNavFor: ".productslider__big",
dots: false,
focusOnSelect: true,
adaptiveHeight:true
});
});
