<?php
include "koneksi.php";
if (isset($_GET['nama_produk'])) {
    $sql = mysqli_query($koneksi, "select * from produk where nama_produk='" . $_GET['nama_produk'] . "'");
    $data = mysqli_fetch_array($sql);
    $judul = "Edit";
    $nama_produk = $data['nama_produk'];
    $keterangan = $data['keterangan'];
    $harga = $data['harga'];
    $jumlah = $data['jumlah'];
} else {
    $judul = "Tambah";
    $nama_produk = "";
    $keterangan = "";
    $harga = "";
    $jumlah = "";
}
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            <h2>
                <?= $judul ?> Data Produk</h2>
            <form action="add_produk.php" method="post">
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label><br />
                    <input class="form-control" type="text" name="nama_produk" value="<?= $nama_produk ?>" id="nama_produk" required="required">
                </div><br />
                <div class="form-group">
                    <label for="keterangan">Keterangan</label><br />
                    <input class="form-control" type="text" name="keterangan" value="<?= $keterangan ?>" id="keterangan" required="required">
                </div><br />
                <div class="form-group">
                    <label for="harga">Harga</label><br />
                    <input class="form-control" type="number" name="harga" id="harga" value="<?= $harga ?>">
                </div><br />
                <div class="form-group">
                    <label for="jumlah">Jumlah</label><br />
                    <input class="form-control" type="number" name="jumlah" id="jumlah" value="<?= $jumlah ?>">
                </div><br />
                <div class="form-group">
                    <input type="hidden" name="nama_edit" value="<?= $nama_produk ?>">
                    <input class="btn btn-success form-control" type="submit" value="Simpan">
                </div>
        </div>
    </div>
</div>