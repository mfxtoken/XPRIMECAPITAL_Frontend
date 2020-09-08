/* Header Web Navbar Fixed */
jQuery(function($) {
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