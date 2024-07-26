
$('.heroSlider').slick({
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,

});

document.querySelector('.goDownBtn').addEventListener('click', function () {
    document.querySelector('.scrollDownSection').scrollIntoView({ behavior: 'smooth' });
});