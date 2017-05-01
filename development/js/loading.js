$(document).ready(function () {
    setTimeout(function () {
        $(".loading .loading-anim").fadeIn();
    }, 1000);
});
$( window ).on( "load", function() {
    $(".loading").fadeOut(page_fade, function () {
        $(this).remove();
    });
});