var mymap = L.map('map').setView([43.6663703918457, 1.4184505939483643], 13);


L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWF4b3V0ayIsImEiOiJja2ptcTJpM2EweWd0MzBtamJ2NHM0bGE2In0.Qa3M6QJpC-Snf195ajKvgQ'
}).addTo(mymap); 

// Pliage 31
var marker = L.marker([43.6663703918457, 1.4184505939483643]).addTo(mymap);
marker.bindPopup("<img src='assets/images/logo/logomap.png'> <br>  Tôlerie, Découpage, Poinçonnage, Pliage <br> 2 Impasse Raymond Loewy, Aucamville, France")




 $(function () {
  $("#mdb-lightbox-ui0").load("mdb-addons/mdb-lightbox-ui.html");
   $("#mdb-lightbox-ui1").load("mdb-addons/mdb-lightbox-ui.html");
   $("#mdb-lightbox-ui2").load("mdb-addons/mdb-lightbox-ui.html");
   $("#mdb-lightbox-ui3").load("mdb-addons/mdb-lightbox-ui.html");
});