//
// Map at the bottom of the page
//
(() => {
    const map = L.map("leaflet-map").setView([43.550040, 10.309440], 14);

    const tiles = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

    L.tileLayer(tiles, {
        attribution: "&copy; <a target=\"_blank\" href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a>",
        maxZoom: 19
    }).addTo(map);

    map.scrollWheelZoom.disable();
})();

//
// In-page Link scrolling
//
$('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    }

                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                });
            }
        }
    });
$(document).ready(function() {
    const btn = '#scroll-top-btn';
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $(btn).fadeIn();
        } else {
            $(btn).fadeOut();
        }
    });
    $(btn).click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });
});