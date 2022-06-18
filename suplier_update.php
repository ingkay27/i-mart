<?php 

require "konek.php";
require "session.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM suplier WHERE id_suplier = '$id'");
$suplier = mysqli_fetch_assoc($data);

if (isset($_POST['kirim'])) {
     if (update_suplier($_POST) > 0) {
      echo "<script>
      alert('Data Berhasil Di Update');
      document.location.href = 'suplier.php';
      </script>";
     } else {
      echo "<script>
      alert('Data Gagal Di Update');
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
						<h1 class="text-dark">UPDATE SUPLIER</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content-header">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<form method="post" action="">
							<input type="hidden" name="id" value="<?= $suplier['id_suplier'] ?>">
				            <table class="table" >
				              <tr>
				                <td>Nama suplier</td>
				                <td>:</td>
				                <td><input type="text" name="nama_suplier"  class="form-control" autocomplete="off" required="" placeholder="masukan nama suplier"  value="<?= $suplier['nama_suplier']  ?>"></td>
				              </tr>
				              <tr>
				                <td>alamat suplier</td>
				                <td>:</td>
				                <td><textarea type="text" name="alamat_suplier"  class="form-control" autocomplete="off" required="" placeholder="masukan alamat suplier" ><?= $suplier['alamat_suplier']  ?></textarea></td>
				              </tr>
				              <tr>
				                <td>No handphone</td>
				                <td>:</td>
				                <td><input type="number" name="no_suplier"  class="form-control" autocomplete="off" required="" placeholder="masukan No Hp" value="<?= $suplier['no_suplier']  ?>"></td>
				              </tr>
				              <tr>
				                <td></td>
				                <td></td>
				                <td align="left"><button type="submit" class="btn btn-success" name="kirim">UPDATE</button></td>
				              </tr>
				            </table>
			          	</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require "footer.php" ?>