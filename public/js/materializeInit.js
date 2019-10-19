$( document ).ready(function() {
    $(".dropdown-trigger").dropdown();
    $('.collapsible').collapsible();
    $('.modal').modal();

    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true,
    });
});

function initCarouselBtn(key) {
    $( document ).ready(function() {
        console.log(key);
        let car = $(`#car-${key}`);
        console.log(car);
        let instance = M.Carousel.getInstance(car);
        $('.prev').click( () => {
            instance.prev();
        });
        $('.next').click( () => {
            instance.next();
        })
    })
}
