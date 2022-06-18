<?php
include '../connection/conn.php';
if (isset($_POST['create'])) {
$nama_user	= $_POST['nama_user'];
$username	= $_POST['username'];
$password	= $_POST['password'];
$level		= $_POST['level'];

$cek		= mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");
if (mysqli_num_rows($cek) > 0){
	header('location:../?page=create_user&error');
}else{
	mysqli_query($conn, "INSERT INTO users VALUES ('','$nama_user','$username','$password','$level') ");
	header('location:../?page=data_user&sukses_input');
}
}
?>