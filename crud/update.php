<?php
  $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'db_siswa';

    $connect = mysqli_connect($hostname, $username, $password, $db);

    if (!$connect) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $nim = 2415323031; // NIM yang ingin diupdate
    $nama = "SYAHFRINO";
    $alamat = "JATIM";
    $telepon = "082331253567";

    $sql = "UPDATE cmi2 SET nama='$nama', alamat='$alamat', telepon='$telepon' WHERE nim='$nim'";
    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil diupdate.";
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }

    mySqli_close($connect);

?>