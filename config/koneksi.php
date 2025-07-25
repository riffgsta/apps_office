<?php
$host = "sql302.infinityfree.com";
$user = "if0_39510320";
$pass = "5hOqaKLOGhy";
$db = "if0_39510320_project_karyawan";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>