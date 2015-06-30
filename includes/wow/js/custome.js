/*
 Slider TEAM
 */
// Only run everything once the page has completely loaded
$(window).load(function () {
    // Set general variables
    // ====================================================================
    var totalWidth = 1020;

    // Total width is calculated by looping through each gallery item and
    // adding up each width and storing that in `totalWidth`
    $(".gallery__item-team").each(function () {
        totalWidth = totalWidth + $(this).outerWidth(true);
    });

    // The maxScrollPosition is the furthest point the items should
    // ever scroll to. We always want the viewport to be full of images.
    var maxScrollPosition = totalWidth - $(".gallery-wrap-team").outerWidth();

    var present = 1;
    // This is the core function that animates to the target item
    // ====================================================================
    function toGalleryItemW($targetItem) {
        // Make sure the target item exists, otherwise do nothing
        var data = $('.gallery__item-team--active > div.content-over').data('name');
        var id = $('.gallery__item-team--active > div.content-over').attr('id');
        present++;

        var num = parseInt(id) + 1 + 1;
        var newPosition = $targetItem.position().left / 410;


        if ($targetItem.length) {

            // The new position is just to the left of the targetItem
            var newPosition = $targetItem.position().left;
            var total = maxScrollPosition - 10;
            //var tn = newPosition / 1020;

            if (newPosition == 0) {
                $('#slide-team-l > .nav-left').addClass('overlay');
            }
            else {
                $('#slide-team-l > .nav-left').removeClass('overlay');
            }

            console.log(newPosition + 'xxx' + total);

            if (newPosition + 1020 > total) {
                $('#slide-team-r > .nav-right').addClass('overlay');
            }
            else {
                $('#slide-team-r > .nav-right').removeClass('overlay');
            }

            // If the new position isn't greater than the maximum width
            if (newPosition <= maxScrollPosition) {

                // Add active class to the target item
                $targetItem.addClass("gallery__item-team--active");

                // Remove the Active class from all other items
                $targetItem.siblings().removeClass("gallery__item-team--active");

                // Animate .gallery element to the correct left position.
                $(".gallery-team").animate({
                    left: -newPosition
                });
            } else {
                // Animate .gallery element to the correct left position.
                $(".gallery-team").animate({
                    left: -maxScrollPosition
                });
            }
            ;
        }
        ;
    }
    ;

    // Basic HTML manipulation
    // ====================================================================
    // Set the gallery width to the totalWidth. This allows all items to
    // be on one line.
    $(".gallery-team").width(totalWidth);

    // Add active class to the first gallery item
    $(".gallery__item-team:first").addClass("gallery__item-team--active");



    // When the prev button is clicked
    // ====================================================================
    $("#slide-team-l").click(function () {
        // Set target item to the item before the active item
        var $targetItem = $(".gallery__item-team--active").prev();
        toGalleryItemW($targetItem);
    });

    // When the next button is clicked
    // ====================================================================
    $("#slide-team-r").click(function () {
        // Set target item to the item after the active item
        var $targetItem = $(".gallery__item-team--active").next();
        toGalleryItemW($targetItem);
    });
});

/*
 Slider ABOUT v2
 */
