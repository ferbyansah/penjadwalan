<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "penjadwalan";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
$no_perjalanan1=$_POST['no_perjalanan'];

$sql = "SELECT * FROM jadwal WHERE no_perjalanan = '$no_perjalanan1'";

if ($result = mysqli_query($koneksi, $sql)) {
	
		echo json_encode($result->fetch_assoc());
	} 
	else {
		echo json_encode(http_response_code(401));
	}
    mysqli_close($koneksi);
    

?>