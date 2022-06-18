<?php
include '../connection/conn.php';
function rupiah($angka){
	
    $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
    return $hasil_rupiah;
 
}
function rp($angka){
	
    $hasil_rupiah = number_format($angka,0,',','.');
    return $hasil_rupiah;
 
}

if (isset($_GET['kode_po'])) {
$kode_po = $_GET['kode_po'];

$query   = mysqli_query($conn, "SELECT * FROM po WHERE kode_po = '$kode_po'");
$query2  = mysqli_query($conn, "SELECT * FROM detail_po as a,barang as b, supplier as s where a.kode_barang=b.kode_barang and b.kode_supplier=s.kode_supplier and a.kode_po='$kode_po' ");

$data    = mysqli_fetch_array($query);


}
?>
<link rel="stylesheet" href="../temp/bs4/bootstrap.min.css">
<body>
	<div class="text-right mt-5">
		<img src="../temp/img/superindo.png" width="30px" class="mr-2">
			<span style="font-size: 18pt;">Superindo Taman Palem</span> <br>
			<span class="mr-4">Jl. permata taman palem</span> <br>
			<span class="mr-5">Telp. (0741) -612673</span>
	</div>
	<p class="mt-3">Berikut ini kami sampaikan terkai Order pada tanggal <?php echo $data['tgl_po']; ?> untuk selanjutnya besok di kirim.</p>
	<table class="table col-sm-8">
		<tr>
			<td>Kode po</td>
			<td>:</td>
			<td><?php echo $kode_po; ?></td>
		</tr>
		<tr>
			<td>Tgl po</td>
			<td>:</td>
			<td><?php echo $data['tgl_po']; ?></td>
		</tr>
	</table>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Supplier</th>
			<th>Qty</th>
			<th>Harga</th>
			<th>Jumlah</th>
		</tr>
		<?php
		$no = 1;
		while ($data2 = mysqli_fetch_array($query2)) { ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data2['kode_barang']; ?></td>
				<td><?php echo $data2['nama_barang']; ?></td>
				<td><?php echo $data2['nama_supplier']; ?></td>
				<td><?php echo $data2['qty']; ?></td>
				<td><?php echo $data2['harga']; ?></td>
				<td><?php echo rp($data2['qty'] * $data2['harga']); ?></td>
			</tr>
		<?php } ?>
		<tr>
			<th colspan="6" align="left">Total</th>
			<td><?php echo rupiah($data['total_harga']); ?></td>
		</tr>
	</table>

	<div class="text-right mt-5">
		<span>Jakarta, <?php echo date('d/m/Y'); ?></span> 
		<br><br><br>
		<span class="mr-2">Hormat Kami,</span>
		<br>
		<span>Pt.Lion Superindo</span>
	</div>

	<script type="text/javascript">
		window.print();
	</script>
</body>