<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="form">
    <div class=" container my-3">
        <h2 style="text-align: center" ;>Edit Produk Wisata</h2>
        <form action="<?= base_url('/admin/update'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?= $produk['id'] ?>" name="id">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Periksa inputan form Ini perubahan di github</h4>
                    <hr>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <?= csrf_field(); ?>
            <div class="m-5">
                <img src="<?= base_url('img/') . $produk['sampul']; ?>" style=" width: 18rem;" alt="">
            </div>
            <div class=" row mb-3">
                <label for="nama_wisata" class="col-sm-2 col-form-label">Nama Wisata</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" id="nama_wisata" name="nama_wisata" value="<?= $produk['nama_wisata']; ?>" autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" id="harga" name="harga" value="<?= $produk['harga']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Wisata</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $produk['deskripsi']; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-10">
                    <input type="file" name="sampul" class="form-control" id="sampul">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jadwal" class="col-sm-2 col-form-label">Jadwal</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" id="jadwal" name="jadwal" value="<?= $produk['jadwal']; ?>">
                </div>
            </div>

            <button type=" submit" class="btn btn-primary">Edit</button>
        </form>
    </div>



    <?= $this->endSection(); ?>