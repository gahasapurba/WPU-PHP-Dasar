<?php

	session_start();

	if( isset($_SESSION["login"]) ) {
		header("Location: index.php");
		exit;
	}
	
	require 'functions.php';

	if( isset($_POST["login"]) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		// Cek Username
		if( mysqli_num_rows($result) === 1 ) {

			// Cek password
			$row = mysqli_fetch_assoc($result);
			if( password_verify($password, $row["password"]) ) {
				// Set Session
				$_SESSION["login"] = true;

				header("Location: index.php");
				exit;
			}

		}

		$error = true;

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Login</title>
</head>
<body>
	<h1>Halaman Login</h1>
	<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic;">Username / Password Salah</p>
	<?php endif; ?>
	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>
</body>
</html>