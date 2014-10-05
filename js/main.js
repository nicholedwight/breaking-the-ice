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
// var LocationData = [
//     [64.008696376988884, -22.564784111440713, "<div class='map-info'>First Host</div>" ],
//     [63.988296376988884, -22.545784111440713, "<div class='map-info'>Second Host</div>" ]
// ];
// function initialize(){
//     var mapOptions = {
//         center: new google.maps.LatLng(64.0167, -22.5667),
//         zoom: 10,
//         mapTypeId: google.maps.MapTypeId.ROADMAP
//     };
//     var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
//     var bounds = new google.maps.LatLngBounds();
//     var infowindow = new google.maps.InfoWindow();
//     var currentHover = document.querySelector('.host-wrapper');
//     var icon = { url: 'img/mapMarker.png'};
//     var iconCurrent = { url: 'img/mapCurrent.png'};

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
// }

var locations = [
  ["<div class='map-info'>First Host</div>", 64.008696376988884, -22.564784111440713],
  ["<div class='map-info'>Second Host</div>", 63.988296376988884, -22.545784111440713]
  ];

  function initialize() {

    var mapOptions = {
      center: new google.maps.LatLng(64.0167, -22.5667),
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.ROADMAP

    };
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

    setMarkers(map,locations)

  }



  function setMarkers(map,locations){

      var marker, i

      for (i = 0; i < locations.length; i++) {

         var host = locations[i][0]
         var lat = locations[i][1]
         var long = locations[i][2]
         var icon = { url: 'img/mapMarker.png'}

         latlngset = new google.maps.LatLng(lat, long);

          var marker = new google.maps.Marker({
                  map: map, title: host, icon: icon, position: latlngset
                });
                map.setCenter(marker.getPosition())


          var content = host

          var infowindow = new google.maps.InfoWindow()

        google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
                return function() {
                   infowindow.setContent(content);
                   infowindow.open(map,marker);
                };
            })(marker,content,infowindow));

    }
  }


google.maps.event.addDomListener(window, 'load', initialize);
