<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_komentar";
$koneksi = mysqli_connect($host, $user, $password, $database);

// Menyimpan data komentar ke database
$nama = $_POST["nama"];
$komentar = $_POST["komentar"];
$timestamp = $_POST["timestamp"];
$query = "INSERT INTO komentar (nama, komentar, timestamp) VALUES ('$nama', '$komentar', $timestamp)";
mysqli_query($koneksi, $query);
?>
