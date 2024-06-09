<?php
include "pertemuan_12_koneksi.php";
$npm = $_GET['id'];
$proses = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $npm") or die(mysqli_error($koneksi));
if ($proses) {
    echo "<script>
            alert('Data berhasil Dihapus');
            window.location.href='pertemuan_12.php';
        </script>";
} else {
    echo "<script>
            alert('Data gagal Dihapus');
            window.location.href='pertemuan_12.php';
        </script>";
}
