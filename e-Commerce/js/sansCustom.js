$(document).ready(function() {
    $("div.sidebar-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        	$(this).siblings('a.active').removeClass("active");
        	$(this).addClass("active");
        var index = $(this).index();
        	$("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        	$("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});



$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function() {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('#back-to-top').tooltip('show');

});
