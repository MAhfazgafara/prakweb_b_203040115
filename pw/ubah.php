<?php
require 'functions.php';

if(!isset($_GET['id'])){
    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id");

if(isset($_POST['ubah'])){
    if(ubah($_POST) > 0 ) {
        echo "<script>
                alert('Data bershasil diubah')
                document.location.herf = 'index.php'; 
            </script>";
    } else{
        echo "Data gagal diubah";
    }   
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Buku</title>
</head>
<body>
    <h3>Form Ubah Data Buku</h3>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $buku['id']; ?>">
        <ul>
            <li>
                <label>
                    Nama Buku :
                    <input type="text" name="judul" autofocus required value="<?= $buku['judul']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Tahun :
                    <input type="text" name="tahun" required value="<?= $buku['tahun']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Penerbit :
                    <input type="text" name="penerbit" required value="<?= $buku['penerbit']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Penulis :
                    <input type="text" name="penulis" required value="<?= $buku['penulis']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="gambar" required value="<?= $buku['gambar']; ?>">
                </label>
            </li>
            <li>
                <label>
                    Harga :
                    <input type="text" name="harga" required value="<?= $buku['harga']; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="ubah">UBAH</button>
            </li>
        </ul>
    </form>
</body>
</html>