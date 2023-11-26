<!DOCTYPE html>
<html >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<h2><center>CRUD</h2>
	<br/>
	<a href="hasil_kegiatan.php">    KEMBALI</a>
	<br/>
	<br/>
	<h3><center>TAMBAH DATA HASIL KEGIATAN</h3>
	
		

<form method="post" action="tambah_hasil_aksi.php"> 
  <div class="mb-3">
    <label for="ID_Kegiatan" class="form-label">ID KEGIATAN</label>
    <input type="varchar" class="form-control" id="ID_Kegiatan" aria-describedby="ID_Kegiatan" name="ID_Kegiatan">
    
  </div>
  <div class="mb-3">
    <label for="Tanggal_Kegiatan" class="form-label">Tanggal_Kegiatan</label>
    <input type="date" class="form-control" id="Tanggal_Kegiatan" name="Tanggal_Kegiatan">
  </div>
  
  <div class="mb-3">
    <label for="Lokasi" class="form-label">Lokasi</label>
    <input type="varchar" class="form-control" id="Lokasi" aria-describedby="Lokasi" name="Lokasi">
  
  </div>
  
  <?php
session_start();

// Pastikan sesi 'username' sudah terdefinisi sebelum menggunakannya
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    // Gunakan nilai dari sesi 'username' di sini (misalnya, untuk mengisi form)
} else {
    // Jika sesi 'username' belum terdefinisi, berikan nilai default atau lakukan tindakan yang sesuai
    $username = 'Pengguna Default';
}
?>

<!-- Gunakan nilai dari sesi 'username' di dalam form -->
<div class="mb-3">
    <label for="koordinator" class="form-label">Koordinator</label>
    <input type="text" class="form-control" id="koordinator" aria-describedby="koordinator" name="koordinator" value="<?php echo $username; ?>" readonly>
</div>

  <div class="mb-3">
    <label for="Deskripsi_Kegiatan" class="form-label">Deskripsi_Kegiatan</label>
    <input type="text" class="form-control" id="Deskripsi_Kegiatan" aria-describedby="Deskripsi_Kegiatan" name="Deskripsi_Kegiatan">

  </div>
 

  <div class="mb-3">
    <label for="Jumlah_anggota_hadir" class="form-label">Jumlah anggota hadir</label>
    <input type="varchar" class="form-control" id="Jumlah_anggota_hadir" aria-describedby="Jumlah_anggota_hadir" name="Jumlah_anggota_hadir">
   
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
