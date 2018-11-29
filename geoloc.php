<?php session_start(); 
include_once("connection.php");

$x = 3.1409018;
$y = 101.615815;

//$sql1 = "SELECT `geoloc`.*, sqrt( pow({$x}-`geoloc`.`geo_lat`,2) + pow({$y}-`geoloc`.`geo_lon`,2) ) as distance from `geoloc`";
$sql2 = "SELECT * FROM `geoloc`";
$sql_loc = mysqli_query($myConnection,$sql2) or die(mysqli_error($myConnection));
$row = mysqli_fetch_array($sql_loc);
echo $row['geo_city'];
?>


<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";}
    }
    
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
</script>

</body>
</html>
