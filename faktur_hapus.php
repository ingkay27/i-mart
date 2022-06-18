<?php 
	
	require 'session.php';
	require 'konek.php';

	$kode = $_GET['kode'];

	$faktur = $_SESSION['faktur'];

	$k = array_filter($faktur, function ($var) use ($kode) {
		return ($var['kode']==$kode);
	});

	foreach ($k as $key => $value) {
		unset($_SESSION['faktur'][$key]);
	}

	$_SESSION['faktur'] = array_values($_SESSION['faktur']);

	header('Location: faktur.php');

 ?>