<?php 

require "konek.php";
require "session.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang = '$id'");
$barang = mysqli_fetch_assoc($data);

if (isset($_POST['kirim'])) {
     if (update_barang($_POST) > 0) {
      echo "<script>
      alert('Data Berhasil Di Update');
      document.location.href = 'barang.php';
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
						<h1 class="text-dark">UPDATE BARANG</h1>
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
				                <td>Kode barang</td>
				                <td>:</td>
				                <td><input type="text" name="kode_barang"  class="form-control" autocomplete="off" required="" placeholder="masukan kode barang (max 5 karakter)" value="<?= $barang['kode_barang'] ?>" readonly></td>
				              </tr>
				              <tr>
				                <td>Nama barang</td>
				                <td>:</td>
				                <td><input type="text" name="nama_barang"  class="form-control" autocomplete="off" required="" placeholder="masukan nama barang" value="<?= $barang['nama_barang'] ?>"></td>
				              </tr>
				              <tr>
				                <td>Jenis barang</td>
				                <td>:</td>
				                <td><input type="text" name="jenis_barang"  class="form-control" autocomplete="off" required="" placeholder="masukan jenis barang" value="<?= $barang['jenis_barang'] ?>" ></td>
				              </tr>
				              <tr>
				                <td>Harga beli</td>
				                <td>:</td>
				                <td><input type="number" name="harga_beli"  class="form-control" autocomplete="off" required="" placeholder="masukan harga beli" value="<?= $barang['harga_beli'] ?>"></td>
				              </tr>
				              <tr>
				                <td>Harga jual</td>
				                <td>:</td>
				                <td><input type="number" name="harga_jual"  class="form-control" autocomplete="off" required="" placeholder="masukan harga jual" value="<?= $barang['harga_jual'] ?>"></td>
				              </tr>
				              <tr>
				                <td>stok</td>
				                <td>:</td>
				                <td><input type="number" name="stok"  class="form-control" autocomplete="off" required="" placeholder="masukan stok" value="<?= $barang['stok'] ?>"></td>
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