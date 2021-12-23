<?php
// date / Tanggal

	// echo date ("l, d-M-Y");

// time / Waktu

	// UNIX Timestamp / EPOCH Time = Detik yang sudah berlalu sejak 1 Januari 1970
	// echo time ();
	// echo date ("d M Y", time()+60*60*24*1000);

// mktime / Membuat Sendiri Detik

	// mktime(0,0,0,0,0,0);
	// Jam, Menit, Detik, Bulan, Tanggal, Tahun
	// echo date("l", mktime(0,0,0,3,20,2002));

// strtotime / 

	// echo strtotime("20 march 2002");

// Fungsi Lainnya di Manual di PHP.net
function salam($waktu = "Datang", $nama = "Administrator") {
	return "Selamat $waktu, $nama !";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<body>
	<h1><?php echo salam("Siang", "Gahasa"); ?></h1>
</body>
</html>