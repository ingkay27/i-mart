<head>
    <title>Order Barang</title>
</head>
<body>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Order Barang</h4>
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
                                <h2>Order Barang</h2>

                                <form action="" method="POST" class="ml-auto col-sm-10">
                                    <div class="input-group mb-3 ml-auto input col-sm-6">
                                            <input type="text" name="src"  class="src form-control border border-right-0 border-secondary" placeholder="Search..."required>
                                        <div class="input-group-append">
                                            <button class="btn btn-info rounded-0">Search</button>
                                        </div>
                                    </div>
                                </form>

                                <?php if (isset($_GET['sukses_update_barang'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Data barang berhasil di update!
                                    </div>
                                <?php } ?>

                                <table class="table table-bordered">
                                    <tr>
                                        <th class="p-2">No</th>
                                        <th class="p-2">Kode Barang</th>
                                        <th class="p-2">Nama Barang</th>
                                        <th class="p-2">Harga</th>
                                        <th class="p-2">Stok</th>
                                        <th class="p-2">Action</th>
                                    </tr>
                                    <?php
                                        $default    = mysqli_query($conn, "SELECT * FROM barang");
                                        if (isset($_POST['src'])) {
                                            $src    = $_POST['src'];
                                            $query  = mysqli_query($conn, "SELECT * FROM barang WHERE nama_barang LIKE '%".$src."%' ");
                                            if (mysqli_num_rows($query) < 1) {
                                                echo "
                                                <tr align='center'>
                                                    <th colspan='6'>Data tidak ditemukan!!</th>
                                                </tr>
                                                ";
                                            }else{
                                                $no = 1;
                                                while ($data = mysqli_fetch_array($query)) { ?>
                                                    <tr>
                                                        <td class="p-2"><?php echo $no++; ?></td>
                                                        <td class="p-2"><?php echo $data['kode_barang']; ?></td>
                                                        <td class="p-2"><?php echo $data['nama_barang']; ?></td>
                                                        <td class="p-2"><?php echo $data['harga']; ?></td>
                                                        <td class="p-2"><?php echo $data['stok']; ?></td>
                                                        <td class="p-2" align="center"><a href="?page=tambah_order&kode_barang=<?php echo $data['kode_barang']; ?>" class="btn btn-success btn-sm text-white">Pilih</a></td>
                                                    </tr>
                                                <?php } 
                                            }
                                        }else{ 
                                            $no = 1;
                                                while ($data = mysqli_fetch_array($default)) { ?>
                                                    <tr>
                                                        <td class="p-2" align="center"><?php echo $no++; ?></td>
                                                        <td class="p-2"><?php echo $data['kode_barang']; ?></td>
                                                        <td class="p-2"><?php echo $data['nama_barang']; ?></td>
                                                        <td class="p-2"><?php echo $data['harga']; ?></td>
                                                        <td class="p-2"><?php echo $data['stok']; ?></td>
                                                        <td class="p-2" align="center"><a href="?page=tambah_order&kode_barang=<?php echo $data['kode_barang']; ?>" class="btn btn-success btn-sm text-white">Pilih</a></td>
                                                    </tr>
                                                <?php }
                                        } ?>
                                </table>
                                <button class="btn btn-info rounded-0">Total record : <?php echo mysqli_num_rows($default); ?></button>
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