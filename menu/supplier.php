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
                                <form action="" method="POST" class="ml-auto col-sm-12 mt-5">
                                    <div class="input-group mb-3 ml-auto input">
                                            <a href="?page=create_supplier" class="btn btn-info mr-auto">Create</a>
                                            <input type="text" name="src"  class="src form-control border border-right-0 border-secondary col-sm-4" placeholder="Search..."required>
                                        <div class="input-group-append">
                                            <button class="btn btn-info rounded-0">Search</button>
                                        </div>
                                    </div>
                                </form>

                                <?php if (isset($_GET['sukses_update'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Supplier berhasil di update!
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET['sukses_input'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Supplier berhasil ditambahkan!
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET['sukses_hapus'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Supplier berhasil di hapus!
                                    </div>
                                <?php } ?>


                                <div class="text-right mt-4">
                                    <a href="./export/export_supplier_pdf.php" target="_blank" class="bg-danger p-2" title="PDF"><i class="fas fa-file-pdf mb-4 text-white"></i></a>
                                    <a href="./export/export_supplier_excel.php" target="_blank" class="bg-success p-2" title="EXCEL"><i class="fas fa-file-excel mb-4 text-white"></i></a>
                                </div>

                                <table class="table table-bordered">
                                    <tr>
                                        <th class="p-2">No</th>
                                        <th class="p-2">Kode Supplier</th>
                                        <th class="p-2">Nama Supplier</th>
                                        <th class="p-2">Alamat Supplier</th>
                                        <th class="p-2">No.Telp Supplier</th>
                                        <th class="p-2">Action</th>
                                    </tr>
                                    <?php
                                        $default    = mysqli_query($conn, "SELECT * FROM supplier");
                                        if (isset($_POST['src'])) {
                                            $src    = $_POST['src'];
                                            $query  = mysqli_query($conn, "SELECT * FROM supplier WHERE nama_supplier LIKE '%".$src."%' OR
                                                                                                        kode_supplier LIKE '%".$src."%' ");
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
                                                        <td class="p-2"><?php echo $data['kode_supplier']; ?></td>
                                                        <td class="p-2"><?php echo $data['nama_supplier']; ?></td>
                                                        <td class="p-2"><?php echo $data['alamat']; ?></td>
                                                        <td class="p-2"><?php echo $data['no_telp']; ?></td>
                                                        <td class="p-2" align="center" width="150px">
                                                            <a href="?page=update_supplier&id_supplier=<?php echo $data['id_supplier']; ?>">Update</a>
                                                            |
                                                            <a href="./proses/delete_supplier.php?id_supplier=<?php echo $data['id_supplier']; ?>" onclick="return confirm('Are you sure?'); ">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } 
                                            }
                                        }else{ 
                                            $no = 1;
                                                while ($data = mysqli_fetch_array($default)) { ?>
                                                    <tr>
                                                        <td class="p-2"><?php echo $no++; ?></td>
                                                        <td class="p-2"><?php echo $data['kode_supplier']; ?></td>
                                                        <td class="p-2"><?php echo $data['nama_supplier']; ?></td>
                                                        <td class="p-2"><?php echo $data['alamat']; ?></td>
                                                        <td class="p-2"><?php echo $data['no_telp']; ?></td>
                                                        <td class="p-2" align="center" width="150px">
                                                            <a href="?page=update_supplier&id_supplier=<?php echo $data['id_supplier']; ?>">Update</a>
                                                            |
                                                            <a href="./proses/delete_supplier.php?id_supplier=<?php echo $data['id_supplier']; ?>" onclick="return confirm('Are you sure?'); ">Delete</a>
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