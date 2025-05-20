<?php
  $conn = mysqli_connect('localhost', 'root');
  if (mysqli_connect_errno()) {
    echo "koneksi ke server gagal: "; 
  }
  $sql = "CREATE DATABASE db_kampus";
        if (mysqli_query($conn, $sql)) {
            echo "Database berhasil dibuat";
        }
        else {
            echo "gagal membuat database : ".mysqli_error($conn);
        }

    mysqli_close($conn);