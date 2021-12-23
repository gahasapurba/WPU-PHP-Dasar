<?php 

// Pengulangan Pada Array
// for / foreach
$angka = [1,2,3,4,5,6,7,8,9,10];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index2</title>
	<style>
		div.kotak {
			width: 50px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			background-color: salmon;
			margin: 3px;
			float: left;
		}
		div.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php for( $i = 0; $i < count($angka); $i++) { ?>
		<div class="kotak"><?php echo $angka[$i]; ?></div>
	<?php } ?>
	<div class="clear"></div>
	<?php foreach($angka as $a) { ?>
		<div class="kotak"><?php echo $a; ?></div>
	<?php } ?>
	<div class="clear"></div>
	<?php foreach($angka as $a) : ?>
		<div class="kotak"><?= $a; ?></div>
	<?php endforeach; ?>
</body>
</html>