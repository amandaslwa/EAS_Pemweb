<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data nik yang dikirim oleh index.php melalui URL
$nik = $_GET['nik'];

// Query untuk menampilkan data pendaftar berdasarkan nik yang dikirim
$query = "SELECT * FROM pendaftar WHERE nik='".$nik."'";
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("images/".$data['foto'])) // Jika foto ada
	unlink("images/".$data['foto']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data pendaftar berdasarkan nik yang dikirim
$query2 = "DELETE FROM pendaftar WHERE nik='".$nik."'";
$sql2 = mysqli_query($connect, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: index.php"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
