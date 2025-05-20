<?php 
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'db_siswa';

$connect = mysqli_connect($hostname, $username, $password, $db);

if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Array berisi data mahasiswa
$cmi2 = [
    ["2415323086", "", "DENPASAR", "08172839780"],
    ["2415323060", "JHON", "FLORES", "082331253567"],
    ["2415323048", "YOGA", "KLUNGKUNG", "083116156690"]
]; 
foreach ($cmi2 as $mhs) {
    $sql = "INSERT INTO cmi2 (nim, nama, alamat, telepon) 
            VALUES ('$mhs[0]', '$mhs[1]', '$mhs[2]', '$mhs[3]')";

    if (mysqli_query($connect, $sql)) {
        echo "Data $mhs[1] berhasil ditambahkan.<br>";
    } else {
        echo "Gagal menambahkan data $mhs[1]: " . mysqli_error($connect) . "<br>";
    }
}

mysqli_close($connect);
?>
