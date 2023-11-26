<html>
    <head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
          <a class="nav-link active" aria-current="page" href="hasil_kegiatan.php">hasil kegiatan</a>
        </li>
        <li class="nav-item">   
          <a class="nav-link" href="koordinator.php">koordinator</a>
        </li>
        <li class="nav-item ">
        <a class="nav-link" href="member.php">member</a>
        <li class="nav-item ">
        <a class="nav-link" href="front.php">front</a>  
        </li>
        <li class="nav-item">
          <a class="nav-link " href="dashboard.php">dashboard</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="cari_kegiatan.php" method="GET">
    <input class="form-control me-2" placeholder="cari berdasarkan id/tanggal" type="search" name="search"  aria-label="Search">
    <button class="btn btn-outline-info" type="submit">Search</button>
</form>          
    </div>
  </div>  
</nav>
<br>
<br>
<br>
<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    $query = "SELECT * FROM hasil_kegiatan 
              WHERE ID_Kegiatan LIKE ? 
              OR Tanggal_Kegiatan LIKE ? 
              OR Lokasi LIKE ? 
              OR Koordinator LIKE ? 
              OR Deskripsi_Kegiatan LIKE ? 
              OR Foto_kegiatan LIKE ? 
              OR Foto_donatur LIKE ? 
              OR Jumlah_anggota_hadir LIKE ?";
    $stmt = mysqli_prepare($koneksi, $query);

    $param = "%$searchTerm%";
    $stmt->bind_param('ssssssss', $param, $param, $param, $param, $param, $param, $param, $param);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        ?>
        <table  class="table">
            <tr class="table-info">
                <th>ID Kegiatan</th>
                <th>Tanggal Kegiatan</th>
                <th>Lokasi</th>
                <th>Koordinator</th>
                <th>Deskripsi Kegiatan</th>
                <th>Foto Kegiatan</th>
                <th>Foto Donatur</th>
                <th>Jumlah Anggota Hadir</th>
            </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr class="table-success">
                <td><?php echo $row['ID_Kegiatan']; ?></td>
                <td><?php echo $row['Tanggal_Kegiatan']; ?></td>
                <td><?php echo $row['Lokasi']; ?></td>
                <td><?php echo $row['Koordinator']; ?></td>
                <td><?php echo $row['Deskripsi_Kegiatan']; ?></td>
                <td><?php echo $row['Foto_kegiatan']; ?></td>
                <td><?php echo $row['Foto_donatur']; ?></td>
                <td><?php echo $row['Jumlah_anggota_hadir']; ?></td>
            </tr>
            <?php
        }
        ?>
        </table>
        <?php
    } else {
        echo "Tidak ada hasil yang ditemukan.";
    }
}
?>
</body>
</html>
