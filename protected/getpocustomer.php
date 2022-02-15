<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "penjadwalan";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
$no_po=$_POST['nomor_po'];

$sql = "SELECT * FROM po_customer WHERE nomor_po = '$no_po'";

if ($result = mysqli_query($koneksi, $sql)) {
	
		echo json_encode($result->fetch_assoc());
	} 
	else {
		echo json_encode(http_response_code(401));
	}
    mysqli_close($koneksi);
    

?>