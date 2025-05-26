<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Membuat Buku Tamu</title>
</head>
<body>
	<h2>Form Pencatatan Buku Tamu</h2>
Silahkan Masukkan Komentar Anda 
<br/><br/>	
<form action="proses_tambah.php" method="post">
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" maxlength="50" size="50" placeholder="Masukkan nama Anda" /></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" maxlength="50" size="50" placeholder="Masukkan email Anda" /></td>
	</tr>
	<tr>
		<td>URL</td>
		<td>
            <input type="text" name="url" maxlength="100" size="50" placeholder="Contoh: https://website.com" />
        </td>
		
	</tr>
	<tr>
		<td valign="top">Komentar</td>
		<td>
			<textarea name="komentar" cols="50" rows="6" placeholder="Tulis komentar Anda di sini"></textarea>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="kirim" value="Kirim"></td>
	</tr>
</table>
</form>	
</body>
</html>
