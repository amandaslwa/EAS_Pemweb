<?php

include("koneksi.php");

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM admin WHERE Username='$username' AND Password='$pass'";
    $result = mysqli_query($connect, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header('Location: list-pendaftar.php');
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>