<head>
    <title>Data Barang</title>
</head>
<body>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Data Barang</h4>
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
                                <h2>Data Barang</h2>
                                <?php if (isset($_GET['error'])) { ?>
                                    <div class="alert alert-danger" id="alert">
                                        Gagal input data, dikarenakan kode yang diinputkan sudah tersedia!
                                    </div>
                                <?php } ?>
                                <form action="./proses/create_barang.php" method="POST">
                                    <input type="text" name="kode_barang" placeholder="kode barang" class="form-control mb-3">
                                    <input type="text" name="nama_barang" placeholder="nama barang" class="form-control mb-3">
                                    <input type="text" name="harga" placeholder="harga" class="form-control mb-3">
                                    <input type="text" name="stok" placeholder="stok" class="form-control mb-3">
                                    <select name="id_jenis" class="form-control mb-3" id="id_jenis" required>
                                        <option value="">Pilih</option>
                                          <?php 
                                          $sql=mysqli_query($conn,"SELECT * FROM jenis_barang");
                                          while ($data=mysqli_fetch_array($sql)) {
                                           ?>
                                           <option value="<?=$data['id_jenis']?>"><?=$data['jenis_barang']?></option> 
                                           <?php
                                         }
                                         ?>
                                    </select>
                                    <select name="id_merk" class="form-control mb-3" id="id_merk" required>
                                        <option value="">Pilih</option>
                                          <?php 
                                          $sql=mysqli_query($conn,"SELECT * FROM merk_barang");
                                          while ($data=mysqli_fetch_array($sql)) {
                                           ?>
                                           <option value="<?=$data['id_merk']?>"><?=$data['merk_barang']?></option> 
                                           <?php
                                         }
                                         ?>
                                    </select>
                                    <select name="kode_supplier" class="form-control mb-3" id="kode_supplier" required>
                                        <option value="">Pilih</option>
                                          <?php 
                                          $sql=mysqli_query($conn,"SELECT * FROM supplier");
                                          while ($data=mysqli_fetch_array($sql)) {
                                           ?>
                                           <option value="<?=$data['kode_supplier']?>"><?=$data['nama_supplier']?></option> 
                                           <?php
                                         }
                                         ?>
                                    </select>

                                    <button class="btn btn-info" name="create">Create</button>
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