<?php 
require 'session.php';
require 'konek.php';

$sum = 0;

$data = mysqli_query($conn, "SELECT * FROM barang ");

$suplier = mysqli_query($conn, "SELECT * FROM suplier ");

foreach ($_SESSION['faktur'] as $key => $value) {
            $sum += $value['qty'] * $value['harga'];
        }

if (isset($_POST['tambah_faktur'])) {
        if (faktur($_POST) > 0) {
                    header('Location: faktur.php');
                } else {
                    echo "
                        <script>
                            alert('Stok barang tidak mencukupi!!');
                        </script>
                    ";
                }
    }


 ?>

<?php require 'header.php'; ?>

	<div class="content-wrapper">
		<div class="content-header">
			<div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <h1>TAMBAH STOK</h1>
		            </div>                              
		        </div>
		        <hr>
		        <div class="row">
		            <div class="col-md-8">
		                <form method="post" action="">
		                    <div class="input-group">
		                        <select class="form-control" name="kode_barang" id="barang">
		                            <option readonly>Pilih Barang</option>
		                            <?php foreach ($data as $key ) :?>
		                            <option value="<?= $key['kode_barang'] ?>"><?= $key['nama_barang'] ?></option>
		                            <?php endforeach ?>
		                            </select> &nbsp
		                        <input type="number" name="qty" class="form-inline" placeholder="qty" required=""> 
		                        <span class="input-group-btn">
		                            <button class="btn btn-primary" type="submit" name="tambah_faktur">Tambah</button>
		                        </span>
		                    </div>
		                </form>
		                <br>
		                <table class="table table-bordered">
		                    <tr>
		                        <th>Nama</th>
		                        <th>Harga</th>
		                        <th>Qty</th>
		                        <th>Jumlah</th>
		                        <th>Action</th>
		                    </tr>
		                    <?php foreach ($_SESSION['faktur'] as $key => $value) :?>
		                        <tr>
		                            <td><?= $value['nama'] ?></td>
		                            <td><?= $value['harga'] ?></td>
		                            <td><?= $value['qty'] ?></td>
		                            <td align="right"><?= number_format($value['qty'] * $value['harga']) ?></td>
		                            <td><a href="faktur_hapus.php?kode=<?= $value['kode'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
		                        </tr>
		                    <?php endforeach ?>
		                </table>
		                <a href="faktur_reset.php" class="btn btn-danger">Reset</a>
		            </div>
		            <div class="col-md-4">
		                <h3>Total <?= number_format($sum) ?></h3>
		                <br>
		                <form method="post" action="faktur_selesai.php" id="form">
		                    <input type="hidden" name="total" value="<?= $sum ?>">
		                    <h4>Bayar : </h4> <br>
		                <div class="input-group">
		                    <h4>Rp. &nbsp</h4>
		                    <input type="number" name="bayar" id="bayar" class="form-control" required="" autocomplete="off">
		                </div> <br>
		                <div class="input-group">
		                    <select type="number" name="suplier"  class="form-control" required="" autocomplete="off">
		                    		<option readonly>~~ Pilih suplier ~~</option>
		                            <?php foreach ($suplier as $key ) :?>
		                            <option value="<?= $key['id_suplier'] ?>"><?= $key['nama_suplier'] ?></option>
		                            <?php endforeach ?>
		                            </select> &nbsp
		                    </select>
		                </div><br>
		                <button type="submit" class="btn btn-success" onclick="return confirm('Yakin Data Sudah Benar??');" id="btn">SUBMIT</button>
		                </form>
		                <br>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

<?php require 'footer.php'; ?>