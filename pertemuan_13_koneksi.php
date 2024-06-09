<?php
$hostname = "localhost";
$userDataBase = "root";
$passwordUser = "";
$databaseName = "kuliah_pemograman_web";

$koneksi = mysqli_connect($hostname, $userDataBase, $passwordUser, $databaseName) or die(mysqli_error($koneksi));

