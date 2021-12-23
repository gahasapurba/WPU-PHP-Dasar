<?php

// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// STANDAR OUTPUT
// echo
// print
// print_r
// var_dump

echo 123;
echo "Gahasa";
echo 'Gahasa';
echo "Jum'at";

print 123;
print "Gahasa";
print 'Gahasa';
print "Jum'at";

print_r ("123");
print_r ("Gahasa");
print_r ('Gahasa');
print_r ("Jum'at");

var_dump (123);
var_dump ("Gahasa");
var_dump ('Gahasa');
var_dump ("Jum'at");

?>

<!--
Penulisan Sintaks PHP

1. PHP di dalam HTML
2. HTML di dalam PHP
-->

<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
	<h1>Halo <?php echo "Gahasa Purba"; ?></h1>
	<p>Ini adalah <?php echo "paragraf"; ?></p>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>PHP di dalam HTML</title>
</head>
<body>
	<?php echo "<h1>Gahasa Purba</h1>"; ?>
	<?php echo "<p>ini adalah paragraf</p>"; ?>
</body>
</html>

<!-- VARIABEL DAN TIPE DATA -->
<!-- Variabel -->
<!-- Tidak boleh diawali dengan angka tetapi dapat mengandung angka -->
<?php 
$nama = "Gahasa";
echo $nama;
echo "Halo nama saya $nama";
?>

<!-- Operator -->
<!-- Aritmatika -->
<!-- + - * / % -->
<?php 
$x = 10;
$y = 20;
echo 594434837 + 7387356487 ;
echo $x * $y;
?>

<!-- Penggabung String / Concatenation / Concat -->
<?php 
$nama_depan = "Gahasa";
$nama_belakang = "Purba";
echo $nama_depan . " " . $nama_belakang;
?>

<!-- Assignment -->
<!-- =, +=, -=, *=, /=, %=, .= -->
<?php 
$x = 1;
$x += 5;
$nama = "Gahasa";
$nama .= " ";
$nama .= "Purba";
echo $x;
echo $nama;
?>

<!-- Perbandingan -->
<!-- <, >, <=, >=, ==, != -->
<?php 
var_dump ( 1 > 5 );
var_dump ( 1 < 5 );
var_dump ( 1 == "1" );
?>

<!-- Identitas -->
<!-- ===, !== -->
<?php 
var_dump(1 === "1");
?>

<!-- Logika -->
<!-- &&, ||, ! -->
<?php 
$x = 4;
var_dump ($x > 5 && $x % 2 == 0);
var_dump ($x > 5 || $x % 2 == 0);
?>