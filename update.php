<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NIK = $_POST['NIK'];
$Nama_lengkap = $_POST['Nama_lengkap'];
$Tanggal_bergabung = $_POST['Tanggal_bergabung'];
$Jabatan_di_komunitas = $_POST['Jabatan_di_komunitas'];
$Nomor_telepon = $_POST['Nomor_telepon'];
 
// update data ke database
mysqli_query($koneksi,"update anggota_komu set NIK='$NIK', Nama_lengkap='$Nama_lengkap', Tanggal_bergabung='$Tanggal_bergabung',Jabatan_di_komunitas='$Jabatan_di_komunitas', Nomor_telepon='$Nomor_telepon' where NIK='$NIK'");
 
// mengalihkan halaman kembali ke index.php
header("location:member.php");
 
?>