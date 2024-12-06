<?php 
    // mengaktifkan session pada php
    session_start();

    // menghubungkan php dengan koneksi database
    include 'connection.php';

    // menangkap data yang dikirim dari form registrasi
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // cek apakah username sudah ada di database
    $cek_username = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
    $jumlah_username = mysqli_num_rows($cek_username);

    if ($jumlah_username > 0) {
        // jika username sudah ada
        header("location:register.php?pesan=username_terpakai");
    } else {
        // jika username belum ada, tambahkan user ke database
        $insert = mysqli_query($con, "INSERT INTO user (username, password) VALUES ('$username', '$password')");

        if ($insert) {
            // jika berhasil registrasi, alihkan ke halaman login
            header("location:login.php?pesan=registrasi_berhasil");
        } else {
            // jika gagal, alihkan kembali ke halaman registrasi
            header("location:register.php?pesan=registrasi_gagal");
        }
    }
?>
