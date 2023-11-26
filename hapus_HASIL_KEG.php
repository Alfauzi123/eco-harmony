
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
$ID_Kegiatan = $_GET['ID_Kegiatan'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from peduli_lingkungan.hasil_kegiatan where ID_Kegiatan='$ID_Kegiatan'");
 
// mengalihkan halaman kembali ke index.php
header("location:hasil_kegiatan.php");
 
?>