

function hiddenNavShow() {
    var hidden_header_right = $(".hidden-header-right");
    hidden_header_right.toggleClass("active");
}

function resize() {
    var ww = document.body.clientWidth;
    if (ww >750) {
      $('.hidden-header-right').removeClass('active');
    }
}

function init() {
    var menu = $("div.hamburger-menù");
    menu.click(hiddenNavShow);

    $(window).resize(resize);


}

$(document).ready(init);