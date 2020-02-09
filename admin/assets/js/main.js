$(function(){
  $('.bxslider').bxSlider({
    mode: 'fade',
    captions: true,
    slidewidth:1000
  });

function myMap() {
var mapProp= {
  center:new google.maps.LatLng(30.008,31.2194),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("g_map"),mapProp);
};