$( document ).ready(function() {
    $(".dropdown-trigger").dropdown();
    $('.collapsible').collapsible();
    $('.modal').modal();

    let car = $('.carousel.carousel-slider');
    console.log(car);
    car.carousel({
        fullWidth: true,
        indicators: true,
    });
    let instance = M.Carousel.getInstance(car);
    $('.prev').click( () => {
        instance.prev();
    });
    $('.next').click( () => {
        instance.next();
    })
});
