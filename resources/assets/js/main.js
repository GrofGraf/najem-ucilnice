function myMap() {
  var myCenter = new google.maps.LatLng(46.046552, 14.466915);
  var mapCanvas = document.getElementById("google-map");
  var mapOptions = {center: myCenter, zoom: 15, scrollwheel: false};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
  google.maps.event.addListener(marker,'click',function() {
    /*var infowindow = new google.maps.InfoWindow({
      content:'<img src="/images/estopark-inter-es.jpeg" width="180px">'
    });
    infowindow.open(map,marker);*/
    if(map.getMapTypeId()=="roadmap"){
      map.setZoom(20);
      map.setMapTypeId("satellite");
      map.setTilt(45);
      map.setHeading(180);
      map.setCenter(marker.getPosition());
    }else{
      map.setZoom(15);
      map.setMapTypeId("roadmap");
      map.setCenter(marker.getPosition());
    }
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

function backToContact(){
  var form = document.getElementById('form');
  var success = document.getElementById('success-message');
  form.reset();
  success.classList.add('hidden-opacity');
  form.classList.remove('not-visible');
  form.classList.remove('hidden-opacity');
  setTimeout(function(){
    success.classList.add('not-visible');
  }, 300)
}

//za smooth scroll
function currentYPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop)
        return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}

function elmYPosition(eID) {
    var elm = document.getElementById(eID);
    var y = elm.offsetTop;
    var node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
        node = node.offsetParent;
        y += node.offsetTop;
    } return y;
}
function smoothScroll(eID) {
    var nav = document.getElementById("nav-header");
    var navHeight = nav.getBoundingClientRect().height;
    var startY = currentYPosition();
    var stopY = elmYPosition(eID) - navHeight;
    var distance = stopY > startY ? stopY - startY : startY - stopY;
    if (distance < 100) {
        scrollTo(0, stopY); return;
    }
    var speed = Math.round(distance / 100);
    if (speed >= 20) speed = 20;
    var step = Math.round(distance / 25);
    var leapY = stopY > startY ? startY + step : startY - step;
    var timer = 0;
    if (stopY > startY) {
        for ( var i=startY; i<stopY; i+=step ) {
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY += step; if (leapY > stopY) leapY = stopY; timer++;
        } return;
    }
    for ( var i=startY; i>stopY; i-=step ) {
        setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
        leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
    }
}

$(document).ready(function() {
  $('#calendar').fullCalendar({
      height:"auto",
      locale:"sl",
      buttonText:{
        today: 'Današnji dan',
        month: 'mesec',
        week: 'teden',
        day: 'dan',
        list: 'seznam'
      },
      firstDay:1,
      defaultView:"month",
      displayEventEnd:true,
      timeFormat: 'H:mm',
      eventSources: [{
        googleCalendarApiKey: 'AIzaSyCXmTSLmZC1tEEQ7v687YoMEJ1iKs3M8B4',
        googleCalendarId: 'q7tmvoa5ttd6isafn1db8g16as@group.calendar.google.com',
      }]
  })
});
