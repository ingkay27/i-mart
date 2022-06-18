<?php 
	require "session.php";
	require "konek.php";

	$data = mysqli_query($conn, "SELECT * FROM user");

	if (isset($_POST['cari'])) {
		$key = $_POST['keyword'];
		$data = mysqli_query($conn, "SELECT * FROM user WHERE id_user LIKE '%$key%' || username LIKE '%$key%' || level LIKE '%$key%'");
	}


 ?>

<?php require "header.php" ?>	
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="text-dark">USER MANAJEMENT</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content-header">
			<div class="container">
				<div class="row">
					<a href="user_input.php">
						<button class="btn btn-success">
							<i class="fas fa-user-plus"></i>
						</button>
					</a>
					&nbsp
					<a href="user.php">
						<button class="btn btn-secondary">
							<i class="fas fa-sync-alt"></i>
						</button>
					</a>
					<table class="table">
						<tr>
							<th>id user</th>
							<th>username</th>
							<th>password</th>
							<th>level</th>
							<th>Action</th>
						</tr>
						<?php foreach ($data as $key) :?>
							<tr>
								<td><?= $key['id_user'] ?></td>
								<td><?= $key['username'] ?></td>
								<td><?= $key['password'] ?></td>
								<td><?= $key['level'] ?></td>
								<td>
									<a href="userh.php?id=<?= $key['id_user'] ?>">
										<button class="btn btn-danger" onclick='return confirm("Anda yakin ingin menghapus data ini??")'>
											<i class="fas fa-trash"></i>
										</button>
									</a>
									<a href="user_update.php?id=<?= $key['id_user'] ?>">
										<button class="btn btn-primary">
											<i class="fas fa-edit"></i>
										</button>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php require "footer.php" ?>	