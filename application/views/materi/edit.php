<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Data Materi</h1>
                        </div>
                        <?= form_open_multipart('materi/edit/' . $materi['id'], ['class' => '']) ?>
                        <input type="hidden" name="id" value="<?= $materi['id']; ?>">
                        <div class="form-group">
                            <select class="form-control" id="kd_mapel" name="kd_mapel">
                                <?php foreach ($kd_mapel as $m) : ?>
                                    <?php if ($m == $materi['kd_mapel']) : ?>
                                        <option value="<?= $m ?>" selected><?= $m ?></option>
                                    <?php else : ?>
                                        <option value="<?= $m ?>"><?= $m ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kd_mapel', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="kd_kelas" name="kd_kelas">
                                <?php foreach ($kd_kelas as $m) : ?>
                                    <?php if ($m == $materi['kd_kelas']) : ?>
                                        <option value="<?= $m ?>" selected><?= $m ?></option>
                                    <?php else : ?>
                                        <option value="<?= $m ?>"><?= $m ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('kd_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="mapel" name="mapel">
                                <?php foreach ($mapel as $m) : ?>
                                    <?php if ($m == $materi['mapel']) : ?>
                                        <option value="<?= $m ?>" selected><?= $m ?></option>
                                    <?php else : ?>
                                        <option value="<?= $m ?>"><?= $m ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="kelas" name="kelas">
                                <?php foreach ($kelas as $k) : ?>
                                    <?php if ($k == $materi['kelas']) : ?>
                                        <option value="<?= $k ?>" selected><?= $k ?></option>
                                    <?php else : ?>
                                        <option value="<?= $k ?>"><?= $k ?></option>
                                    <?php endif ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="topik" name="topik" placeholder="topik" value="<?= $materi['topik'] ?>">
                            <?= form_error('topik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="detail" name="detail" placeholder="detail" value="<?= $materi['detail'] ?>">
                            <?= form_error('detail', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="link" name="link" placeholder="link" value="<?= $materi['link'] ?>">
                            <?= form_error('link', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="cover" name="cover">
                                <label class="custom-file-label" for="cover">Choose file</label>
                                <img class="img-thumbnail" style="width: 200px; margin-bottom: 6rem; margin-top:10px" src="<?= base_url('assets/img/materi/') . $materi['cover']; ?>">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Edit Materi</button>
                        <?= form_close() ?>

                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('materi/index') ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<!-- End of Main Content -->