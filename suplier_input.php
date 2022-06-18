<?php 

require "konek.php";
require "session.php";

if (isset($_POST['kirim'])) {
     if (input_suplier($_POST) > 0) {
      echo "<script>
      alert('Data Berhasil Di Masukan');
      document.location.href = 'suplier.php';
      </script>";
     } else {
      echo "<script>
      alert('Data Gagal Di Masukan');
      </script>";
     }
  }

 ?>

<?php require "header.php" ?>
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="text-dark">INPUT SUPLIER</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content-header">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<form method="post" action="">
				            <table class="table" >
				              <tr>
				                <td>Nama suplier</td>
				                <td>:</td>
				                <td><input type="text" name="nama_suplier"  class="form-control" autocomplete="off" required="" placeholder="masukan nama suplier"></td>
				              </tr>
				              <tr>
				                <td>alamat suplier</td>
				                <td>:</td>
				                <td><textarea type="text" name="alamat_suplier"  class="form-control" autocomplete="off" required="" placeholder="masukan alamat suplier"></textarea></td>
				              </tr>
				              <tr>
				                <td>No handphone</td>
				                <td>:</td>
				                <td><input type="number" name="no_suplier"  class="form-control" autocomplete="off" required="" placeholder="masukan No Hp"></td>
				              </tr>
				              <tr>
				                <td></td>
				                <td></td>
				                <td align="left"><button type="submit" class="btn btn-success" name="kirim">SIMPAN</button></td>
				              </tr>
				            </table>
			          	</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require "footer.php" ?>