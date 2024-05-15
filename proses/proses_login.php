<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$kueri = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($kueri);
$row = mysqli_fetch_array($kueri);
if ($cek > 0) {
    $_SESSION['user_id'] = $row['user_id'];
    header('location:../index.php');
} else {
    header('location:../login.php?status=gagal');
}

?>