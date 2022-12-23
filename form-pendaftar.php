<html>
<head>
	<title>SPKK</title>
    <link rel="stylesheet" href="css/styleindex.css">
</head>
<body style="background-color:#FDD4FF">
	<h1>Form Data Pendaftar</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$nik = $_GET['NIK'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM pendaftar WHERE NIK='".$nik."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<div class=formContainer>
		<form method="post" action="proses-validasi.php?NIK=<?php echo $nik; ?>" enctype="multipart/form-data">
		<table cellpadding="8">
		<tr>
			<td>Nama</td>
			<td><input type="text"   minlength="3" maxlength="50" size="100" name="nama" value="<?php echo $data['Nama']; ?>"></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td><input type="text"   minlength="3" maxlength="50" size="100" name="nik" value="<?php echo $data['NIK']; ?>"></td>
		</tr>
		<tr class=ttl>
			<td>Tempat,<br>Tanggal<br>Lahir</td>
			<td><input type="text"   minlength="3" maxlength="50" size="50" name="tempatlahir" value="<?php echo $data['tempatlahir']; ?>"></td>
			<td><input type="text"   minlength="3" maxlength="50" size="100" name="tanggallahir" value="<?php echo $data['tanggallahir']; ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="text"   minlength="3" maxlength="50" size="100" name="jenis_kelamin" value="<?php echo $data['jeniskelamin']; ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td>Pendidikan<br>Terakhir</td>
			<td><input type="text"   minlength="3" maxlength="50" size="100" name="pendidikan" value="<?php echo $data['pendidikan']; ?>"></td>
		</tr>
		<tr>
			<td>Calon Jabatan</td>
			<td><input type="text"   minlength="3" maxlength="50" size="100" name="jabatan" value="<?php echo $data['jabatan']; ?>"></td>
		</tr>
		<tr>
			<td>KTP</td>
			<td><?php echo "<img src='./terupload/".$data['KTP']."' width='100' height='100'>"?></td>
		</tr>
		<tr>
			<td>Pas Foto</td>
			<td><?php echo "<img src='./terupload/".$data['Pasfoto']."' width='100' height='100'>"?></td>
		</tr>
		<tr>
			<td>CV</td>
			<td><?php echo "<img src='./terupload/".$data['CV']."' width='100' height='100'>"?></td>
		</tr>
		<tr>
			<td>Lokasi</td>
			<td><textarea name="lokasi"><?php echo $data['lokasi']; ?></textarea></td>
		</tr>
		</table>
		
		<hr>
		<input  name="submit" type="submit" class="btn btn-primary" value="Validasi">
		<a href="list-pendaftar.php"><input type="button" class="btn btn-primary" value="Batal"></a>
		</form>
	</div>
</body>
</html>
