<?php
include '../connection/conn.php';
if (isset($_POST['create'])) {
$kode_barang 	= $_POST['kode_barang'];
$nama_barang 	= $_POST['nama_barang'];
$harga 		 	= $_POST['harga'];
$stok 		 	= $_POST['stok'];
$id_jenis 		= $_POST['id_jenis'];
$id_merk 		= $_POST['id_merk'];
$kode_supplier 	= $_POST['kode_supplier'];

$cek	= mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang = '$kode_barang' ");
if (mysqli_num_rows($cek) > 0) {
	header('location:../?page=data_barang&error');
}else{
	mysqli_query($conn, "INSERT INTO barang VALUES ('', '$kode_barang', '$nama_barang', '$harga', '$stok', '$id_jenis', '$id_merk', '$kode_supplier')") or die(mysqli_error($conn));
	header('location:../?page=data_barang&sukses_input');
}

}
?>