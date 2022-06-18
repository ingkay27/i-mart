<?php
include '../connection/conn.php';
if (isset($_GET['id_barang'])) {
$id = $_GET['id_barang'];
mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id' ");
header('location:../?page=data_barang&sukses_hapus');
}
?>