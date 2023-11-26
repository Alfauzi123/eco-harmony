<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$ID_Kegiatan = $_POST['ID_Kegiatan'];
$Tanggal_Kegiatan = $_POST['Tanggal_Kegiatan'];
$Lokasi = $_POST['Lokasi'];
$Koordinator = $_POST['Koordinator'];
$Deskripsi_Kegiatan = $_POST['Deskripsi_Kegiatan'];
$Foto_kegiatan = $_POST['Foto_kegiatan'];
$Foto_donatur = $_POST['Foto_donatur'];
$Jumlah_anggota_hadir = $_POST['Jumlah_anggota_hadir'];

// Perbaiki query SQL untuk menghindari kesalahan sintaksis
$query = "UPDATE hasil_kegiatan SET 
            Tanggal_Kegiatan = '$Tanggal_Kegiatan',
            Lokasi = '$Lokasi',
            Koordinator = '$Koordinator',
            Deskripsi_Kegiatan = '$Deskripsi_Kegiatan',
            Foto_kegiatan = '$Foto_kegiatan',
            Foto_donatur = '$Foto_donatur',
            Jumlah_anggota_hadir = '$Jumlah_anggota_hadir'
          WHERE ID_Kegiatan = $ID_Kegiatan";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    // Jika query berhasil dijalankan, maka arahkan kembali ke halaman hasil_kegiatan.php
    header("location: hasil_kegiatan.php");
} else {
    // Jika terjadi kesalahan dalam query, tampilkan pesan kesalahan
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
