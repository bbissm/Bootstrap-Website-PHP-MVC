<?php 
session_start();
include "../../controller/controller_register.php";
$obj = new controller_register();
// $obj->getLocation();
include "head.php"; ?>
	<div class="containerMap" id="portfolio">
		<div id="mapid">
			
		</div>
	</div>
	<div class="location">
		<input type="text" id="lat" value="">
		<input type="text" id="lang" value="">
		<input type="submit" id="submitLocation">
	</div>
<?php include "footer.php"; ?>
<script type="text/javascript">
	map();
	getLocationAjax();
</script>