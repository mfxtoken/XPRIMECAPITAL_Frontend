
/* Head Home Slider */
$('.headsliderowl').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    items: 1,
    margin: 30,
    autoWidth: false,
    mouseDrag: false,
    responsiveClass: true,
    responsive:{
        0:{},
        819:{},
        1059:{},
        1379:{},
        1619:{},
        1939:{}
    }
});
/* Head Home Slider */

/* Research News Category List Owl Carousel */
$('.researchnewscatlistowl').owlCarousel({
    loop:true,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    items:4,
    autoWidth:false,
    mouseDrag:true,
    animateIn: 'fadeInLeft',
    animateOut: 'fadeOutRight',
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            margin:0
        },
        819:{
            items:2,
            margin:20
        },
        1059:{
            items:3,
            margin:20
        },
        1379:{
            items:3,
            margin:25
        },
        1619:{
            items:4,
            margin:30
        },
        1939:{
            margin:30
        }
    }
});
/* Research News Category List Owl Carousel */