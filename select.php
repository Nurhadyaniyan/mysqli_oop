<?php

  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db   = 'database_oop';

  $mysqli = new mysqli ($host, $user, $pass, $db);

  if ($mysqli->connect_errno) {
    echo "gagal konek ke mysql" . $mysqli->connect_error;
  }

  $query = "SELECT murid, alamat FROM tutorial";
  $result = $mysqli->query($query);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo $row['murid'] . ' ' . $row['alamat'] . '<br>';
    }
  }

  $mysqli->close();

 ?>
