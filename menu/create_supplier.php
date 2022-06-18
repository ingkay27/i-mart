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
                                <?php if (isset($_GET['error'])) { ?>
                                    <div class="alert alert-danger" id="alert">
                                        Gagal input data, dikarenakan kode yang diinputkan sudah tersedia!
                                    </div>
                                <?php } ?>
                                <form action="./proses/create_supplier.php" method="POST">
                                    <div class="mb-3">
                                        <label>Kode Supplier</label>
                                        <input type="text" name="kode_supplier" placeholder="Kode Supplier" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Nama Supplier</label>
                                        <input type="text" name="nama_supplier" placeholder="Nama Supplier" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>No.Telp.</label>
                                        <input type="text" name="no_telp" placeholder="No Telp" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <input type="text" name="username" placeholder="Username" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="text" name="password" placeholder="Password" class="form-control">
                                    </div>

                                    <button class="btn btn-info" name="create">Create</button>
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