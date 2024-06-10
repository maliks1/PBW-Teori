<?php
include "pertemuan_13_koneksi.php";

//mengambil data input
$nama_mhs = $_POST['nama'];
$prodi_mhs = $_POST['prodi'];

$proses = mysqli_query($koneksi, "INSERT INTO mahasiswa(nama_mahasiswa,prodi) VALUES ('" . $nama_mhs . "', '" . $prodi_mhs . "')") or die(mysqli_error($koneksi));
if ($proses) {
    echo "<script>
            alert('Data berhasil disimpan');
            window.location.href='pertemuan_13.php';
        </script>";
} else {
    echo "<script>
            alert('Data gagal disimpan');
            window.location.href='pertemuan_13.php';
        </script>";
}
