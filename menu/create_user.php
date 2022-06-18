<head>
    <title>Jenis Barang</title>
</head>
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
                                <?php if (isset($_GET['error'])) { ?>
                                    <div class="alert alert-danger" id="alert">
                                        Data user gagal di tambahkan, karena username sudah digunakan!
                                    </div>
                                <?php } ?>
                                <form action="./proses/create_user.php" method="POST">
                                    <div>
                                        <label>Nama User</label>
                                        <input type="text" name="nama_user" placeholder="Nama User" class="form-control mb-3" required>
                                    </div>
                                    <div>
                                        <label>Username</label>
                                        <input type="text" name="username" placeholder="Username" class="form-control mb-3" required>
                                    </div>
                                    <div>
                                        <label>Password</label>
                                        <input type="text" name="password" placeholder="Password" class="form-control mb-3" required>
                                    </div>
                                    <div>
                                        <label>Level</label>
                                        <select class="form-control" name="level" required>
                                            <option value="">- Level -</option>
                                            <option value="admin">admin</option>
                                            <option value="petugas gudang">petugas gudang</option>
                                            <option value="manajer">manajer</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-info mt-3" name="create">Create</button>
                                    <a href="?page=data_user" class="btn btn-white border-info mt-3">Cancel</a>
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