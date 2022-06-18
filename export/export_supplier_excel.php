<?php
include '../connection/conn.php';
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data_supplier.xls");
?>
<body>
    <div class="container-fluid">
        <table class="table table-bordered">
            <tr>
                <th class="p-2">No</th>
                <th class="p-2">Kode Supplier</th>
                <th class="p-2">Nama Supplier</th>
                <th class="p-2">No Telp</th>
                <th class="p-2">Alamat</th>
            </tr>
            <?php
                $default    = mysqli_query($conn, "SELECT * FROM supplier");
                $no = 1;
                while ($data = mysqli_fetch_array($default)) { ?>
                    <tr>
                        <td class="p-2" align="center"><?php echo $no++; ?></td>
                        <td class="p-2"><?php echo $data['kode_supplier']; ?></td>
                        <td class="p-2"><?php echo $data['nama_supplier']; ?></td>
                        <td class="p-2"><?php echo $data['no_telp']; ?></td>
                        <td class="p-2"><?php echo $data['alamat']; ?></td>
                    </tr>
                <?php } ?>
        </table>
    </div>
</body>