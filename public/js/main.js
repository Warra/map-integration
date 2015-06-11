$(function(){
    function initialize() {
        var mapOptions = {
          center: { lat: -33.9341655, lng: 18.4571285},
          zoom: 8
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        var marker = new google.maps.Marker({
            position: {
                lat: -33.9341655,
                lng: 18.4571285
            },
            map: map,
            draggable: true
        });
        var searchBox = new google.maps.places.SearchBox(document.getElementById('location'));

      }
      google.maps.event.addDomListener(window, 'load', initialize);
});