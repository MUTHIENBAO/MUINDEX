<?php
	class PageController {
		function __construct() {
			$page = "home";

			if(isset($_GET["page"])) {
				if(in_array($_GET["page"], $page_list)) {
					$page = $_GET["page"];
				}
			}
			
			$this->$page();
		}
		function home() {
			include_once("view/home.php");
		}
		function topic() {
			include_once("view/topic.php");
		}
	}
?>
		