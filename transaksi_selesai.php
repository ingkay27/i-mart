<?php 

	require'session.php';
    require'konek.php';

    $total = $_POST['total'];
    $bayar = $_POST['bayar'];
    $nama_kasir = $_SESSION['username'];
    $nomor = rand(111111, 999999);
    $kembali = $bayar - $total;
    $tanggal = date('d-m-Y');

    foreach ($_SESSION['chart'] as $key => $value) {

        $kode_barang = $value['kode'];
        
        $data = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang = '$kode_barang'");
        $b = mysqli_fetch_assoc($data);

        $qty_hasil = $b['stok'] - $value['qty'];

        mysqli_query($conn, "UPDATE barang SET stok = '$qty_hasil' WHERE kode_barang = '$kode_barang'");
    }

    mysqli_query($conn, "INSERT INTO transaksi VALUES (NULL, '$nomor', '$total', '$bayar', '$kembali', '$tanggal', '$nama_kasir')");

    $id_transaksi = mysqli_insert_id($conn);


    foreach ($_SESSION['chart'] as $key => $value) {

    	$kode_barang = $value['kode'];
    	$harga = $value['harga'];
    	$qty = $value['qty'];
    	$tot = $harga * $qty;

    	mysqli_query($conn, "INSERT INTO transaksi_detail VALUES (NULL, '$id_transaksi', '$kode_barang', '$qty', '$tot')");
    }

    $_SESSION['chart'] = [];

    header("Location: transaksi_cetak.php?id=".$id_transaksi);

    


 ?>