<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Materi</h1>
                        </div>
                        <form class="" method="post" action="<?= base_url('materi/tambah'); ?>">
                            <div class="form-group">
                                <select class="form-control" id="kd_mapel" name="kd_mapel">
                                    <option value="#">Kode Mapel</option>
                                    <option value="IA">IA (IPA)</option>
                                    <option value="IA">TE (TEMATIK)</option>
                                    <option value="IS">IS (IPS)</option>
                                    <option value="PK">PK (PKN)</option>
                                    <option value="BI">BI (BAHASA INDONESIA)</option>
                                    <option value="SB">SB (SENI BUDAYA)</option>
                                    <option value="MT">MT (MTK)</option>
                                    <option value="SN">SN (SUNDA)</option>
                                    <option value="PA">PA (PENDIDIKAN AGAMA)</option>
                                    <option value="PJ">PJ (PJOK)</option>
                                </select>
                                <?= form_error('kd_mapel', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="kd_kelas" name="kd_kelas">
                                    <option value="#">Kode Bagian</option>
                                    <option value="001">001</option>
                                    <option value="002">002</option>
                                    <option value="003">003</option>
                                    <option value="004">004</option>
                                    <option value="005">005</option>
                                    <option value="006">006</option>
                                </select>
                                <?= form_error('kd_kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="mapel" name="mapel">
                                    <option value="#">Pilih Mapel</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
                                    <option value="Tematik">Tematik</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                                    <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                                    <option value="Ilmu Pengetahuan Sosial">Ilmu Pengetahuan Sosial</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="kelas" name="kelas">
                                    <option value="#">Pilih Kelas</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="topik" name="topik" placeholder="Topik">
                                <?= form_error('topik', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="textarea" class="form-control form-control-user" id="detail" name="detail" placeholder="Detail">
                                <?= form_error('detail', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="link" name="link" placeholder="Link">
                                <?= form_error('link', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Tambah Materi
                            </button>
                        </form>
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