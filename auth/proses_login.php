<?php
session_start(); //mulai session buat simpan status login
require '../config/koneksi.php'; //koneksi ke database

if (isset($_POST['login'])) {
  $username = htmlspecialchars(stripslashes(trim($_POST['username']))); //ambil username dari form
  $password = $_POST['password']; //ambil password dari form

  $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'"); //query untuk ambil data user
  //cek apakah username ada di database
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result); //ambil data user

    //cek apakah password cocok
    if (password_verify($password, $row['password'])) {

      //simpan data login ke session
      $_SESSION['login'] = true; //set session login
      $_SESSION['username'] = $row['username']; //set session username
      $_SESSION['role'] = $row['role']; //set session role

      if ($row['role'] === 'admin') {
        header("Location: ../admin/dashboard.php"); //redirect ke dashboard admin
      } else {
        header("Location: ../index.php"); //redirect ke dashboard user
      }
      exit; //keluar dari script
    } else {
      echo "<script>alert('Password salah!'); window.location.href='login.php';</script>"; //jika password salah
    }
  } else {
    echo "<script>alert('Username tidak ditemukan!'); window.location.href='login.php';</script>"; //jika username tidak ditemukan
  }
} else {
  header("location : login.php");
}
exit;


?>