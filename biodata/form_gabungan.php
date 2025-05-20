<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <form id="form_gabungan" name="form_gabungan" method="POST" action="Proses_gabungan.php">
        
        <h1 class="bg-red-400">Form Biodata</h1>

        <p>NAMA:<br>
        <input type="text" name="nama" id="nama" class="bg-red-400"></p>

        <p>ALAMAT:<br>
        <input type="text" name="Alamat" id="Alamat"></p>

        <p>JENIS KELAMIN:<br>
        <input type="radio" name="jk" id="jk" value="Laki-laki"> Laki-laki<br>
        <input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan<br></p>
        
        <p>AGAMA:<br>
        <select name="agama" >
            <option value="Islam">Islam</option> <option value="Kristen Katolik">Kristen Katolik</option> <option value="Kristen Protestan">Kristen Protestan</option> <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
        </select>

        <p>HOBI:<br>
        <input type="checkbox" name="hobi" id="hobi" value="Traveling"> Traveling<br>
        <input type="checkbox" name="hobi" id="hobi" value="Olahraga"> Olahraga<br>
        <input type="checkbox" name="hobi" id="hobi" value="Menulis"> Menulis<br>
        <input type="checkbox" name="hobi" id="hobi" value="Mengambar"> Mengambar<br></p>

        <p>RIWAYAT PENDIDIKAN:<br>
        <textarea name="pendidik"></textarea></p>

        <input type="submit" value="Kirim" class="bg-red-400">

    </form>
</body>
</html>
