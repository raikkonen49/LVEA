$(document).foundation();

$(document).ready(function() {

    $(".fancybox").fancybox({
        helpers: {
            overlay: {
                locked:false
            }
        },
        beforeShow: function(){
          $(".fancybox-skin").css("backgroundColor","transparent");
          $(".fancybox-skin").css("padding","0px");
        }
    });

    $(".various").fancybox({
        maxWidth    : 800,
        maxHeight   : 450,
        fitToView   : false,
        width       : '90%',
        height      : '90%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none',
        helpers: {
            overlay: {
                locked:false
            }
        },
        beforeShow: function(){
          $(".fancybox-skin").css("backgroundColor","transparent");
          $(".fancybox-skin").css("padding","0px");
        }
    });

    // popups

    $(".trigger").click(function() {
            $(".top-nav ul").toggleClass("close");
            $(".trigger").toggleClass("close");
    });

    $(".trigger-nav").click(function() {
            $(".top-nav ul li ul").toggleClass("close");
            $(".trigger-nav").toggleClass("close");
    });

    $("#menu-nav-secondary > li").hover(function() {
        $(this).find('ul.sub-menu').slideDown(200);
    });

    $("#menu-nav-secondary > li").mouseleave(function() {
        $(this).find('ul.sub-menu').slideUp(200);
    });




    // #ScrollToTop

    // $("a[href='#top']").click(function() {
    //   $("html, body").animate({ scrollTop: 0 }, "slow");
    //   return false;
    // });


    // #href scroll //

    // $('a[href^="#"]').on('click',function (e) {
    //     e.preventDefault();

    //     var target = this.hash;
    //     var $target = $(target);

    //     $('html, body').stop().animate({
    //         'scrollTop': $target.offset().top
    //     }, 700, 'swing', function () {
    //         window.location.hash = target;
    //     });
    // });



 });
