<?php
include '../connection/conn.php';
if (isset($_GET['id_supplier'])) {
$id = $_GET['id_supplier'];
mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier = '$id' ");
header('location:../?page=supplier&sukses_hapus');
}
?>