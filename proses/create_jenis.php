<?php
include '../connection/conn.php';
if (isset($_POST['create'])) {
$jenis_barang = $_POST['jenis_barang'];

mysqli_query($conn, "INSERT INTO jenis_barang VALUES ('','$jenis_barang')");
header('location:../?page=jenis_barang');
}
?>