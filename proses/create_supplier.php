<?php
include '../connection/conn.php';
if (isset($_POST['create'])) {
$kode_supplier	= $_POST['kode_supplier'];
$nama_supplier	= $_POST['nama_supplier'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$no_telp		= $_POST['no_telp'];
$alamat			= $_POST['alamat'];

$cek	= mysqli_query($conn, "SELECT * FROM supplier WHERE kode_supplier = '$kode_supplier' ");
if (mysqli_num_rows($cek) > 0) {
	header('location:../?page=create_supplier&error');
}else{
	mysqli_query($conn, "INSERT INTO supplier VALUES ('','$kode_supplier','$nama_supplier','$username','$password','$no_telp','$alamat') ");
	header('location:../?page=supplier&sukses_input');
}
}
?>