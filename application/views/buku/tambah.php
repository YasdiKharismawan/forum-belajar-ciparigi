<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Buku</h1>
                        </div>
                        <form class="" method="post" action="<?= base_url('buku/tambah'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul">
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="kelas" name="kelas">
                                    <option value="Select Kelas">Pilih Kelas</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Tambah Buku
                            </button>
                        </form>
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