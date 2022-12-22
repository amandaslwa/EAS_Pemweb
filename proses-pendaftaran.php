<?php

include("koneksi.php");

echo "masuk";

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $pendidikan = $_POST['pendidikan'];
    $jabatan = $_POST['jabatan'];
    $ktp = $_FILES['KTP']['name'];
    $ktp_tmp = $_FILES['KTP']['tmp_name'];
    $pasfoto = $_FILES['pasfoto']['name'];
    $pasfoto_tmp = $_FILES['pasfoto']['tmp_name'];
    $cv = $_FILES['cv']['name'];
    $cv_tmp = $_FILES['cv']['tmp_name'];
      
    move_uploaded_file($ktp_tmp,"terupload/$ktp");
    move_uploaded_file($pasfoto_tmp,"terupload/$pasfoto");
    move_uploaded_file($cv_tmp,"terupload/$cv");

    // Proses simpan ke Database
    if ($pass === $cpass) {
      $sql = "INSERT INTO pendaftar (username, email, pass, nama, nik, tempatlahir, tanggallahir, jeniskelamin, alamat, pendidikan, jabatan, KTP, pasfoto, cv, status_pendaftaran) VALUE ('$username', '$email', '$pass', '$nama', '$nik', '$tempatlahir', '$tanggallahir', '$jeniskelamin', '$alamat', '$pendidikan', '$jabatan', '$ktp', '$pasfoto', '$cv', 'Menunggu Verifikasi')";
      $query = mysqli_query($connect, $sql);

      if( $query ) {
          // kalau berhasil alihkan ke halaman index.php dengan status=sukses
          header('Location: index.php?status=sukses');
      } else {
          // kalau gagal alihkan ke halaman indek.php dengan status=gagal
          header('Location: index.php?status=gagal');
      }
    }
    else {
      header('Location: daftar.php?status=salah');
    }
    

} else {
    die("Akses dilarang...");
}

?>