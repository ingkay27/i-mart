<?php if (isset($_GET['id_supplier'])) {
$id = $_GET['id_supplier'];
$query = mysqli_query($conn, "SELECT * FROM supplier");
$data = mysqli_fetch_array($query);
} ?>
<head>
    <title>Supplier</title>
</head>
<body>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Supplier</h4>
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
                                <h2>Data Supplier</h2>
                                <form action="./proses/update_supplier.php" method="POST">
                                    <div class="mb-3">
                                        <label>Kode Supplier</label>
                                        <input type="text" name="kode_supplier" value="<?php echo $data['kode_supplier']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama Supplier</label>
                                        <input type="text" name="nama_supplier" value="<?php echo $data['nama_supplier']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>No.Telp.</label>
                                        <input type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="text" name="password" value="<?php echo $data['password']; ?>" class="form-control">
                                    </div>

                                    <button class="btn btn-info" name="update">Update</button>
                                    <a href="?page=supplier" class="btn btn-white border-info">Cancel</a>
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