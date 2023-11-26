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
 
	<h2><center>CRUD DONASI</h2>
	<br/>
	<a class="btn btn-primary" href="donatur.php">KEMBALI</a>
    <style>




    </style>
	<br/>
	<br/>
	<h3><center>TAMBAH DATA DONASI</h3>
	
		

    <form method="post" action="tambah_donasi_aksi.php"> 
  <div class="mb-3">
    <label for="id_donasi" class="form-label">ID donasi</label>
    <input type="varchar" class="form-control" id="id_donasi" aria-describedby="id_donasi" name="id_donasi">
    
  </div>
  <div class="mb-3">
    <label for="Nama_donatur" class="form-label">Nama donatur</label>
    <input type="text" class="form-control" id="Nama_donatur" name="Nama_donatur">
  </div>
  <form>
  <div class="mb-3">
    <label for="jenis_donasi" class="form-label">Jenis donasi</label>
    <select class="form-select" id="jenis_donasi" name="jenis_donasi">
        <option value="sembako">Sembako</option>
        <option value="uang_tunai">Uang Tunai</option>
        <option value="lainnya">Lainnya</option>
    </select>
</div>

  
  </div>
  <form>
  <div class="mb-3">
    <label for="detail_qty" class="form-label">detail qty</label>
    <input type="text" class="form-control" id="detail_qty" aria-describedby="detail_qty" name="detail_qty">
   
  </div>
  <form>
  <div class="mb-3">
    <label for="tanggal_donasi" class="form-label">tanggal donasi</label>
    <input type="date" class="form-control" id="tanggal_donasi" aria-describedby="tanggal_donasi" name="tanggal_donasi">

  </div>
  
  <button type="submit" class="btn btn-primary">kirim</button>
</form>
</body>
</html>

