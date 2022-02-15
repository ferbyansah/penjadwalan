<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "penjadwalan";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
$no_plat=$_POST['no_plat'];

$sql = "SELECT * FROM kendaraan WHERE no_plat = '$no_plat'";

if ($result = mysqli_query($koneksi, $sql)) {
	
		echo json_encode($result->fetch_assoc());
	} 
	else {
		echo json_encode(http_response_code(401));
	}
    mysqli_close($koneksi);
    

?>