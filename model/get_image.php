<?php
	header('Access-Control-Allow-Origin: *'); 
	$conn = new connection();
	
	$sql = "select * from image";
	$query = mysqli_query($conn->conn, $sql);
	$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
	$res = json_encode($result);	

	echo $res;
?>
