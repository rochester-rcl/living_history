// NAVIGATION TRANISTION
// --------------------------------------------


(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 34){
        $('.navbar').addClass("fixed"); // Navbar moves to position:fixed
        $('.cover').addClass("jump"); // Spacer
        $('.scroll-hint').addClass("test");
    }
    else{
        $('.navbar').removeClass("fixed");
        $('.cover').removeClass("jump");
        $('.scroll-hint').removeClass("test");
    }
});
})(jQuery);


(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 100){
        $('.scroll-hint').addClass("gone");
    }
    else{
        $('.scroll-hint').removeClass("gone");
    }
});
})(jQuery);
