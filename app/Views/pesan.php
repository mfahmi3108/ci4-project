<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="form">
    <div class=" container my-3">
        <h2 style="text-align: center" ;>Formulir Pemesanan</h2>
        <form action="<?= base_url('order/tambahorder'); ?>" method="post">

            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Periksa inputan form</h4>
                    <hr>
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="nama_pemesan" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" autofocus>
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" id="no_hp" name="no_hp">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" id="alamat" name="alamat">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tujuan_wisata" class="col-sm-2 col-form-label">Tujuan Wisata</label>
                <div class="col-sm-10">
                    <input type="varchar" class="form-control" id="tujuan_wisata" name="tujuan_wisata">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal_berangkat" class="col-sm-2 col-form-label">Tanggal Berangkat</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</section>



<?= $this->endSection(); ?>