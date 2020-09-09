function map() {
    var map = L.map('mapid', { scrollWheelZoom: false }).setView([51.505, -0.09], 13);
    map.on('keypress', function(inf) {
        if (map.scrollWheelZoom.enabled()) {
            map.scrollWheelZoom.disable()
        }
        else {
            map.scrollWheelZoom.enable()
        }
  });

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 25,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibWFydGluMTk5NyIsImEiOiJjazM1M3V0eTUwMHptM2JzNDNqMnUxd2w1In0.VN0jkXf-YOY-WMIxo0SD-A'
    }).addTo(map);


}

function getLocationAjax() {
    $("#submitLocation").click(function(e){
        e.preventDefault();
        var latLoc = $("#lat").val();
        var langLoc = $("#lang").val();
        $.ajax({
            method: "POST",
            url: "../../controller/controller_register.php",
            data: {lat:latLoc,lang:langLoc},

            success: function(response){
                // var resp = JSON.parse(response);
                console.log(response);
            }
        })
    });
}

jQuery(document).ready(function($) {
    'use strict';
    $(function() {

        // Vars
        var modBtn = $('#modBtn'),
            modal = $('#modal'),
            close = modal.find('.close-btn img'),
            modContent = modal.find('.modal-content');

        // open modal when click on open modal button
        modBtn.on('click', function() {
            modal.css('display', 'block');
            modContent.removeClass('modal-animated-out').addClass('modal-animated-in');
        });

        // close modal when click on close button or somewhere out the modal content
        $(document).on('click', function(e) {
            var target = $(e.target);
            if (target.is(modal) || target.is(close)) {
                modContent.removeClass('modal-animated-in').addClass('modal-animated-out').delay(300).queue(function(next) {
                    modal.css('display', 'none');
                    next();
                });
            }
        });

    });
    // on click event on all anchors with a class of scrollTo
    $('a.scrollTo').on('click', function() {

        // data-scrollTo = section scrolling to name
        var scrollTo = $(this).attr('data-scrollTo');


        // toggle active class on and off. added 1/24/17
        $("a.scrollTo").each(function() {
            if (scrollTo == $(this).attr('data-scrollTo')) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });


        // animate and scroll to the sectin
        $('body, html').animate({

            // the magic - scroll to section
            "scrollTop": $('#' + scrollTo).offset().top
        }, 1000);
        return false;

    })

    $(".menu-icon").click(function() {
        $(this).toggleClass("active");
        $(".overlay-menu").toggleClass("open");
    });
});