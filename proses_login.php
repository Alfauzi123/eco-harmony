<?php
// Konfigurasi koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "peduli_lingkungan";

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi database berhasil!";
}             

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui formulir
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];
    
    // Query database untuk mendapatkan kata sandi yang terkait dengan $input_username
    $query = "SELECT password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "s", $input_username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $stored_password = $row['password'];
             echo $stored_password;
             echo $input_password;
            // Ganti ini dengan password_verify
            if ($input_password == $stored_password) {
                // Kata sandi cocok, atur sesi atau token otentikasi di sini
                session_start();
                $_SESSION['username'] = $input_username;
                header("Location: dashboard.php"); // Ganti ini dengan halaman setelah login
                exit;
            } else {
                // Kata sandi tidak cocok
                echo "Kata sandi salah.";
            }
        } else {
            // Pengguna tidak ditemukan  
            echo "Pengguna dengan username tersebut tidak ditemukan.";
        }
    } else {
        // Kesalahan dalam eksekusi query
        echo "Terjadi kesalahan dalam pemrosesan permintaan.mohon diperbaiki";
    }
}
?>

