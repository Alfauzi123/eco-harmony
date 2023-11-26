<?php
// Mulai sesi
session_start();

// Hapus sesi atau token otentikasi pengguna (dalam hal ini, username)
if (isset($_SESSION['username'])) {
    unset($_SESSION['username']);
}

// Hentikan sesi
session_destroy();

// Arahkan pengguna kembali ke halaman login (ganti ini dengan halaman yang sesuai)
header("Location: admin.php");
