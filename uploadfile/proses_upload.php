<?php
$dir_upload = "files/";
$uploadfile = $dir_upload . $_FILES['file']['name'];

// Cek dan buat folder kalau belum ada
if (!is_dir($dir_upload)) {
    mkdir($dir_upload, 0777, true); // Buat folder dengan izin full
}

if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $kirim = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);

    if ($kirim) {
        echo "File berhasil diupload ke server pada folder <b>$uploadfile</b>";
    } else {
        echo "File gagal diupload<br>";
        echo "error : " . $_FILES['file']['error'];
    }
}
?>
