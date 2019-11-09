$( document ).ready(function() {
    $(".dropdown-trigger").dropdown();
    $('.collapsible').collapsible();
    $('.modal').modal();

    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true,
    });

    $('select').formSelect();

    initRange(0, 1000);

    M.updateTextFields();
});

function initCarouselBtn(key) {
    $( document ).ready(function() {
        let car = $(`#car-${key}`);
        let instance = M.Carousel.getInstance(car);
        $('.prev').click( () => {
            instance.prev();
        });
        $('.next').click( () => {
            instance.next();
        })
    })
}

function initRange(min, max, key = "range-slider") {
    var slider = document.getElementById(key);

    noUiSlider.create(slider, {
        start: [0.2*max, 0.8*max],
        connect: true,
        step: 1,
        orientation: 'horizontal',
        range: {
            'min': min,
            'max': max
        },
        format: wNumb({
            thousand: ' ',
            decimals: 0,
            suffix: '$'
        })
    });

    var nodes = [
        document.getElementById('lower-value'),
        document.getElementById('upper-value')
    ];

    slider.noUiSlider.on('update', function (values, handle, unencoded, isTap, positions) {
        nodes[handle].innerHTML = values[handle];
    });
}
