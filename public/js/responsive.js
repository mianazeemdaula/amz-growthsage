$(window).scroll(function () {
    // this will work when your window scrolled.
    var height = $(window).scrollTop(); //getting the scrolling height of window
    if (height > 5) {
        $("header").addClass("scrolled");
    } else {
        $("header").removeClass("scrolled");
    }
});

function toggleSidebar() {
    $("#sidebar").toggleClass("mobile");
}
