/*
var map;
function initialize() {
  var mapOptions = {
   center: new google.maps.LatLng(40.5472,12.282715),
   zoom: 6,
   mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
//google.maps.event.addDomListener(window, 'load', initialize);
google.maps.event.addDomListener(window, "resize", function() {
 var center = map.getCenter();
 google.maps.event.trigger(map, "resize");
 map.setCenter(center); 
*/
 
$(function MapLoad() {
  'use strict';
  var map, //the google map
  directionsService, //service that provides directions to reach our destination
  directionsDisplay, //renderer that draws directions on map
  destinationName = "Temple Bar"; //our destination. Set yours!
  

  // providers
  var html5Provider = function() {
    return {
      'type': 'HTML5',
      'getPosition': function(onSuccess, onError) {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            onSuccess({
              'lat': position.coords.latitude,
              'lng': position.coords.longitude
            });
          }, function(error) {
            switch (error.code) {
              case error.TIMEOUT:
                onError('Timeout');
                break;
              case error.POSITION_UNAVAILABLE:
                onError('Position unavailable');
                break;
              case error.PERMISSION_DENIED:
                onError('Permission denied');
                break;
              case error.UNKNOWN_ERROR:
                onError('Unknown error');
                break;
            }
          });
        } else {
          onError('HTML5 navigator is not supported');
        }
      }
    };
  };
  

  // have a look at this StackOverflow thread, since it seems Google Geocoder is no longer active
  // http://stackoverflow.com/questions/14195837/is-google-loader-clientlocation-still-supported
  var googleGeocoderProvider = function() {
    return {
      'type': 'Google Geocoder',
      'getPosition': function(onSuccess, onError) {
        if (typeof google === 'object') {
          var location = google.loader.ClientLocation;
          
          if (location) {
            onSuccess({
              'lat': location.latitude,
              'lng': location.longitude
            });
          } else {
            onError('Google Geocoder was unable to get the client position');
          }
        }
      }
    };
  };
  

  // register providers
  var providers = [html5Provider, googleGeocoderProvider];

  function init() {
    var i = 0;

    function testProvider(i) {
      var provider = providers[i]();
      provider.getPosition(function(position) {
        showMapAndRoute(provider.type, position);
      }, function(error) {
        console.error(error);
        i++;
        if (i < providers.length) {
          testProvider(i);
        }
      });
    }

    testProvider(i);
  }

  function showMapAndRoute(method, coordinates) {
    document.getElementById('method').innerHTML = 'Location obtained using ' + method;


    var myOptions = {
      
      
      center: {lat:53.3534, lng: -6.21832031},
      zoom: 100,
      mapTypeId: google.maps.MapTypeId.WALKING
    };
    
    
     function expandViewportToFitPlace(map, place) {
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
          }
        }
        


    map = new google.maps.Map(document.getElementById('map'), myOptions);
    directionsDisplay = new google.maps.DirectionsRenderer();
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('route'));
    

    var request = {
      origin: coordinates.lat + ',' + coordinates.lng,
      destination: destinationName,
      travelMode: google.maps.DirectionsTravelMode.WALKING
    };
    directionsService = new google.maps.DirectionsService();
    directionsService.route(request, function(result, status) {
      if (status === google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(result);
      }
    });
  }

  window.onload = function() {
    init();
  };
}());

