<?php
	$conn = new connection();
	
	if(isset($_GET["id"]) && isset($_GET["type"])) {
		$id = $_GET["id"];
		$type = $_GET["type"];
		
		$sql = "select * from $type where id = $id";
		$query = mysqli_query($conn->conn, $sql);
		$result = mysqli_fetch_assoc($query);
		$json_string = json_encode($result);
		echo $json_string;
	}
?>