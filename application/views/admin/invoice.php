<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 ml-5 custom-heading"><?= $title; ?></h1>

    <table class="table table-bordered table-striped table-hover cartoon-table">
        <tr>
            <th>Id Invoice</th>
            <th>Customer name</th>
            <th>Shipping address</th>
            <th>Shipping date</th>
            <th>Payment limit</th>
            <th>Action</th>
        </tr>
        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?= $inv->id ?></td>
                <td><?= $inv->nama ?></td>
                <td><?= $inv->alamat ?></td>
                <td><?= $inv->tgl_pesan ?></td>
                <td><?= $inv->batas_bayar ?></td>
                <td><?= anchor('invoice/detail/' . $inv->id, '<div class="btn btn-beli btn-sm btn-primary">Detail</div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>












</div>