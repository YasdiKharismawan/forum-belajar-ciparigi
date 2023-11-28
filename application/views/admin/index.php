<style>
    /* * {
        border: 1px solid red;
    } */

    .dashboard {
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
        /* Menangani wrapping pada layar kecil */
    }

    .box {
        width: 300px;
        /* Mengubah lebar kotak */
        height: 150px;
        color: white;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 10px;
        display: flex;
        flex-direction: row;
        /* Mengubah menjadi baris (horizontal) */
        justify-content: center;
        align-items: center;
    }

    .box.box1 {
        background-color: #00b4d8;
    }

    .box.box2 {
        background-color: #00b4d8;
    }

    .box.box3 {
        background-color: #00b4d8;
    }

    .box img {
        margin-left: 10px;
        width: 40%;
        /* Menyesuaikan lebar ikon sesuai kebutuhan */
        height: auto;
        /* Menjaga aspek ratio gambar */
        border-radius: 8px 0 0 8px;
        /* Corner border untuk gambar */
    }

    .box-text {
        width: 60%;
        /* Menyesuaikan lebar teks sesuai kebutuhan */
        text-align: center;
        padding: 10px;
        /* Ruang di sekitar teks */
        box-sizing: border-box;
        /* Padding tidak mempengaruhi lebar */
        border-radius: 0 8px 8px 0;
        /* Corner border untuk teks */
    }

    .box-text h1,
    h2 {
        font-weight: bolder;
    }

    .box i {
        font-size: 24px;
        margin-bottom: 10px;
    }
</style>




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 custom-heading"><?= $title; ?></h1>

    <!-- Boxes -->
    <div class="dashboard">
        <div class="box box1">
            <img class="icon" src="<?= base_url('assets/img/icon/books.png') ?>" alt="Icon 1">
            <!-- Gantilah dengan sumber ikon/gambar yang sesuai -->
            <div class="box-text">
                <h1>Buku</h1>
                <h2><?= $total_buku; ?></h2>
            </div>
        </div>
        <div class="box box2">
            <img class="icon" src="<?= base_url('assets/img/icon/calculator.png') ?>" alt="Icon 1"> <!-- Gantilah dengan sumber ikon/gambar yang sesuai -->
            <div class="box-text">
                <h1>Materi</h1>
                <h1><?= $total_materi; ?></h1>
            </div>
        </div>
        <div class="box box3">
            <img class="icon" src="<?= base_url('assets/img/icon/teamwork.png') ?>" alt="Icon 1"> <!-- Gantilah dengan sumber ikon/gambar yang sesuai -->
            <div class="box-text">
                <h1>User</h1>
                <h1><?= $total_user; ?></h1>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->