<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_kampus';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Handle CREATE (tambah data)
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $sql = "INSERT INTO mahasiswa (nama) VALUES ('$nama')";
    mysqli_query($conn, $sql);
}

// Handle DELETE
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    mysqli_query($conn, $sql);
}

// Handle UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $sql = "UPDATE mahasiswa SET nama='$nama' WHERE id=$id";
    mysqli_query($conn, $sql);
}

// Ambil semua data (READ)
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Teman Kelas</title>
</head>
<body>
    <h2>Tambah Teman</h2>
    <form method="POST">
        <input type="text" name="nama" required placeholder="Nama Teman">
        <button type="submit" name="tambah">Tambah</button>
    </form>

    <h2>Daftar Teman Kelas</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td>
                <a href="?edit=<?php echo $row['id']; ?>&nama=<?php echo $row['nama']; ?>">Edit</a>
                <a href="?hapus=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <?php if (isset($_GET['edit'])) { ?>
    <h2>Edit Teman</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
        <input type="text" name="nama" value="<?php echo $_GET['nama']; ?>">
        <button type="submit" name="update">Update</button>
    </form>
    <?php } ?>
</body>
</html>

<?php mysqli_close($conn); ?>