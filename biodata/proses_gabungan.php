<?php
$nama = $_POST['nama'];
$alamat = $_POST['Alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$hobi = $_POST['hobi'];
$pendidik = $_POST['pendidik'];
$hobi = $_POST['hobi'];

echo "<h1>BIODATA:</h1>";
echo "<p>Nama: $nama</p>";  
echo "<p>Alamat: $alamat</p>";
echo "<p>Jenis Kelamin: $jk</p>";
echo "<p>Agama: $agama</p>";
echo "<p>Hobi: $hobi</p>";
echo "<p>Riwayat Pendidikan: $pendidik</p>";
?>