<style>
    .container-fluid {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        position: relative;
        width: 18rem;
        overflow: hidden;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transform: scale(1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.1);
    }

    .card-img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .card-body {
        padding: 1rem;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .card-text {
        font-size: 1rem;
        margin-bottom: 1rem;
    }

    .btn-primary {
        display: block;
        width: 100%;
        text-align: center;
    }

    .button-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        /* Warna latar belakang */
        color: white;
        /* Warna teks */
        text-decoration: none;
        /* Menghilangkan garis bawah tautan */
        border-radius: 5px;
        /* Sudut melengkung */
        transition: background-color 0.5s;
        /* Animasi perubahan warna latar belakang */
    }

    .button-link:hover {
        background-color: teal;
        text-decoration: none;
        /* Warna latar belakang saat dihover */
    }
</style>


<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-lg">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('assets/img/materi/') . $materi['cover']; ?>" class="card-img" alt="Cover Image">

                <div class="card-body">
                    <h5 class="card-title text-center"><?= $materi['mapel'] ?></h5>
                    <h5 class="card-text">Kelas : <?= $materi['kelas']; ?></h5>
                    <p class="card-text">Deskripsi : <?= $materi['detail']; ?></p>
                    <a class="button-link mb-3" target="_blank" href="<?= $materi['link']; ?>">Tonton Video</a>
                    <a href="<?= base_url('materi'); ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>





</div>