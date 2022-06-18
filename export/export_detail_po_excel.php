<?php
include '../connection/conn.php';
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=detail_po.xls");
function rupiah($angka){
    
    $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
    return $hasil_rupiah;
 
}

if (isset($_GET['kode_po'])) {
$kode_po = $_GET['kode_po'];

$query   = mysqli_query($conn, "SELECT * FROM po WHERE kode_po = '$kode_po'");
$query2  = mysqli_query($conn, "SELECT * FROM detail_po as a,barang as b where a.kode_barang = b.kode_barang and a.kode_po = '$kode_po' ");

$data    = mysqli_fetch_array($query);


}
?>

<table class="table table-sm">
    <tr>
        <th colspan="6">Laporan Detail PO</th>
    </tr>
    <tr>
        <td><b>Kode Transaksi</b></td>
        <td><b>:</b></td>
        <td><?php echo $data['kode_po']; ?></td>
        <td><b>Nama Pemesan</b></td>
        <td><b>:</b></td>
        <td>HASAN for FRISKA</td>
    </tr>
    <tr>
        <td><b>Tgl Pembelian</b></td>
        <td><b>:</b></td>
        <td><?php echo $data['tgl_po']; ?></td>
        <td><b>Total Harga</b></td>
        <td><b>:</b></td>
        <td><?php echo rupiah($data['total_harga']); ?></td>
    </tr>
</table>

<table class="table table-sm table-bordered">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
    </tr>
    <?php
    $no = 1;
    while ($data2 = mysqli_fetch_array($query2)) { ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data2['kode_barang']; ?></td>
            <td><?php echo $data2['nama_barang']; ?></td>
            <td><?php echo $data2['harga']; ?></td>
            <td><?php echo $data2['qty']; ?></td>
            <td><?php echo $data2['harga'] * $data2['qty']; ?></td>
        </tr>
    <?php } ?>
    <tr>
        <th colspan="5" align="left">Total</th>
        <th><?php echo rupiah($data['total_harga']); ?></th>
    </tr>
</table>