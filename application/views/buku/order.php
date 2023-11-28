<!-- Begin Page Content -->
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 custom-heading"><?= $title; ?></h1>
<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto small-form">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5 small-form">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Detail Order</h1>
                    </div>
                    <form class="" method="post" action="<?= base_url('game/tambah'); ?>">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" class="form-control form-control-user" id="no_transaksi" name="no_transaksi" placeholder="No Transaksi">
                                    <?= form_error('no_transaksi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control form-control-user" id="tgl_order" name="tgl_order" placeholder="Tgl Order">
                                    <?= form_error('tgl_order', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul">
                                    <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Harga">
                                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control form-control-user" id="nama_pembeli" name="nama_pembeli" placeholder="Nama Pembeli">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Add Games
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('user/beli_buku'); ?>">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->