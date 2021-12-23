<?php

session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() mengembalikan array numerik
// mysqli_fetch_assoc() mengembalikan array associative
// mysqli_fetch_array() mengembalikan array numerik dan associative
// mysqli_fetch_object() mengembalikan object

// Tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
	<style>
		.loader {
			width: 100px;
			position: absolute;
			top: 123px;
			left: 300px;
			z-index: -1;
			display: none;
		}

		@media print {
			.logout, .tambah, .form-cari, .aksi {
				display: none;
			}
		}
	</style>	
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>
	<h1>Daftar Mahasiswa</h1>
	<a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
	<br><br>
	<form action="" method="post" class="form-cari">
		<input type="text" name="keyword" id="keyword" size="40" placeholder="Masukkan Keyword Pencarian..." autocomplete="off" autofocus>
		<button type="submit" name="cari" id="tombol-cari">Cari !</button>
		<img src="images/loader.gif" class="loader">
	</form>
	<br><br>
	<div id="container">
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>No.</th>
				<th class="aksi">Aksi</th>
				<th>Gambar</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>
			<?php $i = 1; ?>
			<?php foreach( $mahasiswa as $row ) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td class="aksi">
						<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ?');">Hapus</a>
					</td>
					<td>
						<img src="upload/<?= $row["gambar"]; ?>" width="50" alt="">
					</td>
					<td><?= $row["nim"]; ?></td>
					<td><?= $row["nama"]; ?></td>
					<td><?= $row["email"]; ?></td>
					<td><?= $row["jurusan"]; ?></td>
				</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>
</body>
</html>