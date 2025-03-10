$('#main-slider').carousel({
    pause: "false",
});

$(".counter").counterUp({
    delay: 10,
    time: 2000
});


$('#our-work').owlCarousel({
    nav: true,
    loop: true,
    margin: 50,
    autoplay: true,
    navText: ['<img src="images/arrow-left.png" class="img-fluid">', '<img src="images/arrow-right.png" class="img-fluid">'],
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 3,
        }
    }
});
$('.impacts').owlCarousel({
    nav: true,
    loop: true,
    margin: 60,
    autoplay: true,
    navText: ['<img src="images/arrow-left.png" class="img-fluid">', '<img src="images/arrow-right.png" class="img-fluid">'],
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4,
        }
    }
});
$('#awards').owlCarousel({
    nav: true,
    loop: true,
    margin: 50,
    autoplay: true,
    navText: ['<img src="images/arrow-left.png" class="img-fluid">', '<img src="images/arrow-right.png" class="img-fluid">'],
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 2,
        }
    }
});

$('#partner').owlCarousel({
    nav: true,
    loop: true,
    margin: 50,
    autoplay: true,
    navText: ['<img src="images/arrow-left.png" class="img-fluid">', '<img src="images/arrow-right.png" class="img-fluid">'],
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5,
        }
    }
});
$('.blood,.cloth,.food,.training,.blanket,.general').owlCarousel({
    nav: true,
    loop: true,
    autoplay: true,
    navText: ['<img src="images/arrow-left.png" class="img-fluid">', '<img src="images/arrow-right.png" class="img-fluid">'],
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1,
        }
    }
});
$('#events').owlCarousel({
    nav: true,
    loop: true,
    autoplay: true,
    margin: 30,
    navText: ['<img src="images/arrow-left.png" class="img-fluid">', '<img src="images/arrow-right.png" class="img-fluid">'],
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4,
        }
    }
});
$('#testimonial').owlCarousel({
    nav: true,
    loop: true,
    autoplay: true,
    margin: 30,
    navText: ['<img src="images/arrow-left.png" class="img-fluid">', '<img src="images/arrow-right.png" class="img-fluid">'],
    autoplayTimeout: 3000,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1,
        }
    }
});
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    $(".zoom").hover(function() {
            $(this).addClass('transition');
        },
        function() {
            $(this).removeClass('transition');
        });
});

