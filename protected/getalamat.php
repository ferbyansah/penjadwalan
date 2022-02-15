<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "penjadwalan";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
$nama_rs=$_POST['nama_rs'];

$sql = "SELECT * FROM rumah_sakit WHERE nama_rs = '$nama_rs'";

if ($result = mysqli_query($koneksi, $sql)) {
	
		echo json_encode($result->fetch_assoc());
	} 
	else {
		echo json_encode(http_response_code(401));
	}
    mysqli_close($koneksi);
    

?>