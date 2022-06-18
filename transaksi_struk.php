<?php 

require 'session.php';
require 'konek.php';
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi = '$id'");
$t = mysqli_fetch_assoc($data);

$td = mysqli_query($conn, "SELECT * FROM transaksi_detail WHERE id_transaksi = '$id'");

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembayaran</title>
    <style type="text/css">
        .container {
            padding: 2px;
            width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>  
    <div class="container">
        <table border="0" width="100%" cellpadding="1" cellspacing="0">
            <tr>
                <th colspan="4">SUPERINDO<br>
                jl. bla bla bla<br>
                <?= $t['no_transaksi'] ?></th>
            </tr>
            <tr align="center"><td colspan="4"><hr></td></tr>
            <tr>
                <td><?= $t['tanggal_transaksi'] ?></td>
                <td></td>
                <td></td>
                <td align="right"><?= $t['nama_kasir'] ?></td>
            </tr>
            <tr>
                <td><?= $t['id_transaksi'] ?></td>
                <td></td>
                <td></td>
                <td align="right"></td>
            </tr>
            <tr align="center"><td colspan="4"><hr></td></tr>
        </table>
        <table border="0" width="100%" cellpadding="1" cellspacing="0">
            <tr>
                <td><b>kode barang</b></td>
                <td><b>kode barang</b></td>
                <td><b>qty</b></td>
                <td><b>jumlah</b></td>
            </tr>
            <?php foreach ($td as $key) :?>
                <tr>
                    <td><?= $key['kode_barang'] ?></td>
                    <td><?= $key['kode_barang'] ?></td>
                    <td><?= $key['qty'] ?></td>
                    <td><?= $key['total'] ?></td>
                </tr>
            <?php endforeach ?>
            
            <tr>
                <td colspan="4"><hr></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td align="right">Total</td>
                <td align="right"><?= $t['total_transaksi'] ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td align="right">Bayar</td>
                <td align="right"><?= $t['bayar_transaksi'] ?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td align="right">kembali</td>
                <td align="right">-<?= $t['kembali_transaksi'] ?></td>
            </tr>
            <tr>
                <td colspan="4"><hr></td>
            </tr>
        </table>
        <table border="0" width="100%" cellpadding="1" cellspacing="0">
            <tr>
                <th colspan="4">Terimakasih</th>
            </tr>
        </table>
    </div>
</body>
</html>

</table>    
</body>
</html>