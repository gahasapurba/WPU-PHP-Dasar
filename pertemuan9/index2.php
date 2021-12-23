<?php
// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() mengembalikan array numerik
// mysqli_fetch_assoc() mengembalikan array associative
// mysqli_fetch_array() mengembalikan array numerik dan associative
// mysqli_fetch_object() mengembalikan object

// while($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; ?>
		<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="">Ubah</a> | <a href="">Hapus</a>
				</td>
				<td>
					<img src="images/<?= $row["gambar"]; ?>" width="50" alt="">
				</td>
				<td><?= $row["nim"]; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["email"]; ?></td>
				<td><?= $row["jurusan"]; ?></td>
			</tr>
		<?php $i++; ?>
		<?php endwhile; ?>
	</table>
</body>
</html>