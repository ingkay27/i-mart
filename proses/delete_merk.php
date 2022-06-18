<?php
include '../connection/conn.php';
if (isset($_GET['id_merk'])) {
$id = $_GET['id_merk'];
mysqli_query($conn, "DELETE FROM merk_barang WHERE id_merk = '$id' ");
header('location:../?page=merk_barang&sukses_hapus');
}
?>