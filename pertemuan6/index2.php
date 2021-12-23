<?php
// Array Associative
// Definisinya sam seperti array numerik, kecuali
// Key nya adalah string yang kita buat sendiri

$mahasiswa = [

	[
		"nama" => "Gahasa Purba", 
		"nim" => "11419048", 
		"prodi" => "TRPL", 
		"email" => "11419048@del.ac.id",
		"gambar" => "1.jpg"
	],
	
	[
		"nama" => "Zico Aritonang", 
		"nim" => "11419049", 
		"prodi" => "TRPL", 
		"email" => "11419049@del.ac.id",
		"gambar" => "2.jpg"
	],

	[
		"nama" => "Timothy Aritonang", 
		"nim" => "11419050", 
		"prodi" => "TRPL", 
		"email" => "11419050@del.ac.id",
		"gambar" => "3.jpg"
	],

	[
		"nama" => "Josua Simbolon", 
		"nim" => "11419051", 
		"prodi" => "TRPL", 
		"email" => "11419051@del.ac.id",
		"gambar" => "4.jpg"
	],

	[
		"nama" => "Jerikho Silaban", 
		"nim" => "11419052", 
		"prodi" => "TRPL", 
		"email" => "11419052@del.ac.id",
		"gambar" => "5.jpg"
	]

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
			<li>
				<img src="images/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama :<?= $mhs["nama"]; ?></li>
			<li>NIM :<?= $mhs["nim"]; ?></li>
			<li>Prodi :<?= $mhs["prodi"]; ?></li>
			<li>Email :<?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>