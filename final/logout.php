<?php
// Mulai sesi
session_start();

// Cek apakah pengguna sudah login atau belum
if(isset($_SESSION['user_id'])){
    // Pengguna sudah login, maka lakukan logout
    session_destroy(); // Menghancurkan semua data sesi

    // Redirect ke halaman login atau halaman lain yang sesuai
    header("Location: login.php");
    exit();
}
else{
    // Pengguna belum login, redirect ke halaman login atau halaman lain yang sesuai
    header("Location: login.php");
    exit();
}
?>
