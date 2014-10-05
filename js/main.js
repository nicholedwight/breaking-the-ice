// var mainNav = document.querySelector('.home-nav');
// mainNav.classList.add('hidden');

// var toggle = document.getElementById('toggle');
// var slideUp = document.querySelector('.slide-up');
// var homeSection = document.querySelector('.home');
//
// toggle.addEventListener('click', toggleSlider, false);
//
//
// function toggleSlider(){
//     if (slideUp.classList.contains('opened')) {
//         slideUp.classList.remove('opened');
//         slideUp.classList.add('closed');
//         homeSection.classList.remove('compressed');
//         toggle.classList.remove('current');
//         console.log('closing');
//     } else {
//         slideUp.classList.remove('closed');
//         slideUp.classList.add('opened');
//         homeSection.classList.add('compressed');
//         toggle.classList.add('current');
//         console.log('opening');
//     }
// }

// var mobileNav = document.getElementById('collapsibleNav');
// mobileNav.addEventListener('click', toggleNav, false)
//
// function toggleNav() {
//   if (mainNav.classList.contains('hidden')) {
//       mainNav.classList.remove('hidden');
//   } else {
//       mainNav.classList.add('hidden');
//   }
// }


// Code for multiple markers modified from http://theoryapp.com/google-maps-with-multiple-markers-and-infowindow/
// Code for map was from Google Maps API
var LocationData = [
    [64.008696376988884, -22.564784111440713, "<div class='map-info'>First Host</div>" ],
    [63.988296376988884, -22.545784111440713, "<div class='map-info'>Second Host</div>" ]
];
function initialize(){
    var mapOptions = {
        center: new google.maps.LatLng(64.0167, -22.5667),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    var bounds = new google.maps.LatLngBounds();
    var infowindow = new google.maps.InfoWindow();


    for (var i in LocationData) {
        var p = LocationData[i];
        var latlng = new google.maps.LatLng(p[0], p[1]);
        var image = { url: 'img/mapMarker.png'};

        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: image,
            title: p[2]
        });

        google.maps.event.addListener(marker, 'click', (function(mm, tt) {
          return function() {
              infowindow.setContent(tt);
              infowindow.open(map, mm);
          }
        })(marker, p[2]));
    }
}
google.maps.event.addDomListener(window, 'load', initialize);
