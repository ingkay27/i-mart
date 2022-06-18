<?php 
	
	require "session.php";
	require "konek.php";

	$data = mysqli_query($conn, "SELECT * FROM barang");

	if (isset($_POST['cari'])) {
		$key = $_POST['keyword'];
		$data = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang LIKE '%$key%' || nama_barang LIKE '%$key%' || jenis_barang LIKE '%$key%'");
	}

	if (isset($_POST['simpan'])) {
     if (input_barang($_POST) > 0) {
      echo "<script>
      alert('Data Berhasil Di Masukan');
      document.location.href = 'barang.php';
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
						<h1 class="text-dark">DATA BARANG</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="content-header">
			<div class="container">
				<div class="row">
					<button class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data
					</button>
					&nbsp
					<a href="barang.php">
						<button class="btn btn-warning">
							<i class="fas fa-sync-alt"></i>
						</button>
					</a>
					<table class="table">
						<tr>
							<th>kode barang</th>
							<th>nama barang</th>
							<th>jenis barang</th>
							<th>harga beli</th>
							<th>harga jual</th>
							<th>stok</th>
							<th>action</th>
						</tr>
						<?php foreach ($data as $key) :?>
							<tr>
								<td><?= $key['kode_barang'] ?></td>
								<td><?= $key['nama_barang'] ?></td>
								<td><?= $key['jenis_barang'] ?></td>
								<td><?= $key['harga_beli'] ?></td>
								<td><?= $key['harga_jual'] ?></td>
								<td><?= $key['stok'] ?></td>
								<td>
									<a href="barangh.php?id=<?= $key['kode_barang'] ?>">
										<button class="btn btn-danger" onclick='return confirm("Anda yakin ingin menghapus data ini??")'>
											<i class="fas fa-trash"></i>
										</button>
									</a>
									<a href="barang_update.php?id=<?= $key['kode_barang'] ?>">
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

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post">
          <div class="modal-body">
              <div class="form-group">
                <label>Kode Barang</label>
                <input type="text" name="kode_barang" class="form-control" autocomplete="off">
              </div>
              <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" autocomplete="off">
              </div>
              <div class="form-group">
                <label>Jenis Barang</label>
                <input type="text" name="jenis_barang" class="form-control" autocomplete="off">
              </div>
              <div class="form-group">
                <label>Harga Beli</label>
                <input type="number" name="harga_beli" class="form-control" autocomplete="off">
              </div>
              <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" class="form-control" autocomplete="off">
              </div>
              <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" autocomplete="off">
              </div>
              <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
              <button type="reset" class="btn btn-danger" >reset</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php require "footer.php" ?>	