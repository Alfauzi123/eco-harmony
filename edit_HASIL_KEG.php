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
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>eco harmony </title>
</head>
<body>
 
	<h2>CRUD DATA </h2>
	<br/>
	<a href="hasil_kegiatan.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA </h3>
 
	<?php
	include 'koneksi.php';
	$ID_Kegiatan = $_GET['ID_Kegiatan'];
	$data = mysqli_query($koneksi,"select * from hasil_kegiatan where ID_Kegiatan='$ID_Kegiatan'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div><form method="post" action="update_HASIL.php" >
			<div><table>				
				<tr>
					<td>ID</td>
					<div><td><input  class="form-control" type="varchar" name="ID_Kegiatan" value="<?php echo $d['ID_Kegiatan']; ?>"></td></div>
				</tr>
				<tr>
					<td>Tanggal Kegiatan</td>
					<td><input class="form-control" type="varchar" name="Tanggal_Kegiatan" value="<?php echo $d['Tanggal_Kegiatan']; ?>"></td>
				</tr>
                <tr>
					<td>Lokasi</td>
					<td><input  class="form-control" type="text" name="Lokasi" value="<?php echo $d['Lokasi']; ?>"></td>
				</tr>
				<tr>
					<td>Koordinator</td>
					<td> <select class="form-select form-select mb-3" name="Koordinator">
            <?php
            $queryKoordinators = mysqli_query($koneksi, "SELECT Nama FROM Koordinator");
            while ($row = mysqli_fetch_array($queryKoordinators)) {
                $selected = ($row['Nama'] == $d['Koordinator']) ? 'selected' : '';
                echo "<option value='" . $row['Nama'] . "' $selected>" . $row['Nama'] . "</option>";
            }
            ?>
        </select></td>

				</tr>
                <tr>
					<td>Deskripsi Kegiatan</td>
					<td><input class="form-control" type="text" name="Deskripsi_Kegiatan" value="<?php echo $d['Deskripsi_Kegiatan']; ?>"></td>
				</tr>
				<tr>
					<td>Foto kegiatan</td>
					<td> <input class="form-control" type="file" name="Foto_kegiatan">
                    <img src="<?php echo $d['Foto_kegiatan']; ?>" width="100" height="100" alt="Foto kegiatan"></td>
				</tr>
				<tr>
					<td>Foto donatur</td>
					<td> <input class="form-control" type="file" name="Foto_dontaur">
                    <img src="<?php echo $d['Foto_dontaur']; ?>" width="100" height="100" alt="Foto_dontaur"></td>
				</tr>
				<tr>
					<td>Jumlah anggota hadir</td>
					<td><input class="form-control" type="varchar" name="Jumlah_anggota_hadir" value="<?php echo $d['Jumlah_anggota_hadir']; ?>"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input class="btn-primarys"type="submit" value="SIMPAN"></td>
				</tr>		
			</table></div>
		</form></div>
		<?php    
	}
	?>
 
</body>
</html>