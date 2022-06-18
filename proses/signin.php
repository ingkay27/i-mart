<?php
session_start();
include '../connection/conn.php';

if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];


$cek = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

$data = mysqli_fetch_array($cek);


if($data < 1){
    header("location:../signin/signin.php?error=username/password anda salah!");
}else {
    $_SESSION['nama'] = $data['nama_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];

    header('location:../?login_sukses');
}
}
?>