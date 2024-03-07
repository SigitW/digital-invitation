<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap5/css/bootstrap.min.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/front/style.css') ?>">
    <title>kuinvite</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1 class="brand-logo">kuinvite</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link navbar-item-kuinvite active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-item-kuinvite" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-item-kuinvite" href="#">Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-item-kuinvite" href="#">Pricing</a>
                    </li>
                    <li class="nav-item navbar-item-kuinvite-login">
                        <a class="nav-link" href="/admin">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="section-home" id="section-home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 section-home-img">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="img-banner" src="<?= base_url('assets/images/front/front_wedding1.jpg') ?>" alt="">
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-banner" src="<?= base_url('assets/images/front/front_birthday2.jpg') ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <img class="img-banner" src="<?= base_url('assets/images/front/front_event1.jpg') ?>" alt="">
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <h2 class="pacifico text-grey">
                                    Buat undangan digital mu di segalah event
                                </h2>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non vitae ullam numquam, doloremque eaque pariatur ut molestias vel error laudantium at eos ipsa autem animi aut quasi qui magni ratione?
                            </div>
                            <br>
                            <button class="btn btn-get-started">
                                    Get Started
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap5/js/bootstrap.min.js') ?>"></script>

</html>