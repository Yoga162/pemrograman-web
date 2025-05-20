<?php
     
    $cnn = mysqli_connect('localhost', 'root', 'db_kampus'); 
    
    if (!$cnn) {
        echo "Koneksi Gagal";
    } else {
        echo "Koneksi Berhasil<br/>";
        mysqli_select_db($cnn, "db_kampus");
    }
        
    $nim = "10101111";
    $nama = "Bona Boni";
    $alamat = "Jl. Tukad Pakerisan No. 97";
    $telp = "08123456789";

    // Perbaikan query SQL
    $sql = "INSERT INTO mahasiswa (nim, nama, alamat, telp) VALUES ('$nim', '$nama', '$alamat', '$telp')";

    // Eksekusi query
    if (mysqli_query($cnn, $sql)) {
        echo "Data BERHASIL Disimpan <br/>";
        echo "NIM : $nim <br/>";
        echo "Nama : $nama <br/>";
        echo "Alamat : $alamat <br/>";
        echo "Telp : $telp <br/>";
    } else {
        // Tampilkan pesan error jika query gagal
        echo "Data GAGAL Disimpan: " . mysqli_error($cnn) . "<br/>";
    }

    // Tutup koneksi
    mysqli_close($cnn);
?>
