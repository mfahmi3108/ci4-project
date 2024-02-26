<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2 style="text-align: center;" class="my-5">Detail Produk Wisata</h2>
    <div class="card my-5">
        <div class="row g-0">
            <div class="col-md-4">
                <img style="height: 100%;" src="<?= base_url('img/') . $produk['sampul']; ?>" class="img-fluid rounded-start" alt="<?= $produk['sampul'] ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $produk['nama_wisata']; ?></h5>
                    <p class="card-text"><?= $produk['deskripsi']; ?></p>
                    <p class="card-text"><?= $produk['deskripsi']; ?></p>
                    <h6>Rp<?= $produk['harga']; ?></h6>
                    <div class="row">
                        <p class="card-text col-md-4"><small class="text-body-secondary"><?= $produk['jadwal']; ?></small></p>
                        <a href="<?= base_url('/pesan'); ?>" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                    <br><br>
                    <p><a href="<?= base_url('/product'); ?>" class="link-opacity-75">Kembali Ke Menu Product</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>