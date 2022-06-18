<?php 

require "konek.php";
require "session.php";

if (isset($_POST['kirim'])) {
     if (input_user($_POST) > 0) {
      echo "<script>
      alert('Data Berhasil Di Masukan');
      document.location.href = 'user.php';
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
						<h1 class="text-dark">REGISTRATION</h1>
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
				                <td>username</td>
				                <td>:</td>
				                <td><input type="text" name="username"  class="form-control" autocomplete="off" required="" placeholder="masukan username"></td>
				              </tr>
				              <tr>
				                <td>password</td>
				                <td>:</td>
				                <td><input type="password" name="password"  class="form-control" autocomplete="off" required="" placeholder="masukan password"></td>
				              </tr>
				              <tr>
				                <td>level</td>
				                <td>:</td>
				                <td>
				                	<select class="form-control" name="level">
				                		<option value="admin">Admin</option>
				                		<option value="officer">Officer</option>
				                	</select>
				                </td>
				              </tr>
				              <tr>
				                <td></td>
				                <td></td>
				                <td align="left"><button type="submit" class="btn btn-success" name="kirim">SIGN UP</button></td>
				              </tr>
				            </table>
			          	</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require "footer.php" ?>