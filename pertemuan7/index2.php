<?php
// Cek apakah tidak ada di get
if( !isset($_GET["nama"]) ||
	!isset($_GET["nim"]) ||
	!isset($_GET["prodi"]) ||
	!isset($_GET["email"]) ||
	!isset($_GET["gambar"])) {
	
	// redirect
	header("Location: index.php");

	exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>

	<ul>
		<li>
			<img src="images/<?= $_GET["gambar"]; ?>">
		</li>
		<li>Nama :<?= $_GET["nama"]; ?></li>
		<li>NIM :<?= $_GET["nim"]; ?></li>
		<li>Prodi :<?= $_GET["prodi"]; ?></li>
		<li>Email :<?= $_GET["email"]; ?></li>
	</ul>

	<a href="index.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>