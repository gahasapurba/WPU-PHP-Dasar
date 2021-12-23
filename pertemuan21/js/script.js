$(document).ready(function() {
	// Hilangkan Tombol Cari
	$('#tombol-cari').hide();

	// Event ketika keyword ditulis
	$('#keyword').on('keyup', function() {
		// Munculkan icon loading
		$('.loader').show();
		// Ajax Menggunakan Load
		// $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

		// $.get()
		$.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {
			$('#container').html(data);
			$('.loader').hide();
		});
	});

});