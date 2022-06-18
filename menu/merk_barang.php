<head>
    <title>Merk Barang</title>
</head>
<body>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Merk Barang</h4>
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
                                <h2>Merk Barang</h2>
                                <form action="" method="POST" class="ml-auto col-sm-12 mt-5">
                                    <div class="input-group mb-3 ml-auto input">
                                            <a href="?page=create_merk" class="btn btn-info mr-auto">Create</a>
                                            <input type="text" name="src"  class="src form-control border border-right-0 border-secondary col-sm-4" placeholder="Search..."required>
                                        <div class="input-group-append">
                                            <button class="btn btn-info rounded-0">Search</button>
                                        </div>
                                    </div>
                                </form>

                                <?php if (isset($_GET['sukses_update'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Merk barang berhasil di update!
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET['sukses_input'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Merk barang berhasil ditambahkan!
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET['sukses_hapus'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Merk barang berhasil dihapus!
                                    </div>
                                <?php } ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th class="p-2">No</th>
                                        <th class="p-2">Merk Barang</th>
                                        <th class="p-2">Action</th>
                                    </tr>
                                    <?php
                                        $default    = mysqli_query($conn, "SELECT * FROM merk_barang");
                                        if (isset($_POST['src'])) {
                                            $src    = $_POST['src'];
                                            $query  = mysqli_query($conn, "SELECT * FROM merk_barang WHERE merk_barang LIKE '%".$src."%' ");
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
                                                        <td class="p-2"><?php echo $data['merk_barang']; ?></td>
                                                        <td class="p-2" align="center" width="150px">
                                                            <a href="?page=update_merk&id_merk=<?php echo $data['id_merk']; ?>">Update</a>
                                                            |
                                                            <a href="./proses/delete_merk.php?id_merk=<?php echo $data['id_merk']; ?>" onclick="return confirm('Are you sure?'); ">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } 
                                            }
                                        }else{ 
                                            $no = 1;
                                                while ($data = mysqli_fetch_array($default)) { ?>
                                                    <tr>
                                                        <td class="p-2" align="center"><?php echo $no++; ?></td>
                                                        <td class="p-2"><?php echo $data['merk_barang']; ?></td>
                                                        <td class="p-2" align="center" width="150px">
                                                            <a href="?page=update_merk&id_merk=<?php echo $data['id_merk']; ?>">Update</a>
                                                            |
                                                            <a href="./proses/delete_merk.php?id_merk=<?php echo $data['id_merk']; ?>" onclick="return confirm('Are you sure?'); ">Delete</a>
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