// Map setup
var latlng = new google.maps.LatLng(3.1234, 101.9876);
var mapOptions = {
    zoom: 14,
    center: latlng,
    zoomControl: true,
    scrollwheel: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById('map'), mapOptions);
var marker = new google.maps.Marker({
    map: map,
    position: latlng,
    title: 'Js Lim',
    draggable: false
});

var contentString = document.getElementById('map-info').parentNode.innerHTML;
var infowindow = new google.maps.InfoWindow({
    content: contentString
});

infowindow.open(map, marker);
