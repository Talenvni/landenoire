// ------------
// Display info
// ------------
(function () {
    $(".display-info").click(function () {
        $(".content-info").slideUp(200);
        if ($(this).hasClass("active")) {
            $(".display-info").removeClass("active");
            $(this).removeClass("active");
        } else {
            $(".display-info").removeClass("active");
            $(this).children(".content-info").slideDown(200);
            $(this).addClass("active");
        }

    });
})(); // End Display info

// -------------
// Scroll to Top
// -------------
(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('#scrollToTop').fadeIn(200);
        }
        if ($(this).scrollTop() < 200) {
            $('#scrollToTop').fadeOut(200);
        }
    });
    // Smooth
    $('#scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0});
    });
})(); // End Scroll to Top

// ------------
// Messageflash
// ------------
(function () {
    setTimeout(function () {
        $('#flash-container')
            .removeClass('slideInUp')
            .addClass('slideOutDown');
    }, 3000);
})(); // End Message flash
