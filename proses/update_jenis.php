<?php
include '../connection/conn.php';
if (isset($_POST['update'])) {
$id = $_POST['id_jenis'];
$jenis_barang = $_POST['jenis_barang'];

$query = mysqli_query($conn, "UPDATE jenis_barang SET jenis_barang = '$jenis_barang' WHERE id_jenis = '$id' ");
if (!$query) {
	header('location:../?page=update_jenis&id_jenis=$id');
}else{
	header('location:../?page=jenis_barang&sukses_update');
}
}
?>