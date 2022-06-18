<head>
    <?php if ($_SESSION['level'] == "admin") { ?>
        <title>Purchase Order</title>
    <?php }elseif ($_SESSION['level'] == "petugas gudang") { ?>
        <title>Pemesanan ke supplier</title>
    <?php } ?>
</head>
<body>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Purchase Order</h4>
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
                                <h2>Purchase Order</h2>
                                

                                <a href="./?page=create_po" class="btn btn-info mb-3 mt-3">Tambah Order</a>
                                
                    
                                <?php if (isset($_GET['sukses_input'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Order berhasil ditambahkan!
                                    </div>
                                <?php } ?>
                                <?php if (isset($_GET['sukses_hapus'])) { ?>
                                    <div class="alert alert-success" id="alert">
                                        Orderan berhasil di hapus!
                                    </div>
                                <?php } ?>

                                <table class="table table-bordered table-sm">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Po</th>
                                        <th>Tanggal PO</th>
                                        <th>Total Bayar</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                        function rupiah($angka){
	
                                            $hasil_rupiah = number_format($angka,0,',','.');
                                            return $hasil_rupiah;
                                         
                                        }
                                        $default    = mysqli_query($conn, "SELECT * FROM po ORDER BY id_po DESC");

                                        $no = 1;
                                        while ($data = mysqli_fetch_array($default)) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $data['kode_po']; ?></td>
                                                <td><?php echo $data['tgl_po']; ?></td>
                                                <td><?php echo rupiah($data['total_harga']); ?></td>
                                                <td>
                                                    <a href="?page=detail_po&kode_po=<?php echo $data['kode_po']; ?>" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="./proses/delete_po.php?kode_po=<?php echo $data['kode_po']; ?>" onclick="return confirm('Are you sure?'); " class="btn btn-danger btn-sm">Hapus</a>
                                                    <a href="./export/export_detail_po_pdf.php?kode_po=<?php echo $data['kode_po']; ?>" target="_blank" class="btn btn-warning btn-sm">Cetak</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                </table>
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