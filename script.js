$(document).ready(function() {
	$("#form-komentar").submit(function(event) {
		event.preventDefault();
		var nama = $("#nama").val();
		var komentar = $("#komentar").val();
		var timestamp = Math.floor(Date.now() / 1000);
		$.ajax({
			url: "komentar.php",
			method: "POST",
			data: {nama: nama, komentar: komentar, timestamp: timestamp},
			success: function() {
				$("#daftar-komentar").load("daftar_komentar.php");
				$("#nama").val("");
				$("#komentar").val("");
			}
		});
	});
	setInterval(function() {
		$("#daftar-komentar").load("daftar_komentar.php");
	}, 1000);
});
