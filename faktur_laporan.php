<?php 
	
	require "session.php";
	require "konek.php";

	$data = mysqli_query($conn, "SELECT * FROM faktur");

	if (isset($_POST['cari'])) {
		$key = $_POST['keyword'];
		$data = mysqli_query($conn, "SELECT * FROM faktur WHERE no_faktur LIKE '%$key%' || kasir LIKE '%$key%'");
	}

 ?>

<?php require "header.php" ?>	
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="text-dark">LAPORAN TAMBAH STOK</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content-header">
			<div class="container">
				<div class="row">
					<a href="faktur_laporan.php">
						<button class="btn btn-secondary">
							Refresh
						</button>
					</a>
					<table class="table">
						<tr>
							<th>id faktur</th>
							<th>no faktur</th>
							<th>total faktur</th>
							<th>bayar faktur</th>
							<th>kembali faktur</th>
							<th>tanggal faktur</th>
							<th>nama kasir</th>
							<th>id suplier</th>
							<th>action</th>
						</tr>
						<?php foreach ($data as $key) :?>
							<tr>
								<td><?= $key['id_faktur'] ?></td>
								<td><?= $key['no_faktur'] ?></td>
								<td><?= $key['total_faktur'] ?></td>
								<td><?= $key['bayar_faktur'] ?></td>
								<td><?= $key['kembali_faktur'] ?></td>
								<td><?= $key['tanggal_faktur'] ?></td>
								<td><?= $key['kasir'] ?></td>
								<td><?= $key['id_suplier'] ?></td>
								<td>
									<a href="faktur_struk.php?id=<?= $key['id_faktur'] ?>" target="_blank">
										<button class="btn btn-primary" >
											<i class="fas fa-print"></i>
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