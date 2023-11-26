
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
	<title>eco harmony</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-success navbar-dark fixed-top">
  <style></style>
  <div class="container-fluid">
    <a class="navbar-brand" href="hasil_kegiatan.php">TABEL DATA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="hasil_kegiatan.php">hasil kegiatan</a>
        </li>
        <li class="nav-item">   
          <a class="nav-link active"  href="koordinator.php">koordinator</a>
        </li>
        <a class="nav-link" href="member.php">member</a>
        <li class="nav-item ">
        <a class="nav-link" href="front.php">front</a>  
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">dashboard</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="cari_koordinator.php" method="GET">
    <input class="form-control me-2" placeholder="cari disini" type="search" name="search"  aria-label="Search">
    <button class="btn btn-outline-info" type="submit">Search</button>
</form>             
    </div>
  </div>  
</nav>



  
	<h2><center>CRUD DATA KOORDINATOR  </h2>
  <br/>
  <a class="btn btn-primary" href="tambah_koordinator.php">TAMBAH DATA </a>
  <br>
<a class="btn btn-info" target="_blank" href="cetak_koordinator.php">PRINT</a>
	<br/>
	
	<table class="table">
  <thead class="table-primary">
    
  </thead>
  <tbody>
    
  </tbody>

  <tr class="table-info">
			<th>NO</th>
			<th>NIK</th>
			<th>NAMA</th>
			<th>TANGGAL BERGABUNG</th>
      <th>Alamat</th>
			<th>NOMOR TELEPON</th>
      <th>-EDIT-</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from Koordinator");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td  class="table-success"><?php echo $no++; ?></td>
				<td  class="table-success"><?php echo $d['NIK']; ?></td>
				<td  class="table-success"><?php echo $d['Nama']; ?></td>
				<td  class="table-success"><?php echo $d['Tanggal_bergabung']; ?></td>
        <td  class="table-success"><?php echo $d['Alamat']; ?></td>
        <td  class="table-success"><?php echo $d['Nomor_telepon']; ?></td>
				<td  class="table-success">
        <a class="btn btn-success" href="edit_koordinator.php?NIK=<?php echo $d['NIK']; ?>">EDIT</a>
        <a class="btn btn-danger" href="hapus_koordinator.php?NIK=<?php echo $d['NIK']; ?>" onclick="return confirm('Apakah Anda ingin menghapus data ini?');">HAPUS</a>


				</td>
			</tr>
			<?php 
		}
		?>
	</table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-..."></script>
</body>
</html>

  