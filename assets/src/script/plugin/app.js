/* Header Web Navbar Fixed */
$(document).ready(function() {
    if($(window).width() > 1059){

        $(window).on("load resize scroll",function(e){

            var scroll  = $(window).scrollTop();
            var body    = $("body");
            var header  = $("header.header");

            if (scroll > (header.height() / 3)) {
                header.addClass("headscroll");
                body.addClass("bodyscroll");
            } else {
                header.removeClass("headscroll");
                body.removeClass("bodyscroll");
            }

        });
    }
});
/* Header Web Navbar Fixed */

/* Daphne Mobile Menu */
$(document).ready(function() {

    $("body").addClass('daphne-navbody');

    $('.daphne-mobile').click(function () {
        $('.daphne-navbody').toggleClass('daphne-overlay');
    });

});
/* Daphne Mobile Menu */

/* Tooltip */
$(function(){
    $('[data-toggle="tooltip"]').tooltip()
});
/* Tooltip */

/* Popovers */
$(function () {
    $('[data-toggle="popover"]').popover()
});
/* Popovers */