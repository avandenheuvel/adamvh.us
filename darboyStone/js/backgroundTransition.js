$(document).ready(function() {
    var timeToDisplay = 2000;
    var opacityChangeDelay = 50;
    var opacityChangeAmount = 0.05;

    var slideshow = $('#slideshow');
    var urls = [
       'http://adamvh.us/darboyStone/cover.png',
       'http://adamvh.us/darboyStone/cover1.png',
       'http://sipi.usc.edu/database/preview/aerials/2.1.12.png'
    ];

    var index = 0;

    var transition = function() {
        var url = urls[index];

        slideshow.css('background-image', 'url(' + url + ')');

        index = index + 1;
        if (index > urls.length - 1) {
            index = 0;
        }
    };

    var fadeIn = function(opacity) {
        opacity = opacity + opacityChangeAmount;

        slideshow.css('opacity', opacity);

        if (opacity >= 1) {
            slideshow.trigger('fadeIn-complete');
            return;
        }
        setTimeout(function() {
            fadeIn(opacity);
        }, opacityChangeDelay);
    };

    var fadeOut = function(opacity) {
        opacity = opacity - opacityChangeAmount;

        slideshow.css('opacity', opacity);

        if (opacity <= 0) {
            slideshow.trigger('fadeOut-complete');
            return;
        }
        setTimeout(function() {
            fadeOut(opacity);
        }, opacityChangeDelay);
    };

    slideshow.on('fadeOut-complete', function(event) {
        transition();
        fadeIn(0);
    });

    slideshow.on('display-complete', function(event) {
        fadeOut(1);
    });

    slideshow.on('fadeIn-complete', function(event) {
        setTimeout(function() {
            slideshow.trigger('display-complete');
        }, timeToDisplay);
    });

    transition();
    fadeIn(0);
});