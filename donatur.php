
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-success navbar-dark fixed-top">
  <style></style>
  <div class="container-fluid">
    <a class="navbar-brand" href="donatur.php">TABEL DATA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">donasi</a>
        </li>
        <li class="nav-item">   
          <a class="nav-link" href="front.php">front</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://localhost/peduli_lingkungan/hasil_kegiatan.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            hasil kegiatan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="galery.html">galeri</a></li>
            <li><a class="dropdown-item" href="event.html">event</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class ="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>            
    </div>
  </div>  
</nav>


 
	<h2><center>CRUD DATA DONASI  </h2>
	<br/>
	<a class="btn btn-primary" href="tambah_donasi.php"> TAMBAH DATA DONASI</a>
	<br/>
	<br/>
	<table class="table">
  <thead class="table-primary">
    
  </thead>
  <tbody>
    
  </tbody>

  <tr class="table-success">
			<th>NO</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Tanggal donasi</th>
      <th>Jenis donasi</th>
			<th>Detail qty</th>
            <th>NO telepon</th>
            <th>-EDIT-</th>
            </tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from donatur");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td  class="table-primary"><?php echo $no++; ?></td>
				<td   class="table-primary"><?php echo $d['NIK']; ?></td>
				<td  class="table-primary"><?php echo $d['Nama_lengkap']; ?></td>
				<td  class="table-primary"><?php echo $d['Tanggal_donasi']; ?></td>
        <td  class="table-primary"><?php echo $d['Jenis_donasi']; ?></td>
        <td  class="table-primary"><?php echo $d['Detail_qty']; ?></td>
        <td class="table-primary"><?php echo $d['Nomor_telepon']; ?></td>
        
				<td  class="table-primary">
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    
</body>
</html>