<?php
include '../connection/conn.php';
if (isset($_GET['id_user'])) {
$id = $_GET['id_user'];
mysqli_query($conn, "DELETE FROM users WHERE id_user = '$id' ");
header('location:../?page=data_user&sukses_hapus');
}
?>