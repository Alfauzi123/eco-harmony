<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'peduli_lingkungan';

// Melakukan koneksi ke database
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Memeriksa jika user tidak login dan melakukan redirect
if (!isset($_SESSION['username'])) {
	header('Location: front.php');
	exit;
}

// Menjalankan query untuk mengambil informasi dari database berdasarkan username
$stmt = $con->prepare('SELECT username, password FROM users WHERE username = ?');
$stmt->bind_param('s', $_SESSION['username']); // Menggunakan 's' karena username adalah string
$stmt->execute();
$stmt->bind_result($username, $password); // Mengambil hasil dari query
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile Page</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1>Website Title</h1>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</nav>
	<div class="content">
		<h2>Profile Page</h2>
		<div>
			<p>Your account details are below:</p>
			<table>
				<tr>
					<td>Username:</td>
					<td><?= $username ?></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?= $password ?></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
