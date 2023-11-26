<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$ID_Kegiatan = $_POST['ID_Kegiatan'];
$Tanggal_Kegiatan = $_POST['Tanggal_Kegiatan'];
$Lokasi = $_POST['Lokasi'];
$Koordinator = $_POST['Koordinator'];
$Deskripsi_Kegiatan = $_POST['Deskripsi_Kegiatan'];
$Jumlah_anggota_hadir = $_POST['Jumlah_anggota_hadir'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into hasil_kegiatan (ID_Kegiatan,Tanggal_Kegiatan,Lokasi,Koordinator,Deskripsi_Kegiatan,Foto_kegiatan,Foto_donatur,Jumlah_anggota_hadir) values('$ID_Kegiatan','$Tanggal_Kegiatan','$Lokasi','$Koordinator','$Deskripsi_Kegiatan','$Foto_kegiatan','$Foto_donatur','$Jumlah_anggota_hadir')");
 
// mengalihkan halaman kembali ke index.php
header("location:hasil_kegiatan.php");
 
?>