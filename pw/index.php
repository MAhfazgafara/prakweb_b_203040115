<?php

require 'functions.php';
$buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>prakweb_2022_b_203040115</title>
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
</head>

<h1 class="text-center">Fetured Books</h1>


  <table class="tabel" border="0" cellpadding="20">
  <tr>
        <th>No</th>
        <th>Nama Buku</th>
        <th>Tahun Terbit</th>
        <th>Penerbit</th>
        <th>Penulis</th>
        <th>Gambar</th>
        <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($buku as $sb) : ?>
      <tr class="isi">
        <td><?= $i ?></td>
        <td><?= $sb['judul_buku']; ?></td>
        <td><?= $sb['tahun_terbit']; ?></td>
        <td><?= $sb['penerbit_buku']; ?></td>
        <td><?= $sb['penulis_buku']; ?></td>
        <td><img src="pw/img/<?= $sb['gambar_buku']; ?>" alt=""></td>
        <td><?= $sb['harga_buku']; ?></td>
        <td>
          <a href="">Ubah</a> <a href="">Hapus</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>

  <footer class="page-footer blue-grey darken-4 center white-text">
    <div class="container">
      <p class="flow-text">@Copyright2022</p>
    </div>
  </footer>

</body>

</html>