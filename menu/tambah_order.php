<head>
    <title>Tambah Order</title>
</head>
<?php
if (isset($_GET['kode_barang'])) {
$kode_barang = $_GET['kode_barang'];
$query = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang = '$kode_barang' ");
$data  = mysqli_fetch_array($query);

$query2 = mysqli_query($conn, "SELECT * FROM po ORDER BY id_po DESC");
$data2  = mysqli_fetch_array($query2);
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
                        <h4 class="page-title text-uppercase font-medium font-14">Tambah Order</h4>
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
                                <h2>Tambah Order</h2>
                                <hr>
                                <?php if (isset($_GET['error'])) { ?>
                                    <div class="alert alert-danger" id="alert">
                                        Gagal tambah order, jumlah tidak boleh melebihi stok barang!!
                                    </div>
                                <?php } ?>
                                
                                <form action="./proses/tambah_order.php" method="POST">
                                    <input type="text" name="kode_po" class="form-control" readonly value="PO000<?php echo $data2['id_po'] + 1; ?>">
                                    <div class="mt-3">
                                        <label>Kode Barang</label>
                                        <input type="text" name="kode_barang" class="form-control" value="<?php echo $data['kode_barang']; ?>" readonly>
                                    </div>
                                    <div class="mt-3">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nama_barang" class="form-control" value="<?php echo $data['nama_barang']; ?>" readonly>
                                    </div>
                                    <div class="mt-3">
                                        <label>Stok Tersedia</label>
                                        <input type="text" name="stok" class="form-control" value="<?php echo $data['stok']; ?>" readonly="">
                                    </div>
                                    <div class="mt-3">
                                        <label>Harga</label>
                                        <input type="text" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" readonly>
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <label>Jumlah Barang</label>
                                        <input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah">
                                    </div>

                                    <button class="btn btn-info rounded-0" name="simpan">Simpan</button>
                                    <a href="./?page=po" class="btn btn-white border-info rounded-0">Cancel</a>
                                </form>
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