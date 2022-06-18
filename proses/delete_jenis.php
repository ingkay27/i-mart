<?php
include '../connection/conn.php';
if (isset($_GET['id_jenis'])) {
$id = $_GET['id_jenis'];
mysqli_query($conn, "DELETE FROM jenis_barang WHERE id_jenis = '$id' ");
header('location:../?page=jenis_barang&sukses_hapus_jenis');
}
?>