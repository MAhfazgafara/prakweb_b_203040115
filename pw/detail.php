<?php
  require 'functions.php';
  $id = $_GET['id'];

  $buku = query("SELECT * FROM buku WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css">
</head>
<body class="luar">
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/prakweb_b_203040115/pw/img/logo.svg" alt="Logo" width="75" height="75" class="d-inline-block align-text-center">
      APJBookStore.id
    </a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

<ul>
<td><img src="img/<?= $buku['gambar']; ?>" href="">
    <td><?= $buku['judul']; ?></td>
    <td><?= $buku['tahun']; ?></td>
    <td><?= $buku['penerbit']; ?></td>
    <td><?= $buku['penulis']; ?></td>
    <td><?= $buku['harga']; ?></td>
    <a href="">Ubah</a> <a href="">Hapus</a>
</td>
</ul>
    <a href="index.php">Kembali ke menu utama</a>

</body>
</html>