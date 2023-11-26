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
	<title>eco harmony </title>
</head>
<body>
	<h2>CRUD DATA</h2>
	<br/>
	<a href="koordinator.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>

	<?php
	include 'koneksi.php';
	$NIK = $_GET['NIK'];
	$data = mysqli_query($koneksi, "select * from koordinator where NIK='$NIK'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="update_koordinator.php">
			<table>
				<tr>
					<td>NIK</td>
					<td><input type="varchar" name="NIK" value="<?php echo $d['NIK']; ?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="Nama" value="<?php echo $d['Nama']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal_bergabung</td>
					<td><input type="varchar" name="Tanggal_bergabung" value="<?php echo $d['Tanggal_bergabung']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Nomor_telepon</td>
					<td><input type="varchar" name="Nomor_telepon" value="<?php echo $d['Nomor_telepon']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	<?php
	}
	?>
</body>
</html>