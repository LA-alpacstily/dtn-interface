<?php
  session_start();
  $_SESSION['menutype']="dtn";
  $lang = $_SESSION["lang"];
	if (!isset($lang)){
		$lang="en";
		$_SESSION["lang"]=$lang;
	}
	$urlsource="dtn_index.php";
	if($lang=="fr"){
		$titre = "ht-fff.org| DTN| direction technique nationale.";
  		include("menu_haut.php");
		include("dtn.php");
  	}else if ($lang=="de") {
		$titre = "ht-fff.org| DTN| french scouting group.";
  		include("menu_haut_de.php"); 
		include("dtn_de.php"); 
	}else {
		$titre = "ht-fff.org| DTN| french scouting group.";
  		include("menu_haut_uk.php"); 
		include("dtn_en.php"); 
		
  	}
	include("menu_bas.php");
?>
