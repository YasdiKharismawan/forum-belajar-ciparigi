<!-- Begin Page Content -->
<style>
</style>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mt-4 ml-4 text-gray-800 custom-heading"><?= $title; ?></h1>

    <div class="row justify-content-start">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="row justify-content-start ml-5 mt-3">
        <div class="col-lg-4">
            <div class="card text-center morphing-glass-card">
                <div class="card-body">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="Profile Image">
                    <h5 class="card-title mt-2"><?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->