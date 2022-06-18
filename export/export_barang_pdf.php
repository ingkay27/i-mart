<?php
include '../connection/conn.php';
?>
<link rel="stylesheet" href="../temp/bs4/bootstrap.min.css">
<body>
    <div class="container-fluid">
        <table class="table table-bordered mt-5">
            <tr>
                <th class="p-2">No</th>
                <th class="p-2">Kode Barang</th>
                <th class="p-2">Nama Barang</th>
                <th class="p-2">Harga</th>
                <th class="p-2">Stok</th>
            </tr>
            <?php
                $default    = mysqli_query($conn, "SELECT * FROM barang");
                $no = 1;
                while ($data = mysqli_fetch_array($default)) { ?>
                    <tr>
                        <td class="p-2" align="center"><?php echo $no++; ?></td>
                        <td class="p-2"><?php echo $data['kode_barang']; ?></td>
                        <td class="p-2"><?php echo $data['nama_barang']; ?></td>
                        <td class="p-2"><?php echo $data['harga']; ?></td>
                        <td class="p-2"><?php echo $data['stok']; ?></td>
                    </tr>
                <?php } ?>
        </table>
    </div>
    <script>
        window.print();
    </script>
</body>