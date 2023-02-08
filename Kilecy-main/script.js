$(function() {
    var link = $("nav a");
    //click handler
    link.on("click", function() {
        var $this = $(this);
        var page = $this.data("page");

        $("body").removeClass().addClass(page);
        link.removeClass("active");
        $this.addClass("active");
    })
});

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(document).attr('title') == "Climate Change") {

        } else if ($(window).scrollTop() > 50) {
            $('.title_div').css('background', 'rgba(0, 0, 0, 0.7)');
            $('.title_div').css('height', '100');
            $('.title_div').css('font-size', '45px');
            $('.title_div').css('line-height', '100px');
            $('img').css('background', 'rgba(255, 255, 255, 0.7)');
            $('img').css('height', '100');
            $('img').css('width', '100');
        } else {
            $('.title_div').css('background', 'rgba(0, 0, 0, 0.1)');
            $('.title_div').css('height', '150');
            $('.title_div').css('font-size', '65px');
            $('.title_div').css('line-height', '150px');
            $('img').css('background', 'rgba(255, 255, 255, 0.2)');
            $('img').css('height', '150');
            $('img').css('width', '150');
        }
    });
});

$(document).on("scroll", function() {
    var pageTop = $(document).scrollTop();
    var pageBottom = pageTop + $(window).height();
    var tags = $(".tag");

    for (var i = 0; i < tags.length; i++) {
        var tag = tags[i];

        if ($(tag).position().top < pageBottom - 70) {
            $(tag).addClass("visible");
        } else {
            $(tag).removeClass("visible");
        }
    }
});