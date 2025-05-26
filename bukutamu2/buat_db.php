<?php
  $conn = mysqli_connect('localhost','root');
  if (mysqli_connect_errno()) {
    echo "koneksi ke server gagal";
  }

  $sql = "CREATE DATABASE IF NOT EXISTS db_tamu";
  if (mysqli_query($conn, $sql)) {
      echo "Database db_tamu berhasil dibuat";
  } else {
      echo "Gagal membuat database: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>