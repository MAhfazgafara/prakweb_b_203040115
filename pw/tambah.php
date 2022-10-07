<?php
require 'functions.php';

if(isset($_POST['tambah'])){
    if(tambah($_POST) > 0 ) {
        echo "<script>
                alert('Data bershasil ditambahkan')
                document.location.herf = 'index.php'; 
            </script>";
    } else{
        echo "Data gagal ditambahkan";
    }   
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <h3>Form Tambah Data Buku</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Nama Buku :
                    <input type="text" name="judul" autofocus required>
                </label>
            </li>
            <li>
                <label>
                    Tahun :
                    <input type="text" name="tahun" required>
                </label>
            </li>
            <li>
                <label>
                    Penerbit :
                    <input type="text" name="penerbit" required>
                </label>
            </li>
            <li>
                <label>
                    Penulis :
                    <input type="text" name="penulis" required>
                </label>
            </li>
            <li>
                <label>
                    Gambar :
                    <input type="text" name="gambar" required>
                </label>
            </li>
            <li>
                <label>
                    Harga :
                    <input type="text" name="harga">
                </label>
            </li>
            <li>
                <button type="submit" name="tambah">Tambahkan</button>
            </li>
        </ul>
    </form>
</body>
</html>