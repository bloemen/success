$(function() {
    $(".tab li").click(function() {
        var num = $(".tab li").index(this);
        $(".tabContent").removeClass('active');
        $(".tabContent").eq(num).addClass('active');
        $(".tab li").removeClass('active');
        $(this).addClass('active')
    });
});

$(function() {
    $(".tab_sns li").click(function() {
        var num = $(".tab_sns li").index(this);
        $(".tabsnsContent").removeClass('active');
        $(".tabsnsContent").eq(num).addClass('active');
        $(".tab_sns li").removeClass('active');
        $(this).addClass('active')
    });
});