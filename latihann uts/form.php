<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
</head>
<body>
    <h2>Form Pendaftaran Mahasiswa</h2>
    <form action="proses.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="jurusan">Jurusan:</label><br>
        <select name="jurusan" id="jurusan">
            <option value="Teknologi Informasi">Teknologi Informasi</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Komputer">Teknik Komputer</option>
        </select><br><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
