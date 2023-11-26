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
          <a class="nav-link " aria-current="page" href="hasil_kegiatan.php">hasil kegiatan</a>
        </li>
        <li class="nav-item">   
          <a class="nav-link active" href="koordinator.php">koordinator</a>
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

    $query = "SELECT * FROM koordinator 
    WHERE NIK LIKE ? 
    OR Nama LIKE ? 
    OR Tanggal_bergabung LIKE ? 
    OR Alamat LIKE ? 
    OR Nomor_telepon LIKE ? ";

$stmt = mysqli_prepare($koneksi, $query);

$param = "%$searchTerm%";
$stmt->bind_param('sssss', $param, $param, $param, $param, $param);

   
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        ?>
        <table  class="table">
            <tr class="table-info">
                <th>NIK</th>
                <th>Nama</th>
                <th>Tanggal_bergabung</th>
                <th>Alamat</th>
                <th>Nomor_telepon</th>

            </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr class="table-success">
                <td><?php echo $row['NIK']; ?></td>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['Tanggal_bergabung']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td><?php echo $row['Nomor_telepon']; ?></td>
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
