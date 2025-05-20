<?php

 // Ambil nilai dari input (pastikan ada validasi)
$nilai = isset($_POST['nilai']) ? (int)$_POST['nilai'] : 0; //Menggunakan $_POST['nilai'] dengan isset()Untuk menghindari error jika input belum diisi.Dikoversi ke (int) agar nilai selalu berupa angka.
?>

<form method="post">
    <input type="text" name="nilai" value="<?php echo htmlspecialchars($nilai); ?>"> <!-- htmlspecialchars() digunakan untuk menghindari XSS attack -->
    <input type="submit" value="Cek Nilai">
</form>

<?php

  if ($nilai >= 90) {
    echo "Nilai Memuaskan";
  }
  elseif ($nilai >= 80) {
    echo "Nilai Bagus";
  }
  elseif ($nilai >=50) {
    echo "Nilai Kurang";
  }
  else {
    echo "Nilai Sangat Kurang";
  }

?>