<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
    <!-- Begin page content -->
    <main class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/login/process">
                    <?= csrf_field(); ?>
                    <h1 class="h3 mb-3 fw-normal">Login</h1>
                    <div class="d-flex flex-column gap-3">
                        <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                        <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
                    </div>
                    <p class="mt-5 mb-3 text-muted">&copy; Warung Belajar</p>
                </form>
            </div>
        </div>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>