$(window)
    .on('load', function() { //Load
        console.log('in')

        // Animation on Page Loading
        $(".preloader").fadeOut("slow");

        // initializing page transition.
        var ptPage = $('.subpages');
        if (ptPage[0]) {
            PageTransitions.init({
                menu: 'ul.site-main-menu',
            });
        }

        // Custom Subpage Scroll
        $(".pt-page").mCustomScrollbar({
            scrollInertia: 80
        });

        // Custom Header Scroll
        $("#site_header").mCustomScrollbar({
            scrollInertia: 80
        });

    })
    .on('resize', function() { //Resize
        mobileMenuHide();
    });
