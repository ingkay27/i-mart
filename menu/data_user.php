<head>
    <title>Data User</title>
</head>
<body>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Data User</h4>
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
                                <h2>Data User</h2>

                                <form action="" method="POST" class="ml-auto col-sm-12 mt-5">
                                    <div class="input-group mb-3 ml-auto input">
                                            <a href="?page=create_user" class="btn btn-info mr-auto">Create</a>
                                            <input type="text" name="src"  class="src form-control border border-right-0 border-secondary col-sm-4" placeholder="Search..."required>
                                        <div class="input-group-append">
                                            <button class="btn btn-info rounded-0">Search</button>
                                        </div>
                                    </div>
                                </form>

                                <?php if (isset($_GET['sukses_update'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Data user berhasil di update!
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET['sukses_hapus'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Data user berhasil di dihapus!
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET['sukses_input'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Data user berhasil di tambahkan!
                                    </div>
                                <?php } ?>
                                <table class="table table-bordered table-sm">
                                    <tr>
                                        <th class="p-2">No</th>
                                        <th class="p-2">Nama User</th>
                                        <th class="p-2">Username</th>
                                        <th class="p-2">Level</th>
                                        <th class="p-2">Action</th>
                                    </tr>
                                    <?php
                                        $default    = mysqli_query($conn, "SELECT * FROM users");
                                        if (isset($_POST['src'])) {
                                            $src    = $_POST['src'];
                                            $query  = mysqli_query($conn, "SELECT * FROM users WHERE nama_user LIKE '%".$src."%' OR 
                                                                                                     level     LIKE '%".$src."%' ");
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
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $data['nama_user']; ?></td>
                                                        <td><?php echo $data['username']; ?></td>
                                                        <td><?php echo $data['level']; ?></td>
                                                        <td align="center">
                                                            <a href="">Update</a>
                                                            |
                                                            <a href="./proses/delete_user.php?id_user=<?php echo $data['id_user']; ?>" onclick="return confirm('Are you sure?'); ">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } 
                                            }
                                        }else{ 
                                            $no = 1;
                                                while ($data = mysqli_fetch_array($default)) { ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $data['nama_user']; ?></td>
                                                        <td><?php echo $data['username']; ?></td>
                                                        <td><?php echo $data['level']; ?></td>
                                                        <td align="center">
                                                            <a href="./?page=update_user&id_user=<?php echo $data['id_user']; ?>">Update</a>
                                                            |
                                                            <a href="./proses/delete_user.php?id_user=<?php echo $data['id_user']; ?>" onclick="return confirm('Are you sure?'); ">Delete</a>
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