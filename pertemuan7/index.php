<?php

// Variable Scope / Lingkup Variabel

// $x = 10;

// function tampilx() {
// 	global $x;
// 	echo $x;
// }

// tampilx();

// Superglobals / Variable global milik php / merupakan array associative

// var_dump($_GET);
// echo "<br>";
// var_dump($_POST);
// echo "<br>";
// var_dump($_SERVER);
// echo "<br>";
// echo "<br>";
// echo $_SERVER["SERVER_NAME"];

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
	<ul>
		<?php foreach($mahasiswa as $mhs) : ?>
			<li>
				<a href="index2.php?
				nama=<?= $mhs["nama"]; ?>&
				nim=<?= $mhs["nim"]; ?>&
				prodi=<?= $mhs["prodi"]; ?>&
				email=<?= $mhs["email"]; ?>&
				gambar=<?= $mhs["gambar"]; ?>">
					<?= $mhs["nama"]; ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>