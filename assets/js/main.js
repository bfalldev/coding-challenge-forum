new WOW().init();
// PARALLAX
$('#parallax-1').parallax("50%", 50);
$('#parallax-2').parallax("50%", 50);

// SMOOTH SCROLL
$(".js-smoothScroll").on("click", function (e) {
    let $anchor = $($(this).attr("href"));
    let speed = 1000;

    $("html, body").animate({
        scrollTop: $anchor.offset().top
    }, speed);

    e.preventDefault()
});
