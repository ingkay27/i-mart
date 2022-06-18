<?php 

$conn = mysqli_connect('localhost', 'root', '', 'i-mart');

function input_barang($data){
	global $conn;

	$kode_barang = $data['kode_barang'];
	$nama_barang = $data['nama_barang'];
	$jenis_barang = $data['jenis_barang'];
	$harga_beli = $data['harga_beli'];
	$harga_jual = $data['harga_jual'];
	$stok = $data['stok'];

	mysqli_query($conn, "INSERT INTO barang VALUES (
		'$kode_barang',
		'$nama_barang',
		'$jenis_barang',
		'$harga_beli',
		'$harga_jual',
		'$stok'
		)");

	return mysqli_affected_rows($conn);
}

function delete_barang($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM barang WHERE kode_barang = '$id'");

	return mysqli_affected_rows($conn);
}

function update_barang($data){
	global $conn;

	$kode_barang = $data['kode_barang'];
	$nama_barang = $data['nama_barang'];
	$jenis_barang = $data['jenis_barang'];
	$harga_beli = $data['harga_beli'];
	$harga_jual = $data['harga_jual'];
	$stok = $data['stok'];

	mysqli_query($conn, "UPDATE barang SET 
			nama_barang = '$nama_barang', 
			jenis_barang = '$jenis_barang', 
			harga_beli = '$harga_beli', 
			harga_jual = '$harga_jual', 
			stok = '$stok' WHERE 
			kode_barang = '$kode_barang'
		");

	return mysqli_affected_rows($conn);
}

function input_suplier($data){
	global $conn;

	$nama_suplier = $data['nama_suplier'];
	$alamat_suplier = $data['alamat_suplier'];
	$no_suplier = $data['no_suplier'];

	mysqli_query($conn, "INSERT INTO suplier VALUES (
		'',
		'$nama_suplier',
		'$alamat_suplier',
		'$no_suplier'
		)");

	return mysqli_affected_rows($conn);
}

function delete_suplier($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM suplier WHERE id_suplier = '$id'");

	return mysqli_affected_rows($conn);
}

function update_suplier($data){
	global $conn;

	$id = $data['id'];
	$nama_suplier = $data['nama_suplier'];
	$alamat_suplier = $data['alamat_suplier'];
	$no_suplier = $data['no_suplier'];

	mysqli_query($conn, "UPDATE suplier SET 
			nama_suplier = '$nama_suplier', 
			alamat_suplier = '$alamat_suplier', 
			no_suplier = '$no_suplier'WHERE 
			id_suplier = '$id'
		");

	return mysqli_affected_rows($conn);
}

function input_user($data){
	global $conn;

	$username = $data['username'];
	$password = $data['password'];
	$level = $data['level'];
	$cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($cek)) {
		echo "<script>
	      alert('username telah digunakan!!');
	      </script>";
      	return false;
	}
	mysqli_query($conn, "INSERT INTO user VALUES (
		'',
		'$username',
		'$password',
		'$level'
		)");

	return mysqli_affected_rows($conn);
}

function delete_user($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");

	return mysqli_affected_rows($conn);
}

function update_user($data){
	global $conn;

	$id = $data['id'];
	$username = $data['username'];
	$password = $data['password'];
	$level = $data['level'];

	mysqli_query($conn, "UPDATE user SET  
			password = '$password', 
			level = '$level'WHERE 
			id_user = '$id'
		");

	return mysqli_affected_rows($conn);
}

function transaksi($data) {
		global $conn;

		$kode = $data['kode_barang'];
		$qty = $data['qty'];

		$barang = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang = '$kode'");
		$b = mysqli_fetch_assoc($barang);

		if ($qty > $b['stok']) {
            return false;
		}

		$barang = [
			"kode" => $b['kode_barang'],
			"nama" => $b['nama_barang'],
			"jenis" => $b['jenis_barang'],
			"harga" => $b['harga_jual'],
			"harga_beli" => $b['harga_beli'],
			"qty" => $qty
		];

		$_SESSION['chart'][] = $barang;


		return mysqli_affected_rows($conn);
	}

	function faktur($data) {
		global $conn;

		$kode = $data['kode_barang'];
		$qty = $data['qty'];

		$barang = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang = '$kode'");
		$b = mysqli_fetch_assoc($barang);


		$barang = [
			"kode" => $b['kode_barang'],
			"nama" => $b['nama_barang'],
			"jenis" => $b['jenis_barang'],
			"harga" => $b['harga_beli'],
			"qty" => $qty
		];

		$_SESSION['faktur'][] = $barang;


		return mysqli_affected_rows($conn);
	}

 ?>