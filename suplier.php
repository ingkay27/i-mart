<?php 
	require "session.php";
	require "konek.php";

	$data = mysqli_query($conn, "SELECT * FROM suplier");

	if (isset($_POST['cari'])) {
		$key = $_POST['keyword'];
		$data = mysqli_query($conn, "SELECT * FROM suplier WHERE nama_suplier LIKE '%$key%' || alamat_suplier LIKE '%$key%' || no_suplier LIKE '%$key%'");
	}

 ?>

<?php require "header.php" ?>	
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="text-dark">DATA SUPLIER</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content-header">
			<div class="container">
				<div class="row">
					<a href="suplier_input.php">
						<button class="btn btn-success">
							Tambah Data 
							<i class="fas fa-plus"></i>
						</button>
					</a>
					&nbsp
					<a href="suplier.php">
						<button class="btn btn-warning">
							<i class="fas fa-sync-alt"></i>
						</button>
					</a>
					<table class="table">
						<tr>
							<th>No</th>
							<th>Nama Suplier</th>
							<th>Alamat Suplier</th>
							<th>No Handphone</th>
							<th>Action</th>
						</tr>
						<?php $no = 1 ?>
						<?php foreach ($data as $key) :?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $key['nama_suplier'] ?></td>
								<td><?= $key['alamat_suplier'] ?></td>
								<td><?= $key['no_suplier'] ?></td>
								<td>
									<a href="suplierh.php?id=<?= $key['id_suplier'] ?>">
										<button class="btn btn-danger" onclick='return confirm("Anda yakin ingin menghapus data ini??")'>
											<i class="fas fa-trash"></i>
										</button>
									</a>
									<a href="suplier_update.php?id=<?= $key['id_suplier'] ?>">
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