<?php
$mahasiswa = [

	["Gahasa Purba", "11419048", "TRPL", "11419048@del.ac.id"],
	["Zico Aritonang", "11419049", "TRPL", "11419049@del.ac.id"],
	["Timothy Aritonang", "11419050", "TRPL", "11419050@del.ac.id"],
	["Josua Simbolon", "11419051", "TRPL", "11419051@del.ac.id"],
	["Jerikho Silaban", "11419052", "TRPL", "11419052@del.ac.id"],

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs) : ?>
	<ul>
		<li>Nama :<?= $mhs[0]; ?></li>
		<li>NIM :<?= $mhs[1]; ?></li>
		<li>Prodi :<?= $mhs[2]; ?></li>
		<li>Email :<?= $mhs[3]; ?></li>
	</ul>
	<?php endforeach; ?>
</body>
</html>