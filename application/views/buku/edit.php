<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Data Buku</h1>
                        </div>
                        <?= form_open_multipart('buku/edit/' . $buku['id'], ['class' => '']) ?>
                        <input type="hidden" name="id" value="<?= $buku['id']; ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul" value="<?= $buku['judul'] ?>">
                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="kelas" name="kelas">
                                <?php foreach ($kelas as $k) : ?>
                                    <?php if ($k == $buku['kelas']) : ?>
                                        <option value="<?= $k ?>" selected><?= $k ?></option>
                                    <?php else : ?>
                                        <option value="<?= $k ?>"><?= $k ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga" value="<?= $buku['harga'] ?>">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="cover" name="cover">
                                <label class="custom-file-label" for="cover">Choose file</label>
                                <img class="img-thumbnail" style="width: 200px; margin-bottom: 6rem; margin-top:10px" src="<?= base_url('assets/img/buku/') . $buku['cover']; ?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Edit Buku</button>
                        <?= form_close() ?>

                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('buku/index') ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<!-- End of Main Content -->