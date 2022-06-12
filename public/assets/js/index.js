function initMap() {
    // The location of Uluru
    var lat =  document.getElementById("la").value
    var lon =  document.getElementById("lon").value
    const uluru = { lat: parseInt(lat), lng: parseInt(lon) };
    // The map, centered at Uluru
    const map = new google.maps.Map(
    document.getElementById("map"),
    {
        zoom: 4,
        center: uluru,
    }
    );

    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
    position: uluru,
    map: map,
    });
}