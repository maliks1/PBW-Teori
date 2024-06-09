<?php

if (isset($_POST['npm'])) {
    //mengambil data input
    $npm_mhs = $_POST['npm'];
    $nilai_mhs = $_POST['nilai'];
    $perulangan = $_POST['ulangi'];
} else {
    $npm_mhs = "";
    $nilai_mhs = "";
    $perulangan = "";
}

if ($nilai_mhs != "") {
    if ($nilai_mhs >= 85) {
        $huruf_mutu = 'A';
    } else if ($nilai_mhs >= 75) {
        $huruf_mutu = 'B';
    } else if ($nilai_mhs >= 65) {
        $huruf_mutu = 'C';
    } else if ($nilai_mhs >= 55) {
        $huruf_mutu = 'D';
    } else $huruf_mutu = 'E';

    for ($i = 0; $i <= $perulangan; $i++) {
        echo "<script>alert('" . $npm_mhs . " Nilai mata kuliah anda adalah : " . $huruf_mutu . "')</script>";
    }
    echo "<a href='pertemuan_7.html'> pertemuan_7.html </a>";
}
