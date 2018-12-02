<!doctype html>
<html lang="en">
<?php 
	session_start(); 
	include_once("connection.php");

	$x = 0;
	if( isset($_GET['test']) )
	{
	    $x = $_GET['test'];
	    $ch = $_GET['check'];
	    $lat = $_GET['lat'];
	    $lon = $_GET['lon'];

		echo $lat."<br>";
		echo $lon."<br>";
	}

	echo $x;
	$sql = "SELECT `geoloc`.*, sqrt( power({$lat}-`geoloc`.`geo_lat`,2) + power({$lon}-`geoloc`.`geo_lon`,2) ) as dist FROM `geoloc` WHERE `geoloc`.`geo_city` IN (SELECT distinct `tuition_area` FROM `tuition`) ORDER BY dist ASC";
	  $sql_geo = mysqli_query($myConnection,$sql) or die(mysqli_error($myConnection));
	  $row_geo = mysqli_fetch_all($sql_geo,MYSQLI_ASSOC);
	  print_r($row_geo);

?>

<br><span id='q'></span><br>
<span id='check_loc' hidden><?php echo $ch; ?></span><br>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery.ba-outside-events.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.responsive-tabs.js"></script>
<script src="js/jquery.tagsinput.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-ui.js"></script>

<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>

<script type="text/javascript">
    $( document ).ready(function (){
        if ( $('#check_loc').text() != 'fal' ){
            if (navigator.geolocation){
	            // get_loc();
	            navigator.geolocation.getCurrentPosition(get_loc);
	            // alert('test');
            }
            else{
    			alert("Geolocation is not supported by this browser.");
            }
        }

    })

    function get_loc(position){
        // alert('hohoho');
        // $('#pp').html('fal');
        // window.location.href = "http://192.168.1.132/MINDCRAFT/component/Mindcraft/test_zone/testAnwar.php?test=999";
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        // alert(lat);
        window.location.href = "geoloc.php?test=999&check=fal&lat="+lat+"&lon="+lon;
    	
    }

</script>
