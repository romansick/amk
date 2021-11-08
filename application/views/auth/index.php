<body data-spy="scroll" data-target="#topnav-menu" data-offset="60">

    <nav class="navbar navbar-expand-lg navigation fixed-top sticky">
        <div class="container">
            <a class="navbar-logo" href="index.html">
                <img src="assets/images/logo-dark.png" alt="" height="19" class="logo logo-dark">
                <img src="assets/images/logo-light.png" alt="" height="19" class="logo logo-light">
            </a>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav ml-auto" id="topnav-menu">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#roadmap">Roadmap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faqs">FAQs</a>
                    </li>

                </ul>

                <div class="ml-lg-2">
                    <a href="<?= base_url('auth/register'); ?>" class="btn btn-outline-success w-xs">Sign Up</a>
                    <a href="<?= base_url('auth/login'); ?>" class="btn btn-outline-success w-xs">Sign in</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- hero section start -->
    <section class="section hero-section bg-ico-hero" id="home">
        <div class="bg-overlay bg-primary"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="text-white-50">
                        <h1 class="text-white font-weight-semibold mb-3 hero-title">Skote - Ico Landing for a cryptocurrency business</h1>
                        <p class="font-size-14">It will be as simple as occidental in fact to an English person, it will seem like simplified as a skeptical Cambridge</p>

                        <div class="button-items mt-4">
                            <a href="#" class="btn btn-success">Get Whitepaper</a>
                            <a href="#" class="btn btn-light">How it work</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 col-sm-10 ml-lg-auto">
                    <div class="card overflow-hidden mb-0 mt-5 mt-lg-0">
                        <div class="card-header text-center">
                            <h5 class="mb-0">ICO Countdown time</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center">

                                <h5>Time left to Ico :</h5>
                                <div class="mt-4">
                                    <div data-countdown="2020/12/31" class="counter-number ico-countdown"></div>
                                </div>

                                <div class="mt-4">
                                    <button type="button" class="btn btn-success w-md">Get Token</button>
                                </div>

                                <div class="mt-5">
                                    <h4 class="font-weight-semibold">1 ETH = 2235 SKT</h4>
                                    <div class="clearfix mt-4">
                                        <h5 class="float-right font-size-14">5234.43</h5>
                                    </div>
                                    <div class="progress p-1 progress-xl softcap-progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-label">15 %</div>
                                        </div>
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-label">30 %</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- hero section end -->

    <!-- currency price section start -->
    <section class="section bg-white p-0">
        <div class="container">
            <div class="currency-price">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-warning text-warning font-size-18">
                                            <i class="mdi mdi-bitcoin"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">Bitcoin</p>
                                        <h5>$ 9134.39</h5>
                                        <p class="text-muted text-truncate mb-0">+ 0.0012.23 ( 0.2 % ) <i class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                            <i class="mdi mdi-ethereum"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">Ethereum</p>
                                        <h5>$ 245.44</h5>
                                        <p class="text-muted text-truncate mb-0">- 004.12 ( 0.1 % ) <i class="mdi mdi-arrow-down ml-1 text-danger"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                        <span class="avatar-title rounded-circle bg-soft-info text-info font-size-18">
                                            <i class="mdi mdi-litecoin"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p class="text-muted">Litecoin</p>
                                        <h5>$ 63.61</h5>
                                        <p class="text-muted text-truncate mb-0">+ 0.0001.12 ( 0.1 % ) <i class="mdi mdi-arrow-up ml-1 text-success"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- currency price section end -->

    <!-- about section start -->
    <section class="section pt-4 bg-white" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">About us</div>
                        <h4>What is ICO Token?</h4>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">

                    <div class="text-muted">
                        <h4>Best ICO for your cryptocurrency business</h4>
                        <p>If several languages coalesce, the grammar of the resulting that of the individual new common language will be more simple and regular than the existing.</p>
                        <p class="mb-4">It would be necessary to have uniform pronunciation.</p>

                        <div class="button-items">
                            <a href="#" class="btn btn-success">Read More</a>
                            <a href="#" class="btn btn-outline-primary">How It work</a>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-4 col-6">
                                <div class="mt-4">
                                    <h4>$ 6.2 M</h4>
                                    <p>Invest amount</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <div class="mt-4">
                                    <h4>16245</h4>
                                    <p>Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ml-auto">
                    <div class="mt-4 mt-lg-0">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="mdi mdi-bitcoin h2 text-success"></i>
                                        </div>
                                        <h5>Lending</h5>
                                        <p class="text-muted mb-0">At vero eos et accusamus et iusto blanditiis</p>

                                    </div>
                                    <div class="card-footer bg-transparent border-top text-center">
                                        <a href="#" class="text-primary">Learn more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border mt-lg-5">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <i class="mdi mdi-wallet-outline h2 text-success"></i>
                                        </div>
                                        <h5>Wallet</h5>
                                        <p class="text-muted mb-0">Quis autem vel eum iure reprehenderit</p>

                                    </div>
                                    <div class="card-footer bg-transparent border-top text-center">
                                        <a href="#" class="text-primary">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <hr class="my-5">

            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-theme clients-carousel" id="clients-carousel">
                        <div class="item">
                            <div class="client-images">
                                <img src="<?= base_url('assets/images/clients/1.png'); ?>" alt="client-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src="<?= base_url('assets/images/clients/2.png'); ?>" alt="client-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src="<?= base_url('assets/images/clients/3.png'); ?>" alt="client-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src="<?= base_url('assets/images/clients/4.png'); ?>" alt="client-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src="<?= base_url('assets/images/clients/5.png'); ?>" alt="client-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                        <div class="item">
                            <div class="client-images">
                                <img src=<?= base_url('"assets/images/clients/6.png'); ?>" alt="client-img" class="mx-auto img-fluid d-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- about section end -->

    <!-- Features start -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">Features</div>
                        <h4>Key features of the product</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row align-items-center pt-4">
                <div class="col-md-6 col-sm-8">
                    <div>
                        <img src="<?= base_url('assets/images/crypto/features-img/img-1.png'); ?>" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
                <div class="col-md-5 ml-auto">
                    <div class="mt-4 mt-md-auto">
                        <div class="d-flex align-items-center mb-2">
                            <div class="features-number font-weight-semibold display-4 mr-3">01</div>
                            <h4 class="mb-0">Lending</h4>
                        </div>
                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular than of the individual will be more simple and regular than the existing.</p>
                        <div class="text-muted mt-4">
                            <p class="mb-2"><i class="mdi mdi-circle-medium text-success mr-1"></i>Donec pede justo vel aliquet</p>
                            <p><i class="mdi mdi-circle-medium text-success mr-1"></i>Aenean et nisl sagittis</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row align-items-center mt-5 pt-md-5">
                <div class="col-md-5">
                    <div class="mt-4 mt-md-0">
                        <div class="d-flex align-items-center mb-2">
                            <div class="features-number font-weight-semibold display-4 mr-3">02</div>
                            <h4 class="mb-0">Wallet</h4>
                        </div>
                        <p class="text-muted">It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend.</p>
                        <div class="text-muted mt-4">
                            <p class="mb-2"><i class="mdi mdi-circle-medium text-success mr-1"></i>Donec pede justo vel aliquet</p>
                            <p><i class="mdi mdi-circle-medium text-success mr-1"></i>Aenean et nisl sagittis</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-sm-8 ml-md-auto">
                    <div class="mt-4 mr-md-0">
                        <img src="<?= base_url('assets/images/crypto/features-img/img-2.png'); ?>" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Features end -->

    <!-- Roadmap start -->
    <section class="section bg-white" id="roadmap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="row mb-3">
                        <div class="col-xl-4 col-sm-6">
                        </div>
                        <div class="col-lg-8 col-sm-6">
                            <form class="mt-4 mt-sm-0 float-sm-right form-inline">
                                <div class="search-box mr-2">
                                    <div class="position-relative">
                                        <input type="text" class="form-control border-0" placeholder="Search...">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                </div>
                                <ul class="nav nav-pills product-view-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><i class="bx bx-grid-alt"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="bx bx-list-ul"></i></a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($rumah as $r) : ?>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="<?= base_url('rumah/') . $r['image']; ?>" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-3 text-truncate"><a href="#" class="text-dark"><?= $r['kategori']; ?> </a></h5>
                                            <h5 class="my-0"><b>Rp <?= $r['harga']; ?></b></h5>
                                        </div>
                                    </div>
                                    <div class="btn-group btn-group-example" role="group">
                                        <a href="<?= base_url('auth/login'); ?>" type="button" class="btn btn-warning w-xs">Buy</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- end row -->

                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- Roadmap end -->

    <!-- Team start -->
    <section class="section" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <div class="small-title">Team</div>
                        <h4>Meet our team</h4>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="col-lg-12">
                <div class="owl-carousel owl-theme events navs-carousel" id="team-carousel">
                    <?php foreach ($user as $u) : ?>
                        <div class="item">
                            <div class="card text-center team-box">
                                <div class="card-body">
                                    <div>
                                        <img src="<?= base_url('assets/images/users/avatar-2.jpg'); ?>" alt="" class="rounded">
                                    </div>

                                    <div class="mt-3">
                                        <h5><?= $u['nama']; ?></h5>
                                        <!-- <p class="text-muted mb-0">CEO & Lead</p> -->
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top">
                                    <div class="d-flex mb-0 team-social-links">
                                        <div class="flex-fill">
                                            <a href="#" data-toggle="tooltip" title="Facebook">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="#" data-toggle="tooltip" title="Linkedin">
                                                <i class="mdi mdi-linkedin"></i>
                                            </a>
                                        </div>
                                        <div class="flex-fill">
                                            <a href="#" data-toggle="tooltip" title="Google">
                                                <i class="mdi mdi-google"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Team end -->


    <!-- Footer start -->
    <footer class="landing-footer">
        <div class="container">

            <!-- end row -->

            <hr class="footer-border">

            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-4">
                        <img src="assets/images/logo-light.png" alt="" height="20">
                    </div>

                    <p class="mb-2">2021 PT. Ardhana Mitra Kencana</p>
                </div>

            </div>
        </div>
        <!-- end container -->
    </footer>
    <!-- Footer end -->