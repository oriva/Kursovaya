jQuery('ul.nav > li').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(1).fadeIn();
}, function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(250).fadeOut();
})