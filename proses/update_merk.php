<?php
include '../connection/conn.php';
if (isset($_POST['update'])) {
$id = $_POST['id_merk'];
$merk_barang = $_POST['merk_barang'];

$query = mysqli_query($conn, "UPDATE merk_barang SET merk_barang = '$merk_barang' WHERE id_merk = '$id' ");
if (!$query) {
	header('location:../?page=update_merk&id_jenis=$id');
}else{
	header('location:../?page=merk_barang&sukses_update');
}
}
?>