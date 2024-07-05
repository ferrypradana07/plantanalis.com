<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lokasi direktori penyimpanan gambar
    $uploadDirectory = 'gambar/';

    // Pastikan direktori eksis, jika tidak buat
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Mendapatkan informasi file yang diunggah
    $uploadedFile = $_FILES['inputgambar'];
    $uploadedFileName = basename($uploadedFile['name']);
    $targetFilePath = $uploadDirectory . $uploadedFileName;

    // Menyimpan gambar ke direktori
    if (move_uploaded_file($uploadedFile['tmp_name'], $targetFilePath)) {
        echo 'Gambar berhasil diunggah dan disimpan di ' . $targetFilePath;
    } else {
        echo 'Gagal mengunggah gambar.';
    }
} else {
    echo 'Permintaan tidak valid.';
}
?>
