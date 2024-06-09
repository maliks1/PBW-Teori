<?php
include "pertemuan_11_koneksi.php";
$koneksi = mysqli_query($koneksi,"SELECT * FROM mahasiswa") or die(mysqli_error($koneksi));
