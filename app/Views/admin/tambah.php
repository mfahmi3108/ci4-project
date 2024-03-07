<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="form">
    <div class=" container my-3">
        <h2 style="text-align: center" ;>Tambah Produk Wisata</h2>
        <form action="<?= base_url('/admin/prosestambah'); ?>" method="post" enctype="multipart/form-data">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Periksa inputan form</h4>
                    <hr>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <?= csrf_field(); ?>
            <div class=" row mb-3">
                <label for="nama_wisata" class="col-sm-2 col-form-label">Nama Wisata</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" id="nama_wisata" name="nama_wisata" autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" id="harga" name="harga">
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Wisata</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                </div>
            </div>
            <div class="row mb-3">
                <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                <div class="col-sm-10">
                    <input type="file" name="sampul" class="form-control" id="sampul" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="jadwal" class="col-sm-2 col-form-label">Jadwal</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" id="jadwal" name="jadwal">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</section>



<?= $this->endSection(); ?>