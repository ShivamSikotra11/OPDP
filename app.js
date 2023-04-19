function searchHospitals() {
    var city = document.getElementById("city").value;
    var endpoint = "https://nominatim.openstreetmap.org/search.php?q=hospital+" + city + "&format=jsonv2&bounded=1&polygon_geojson=1&addressdetails=1";
    $.ajax({
        url: endpoint,
        type: "GET",
        success: function(data) {
            var results = "";
            for (var i = 0; i < data.length; i++) {
                results += "<h2>" + data[i].display_name + "</h2>";
                results += "<p>" + data[i].address.road + ", " + data[i].address.city + ", " + data[i].address.country + "</p>";
            }
            $("#results").html(results);
        },
        error: function(xhr, status, error) {
            $("#results").html("An error occurred: " + error);
        }
    });
    return false;
}
