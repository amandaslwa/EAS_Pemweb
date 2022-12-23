<?php 
 
 include 'koneksi.php';

 session_start();
 
 $username = $_SESSION['username'];
 
?>

<html>
<head>
	<title>SPKK</title>
    <link rel="stylesheet" href="css/list.css">
</head>
<body> 
	<h1>Data Pendaftar</h1>
	<table id="list" border="1" width="100%">
	<tr>
		<th>Foto</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>Calon Jabatan</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM pendaftar"; // Query untuk menampilkan semua data pendaftar
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='./terupload/".$data['Pasfoto']."' width='100' height='100'></td>";
		echo "<td>".$data['NIK']."</td>";
		echo "<td>".$data['Nama']."</td>";
		echo "<td>".$data['jabatan']."</td>";
		echo "<td><a href='form-pendaftar.php?NIK=".$data['NIK']."'>Buka</a></td>";
		echo "<td><a href='proses-hapus.php?NIK=".$data['NIK']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>