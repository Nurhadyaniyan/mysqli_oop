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

	//escape-mysql injection
	//7. Sebelum memasukan data ke database harus di escape agar tidak kena mysql injection
	// $nama = $mysqli->real_escape_string($_GET['user']);

	//3. cara ketiga untuk memasukan data
	// $sql = "INSERT INTO tutorial (murid, alamat) VALUES ('nurhadyan', 'jakarta timur')";

	//escape-mysql injection
	//7. Sebelum memasukan data ke database harus di escape agar tidak kena mysql injection
	// $nama = $mysqli->real_escape_string($_GET['user']);

	//5. Memasukan data lebih dari satu
	// $sql = "INSERT INTO tutorial (murid, alamat) VALUES ('$nama', 'jakarta timur');";
	// $sql .= "INSERT INTO tutorial (murid, alamat) VALUES ('herni', 'jakarta timur')";

	//4. Menguji apakah berhasil atau gagal memasukan database
	// if ($mysqli->query($sql) == TRUE) {
	// 	echo "BERHASIL";
	// }else{
	// 	echo 'GAGAL';
	// }

	//6. Cara menguji berhasil atau gagal dengan multi query
	// if ($mysqli->multi_query($sql) == TRUE) {
	// 	echo "BERHASIL";
	// }else{
	// 	echo 'GAGAL';
	// }

	//8. prepare statement
	//jika menggunakan prepare statement tidak perlu lagi memakai escape
	$statement = $mysqli->prepare('INSERT INTO tutorial (murid, alamat) VALUES (?, ?)');
	$statement->bind_param('ss', $nama, $alamat);

	//9. Mengisi parameter + mengeksekusi
	$nama = 'yuni';
	$alamat = 'kayumanis';
	$statement->execute();

	$nama = 'iyan';
	$alamat = 'utan kayu';
	$statement->execute();





	//2. menutup koneksi terlebih dahulu
	$mysqli->close();

?>
