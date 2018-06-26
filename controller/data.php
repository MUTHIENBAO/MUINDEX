<?php
	class DataController {
		function __construct() {
			$page = "";
			$data = $_GET["data"];

			if(isset($_GET["type"])) {
				$type = $_GET["type"];
			}
			
			switch($data) {
				case "new":
					include_once("model/get_new.php");
					break;
				case "event":
					include_once("model/get_event.php");
					break;
				case "topic":
					include_once("model/get_topic.php");
					break;
				case "image":
					include_once("model/get_image.php");
					break;
				case "video":
					include_once("model/get_video.php");
					break;
			}
		}
		function home() {
			include_once("view/home.php");
		}
	}
?>
		