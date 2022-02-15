<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "rop_siak";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
$no_po=$_POST['no_po'];

$sql = "SELECT * FROM po_supplier WHERE nomor_po = '$no_po'";

if ($result = mysqli_query($koneksi, $sql)) {
	
		echo json_encode($result->fetch_assoc());
	} 
	else {
		echo json_encode(http_response_code(401));
	}
    mysqli_close($koneksi);
    

?>