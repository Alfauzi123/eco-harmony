
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
	<title>member </title>
</head>
<body>
 
	<h2>CRUD DATA </h2>
	<br/>
	<a href="member.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MEMBER</h3>
 
	<?php
	include 'koneksi.php';
	$NIK = $_GET['NIK'];
	$data = mysqli_query($koneksi,"select * from anggota_komu where NIK='$NIK'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>				
				<tr>
					<td>NIK</td>
					<td><input type="varchar" name="NIK" value="<?php echo $d['NIK']; ?>"></td>
				</tr>
				<tr>
					<td>Nama_lengkap</td>
					<td><input type="text" name="Nama_lengkap" value="<?php echo $d['Nama_lengkap']; ?>"></td>
				</tr>
                <tr>
					<td>Tanggal_bergabung</td>
					<td><input type="date" name="Tanggal_bergabung" value="<?php echo $d['Tanggal_bergabung']; ?>"></td>
				</tr>
				<tr>
					<td>Jabatan_di_komunitas</td>
					<td><input type="text" name="Jabatan_di_komunitas" value="<?php echo $d['Jabatan_di_komunitas']; ?>"></td>
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