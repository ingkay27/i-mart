<?php
include "../connection/conn.php";
$nama_barang = $_GET['nama_barang'];
$barang = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM barang WHERE nama_barang = '$nama_barang'"));
$data_barang = array( 'kode_barang'   	=>  $barang['kode_barang'],
              		  'stok'    		=>  $barang['stok'],
					  'harga'			=>  $barang['harga'],);
 echo json_encode($data_barang);
 ?>