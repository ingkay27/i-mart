<?php 

require 'konek.php';

$id = $_GET['id'];


     if (delete_barang($id) > 0) {
      echo "<script>
      alert('Data Berhasil Di hapus');
      document.location.href = 'barang.php';
      </script>";
     } else {
      echo "<script>
      alert('Data Gagal Di hapus');
      </script>";
     }


 ?>