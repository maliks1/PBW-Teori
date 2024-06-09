<?php
include "pertemuan_10_koneksi.php";

//mengambil data input
$nama_mhs = $_POST['nama'];
$prodi_mhs = $_POST['prodi'];
$perulangan = $_POST['ulangi'];

$proses = mysqli_query($koneksi, "INSERT INTO mahasiswa(nama_mahasiswa,prodi) VALUES ('" . $nama_mhs . "', '" . $prodi_mhs . "')") or die(mysqli_error($koneksi));
if ($proses) {
    echo "<script>alert('Data berhasil disimpan')</script>";
} else {
    echo "<script>alert('Data gagal disimpan')</script>";
}
echo "<a href='pertemuan_10.php'> kembali ke halaman sebelumnya </a>";
