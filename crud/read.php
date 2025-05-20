<?php 
     $hostname = 'localhost';
     $username = 'root'; // Mengganti $root dengan $username untuk kejelasan
     $password = '';
     $db = 'db_siswa';
 
     $connect = mysqli_connect($hostname, $username, $password, $db);
 
     if (!$connect) { // Memeriksa apakah koneksi gagal
         die("Koneksi gagal: " . mysqli_connect_error());
     }
 
     $sql = "CREATE TABLE cmi2 ( -- Mengganti nama tabel menjadi valid
         nim VARCHAR(10) NOT NULL, -- Mengubah NULL menjadi NOT NULL untuk PRIMARY KEY
         nama VARCHAR(50) NULL,
         alamat VARCHAR(100) NULL,
         telepon VARCHAR(15) NULL,
         CONSTRAINT pk_datasiswa PRIMARY KEY (nim)
     )";
 
     if (mysqli_query($connect, $sql)) {
         echo "Pembuatan tabel berhasil";
     } else {
         echo "Pembuatan tabel gagal: " . mysqli_error($connect);
     }
 
     mysqli_close($connect);
?>