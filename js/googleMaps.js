// functie voor Google Maps
function initMap() {
    // locatie voor Design Studio Armeni
    var myLatLng = {lat: 51.9164509, lng: 4.4808339};

    // Maken van een map object in het speciefieke dom element
    var map = new google.maps.Map(document.getElementById('mapCanvas'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 16
    });

    // Maak een marker object + zet op locatie
    var marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: 'Armeni Ontwerp Studio'
    });
}

