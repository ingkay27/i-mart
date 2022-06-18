<?php 

require 'konek.php';

$id = $_GET['id'];


     if (delete_suplier($id) > 0) {
      echo "<script>
      alert('Data Berhasil Di hapus');
      document.location.href = 'suplier.php';
      </script>";
     } else {
      echo "<script>
      alert('Data Gagal Di hapus');
      </script>";
     }


 ?>