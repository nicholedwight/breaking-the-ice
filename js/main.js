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
    var currentHover = document.querySelector('.host-wrapper');
    var icon = { url: 'img/mapMarker.png'};
    var iconCurrent = { url: 'img/mapCurrent.png'};

    // var marker1 = new google.maps.Marker({
    //     position: new google.maps.LatLng(64.008696376988884, -22.564784111440713),
    //     map: map,
    //     icon: icon,
    //     infoWindow: {
    //       content: "<div class='map-info'>First Host</div>"
    //     }
    // });
    // var contentString = "<div class='map-info'>First Host</div>";
    // google.maps.event.addListener(marker1, 'click', function() {
    //   infowindow.open(map,marker1);
    // });
    // google.maps.event.addListener(marker1, 'mouseover', function () {
    //   marker1.setIcon(iconCurrent);
    // });
    // google.maps.event.addListener(marker1, 'mouseout', function () {
    //   marker1.setIcon(icon);
    // });

    for (var i = 0; i < markers.length; i++) {
  	  var marker = markers[i];
    	google.maps.event.addListener(marker, 'click', function () {
      	infowindow.open(map, this);
  	  });
    }
}

google.maps.event.addDomListener(window, 'load', initialize);
