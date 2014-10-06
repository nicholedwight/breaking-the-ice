//This following code shows and hides individual host family details, they slide up and down on the main hosts page
$(document).ready(function() {
  $('.toggle').click(function() {
    $('#hosts').slideUp();
    $('.slide-hidden').css("display", "block");
    console.log('opening');
  });
});

$(document).ready(function() {
  $('.toggleBack').click(function() {
    $('#hosts').slideDown();
    $('.slide-hidden').css("display", "none");
    console.log('closing');
  });
});


// Code for multiple markers was modified from http://theoryapp.com/google-maps-with-multiple-markers-and-infowindow/
// Code for map was from Google Maps API

var locations = [
  [
    "<div class='map-info'><img src='img/kitchen1thumb.jpg' alt='Hosts Kitchen' class='map-view'><a href='#'>First Host</a></div>",
    64.008696376988884, -22.564784111440713
  ],
  ["<div class='map-info'>Second Host</div>", 63.988296376988884, -
    22.545784111440713
  ]
];

function initialize() {

  var mapOptions = {
    center: new google.maps.LatLng(64.0167, -22.5667),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP

  };
  var map = new google.maps.Map(document.getElementById("map-canvas"),
    mapOptions);

  setMarkers(map, locations)

}

function setMarkers(map, locations) {

  var marker, i
  var infowindow = new google.maps.InfoWindow()

  for (i = 0; i < locations.length; i++) {

    var host = locations[i][0]
    var lat = locations[i][1]
    var long = locations[i][2]
    var icon = {
      url: 'img/mapMarker.png'
    }
    var iconCurrent = {
      url: 'img/mapCurrent.png'
    }

    latlngset = new google.maps.LatLng(lat, long);

    var marker = new google.maps.Marker({
      map: map,
      title: host,
      icon: icon,
      position: latlngset
    });
    map.setCenter(marker.getPosition())


    var content = host


    google.maps.event.addListener(marker, 'mouseover', (function(marker,
      content, infowindow) {
      return function() {
        marker.setIcon(iconCurrent);
      };
    })(marker, content, infowindow));
    google.maps.event.addListener(marker, 'mouseout', (function(marker,
      content, infowindow) {
      return function() {
        marker.setIcon(icon);
      };
    })(marker, content, infowindow));
    google.maps.event.addListener(marker, 'click', (function(marker, content,
      infowindow) {
      if (infowindow) {
        infowindow.close();
      }
      return function() {
        infowindow.setContent(content);
        infowindow.open(map, marker);
      };
    })(marker, content, infowindow));

  }

}


google.maps.event.addDomListener(window, 'load', initialize);