// Only run everything once the page has completely loaded
$(window).load(function () {
    // Set general variables
    // ====================================================================
    var totalWidth = 1020;

    // Total width is calculated by looping through each gallery item and
    // adding up each width and storing that in `totalWidth`
    $(".gallery__item-about").each(function () {
        totalWidth = totalWidth + $(this).outerWidth(true);
    });

    // The maxScrollPosition is the furthest point the items should
    // ever scroll to. We always want the viewport to be full of images.
    var maxScrollPosition = totalWidth - $(".gallery-wrap-about").outerWidth();

    var present = 1;
    // This is the core function that animates to the target item
    // ====================================================================
    function toGalleryItemW2($targetItem) {
        // Make sure the target item exists, otherwise do nothing
        var data = $('.gallery__item-about--active > div.content-over').data('name');
        var id = $('.gallery__item-about--active > div.content-over').attr('id');
        present++;

        var num = parseInt(id) + 1 + 1;
        var newPosition = $targetItem.position().left / 410;


        if ($targetItem.length) {

            // The new position is just to the left of the targetItem
            var newPosition = $targetItem.position().left;
            var total = maxScrollPosition - 10;
            //var tn = newPosition / 1020;

            if (newPosition == 0) {
                $('#slide-about-l > .nav-left').addClass('overlay');
            }
            else {
                $('#slide-about-l > .nav-left').removeClass('overlay');
            }

            console.log(newPosition + 'xxx' + total);

            if (newPosition + 1020 > total) {
                $('#slide-about-r > .nav-right').addClass('overlay');
            }
            else {
                $('#slide-about-r > .nav-right').removeClass('overlay');
            }

            // If the new position isn't greater than the maximum width
            if (newPosition <= maxScrollPosition) {

                // Add active class to the target item
                $targetItem.addClass("gallery__item-about--active");

                // Remove the Active class from all other items
                $targetItem.siblings().removeClass("gallery__item-about--active");

                // Animate .gallery element to the correct left position.
                $(".gallery-about").animate({
                    left: -newPosition
                });
            } else {
                // Animate .gallery element to the correct left position.
                $(".gallery-about").animate({
                    left: -maxScrollPosition
                });
            }
            ;
        }
        ;
    }
    ;

    // Basic HTML manipulation
    // ====================================================================
    // Set the gallery width to the totalWidth. This allows all items to
    // be on one line.
    $(".gallery-about").width(totalWidth);

    // Add active class to the first gallery item
    $(".gallery__item-about:first").addClass("gallery__item-about--active");



    // When the prev button is clicked
    // ====================================================================
    $("#slide-about-l").click(function () {
        // Set target item to the item before the active item
        var $targetItem = $(".gallery__item-about--active").prev();
        toGalleryItemW2($targetItem);
        $('.gallery__item-about').removeClass('animated bounceInLeft');
        $('.gallery__item-about').removeClass('animated bounceInRight');
        $('.gallery__item-about--active').addClass('animated bounceInLeft');
    });

    // When the next button is clicked
    // ====================================================================
    $("#slide-about-r").click(function () {
        // Set target item to the item after the active item
        var $targetItem = $(".gallery__item-about--active").next();
        toGalleryItemW2($targetItem);
        $('.gallery__item-about').removeClass('animated bounceInLeft');
        $('.gallery__item-about').removeClass('animated bounceInRight');
        $('.gallery__item-about--active').addClass('animated bounceInRight');
    });
});



/* ABOUT */

// Only run everything once the page has completely loaded

//jQuery(function ($) {
//    var windowWidth = $(window).width();
//
//    $(window).resize(function () {
//        if (windowWidth != $(window).width()) {
//            location.reload();
//        }
//
//        var iw = $('body').innerWidth();
//        if (windowWidth != iw) {
//            //location.reload();
//        }
//
//    });
//});




