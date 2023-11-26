
<!DOCTYPE html>
<html>

	
</head>
<body>



	<h2><center>DATA hasil kegiatan </h2>
	<br/>
  

	<table class="table">
  <thead>
  <tr>
            <th>NO</th>
			<th>ID</th>
			<th>TANGGAL</th>
			<th>LOKASI</th>
			<th>KOORDINATOR</th>
      <th>DESKRIPSI</th>
			<th>FOTO KEGIATAN</th>
      <th>FOTO DONATUR</th>
			<th>JUMLAH ANGGOTA HADIR</th>

		</tr>
  </thead>
  <tbody>
    
  </tbody>

 
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from hasil_kegiatan");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td  class="table-success"><?php echo $no++; ?></td>
				<td  class="table-success"><?php echo $d['ID_Kegiatan']; ?></td>
				<td  class="table-success"><?php echo $d['Tanggal_Kegiatan']; ?></td>
				<td  class="table-success"><?php echo $d['Lokasi']; ?></td>
                <td  class="table-success"><?php echo $d['Koordinator']; ?></td>
                <td  class="table-success"><?php echo $d['Deskripsi_Kegiatan']; ?></td>
                <td  class="table-success"><?php echo $d['Foto_kegiatan']; ?></td>
                <td  class="table-success"><?php echo $d['Foto_donatur']; ?></td>
                <td  class="table-success"><?php echo $d['Jumlah_anggota_hadir']; ?></td>

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

  