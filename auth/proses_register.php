<?php
require '../config/koneksi.php';
 //cek jika tombol ditekan
if(isset($_POST['register'])) {
    //ambil data dari form dan simpan dalam variabel
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $confirm = ($_POST['confirm']);
    $role = 'user'; //default role

     //cek jika username sudah ada
    $query = mysqli_query($koneksi,"SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($query) > 0) {
        die("Username sudah terdaftar, silakan gunakan username lain.");
    }
     //cek konfirmasi password,
     if ($password !== $confirm) {
        die ("konfirmasi tidak cocok !");
     }

     //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

     //simpan data ke database
    $query = mysqli_query ($koneksi,"INSERT INTO users (username,password,role) VALUES
    ('$username','$password','$role')");
    
     //cek apakah query berhasil
     if ($query) {
        echo "<script>alert('Registrasi berhasil, silakan login.'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal, silakan coba lagi.'); window.location.href='register.php';</script>";  
    }
}