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

/* Header Navigation Navbar */
$('.headnavigation-navmenu .dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
    });
    return false;
});
/* Header Navigation Navbar */