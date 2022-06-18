<head>
    <title>Purchase Order</title>
</head>
<?php
function rupiah($angka){
	
    $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
    return $hasil_rupiah;
 
}

if (isset($_GET['kode_po'])) {
$kode_po = $_GET['kode_po'];

$query   = mysqli_query($conn, "SELECT * FROM po WHERE kode_po = '$kode_po'");
$query2  = mysqli_query($conn, "SELECT * FROM detail_po as a,barang as b where a.kode_barang = b.kode_barang and a.kode_po = '$kode_po' ");

$data    = mysqli_fetch_array($query);


}
?>
<body>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Purchase Order</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- PRODUCTS YEARLY SALES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="card mx-auto w-100">
                            <div class="card-body">
                                <h2>Purchase Order</h2>
                                

                                <div class="text-right mt-4">
                                    <a href="./export/export_detail_po_pdf.php?kode_po=<?php echo $kode_po; ?>" target="_blank" class="bg-danger p-2" title="PDF"><i class="fas fa-file-pdf mb-4 text-white"></i></a>
                                    <a href="./export/export_detail_po_excel.php?kode_po=<?php echo $kode_po; ?>" target="_blank" class="bg-success p-2" title="EXCEL"><i class="fas fa-file-excel mb-4 text-white"></i></a>
                                </div>
                                <table class="table table-sm">
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
                                </table>

                                <table class="table table-sm col-sm-7 mt-5" >
                                    <tr>
                                        <td><b>Hormat Kami</b></td>
                                        <td><b>:</b></td>
                                        <td>Superindo Taman Palem</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">2020 &copy; Sistem Inventory & Pemesanan Superindo</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
</body>