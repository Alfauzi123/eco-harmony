
<!DOCTYPE html>
<html>

<head>
	<title>eco harmony</title>
</head>
<body>


  
	<h2><center>DATA KOORDINATOR  </h2>
    <br/>
	<table class="table">
  <thead>  
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
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
    <style>.table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ddd;
}

.table th, 
.table td {
    border: 1px solid #ddd;
    padding: 8px;
}

.table th {
    background-color: #f2f2f2;
    font-weight: bold;
}
</style>
  <script type="text/javascript"> 
       window.print();
</script>
</body>
</html>

  