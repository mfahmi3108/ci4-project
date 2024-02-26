<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="kartu">
    <div class="container">
        <div class="row mx-10">
            <?php foreach ($produk as $p) : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url('img/') . $p['sampul']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $p['nama_wisata']; ?></h5>
                            <p class="card-text"><?= $p['deskripsi']; ?></p>
                            <a href="<?= base_url('/product'); ?>/<?= $p['id']; ?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>


<h1>Ini halaman product </h1>


<?= $this->endSection(); ?>