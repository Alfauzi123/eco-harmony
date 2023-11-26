<?php 
<?php
session_start();

// Memeriksa jika pengguna belum login atau bukan admin
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    // Redirect atau atur pesan akses ditolak jika tidak diizinkan
    header('Location: halaman_denied.php');
    exit;
}
?>
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Tanggal_bergabung = $_POST['Tanggal_bergabung'];
$Alamat = $_POST['Alamat'];
$Nomor_telepon = $_POST['Nomor_telepon'];


 
// menginput data ke database
mysqli_query($koneksi,"insert into Koordinator (NIK,Nama,Tanggal_bergabung,Alamat,Nomor_telepon) values('$NIK','$Nama','$Tanggal_bergabung','$Alamat','$Nomor_telepon')");
 
// mengalihkan halaman kembali ke index.php
header("location:Koordinator.php");
 
?>