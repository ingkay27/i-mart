<?php
include '../connection/conn.php';
if (isset($_GET['kode_po'])) {
$kode_po = $_GET['kode_po'];
mysqli_query($conn, "DELETE FROM detail_po WHERE kode_po = '$kode_po' ");
mysqli_query($conn, "DELETE FROM po WHERE kode_po = '$kode_po' ");
header('location:../?page=po&sukses_hapus');
}
?>