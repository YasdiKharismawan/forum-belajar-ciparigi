<h1 class="h3 mb-4 text-gray-800 ml-5 custom-heading"><?= $title; ?></h1>

<style>
    a.cart-link {
        display: inline-block;
        padding: 5px;
        background-color: rgb(247, 169, 182);
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        margin-left: 5px;
    }

    a.cart-link i {
        margin-right: 3px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php if (empty($materi)) : ?>
                <div class="alert alert-danger" role="alert">
                    Maaf Materi Pelajaran Tidak Ditemukan!!!
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari Materi Disini...">
                    <div class="input-group-append">
                        <button class="btn" style="background-color: #3498db; color: #fff;" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <?php foreach ($materi as $m) : ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img class="image-cover" src="<?= base_url('assets/img/materi/') . $m['cover']; ?>" class="card-img-top" style="object-fit: cover; height: 250px;">
                    <div class="card-body">
                        <h6 class="card-title font-weight-bold">Kode: <?= $m['kd_mapel'] . $m['kelas'] . $m['kd_kelas']; ?></h6>
                        <p class="card-text mb-2">Mapel: <?= $m['mapel']; ?></p>
                        <p class="card-text mb-2">Kelas: <?= $m['kelas']; ?></p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between align-items-center card-bottom">
                            <a href="<?= base_url('materi/detail_materi/' . $m['id']); ?>" class="btn btn-beli btn-block">Ayo Belajar</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?= $this->pagination->create_links(); ?>

</div>








</div>
<!-- End of Main Content -->