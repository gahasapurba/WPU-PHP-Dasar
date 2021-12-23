// Ambil Elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// Tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {

	// Buat object ajax
	var xhr = new XMLHttpRequest();

	// Cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if( xhr.readyState == 4 && xhr.status == 200 ) {
			container.innerHTML = xhr.responseText;
		}
	}

	// Eksekusi Ajax
	xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
	xhr.send();

});