$(window).load(function () {

    // Set general variables
    // ====================================================================
    var totalWidth = 0;
    // Total width is calculated by looping through each gallery item and
    // adding up each width and storing that in `totalWidth`
    $(".gallery__item-one").each(function () {
        totalWidth = totalWidth + $(this).outerWidth(true);
    });

    // The maxScrollPosition is the furthest point the items should
    // ever scroll to. We always want the viewport to be full of images.
    var maxScrollPosition = totalWidth - $(".gallery-wrap-one").outerWidth();

    // This is the core function that animates to the target item
    // ====================================================================
    function toGalleryItem($targetItem) {
        // Make sure the target item exists, otherwise do nothing
        if ($targetItem.length) {

            // The new position is just to the left of the targetItem
            var newPosition = $targetItem.position().left;
            var total = maxScrollPosition;

            if (newPosition == 0) {
                $('#slide-one-l > .nav-left').addClass('overlay');
            }
            else {
                $('#slide-one-l > .nav-left').removeClass('overlay');
            }

            console.log(newPosition + 'xxx' + total);

            if (newPosition + 10 > total) {
                $('#slide-one-r > .nav-right').addClass('overlay');
            }
            else {
                $('#slide-one-r > .nav-right').removeClass('overlay');
            }

            // If the new position isn't greater than the maximum width
            if (newPosition <= maxScrollPosition) {

                // Add active class to the target item
                $targetItem.addClass("gallery__item-one--active");

                // Remove the Active class from all other items
                $targetItem.siblings().removeClass("gallery__item-one--active");

                // Animate .gallery element to the correct left position.
                $(".gallery-one").animate({
                    left: -newPosition
                });
            } else {
                // Animate .gallery element to the correct left position.
                $(".gallery-one").animate({
                    left: -maxScrollPosition
                });

            }
            ;
        }
        ;

    }
    ;



    // Basic HTML manipulation
    // ====================================================================
    // Set the gallery width to the totalWidth. This allows all items to
    // be on one line.
    $(".gallery-one").width(totalWidth);

    // Add active class to the first gallery item
    $(".gallery__item-one:first").addClass("gallery__item-one--active");

    // When the prev button is clicked
    // ====================================================================
    $("#slide-one-l").click(function () {
        // Set target item to the item before the active item
        var $targetItem = $(".gallery__item-one--active").prev();
        toGalleryItem($targetItem);

    });

    // When the next button is clicked
    // ====================================================================
    $("#slide-one-r").click(function () {
        // Set target item to the item after the active item
        var $targetItem = $(".gallery__item-one--active").next();
        toGalleryItem($targetItem);
    });

});


/* CLIENT */

// Only run everything once the page has completely loaded
$(window).load(function () {

    // Set general variables
    // ====================================================================
    var totalWidth = 0;

    // Total width is calculated by looping through each gallery item and
    // adding up each width and storing that in `totalWidth`
    $(".gallery__item-client").each(function () {
        totalWidth = totalWidth + $(this).outerWidth(true);
    });

    // The maxScrollPosition is the furthest point the items should
    // ever scroll to. We always want the viewport to be full of images.
    var maxScrollPosition = totalWidth - $(".gallery-wrap-client").outerWidth();

    // This is the core function that animates to the target item
    // ====================================================================
    function toGalleryItem($targetItem) {
        // Make sure the target item exists, otherwise do nothing
        if ($targetItem.length) {

            // The new position is just to the left of the targetItem
            var newPosition = $targetItem.position().left;
            var total = maxScrollPosition - 10;

            if (newPosition == 0) {
                $('#slide-client-l > .nav-left').addClass('overlay');
            }
            else {
                $('#slide-client-l > .nav-left').removeClass('overlay');
            }
            if (newPosition + 10 > total) {
                $('#slide-client-r > .nav-right').addClass('overlay');
            }
            else {
                $('#slide-client-r > .nav-right').removeClass('overlay');
            }

            // If the new position isn't greater than the maximum width
            if (newPosition <= maxScrollPosition) {

                // Add active class to the target item
                $targetItem.addClass("gallery__item-client--active");

                // Remove the Active class from all other items
                $targetItem.siblings().removeClass("gallery__item-client--active");

                // Animate .gallery element to the correct left position.
                $(".gallery-client").animate({
                    left: -newPosition
                });
            } else {
                // Animate .gallery element to the correct left position.
                $(".gallery-client").animate({
                    left: -maxScrollPosition
                });

            }
            ;
        }
        ;
    }
    ;

    // Basic HTML manipulation
    // ====================================================================
    // Set the gallery width to the totalWidth. This allows all items to
    // be on one line.
    $(".gallery-client").width(totalWidth);

    // Add active class to the first gallery item
    $(".gallery__item-client:first").addClass("gallery__item-client--active");

    // When the prev button is clicked
    // ====================================================================
    $("#slide-client-l").click(function () {
        // Set target item to the item before the active item
        var $targetItem = $(".gallery__item-client--active").prev();
        toGalleryItem($targetItem);

    });

    // When the next button is clicked
    // ====================================================================
    $("#slide-client-r").click(function () {
        // Set target item to the item after the active item
        var $targetItem = $(".gallery__item-client--active").next();
        toGalleryItem($targetItem);
    });
});



