<?php
include '../connection/conn.php';
if (isset($_POST['update'])) {
$kode_supplier	= $_POST['kode_supplier'];
$nama_supplier	= $_POST['nama_supplier'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$no_telp		= $_POST['no_telp'];
$alamat			= $_POST['alamat'];

$query	= mysqli_query($conn, "UPDATE supplier SET nama_supplier = '$nama_supplier',
                                                   username = '$username',
                                                   password = '$password',
                                                   no_telp = '$no_telp',
                                                   alamat = '$alamat' WHERE kode_supplier = '$kode_supplier' ");
if (!$query) {
	header('location:../?page=update_supplier&error&kode_supplier=$kode_supplier');
}else{
	header('location:../?page=supplier&sukses_update');
}
}
?>