<?php
require 'functions.php';

if(!isset($_GET['id'])){
    header('Location: index.php');
    exit;
}

$id = $_GET['id'];

if(hapus($id) > 0 ) {
    echo "<script>
            alert('Data bershasil ditambahkan')
            document.location.herf = 'index.php'; 
        </script>";
}   else{
    echo "Data gagal ditambahkan";
}