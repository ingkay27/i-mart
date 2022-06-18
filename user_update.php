<?php 

require "konek.php";
require "session.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
$user = mysqli_fetch_assoc($data);

if (isset($_POST['kirim'])) {
     if (update_user($_POST) > 0) {
      echo "<script>
      alert('Data Berhasil Di Update');
      document.location.href = 'user.php';
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
						<h1 class="text-dark">EDIT ACCOUNT</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content-header">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<form method="post" action="">
							<input type="hidden" name="id" value="<?= $user['id_user'] ?>">
				            <table class="table" >
				              <tr>
				                <td>username</td>
				                <td>:</td>
				                <td><input type="text" name="username"  class="form-control" autocomplete="off" required=""   value="<?= $user['username']  ?>" readonly></td>
				              </tr>
				              <tr>
				                <td>password</td>
				                <td>:</td>
				                <td><input type="text" name="password"  class="form-control" autocomplete="off" required="" placeholder="masukan alamat user" value="<?= $user['password']  ?>"></td>
				              </tr>
				              <tr>
				                <td>No handphone</td>
				                <td>:</td>
				                <td>
				                	<select class="form-control" name="level">
				                		<option value="<?= $user['level']  ?>"">
				                			<?= $user['level']  ?>
				                		</option>
				                		<option value="admin">Admin</option>
				                		<option value="officer">Officer</option>
				                	</select>
				                </td>
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