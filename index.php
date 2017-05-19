<?php error_reporting(0)?>
<?php include_once("header.php");?>
<?php $pg = $_GET["pg"];?>

	<?php if($pg != "" ){
		
		include_once('includes/'.$pg.".php");
		
	}	else
	
		include_once("includes/home.php");
?>
	 
<?php include_once("footer.php");?>