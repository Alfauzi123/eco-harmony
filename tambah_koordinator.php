<!DOCTYPE html>
<?php
session_start();

// Memeriksa jika pengguna belum login atau bukan admin
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    // Redirect atau atur pesan akses ditolak jika tidak diizinkan
    header('Location: halaman_denied.php');
    exit;
}
?>
<html >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<h2><center>CRUD DATA koordinator</h2>
	<br/>
	<a href="Koordinator.php">    KEMBALI</a>
	<br/>
	<br/>
	<h3><center>TAMBAH DATA koordinator</h3>
	
		

<form method="post" action="tambah_koordinator_aksi.php"> 
  <div class="mb-3">
    <label for="NIK" class="form-label">NIK</label>
    <input type="varchar" class="form-control" id="NIK" aria-describedby="NIK" name="NIK">
    
  </div>
  <div class="mb-3">
    <label for="Nama" class="form-label">Nama </label>
    <input type="text" class="form-control" id="Nama" name="Nama">
  </div>
  <form>
  <div class="mb-3">
    <label for="Tanggal_bergabung" class="form-label">Tanggal bergabung</label>
    <input type="date" class="form-control" id="Tanggal_bergabung" aria-describedby="Tanggal_bergabung" name="Tanggal_bergabung">
  
  </div>
  <form>
  <div class="mb-3">
    <label for="Alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="Alamat" aria-describedby="Alamat" name="Alamat">
   
  </div>
  <form>
  <div class="mb-3">
    <label for="Nomor_telepon" class="form-label">Nomor telepon</label>
    <input type="number" class="form-control" id="Nomor_telepon" aria-describedby="Nomor_telepon" name="Nomor_telepon">

  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
