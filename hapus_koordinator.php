
<?php 

session_start();

// Memeriksa jika pengguna belum login atau bukan admin
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    // Redirect atau atur pesan akses ditolak jika tidak diizinkan
    header('Location: halaman_denied.php');
    exit;
}

// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$NIK = $_GET['NIK'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from peduli_lingkungan.koordinator where NIK='$NIK'");
 
// mengalihkan halaman kembali ke index.php
header("location:koordinator.php");
 
?>