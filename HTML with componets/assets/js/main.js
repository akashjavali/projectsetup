/* Load Components */

$(function () {
    $("#header").load("header.html");
    $("#nav").load("nav.html");
    $("#footer").load("footer.html");
});



/* Loader */

$(window).on('load', function () {
    setTimeout(function () {
        $('.loader').fadeOut("slow");
    }, 1000);
});
/* Loader Ends */