<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section class="m-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="<?= base_url('/admin/tambah'); ?>" method="post" type="button" class="btn btn-success">Tambah</a>
            </div>
        </div>
    </div>
</section>
<?php if (!empty(session()->getFlashdata('success'))) : ?>
    <script>
        toastr.success("<?= session()->getFlashdata('success'); ?>")
    </script>
<?php elseif (!empty(session()->getFlashdata('failed'))) : ?>
    <script>
        toastr.error("<?= session()->getFlashdata('failed'); ?>")
    </script>
<?php endif; ?>

<section class="kartu">
    <div class="container">
        <div class="row">
            <?php foreach ($produk as $p) : ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $p['sampul']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $p['nama_wisata']; ?></h5>
                            <p class="card-text"><?= $p['deskripsi']; ?></p>
                            <a href="<?= base_url('admin/edit'); ?>/<?= $p['id']; ?>" method="get" class="btn btn-primary">Edit</a>
                            <a href="<?= base_url('admin/hapus'); ?>/<?= $p['id']; ?>" class="btn btn-danger">Hapus</a>
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