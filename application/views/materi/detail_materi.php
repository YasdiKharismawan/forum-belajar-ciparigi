<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 ml-5 custom-heading"><?= $title; ?></h1>

    <div class="card">
        <div class="card-body">
            <?php foreach ($materi as $m) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/materi/') . $m['cover']; ?>" class="card-img" alt="Cover Image">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Mapel</td>
                                <td><strong><?= $m['mapel'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td><strong><?= $m['kelas'] ?></strong></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td><strong><?= $m['detail'] ?></strong></td>
                            </tr>

                        </table>
                        <a href="<?= base_url('user/materi'); ?>">
                            <div class="btn btn-sm btn-beli">Back</div>
                        </a>
                        <a target="_blank" href="<?= $m['link']; ?>">
                            <div class="btn btn-sm btn-beli">Tonton Video</div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
</div>