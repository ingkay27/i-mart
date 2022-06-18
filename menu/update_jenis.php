<head>
    <title>Jenis Barang</title>
</head>
<?php
if (isset($_GET['id_jenis'])) {
$id = $_GET['id_jenis'];
$query = mysqli_query($conn, "SELECT * FROM jenis_barang WHERE id_jenis = '$id' ");
$data = mysqli_fetch_array($query);
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
                        <h4 class="page-title text-uppercase font-medium font-14">Jenis Barang</h4>
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
                                <h2>Jenis Barang</h2>
                                <form action="./proses/update_jenis.php" method="POST">
                                    <input type="text" name="id_jenis" value="<?php echo $data['id_jenis']; ?>" readonly hidden>
                                    <input type="text" name="jenis_barang" value="<?php echo $data['jenis_barang']; ?>" class="form-control mb-3">
                                    <button class="btn btn-info" name="update">Update</button>
                                    <a href="?page=jenis_barang" class="btn btn-white border-info">Cancel</a>
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