<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$Nama_lengkap = $_POST['Nama_lengkap'];
$Tanggal_bergabung = $_POST['Tanggal_bergabung'];
$Jabatan_di_komunitas = $_POST['Jabatan_di_komunitas'];
$Nomor_telepon = $_POST['Nomor_telepon'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into anggota_komu (NIK,Nama_lengkap,Tanggal_bergabung,Jabatan_di_komunitas,Nomor_telepon) values('$NIK','$Nama_lengkap','$Tanggal_bergabung','$Jabatan_di_komunitas','$Nomor_telepon')");
 
// mengalihkan halaman kembali ke index.php
header("location:member.php");
 
?>