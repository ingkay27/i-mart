<?php 

	require'session.php';
    require'konek.php';

    $total = $_POST['total'];
    $bayar = $_POST['bayar'];
    $suplier = $_POST['suplier'];
    $nama_kasir = $_SESSION['username'];
    $nomor = rand(111111, 999999);
    $kembali = $bayar - $total;
    $tanggal = date('d-m-Y');

    foreach ($_SESSION['faktur'] as $key => $value) {

        $kode_barang = $value['kode'];
        
        $data = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang = '$kode_barang'");
        $b = mysqli_fetch_assoc($data);

        $qty_hasil = $b['stok'] + $value['qty'];

        mysqli_query($conn, "UPDATE barang SET stok = '$qty_hasil' WHERE kode_barang = '$kode_barang'");
    }

    mysqli_query($conn, "INSERT INTO faktur VALUES (NULL, '$nomor', '$total', '$bayar', '$kembali', '$tanggal', '$nama_kasir', '$suplier')");

    $id_faktur = mysqli_insert_id($conn);

    foreach ($_SESSION['faktur'] as $key => $value) {

    	$kode_barang = $value['kode'];
    	$harga = $value['harga'];
    	$qty = $value['qty'];
    	$tot = $harga * $qty;

    	mysqli_query($conn, "INSERT INTO faktur_detail VALUES (NULL, '$id_faktur', '$kode_barang', '$qty', '$tot')");
    }

    $_SESSION['faktur'] = [];

    header("Location: faktur_cetak.php?id=".$id_faktur);

    


 ?>