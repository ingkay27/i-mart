<?php 
	
	require 'session.php';
	require 'konek.php';

	$kode = $_GET['kode'];

	$chart = $_SESSION['chart'];

	$k = array_filter($chart, function ($var) use ($kode) {
		return ($var['kode']==$kode);
	});

	foreach ($k as $key => $value) {
		unset($_SESSION['chart'][$key]);
	}

	$_SESSION['chart'] = array_values($_SESSION['chart']);

	header('Location: transaksi.php');

 ?>