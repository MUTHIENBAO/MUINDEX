<?php
	$conn = new connection();
	$sql = "select * from topic";
	
	if(isset($_GET["id"])) {
		$id = $_GET["id"];
		$sql = "select * from topic where id = $id";
		$query = mysqli_query($conn->conn, $sql);
		$result = mysqli_fetch_assoc($query);
	}
	else if(isset($_GET["type"])) {
		$type = $_GET["type"];
		if(isset($_GET["limit"])) {
			$sql = "select * from topic where type = $type limit 5";
		}
		else {
			$sql = "select * from topic where type = $type";
		}
		$query = mysqli_query($conn->conn, $sql);
		$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
	}
	
	$json_string = json_encode($result);
	echo $json_string;
?>
