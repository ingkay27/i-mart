<?php
include '../connection/conn.php';
if (isset($_POST['simpan'])) {
$kode_po 		= $_POST['kode_po'];
$kode_barang 	= $_POST['kode_barang'];
$nama_barang 	= $_POST['nama_barang'];
$stok			= $_POST['stok'];
$harga			= $_POST['harga'];
$jumlah 		= $_POST['jumlah_barang'];
$tgl_po 		= date('y-m-d');


$sisa 			= $stok - $jumlah;
$total 			= $harga * $jumlah;


if ($stok < $jumlah) {
	header('location:../?page=tambah_order&error&kode_barang='.$kode_barang);
}else{
	mysqli_query($conn, "INSERT INTO po VALUES ('','$kode_po','$tgl_po','$total') ");
	mysqli_query($conn, "INSERT INTO detail_po VALUES ('$kode_po','$kode_barang','$jumlah') ");
	mysqli_query($conn, "UPDATE barang SET stok = '$sisa' WHERE kode_barang = '$kode_barang' ");
	header('location:../?page=po&sukses_tambah');
}
}
?>