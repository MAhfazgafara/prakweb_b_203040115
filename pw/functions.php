<?php

function koneksi(){ 
    return mysqli_connect('localhost', 'root','', 'prakweb_2022_b_203040115');
}

function query($query){

    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) == 1){
        return mysqli_fetch_assoc($result);
    }
    
    $rows =[];
    while ($row= mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data){
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $tahun = htmlspecialchars($data['tahun']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $penulis = htmlspecialchars($data['penulis']);
    $gambar = htmlspecialchars($data['gambar']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO
                buku
                VALUES
                (null, '$judul', '$tahun', '$penerbit', '$penulis', '$gambar', $harga');
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data){
    $conn = koneksi();

    $id = $data['id'];
    $judul = htmlspecialchars($data['judul']);
    $tahun = htmlspecialchars($data['tahun']);
    $penerbit = htmlspecialchars($data['penerbit']);
    $penulis = htmlspecialchars($data['penulis']);
    $gambar = htmlspecialchars($data['gambar']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE buku SET
                judul = '$judul',
                tahun = '$tahun',
                penerbit = '$penerbit',
                penulis = '$penulis',
                gambar = '$gambar',
                harga = '$harga'
            WHERE id = $id";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}