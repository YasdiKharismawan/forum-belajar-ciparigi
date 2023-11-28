<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 custom-heading"><?= $title; ?></h1>


    <div class="row">
        <div class="col-md">

            <?= $this->session->flashdata('message'); ?>

            <div class="row mb-3">
                <div class="col-md">
                    <a href="<?= base_url('buku/tambah/'); ?>" class="btn btn-beli mb-3">Tambah Buku</a>
                </div>
            </div>

            <table class=" table table-hover cartoon-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($buku as $b) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $b['judul'] ?></td>
                            <td><?= $b['kelas'] ?></td>
                            <td><?= $b['harga'] ?></td>
                            <td><?= $b['cover'] ?></td>
                            <td>

                                <a href="<?= base_url('buku/hapus/' . $b['id']); ?>" class="badge badge-danger" onclick="return confirm('Are u sure?')">Delete</a>
                                <a href="<?= base_url('buku/edit/' . $b['id']); ?>" class="badge badge-warning">Edit</a>
                                <a href="<?= base_url('buku/detail/' . $b['id']); ?>" class="badge badge-primary">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->