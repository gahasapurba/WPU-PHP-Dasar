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

	function tambah($data) {
		
		global $conn;

		// Ambil data dari tiap elemen dalam form
		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$nim = htmlspecialchars($data["nim"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);

		// Upload Gambar
		$gambar = upload();
		if ( !$gambar ) {
			return false;
		}

		// Query insert data
		$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function upload () {

		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

		// Cek apakah tidak ada gambar yang di upload
		if ( $error === 4 ) {
			echo "<script>
					alert('Pilih Gambar Terlebih Dahulu !');
				  </script>";
			return false;
		}

		// Cek apakah yang diupload adalah gambar
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
			echo "<script>
					alert('Yang Anda Upload Bukan Gambar !');
				  </script>";
			return false;
		}

		// Cek jika ukurannya terlalu besar
		if( $ukuranFile > 1000000 ) {
			echo "<script>
					alert('Ukuran Gambar Terlalu Besar !');
				  </script>";
			return false;
		}

		// Lolos pengecekan, gambar siap diupload
		// Generate nama gambar baru
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;

		move_uploaded_file($tmpName, 'upload/' . $namaFileBaru);

		return $namaFileBaru;

	}

	function hapus($id) {

		global $conn;
		mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	function ubah($data) {
		global $conn;

		// Ambil data dari tiap elemen dalam form
		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$nim = htmlspecialchars($data["nim"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);

		// Cek apakah user pilih gambar baru atau tidak
		if( $_FILES['gambar']['error'] === 4 ) {
			$gambar = $gambarLama;
		} else {
			$gambar = upload();
		}

		// Query insert data
		$query = "UPDATE mahasiswa SET
					nama = '$nama',
					nim = '$nim',
					email = '$email',
					jurusan = '$jurusan',
					gambar = '$gambar'
					WHERE id = $id
				";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function cari($keyword) {
		$query = "SELECT * FROM mahasiswa 
					WHERE 
					nama LIKE '%$keyword%' OR
					nim LIKE '%$keyword%' OR
					email LIKE '%$keyword%' OR
					jurusan LIKE '%$keyword%' OR
					gambar LIKE '%$keyword%'
				";

		return query($query);
	}

?>