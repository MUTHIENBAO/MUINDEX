<?php
	include_once("config.php");

	if(isset($_GET["data"])) {
		include_once("controller/data.php");
		$data_controller = new DataController();
	}
	else {
		include_once("controller/page.php");
		include_once("view/header.php");
		include_once("view/aside.php");
		$page_controller = new PageController();
		include_once("view/footer.php");	
	}
?>