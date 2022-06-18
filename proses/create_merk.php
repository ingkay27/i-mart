<?php
include '../connection/conn.php';
if (isset($_POST['create'])) {
$merk_barang = $_POST['merk_barang'];

mysqli_query($conn, "INSERT INTO merk_barang VALUES ('','$merk_barang')");
header('location:../?page=merk_barang&sukses_input');
}
?>