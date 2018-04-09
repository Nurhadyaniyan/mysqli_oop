<?php 


	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'database_oop';

	$mysqli = new mysqli($host, $user, $pass, $db);

	if ($mysqli->connect_errno) {
		echo ' gagal konek ke mysqli ' . $mysqli->connect_error;
	}

?>