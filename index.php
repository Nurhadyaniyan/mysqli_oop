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
	$sql = "INSERT INTO tutorial (murid, alamat) VALUES ('nurhadyan', 'jakarta timur')";

	//4. Menguji apakah berhasil atau gagal memasukan database
	if ($mysqli->query($sql) == TRUE) {
		echo "BERHASIL";
	}else{
		echo 'GAGAL';
	}

	//2. menutup koneksi terlebih dahulu
	$mysqli->close();

?>
