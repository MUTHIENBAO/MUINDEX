<?php
	class connection {
		public $conn;
		function __construct() {
			$hostname = "localhost";
			$hostusername = "root";
			$hostpassword = "mysql";
			$database = "MuOnline";
			$selected_lang = "vi";

			$this->conn = mysqli_connect("localhost", "root", "mysql", "MuOnline");
			mysqli_set_charset($this->conn, "UTF8");
			if(!$this->conn) {
				die($lang["conn_die"]);
			}
			else {
				echo $lang["conn_success"];
			}
		}
	}
?>
