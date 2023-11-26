<!DOCTYPE html>
<html >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<h2><center>CRUD DATA MEMBER</h2>
	<br/>
	<a class="btn btn-primary"href="member.php">KEMBALI</a>
	<br/>
	<br/>
	<h3><center>TAMBAH DATA MEMBER</h3>
	
		

<form method="post" action="tambah_aksi.php"> 
  <div class="mb-3">
    <label for="NIK" class="form-label">NIK</label>
    <input type="varchar" class="form-control" id="NIK" aria-describedby="NIK" name="NIK">
    
  </div>
  <div class="mb-3">
    <label for="Nama_lengkap" class="form-label">Nama lengkap</label>
    <input type="text" class="form-control" id="Nama_lengkap" name="Nama_lengkap">
  </div>
  <form>
  <div class="mb-3">
    <label for="Tanggal_bergabung" class="form-label">Tanggal bergabung</label>
    <input type="date" class="form-control" id="Tanggal_bergabung" aria-describedby="Tanggal_bergabung" name="Tanggal_bergabung">
  
  </div>
  <form>
  <div class="mb-3">
    <label for="Jabatan_di_komunitas" class="form-label">Jabatan di komunitas</label>
    <select class="form-select" id="Jabatan_di_komunitas" name="Jabatan_di_komunitas">
        <option value="Anggota">Anggota</option>
        <option value="Sekertaris">Sekertaris</option>
        <option value="Bendahara">Bendahara</option>
        <option value="ketua_umum">ketua umum</option>
        <option value="Sekbid_1">Sekbid_1</option>
    </select>
</div>
  </div>
  <form>
  <div class="mb-3">
    <label for="Nomor_telepon" class="form-label">Nomor telepon</label>
    <input type="number" class="form-control" id="Nomor_telepon" aria-describedby="Nomor_telepon" name="Nomor_telepon">

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
