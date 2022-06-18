<head>
    <title>Update data barang</title>
</head>

<?php
if (isset($_GET['kode_barang'])) {
$kode = $_GET['kode_barang'];
$query = mysqli_query($conn, "SELECT * FROM barang WHERE kode_barang = '$kode' ");
$data = mysqli_fetch_array($query);

$query2 = mysqli_query($conn, "SELECT * FROM jenis_barang");
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
                        <h4 class="page-title text-uppercase font-medium font-14">Update Data Barang</h4>
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
                                <h2 class="mb-3">Update Data Barang</h2>

                                <?php if (isset($_GET['gagal_update_barang'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Data barang berhasil di update!
                                    </div>
                                <?php } ?>
                                <form action="./proses/update_barang.php" method="POST">
                                    <div>
                                        <label><b>Kode Barang</b></label>
                                        <input type="text" name="kode_barang" class="form-control mb-3" value="<?php echo $data['kode_barang']; ?>">
                                    </div>
                                    <div>
                                        <label><b>Nama Barang</b></label>
                                        <input type="text" name="nama_barang" class="form-control mb-3" value="<?php echo $data['nama_barang']; ?>">
                                    </div>
                                    <div>
                                        <label><b>Harga</b></label>
                                        <input type="text" name="harga" class="form-control mb-3" value="<?php echo $data['harga']; ?>">
                                    </div>
                                    <div>
                                        <label><b>Jenis Barang</b></label>
                                        <select class="form-control mb-3" name="jenis_barang">
                                            <?php
                                               while ($data2 = mysqli_fetch_array($query2)) { ?>
                                                    <option value="<?php echo $data2['id_jenis']; ?>"><?php echo $data2['jenis_barang']; ?></option>         
                                               <?php } 
                                            ?>
                                        </select>
                                    </div>
                                    <div>
                                        <label><b>Stok</b></label>
                                        <input type="text" name="stok" class="form-control mb-3" value="<?php echo $data['stok']; ?>">
                                    </div>

                                    <button class="btn btn-info" name="update">Update</button>
                                    <a href="?page=data_barang" class="btn btn-white border-info">Cancel</a>
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