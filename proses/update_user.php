<?php
include '../connection/conn.php';
if (isset($_POST['update'])) {
$id_user 	= $_POST['id_user'];
$nama_user	= $_POST['nama_user'];
$username	= $_POST['username'];
$password	= $_POST['password'];
$level		= $_POST['level'];

$cek		= mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' ");
if (mysqli_num_rows($cek) > 0){
	header('location:../?page=update_user&error&id_user='.$id_user);
}else{
	mysqli_query($conn, "UPDATE users SET nama_user = '$nama_user',
										  username  = '$username',
										  password  = '$password',
										  level     = '$level' WHERE id_user = '$id_user' ");
	header('location:../?page=data_user&sukses_update');
}
}
?>