
/* Open Account Wrapper */
$(document).ready(function() {

    $(".JsWelcomeBtn").on("click", function(){
        if ( $(this).attr("data-function") === "openliveaccount" ){
            $(".openaccount-wrapper").removeClass('opendemoacc').addClass('openliveacc');
        }
        if ( $(this).attr("data-function") === "opendemoaccount" ){
            $(".openaccount-wrapper").removeClass('openliveacc').addClass('opendemoacc');
        }
    });

});
/* Open Account Wrapper */


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

/* Sticky Tickers */
$(document).ready(function() {
    var footsticyticker = $('.stickyside-ticker');
    var footer          = $('.footer');
    footer.css("padding-bottom", footsticyticker.height() + "px");
});
/* Sticky Tickers */

$('.stickytickersowl').owlCarousel({
    loop:true,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    items:8,
    margin:0,
    autoWidth:false,
    mouseDrag:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            mouseDrag:true
        },
        619:{
            items:2,
            mouseDrag:true
        },
        819:{
            items:4,
            mouseDrag:true
        },
        1059:{
            items:4
        },
        1379:{
            items:6
        },
        1939:{}
    }
});
/* Sticky Tickers */

/* Home News Category List Owl Carousel */
$('.homenewsnewscatlistowl').owlCarousel({
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
            items:4,
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
/* Home News Category List Owl Carousel */

/* Account Types Box */
$('.accounttypesboxowlx').owlCarousel({
    loop:false,
    nav:false,
    dots:false,
    autoplay:false,
    autoplayTimeout:2000,
    autoplayHoverPause:false,
    items:5,
    margin:0,
    autoWidth:false,
    mouseDrag:false,
    responsiveClass:true,
    responsive:{
        0:{},
        819:{
            items:2,
            mouseDrag:true,
            dots:true
        },
        1059:{},
        1379:{},
        1939:{}
    }
});
/* Account Types Box */