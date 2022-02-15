<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "rop_siak";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
$nama_barang=$_POST['nama_barang'];

$sql = "SELECT * FROM barang WHERE nama_barang = '$nama_barang'";

if ($result = mysqli_query($koneksi, $sql)) {
	
		echo json_encode($result->fetch_assoc());
	} 
	else {
		echo json_encode(http_response_code(401));
	}
    mysqli_close($koneksi);
    

?>