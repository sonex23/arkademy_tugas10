<?php
include "koneksi.php";

$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$nama_edit = $_POST['nama_edit'];

if ($nama_edit) {
    $result = mysqli_query($koneksi, "update produk set nama_produk = '$nama_produk', keterangan = '$keterangan', harga=$harga, jumlah=$jumlah where nama_produk = '$nama_edit'");
} else {
    $result = mysqli_query($koneksi, "insert into produk set nama_produk = '$nama_produk', keterangan = '$keterangan', harga=$harga, jumlah=$jumlah");
}

if ($result) {
    header("Location: index.php?menu=view_produk");
    exit();
} else {
    die("Query error : " . mysqli_error($koneksi));
}
