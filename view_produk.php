<?php
include "koneksi.php";

$sql = mysqli_query($koneksi, "select * from produk");

$cek = mysqli_num_rows($sql);
if ($cek == 0) {
?>
    <h2>Data produk belum diinput !! </h2>
    <div class="mt-3">
        <a href="index.php?menu=form_produk" class="btn btn-success">Tambah</a>
    </div>
    <img src="../img/pixeltrue-newsletter-1.svg" alt="" width="80%">
<?php
} else {
?>
    <h2>Data produk</h2>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($hasil = mysqli_fetch_array($sql)) {
                echo "
                        <tr>
                            <th scope='row'>$no</th>
                            <td>$hasil[nama_produk]</td>
                            <td>$hasil[keterangan]</td>
                            <td>$hasil[harga]</td>
                            <td>$hasil[jumlah]</td>
                            <td>
                                <a href='index.php?menu=form_produk&nama_produk=$hasil[nama_produk]' class ='btn btn-primary'>Edit</a>
                                <a href='index.php?menu=view_produk&nama_produk=$hasil[nama_produk]' class='btn btn-danger' onclick='return confirm(`Anda Yakin Ingin Menghapusnya ? `);'>Hapus</a>
                            </td>
                        </tr>
                    ";
                $no++;
            }

            if (isset($_GET['nama_produk'])) {
                mysqli_query($koneksi, "delete from produk where nama_produk ='$_GET[nama_produk]'");
                header("Location: index.php?menu=view_produk");
                exit();
            }
            ?>
        </tbody>
    </table>
    <div class="mt-3">
        <a href="index.php?menu=form_produk" class="btn btn-success">Tambah</a>
    </div>
<?php
}
