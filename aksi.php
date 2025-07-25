<?php
include 'config/koneksi.php';

// proses input
if (isset($_POST['submit'])) {
    $nama_karyawan = $_POST['nama_karyawan'];
    $jabatan = $_POST['jabatan'];
    $contact = $_POST['contact'];
    $age = $_POST['age'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $query = mysqli_query($koneksi, "INSERT INTO karyawan (nama_karyawan, jabatan, contact, age, foto) VALUES ('$nama_karyawan', '$jabatan', '$contact', '$age', '$foto')");

    if ($query) {
        move_uploaded_file($tmp, "uploads/" . $foto);
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href='admin/dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data'); window.location.href='admin/dashboard.php';</script>";
    }
}

// proses edit
if (isset($_POST['edit'])) {
    $nama_karyawan = $_POST['nama_karyawan'];
    $jabatan = $_POST['jabatan'];
    $contact = $_POST['contact'];
    $age = $_POST['age'];
    $id_karyawan = $_POST['id_karyawan'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];


    if (!empty($foto)) {
        move_uploaded_file($tmp, "uploads/" . $foto);
        $ubah = mysqli_query($koneksi, "UPDATE karyawan SET nama_karyawan ='$nama_karyawan', jabatan ='$jabatan', contact ='$contact', age ='$age', foto ='$foto' WHERE id_karyawan = '$id_karyawan'");
} else {
    $ubah = mysqli_query($koneksi, "UPDATE karyawan SET nama_karyawan ='$nama_karyawan', jabatan ='$jabatan', contact ='$contact', age ='$age' WHERE id_karyawan = '$id_karyawan'");
}
if ($ubah) {
    echo "<script>alert('Data berhasil diubah'); window.location.href='admin/dashboard.php';</script>";
} else {
    echo "<script>alert('Gagal mengubah data'); window.location.href='admin/dashboard.php';</script>";
}
}


// proses hapus
if (isset($_POST['hapus'])) {
    $id_karyawan = $_POST['id_karyawan'];

    // Ambil nama file foto sebelum hapus
    $getFoto = mysqli_query($koneksi, "SELECT foto FROM karyawan WHERE id_karyawan = '$id_karyawan'");
    $dataFoto = mysqli_fetch_assoc($getFoto);
    $namaFoto = $dataFoto['foto'];

    // Hapus data dari DB
    $hapus = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id_karyawan = '$id_karyawan'");

    if ($hapus) {
        // Hapus file foto dari folder uploads/
        if (!empty($namaFoto) && file_exists("uploads/" . $namaFoto)) {
            unlink("uploads/" . $namaFoto); // hapus file
        }

        echo "<script>alert('Data berhasil dihapus'); window.location.href='admin/dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data'); window.location.href='admin/dashboard.php';</script>";
    }
}

?>