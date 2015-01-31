;jQuery(function($){
    $('.smartItems').accordion({
        heightStyle: 'content',
        collapsible: true
    });

    $(".smart_all_accordion ul.faq-labels li a, .faq-cat-title span a").click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $("#" + href.split('#')[1]).offset().top - 50
        }, 500);
        return false;
    });

});