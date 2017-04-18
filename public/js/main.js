function myMap() {
  var myCenter = new google.maps.LatLng(46.046552, 14.466915);
  var mapCanvas = document.getElementById("google-map");
  var mapOptions = {center: myCenter, zoom: 15, scrollwheel: false};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  google.maps.event.addListener(marker,'click',function() {
    var infowindow = new google.maps.InfoWindow({
      content:'<img src="/images/estopark-inter-es.jpeg" width="180px">'
    });
    infowindow.open(map,marker);
  });
}
function sendEnquiry(){
  var xhttp = new XMLHttpRequest();
  var form = document.getElementById('form');
  var success = document.getElementById('success-message');
  if(form.checkValidity && form.checkValidity()){
    form.classList.add('hidden-opacity');
    xhttp.open("POST", "/enquire");
    xhttp.setRequestHeader('X-CSRF-TOKEN', document.getElementById('token').value);
    xhttp.onreadystatechange = function() {
      if(xhttp.readyState == 4 && xhttp.status == 200) {
        if(!xhttp.responseText){
          form.classList.add('not-visible');
          success.classList.remove('not-visible');
          success.classList.remove('hidden-opacity');
        }else{
          form.classList.remove('hidden-opacity');
        }
      }
    }
    xhttp.send(new FormData(form));
  }
}
