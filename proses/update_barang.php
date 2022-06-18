<?php
include '../connection/conn.php';
if (isset($_POST['update'])) {
$kode_barang 	= $_POST['kode_barang'];
$nama_barang 	= $_POST['nama_barang'];
$harga			= $_POST['harga'];
$jenis_barang	= $_POST['jenis_barang'];
$stok			= $_POST['stok'];

$update			= mysqli_query($conn, "UPDATE barang SET nama_barang = '$nama_barang',
														 harga = '$harga',
														 id_jenis = '$jenis_barang',
														 stok = '$stok' WHERE kode_barang = '$kode_barang' ");
if (!$update) {
	header("location:../?page=update_barang&kode_barang=$kode_barang&gagal_update_barang");
}else{
	header("location:../?page=data_barang&sukses_update_barang");
}

}
?>