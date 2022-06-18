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

                                <a href="?page=create_barang" class="btn btn-info mr-auto">Create</a>
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

                                <div class="text-right mt-4">
                                    <a href="./export/export_barang_pdf.php" target="_blank" class="bg-danger p-2" title="PDF"><i class="fas fa-file-pdf mb-4 text-white"></i></a>
                                    <a href="./export/export_barang_excel.php" target="_blank" class="bg-success p-2" title="EXCEL"><i class="fas fa-file-excel mb-4 text-white"></i></a>
                                </div>

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
                                                        <td class="p-2" align="center"><a href="?page=update_barang&kode_barang=<?php echo $data['kode_barang']; ?>">Update</a></td>
                                                        
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
                                                        <td class="p-2" align="center"><a href="?page=update_barang&kode_barang=<?php echo $data['kode_barang']; ?>">Update</a>
                                                         |
                                                            <a href="./proses/delete_barang.php?id_barang=<?php echo $data['id_barang']; ?>" onclick="return confirm('Are you sure?'); ">Delete</a>
                                                        </td>
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