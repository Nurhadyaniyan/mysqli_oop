<?php


	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'database_oop';

	$mysqli = new mysqli($host, $user, $pass, $db);

	//1.menguji database apakah gagal atau tidak
	if ($mysqli->connect_errno) {
		echo ' gagal konek ke mysqli ' . $mysqli->connect_error;
	}

	//3. cara ketiga untuk memasukan data
	$sql = "INSERT INTO murid (nama, alamat) VALUES ('nurhadyan', 'jakarta timur')";

	//2. menutup koneksi terlebih dahulu
	$mysqli->close();

?>
