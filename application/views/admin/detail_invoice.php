<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 ml-5 custom-heading"><?= $title; ?> <div class="btn btn-sm btn-beli">No. Invoice <?= $invoice->id ?></div>
    </h1>

    <table class="table table-bordered table-striped table-hover cartoon-table">
        <tr>
            <th>ID Buku</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Unit price</th>
            <th>Subtotal</th>
        </tr>
        <?php $total = 0;
        foreach ($transaksi as $t) :
            $subtotal = $t->jumlah * $t->harga;
            $total += $subtotal; ?>

            <tr>
                <td><?= $t->id_game; ?></td>
                <td><?= $t->nama_game; ?></td>
                <td><?= $t->jumlah; ?></td>
                <td align="right"><?= number_format($t->harga, 0, ',', '.'); ?></td>
                <td align="right"><?= number_format($subtotal, 0, ',', '.'); ?></td>
            </tr>

        <?php endforeach; ?>

        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right">Rp. <?= number_format($total, 0, ',', '.'); ?></td>
        </tr>
    </table>

    <a href="<?= base_url('invoice/index'); ?>">
        <div class="btn btn-sm btn-primary btn-beli">Back</div>
    </a>

</div>







</div>