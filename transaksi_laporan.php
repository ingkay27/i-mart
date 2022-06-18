<?php 
	
	require "session.php";
	require "konek.php";

	$data = mysqli_query($conn, "SELECT * FROM transaksi");

	if (isset($_POST['cari'])) {
		$key = $_POST['keyword'];
		$data = mysqli_query($conn, "SELECT * FROM transaksi WHERE no_transaksi LIKE '%$key%' || nama_kasir LIKE '%$key%'");
	}

 ?>

<?php require "header.php" ?>	
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="text-dark">LAPORAN TRANSAKSI</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content-header">
			<div class="container">
				<div class="row">
					<a href="transaksi_laporan.php">
						<button class="btn btn-secondary">
							Refresh
						</button>
					</a>
					<table class="table">
						<tr>
							<th>id transaksi</th>
							<th>no transaksi</th>
							<th>total transaksi</th>
							<th>bayar transaksi</th>
							<th>kembali transaksi</th>
							<th>tanggal transaksi</th>
							<th>nama_kasir</th>
							<th>action</th>
						</tr>
						<?php foreach ($data as $key) :?>
							<tr>
								<td><?= $key['id_transaksi'] ?></td>
								<td><?= $key['no_transaksi'] ?></td>
								<td><?= $key['total_transaksi'] ?></td>
								<td><?= $key['bayar_transaksi'] ?></td>
								<td><?= $key['kembali_transaksi'] ?></td>
								<td><?= $key['tanggal_transaksi'] ?></td>
								<td><?= $key['nama_kasir'] ?></td>
								<td>
									<a href="transaksi_struk.php?id=<?= $key['id_transaksi'] ?>" target="_blank">
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