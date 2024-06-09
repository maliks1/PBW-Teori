<?php
include "pertemuan_13_koneksi.php";

$npm = $_GET['id'] ?? '';
$apakah_proses = $_GET['proses'] ?? 0;
$proses_ambil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = '" . $npm . "'") or die(mysqli_error($koneksi));
if ($apakah_proses == 1 && !empty($npm)) {
    $nama_mhs = $_POST['nama'] ?? '';
    $prodi_mhs = $_POST['prodi'] ?? '';

    $proses_update_data = mysqli_query($koneksi, "UPDATE mahasiswa SET nama_mahasiswa = '$nama_mhs', prodi='$prodi_mhs' WHERE id='$npm'");
    if ($proses_update_data) {
        echo "<script>
            alert('Data berhasil Diupdate');
            window.location.href='pertemuan_13.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal Diupdate');
            window.location.href='pertemuan_13.php';
        </script>";
    }
}
