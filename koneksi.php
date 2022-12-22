<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$db = "eas_pweb2"; // Nama databasenya

$connect = mysqli_connect($host, $username, $password, $db); // Koneksi ke MySQL

if( !$connect ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>
