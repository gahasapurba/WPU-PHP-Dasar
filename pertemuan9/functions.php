<?php
	// Koneksi ke Database
	$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	// Ambil data dari tabel mahasiswa
	function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}
?>