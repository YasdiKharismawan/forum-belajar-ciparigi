<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 custom-heading"><?= $title; ?></h1>


    <div class="row">
        <div class="col-md">

            <?= $this->session->flashdata('message'); ?>

            <div class="row mb-3">
                <div class="col-md">
                    <a href="<?= base_url('materi/tambah/'); ?>" class="btn btn-beli mb-3">Tambah Materi</a>
                </div>
            </div>

            <table class=" table table-hover cartoon-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">kd_mapel</th>
                        <th scope="col">kd_kelas</th>
                        <th scope="col">mapel</th>
                        <th scope="col">kelas</th>
                        <th scope="col">topik</th>
                        <th scope="col">cover</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($materi as $m) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $m['kd_mapel'] ?></td>
                            <td><?= $m['kd_kelas'] ?></td>
                            <td><?= $m['mapel'] ?></td>
                            <td><?= $m['kelas'] ?></td>
                            <td><?= $m['topik'] ?></td>
                            <td><?= $m['cover'] ?></td>
                            <td>

                                <a href="<?= base_url('materi/hapus/' . $m['id']); ?>" class="badge badge-danger" onclick="return confirm('Are u sure?')">Delete</a>
                                <a href="<?= base_url('materi/edit/' . $m['id']); ?>" class="badge badge-warning">Edit</a>
                                <a href="<?= base_url('materi/detail/' . $m['id']); ?>" class="badge badge-primary">Detail</a>
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