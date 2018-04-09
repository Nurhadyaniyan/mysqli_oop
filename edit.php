<?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db   = 'database_oop';

  $mysqli = new mysqli ($host, $user, $pass, $db);

  if ($mysqli->connect_errno) {
    echo "gagal konek ke mysql" . $mysqli->connect_error;
  }

//cara menghapus data
$sql = "DELETE FROM tutorial WHERE murid='iyan'";

//cara mengedit data
// $sql = "UPDATE tutorial SET murid='iyan', alamat='matraman' WHERE murid='nurhadyan'";

if ($mysqli->query($sql) === TRUE) {
  echo 'berhasil di edit';
}else {
  echo ' gagal di edit';
}

  $mysqli->close();

 ?>
