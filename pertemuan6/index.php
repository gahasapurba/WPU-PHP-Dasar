<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<style>
		div.kotak {
			background-color: #bada55;
			width: 30px;
			height: 30px;
			text-align: center;
			line-height: 30px;
			float: left;
			margin: 3px;
			transition: 1s;
		}
		div.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
		div.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php 
		$angka = [

			[1,2,3],
			[4,5,6],
			[7,8,9]

		]
	?>

	<?php foreach($angka as $a) : ?>
		<?php foreach($a as $b) : ?>
			<div class="kotak">
				<?= $b ?>
			</div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>
</body>
</html>