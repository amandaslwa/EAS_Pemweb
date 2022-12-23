<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$nik = $_GET['NIK'];

// Ambil Data yang Dikirim dari Form
$lokasi = $_POST['lokasi'];


// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['submit'])){ 

	$query = "UPDATE pendaftar SET lokasi='".$lokasi."' WHERE NIK='".$nik."'";
	$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

	if($sql){ // Cek jika proses simpan ke database sukses atau tidak
		// Jika Sukses, Lakukan :
		header("location: list-pendaftar.php"); // Redirect ke halaman index.php
	}else{
		// Jika Gagal, Lakukan :
		echo "Maaf, Terjadi kesalahan saat mencoba untuk validasi data ke database.";
		echo "<br><a href='form-pendaftar.php'>Kembali Ke Form</a>";
	}
}
?>
