<?php
	header('Access-Control-Allow-Origin: *'); 
	$conn = new connection();
	
	$sql = "select * from new";
	if($type == "limit") {
		$sql .= " limit 5";
	}
	$query = mysqli_query($conn->conn, $sql);
	$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
	$res = json_encode($result);	

	echo $res;
?>
