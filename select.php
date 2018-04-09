<?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db   = 'database_oop';

  $mysqli = new mysqli ($host, $user, $pass, $db);

  if ($mysqli->connect_errno) {
    echo "gagal konek ke mysql" . $mysqli->connect_error;
  }

  // $query = "SELECT murid, alamat FROM tutorial";
  // $result = $mysqli->query($query);
  //
  // if ($result->num_rows > 0) {
  //   while ($row = $result->fetch_assoc()) {
  //     echo $row['murid'] . ' ' . $row['alamat'] . '<br>';
  //   }
  // }

  //select data dengan prepare statement
  $murid_param = 'matraman';

  $nama = $mysqli->prepare("SELECT murid, alamat FROM tutorial WHERE alamat=?");
  $nama->bind_param('s', $murid_param);
  $nama->execute();

  $nama->bind_result($murid, $alamat);

  while($nama->fetch()){
    echo $murid . ' -  '. $alamat . '<br>';
  }

  $mysqli->close();

 ?>
