<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_donasi = $_POST['id_donasi'];
$Nama_donatur = $_POST['Nama_donatur'];
$jenis_donasi = $_POST['jenis_donasi'];
$detail_qty = $_POST['detail_qty'];
$tanggal_donasi = $_POST['tanggal_donasi'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into donasi (id_donasi,Nama_donatur,jenis_donasi,detail_qty,tanggal_donasi) values('$id_donasi','$Nama_donatur','$jenis_donasi','$detail_qty','$tanggal_donasi')");
 
// mengalihkan halaman kembali ke index.php
header("location:member.php");
 
?>