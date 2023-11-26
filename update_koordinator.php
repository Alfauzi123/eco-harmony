<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Tanggal_bergabung = $_POST['Tanggal_bergabung'];
$Alamat = $_POST['Alamat'];
$Nomor_telepon = $_POST['Nomor_telepon'];

// Perbaiki query SQL untuk menghindari kesalahan sintaksis
$query = "UPDATE koordinator SET 
            Nama = '$Nama',
            Tanggal_bergabung = '$Tanggal_bergabung',
            Alamat = '$Alamat',
            Nomor_telepon = '$Nomor_telepon'
          WHERE NIK = '$NIK'";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    // Jika query berhasil dijalankan, maka arahkan kembali ke halaman koordinator.php
    header("location: koordinator.php");
} else {
    // Jika terjadi kesalahan dalam query, tampilkan pesan kesalahan
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
