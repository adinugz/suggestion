<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_komentar";
$koneksi = mysqli_connect($host, $user, $password, $database);

// Menampilkan daftar komentar dari database
$query = "SELECT * FROM komentar ORDER BY timestamp DESC";
$result = mysqli_query($koneksi, $query);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<div class='komentar'>";
	echo "<h3>" . $row["nama"] . "</h3>";
	echo "<p>" . $row["komentar"] . "</p>";
	echo "<small>" . date("d M Y H:i:s", $row["timestamp"]) . "</small>";
	echo "</div>";
}
?>
