<?php 
 
include 'koneksi.php';

session_start();

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SPPKK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/Logo.png"/>

	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="navbar">
        <div class="navbar nav-left">
            <div class="logo">
                <img src="images/Logo.png" alt="" width="70px"> 
            </div>
            <span class="title">SPPKK</span>
        </div>
        <div class="navbar nav-right">
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </div>

    <div class="main-content">
        <div class="content content-left">
          <h1 id="wlc" >Selamat Datang</h1>
          <p id="ctn" >Status pendaftaranmu adalah</p>
          <?php
            $query = "SELECT status_pendaftaran FROM pendaftar WHERE username='$username'"; // Query untuk menampilkan semua data pendaftar
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            if (!$sql) {
                echo 'Could not run query: ' . mysql_error();
                exit;
            }
            $row = mysqli_fetch_row($sql);
            if($row[0] == "Menunggu Verifikasi")
            {
                ?><a class="status" style="background-color: #f3cd5d;"><?php echo $row[0]; ?> </a> <?php
            }
            elseif($row[0] == "Lolos Berkas")
            {
                ?><a class="status"><?php echo $row[0]; ?> </a> 
                 <p id="ctn">Silahkan mengunduh kartu peserta dengan klik tombol di bawah ini</p>
                <button class="btn">Unduh</button><?php
            }
            elseif($row[0] == "Tidak Lolos")
            {
                ?><a class="status" style="background-color: #D95448;"><?php echo $row[0]; ?> </a> 
                 <p id="ctn">Mohon maaf, Anda tidak lolos seleksi</p><?php
            }
            ?>
          <p id="ctn">Untuk melihat detail pendaftaranmu, klik tombol di bawah ini</p>
          <button class="btn">Detail Data</button>
        </div>
    
        <img class="content content-right" src="images/fish.jpeg" alt="">
	
	
	<!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script> -->

</body>
</html>