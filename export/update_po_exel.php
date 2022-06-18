<?php
include '../connection/conn.php';
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_barang.xls");
?>

<body>
    <div class="container-fluid">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Kode Po</th>
                <th>Tanggal PO</th>
                <th>Total Bayar</th>
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
</body>