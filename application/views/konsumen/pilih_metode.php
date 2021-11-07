<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18"></h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Administrator</a></li>
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="<?= base_url('konsumen/save_metode'); ?>" method="post">
                                    <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                                    <input type="hidden" name="kode_transaksi" value="AMKT<?= $rumah['tipe_id']; ?>U<?= $user['id']; ?><?= $rumah['id']; ?>">
                                    <input type="hidden" name="rumah_id" value="<?= $rumah['id']; ?>">
                                    <table class="table table-centered mb-0 table-nowrap">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Gambar</th>
                                                <th>Rumah</th>
                                                <th>Harga</th>
                                                <th>Metode Pembayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="<?= base_url('/rumah/') . $rumah['image']; ?>" alt="product-img" title="product-img" class="avatar-md">

                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark"><?= $rumah['kategori']; ?></a></h5>
                                                    <p class="mb-0">Lokasi : <span class="font-weight-medium"><?= $rumah['lokasi']; ?></span></p>
                                                    <p class="mb-0">Blok : <span class="font-weight-medium"><?= $rumah['blok']; ?></span></p>
                                                </td>
                                                <td>
                                                    <input type="text" id="harga_rumah" name="harga_rumah" style="border: 0px;" class="form-control" value=" <?= $rumah['harga']; ?>" placeholder="harga" readonly />

                                                </td>
                                                <td>
                                                    <select class="form-control select2" name="metode_id" required>
                                                        <option value="">--Pilih Metode Pembayaran--</option>
                                                        <?php foreach ($metode as $m) : ?>
                                                            <option value="<?= $m['id'] ?>"><?= $m['metode'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-6">
                                    <a href="ecommerce-products.html" class="btn btn-secondary">
                                        <i class="mdi mdi-arrow-left mr-1"></i> Continue Shopping </a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="text-sm-right mt-2 mt-sm-0">
                                        <button type="submit" class="btn btn-success">
                                            <i class="mdi mdi-cart-arrow-right mr-1"></i> Checkout </button>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            </form><!-- end row-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($metode as $m) : ?>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Social Source</h4>
                                <div class="text-center">
                                    <div class="avatar-sm mx-auto mb-4">
                                        <span class="avatar-title rounded-circle bg-soft-primary font-size-24">
                                            <i class="mdi mdi-facebook text-primary"></i>
                                        </span>
                                    </div>
                                    <p class="font-16 text-muted mb-2"></p>
                                    <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus tincidunt.</p>
                                    <a href="#" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-4">
                                        <div class="social-source text-center mt-3">
                                            <div class="avatar-xs mx-auto mb-3">
                                                <span class="avatar-title rounded-circle bg-primary font-size-16">
                                                    <i class="mdi mdi-facebook text-white"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-15">Facebook</h5>
                                            <p class="text-muted mb-0">125 sales</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="social-source text-center mt-3">
                                            <div class="avatar-xs mx-auto mb-3">
                                                <span class="avatar-title rounded-circle bg-info font-size-16">
                                                    <i class="mdi mdi-twitter text-white"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-15">Twitter</h5>
                                            <p class="text-muted mb-0">112 sales</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="social-source text-center mt-3">
                                            <div class="avatar-xs mx-auto mb-3">
                                                <span class="avatar-title rounded-circle bg-pink font-size-16">
                                                    <i class="mdi mdi-instagram text-white"></i>
                                                </span>
                                            </div>
                                            <h5 class="font-size-15">Instagram</h5>
                                            <p class="text-muted mb-0">104 sales</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->