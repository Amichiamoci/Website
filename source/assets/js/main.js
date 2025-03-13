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
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

            if (!target.length) {
                return;
            }
            event.preventDefault();

            $(document.body).removeClass('no-scroll');
            $('.hamburger').removeClass('clicked');
            $('.navbar').removeClass('show');

            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 1000, function() {
                
                var $target = $(target);
                $target.focus();
                
                if ($target.is(":focus")) {
                    return false;
                }

                $target.attr('tabindex','-1');
                $target.focus();
            });
        }
    });


//
// Scroll to top btn
//

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


//
// Hamburger menu
//

$(".hamburger").click(function () {
    $(this).toggleClass('clicked');
    $(".navbar").toggleClass('show');
    $(document.body).toggleClass('no-scroll');
});