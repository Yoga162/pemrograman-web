<?php
  $dbname = 'db_kampus';
  $host = 'localhost';
  $pass = '';
  $user = 'root';

//   Koneksi ke Mysql 
  $cnn = mysqli_connect($host, $user, $pass, $dbname);

//   Membuat Koneksi 
  if (!$cnn) {
    die ("Koneksi Failed: " . mysqli_connect_error());
  }
//   Membuat tabel  
  $sql = "CREATE TABLE mahasiswa (
    nim CHAR(10) NOT NULL,
    nama VARCHAR (25) NOT NULL,
    alamat VARCHAR (50),
    telp VARCHAR (15) ,
 constraint pk_mahasiswa primary key (nim)
  )";

  if (mysqli_query($cnn, $sql)) {
    echo "Tabel mahasiswa berhasil dibuat";
  } else {
    echo "Gagal membuat tabel mahasiswa: " . mysqli_error($cnn);
  }
    mysqli_close($cnn);
 
  ?>