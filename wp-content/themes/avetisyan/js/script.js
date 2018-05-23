jQuery(document).ready(function () {
    $(document).on('change',".blogCategorySelect",function () {
        $('.blogForm').submit();
    });
});

//
$(document).ready(function () {
    $('.login-trigger').click(function () {
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
        else $(this).find('span').html('&#x25BC;')
    })
});

//
$(document).ready(function () {
    $(window).scroll( function(){
        var height = $(window).scrollTop();
        if(height  > 1000) {
            $('.footer-sticky').addClass('sticky');
            $('body').addClass('body-padding');
        } else {
            $('.footer-sticky').removeClass('sticky');
            $('body').removeClass('body-padding');
        }
    });
});

//
/* <![CDATA[ */
var scrollBackToTop = {"scrollDuration":"500","fadeDuration":"0.5"};
/* ]]> */
