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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Konsumen</a></li>
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="checkout-tabs">
                <div class="row">

                    <div class="col-xl-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="tab-pane fade show active" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                                    <div>
                                        <h4 class="card-title">Metode Pembayaran: <?= $check['metode']; ?></h4>
                                    </div>
                                    <?php if ($check['metode'] === 'KPR') : ?>
                                        <?= 'hitung kpr'; ?>
                                    <?php else : ?>
                                        <div class="p-4 border">
                                            <form action="<?= base_url('konsumen/buktibayar'); ?>" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group row mb-2">
                                                            <label class="col-md-4 col-form-label">Pilih Bank</label>
                                                            <div class="col-md-8">
                                                                <select class="form-control select2" name="bank_id" required>
                                                                    <option value="">--Pilih Bank--</option>
                                                                    <?php foreach ($bank as $b) : ?>
                                                                        <option value="<?= $b['id']; ?>"><?= $b['nama_bank']; ?> - <?= $b['no_rek']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <input type="hidden" name="id" value="<?= $order['id']; ?>">
                                                            <label class="col-md-4 col-form-label" for="image">Bukit Pembayaran</label>
                                                            <div class="col-md-8">
                                                                <input type="file" class="form-control customs-file-input" name="image" id="image" placeholder="Bukti Pembayaran" required>
                                                                <!-- <label class="custom-file-label opacity-0" for="image"> Select File </label> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-sm-6">

                                                    </div> <!-- end col -->
                                                    <div class="col-sm-6">
                                                        <div class="text-sm-right">
                                                            <button type="submit" type class="btn btn-success">
                                                                <i class="mdi mdi-truck-fast mr-1"></i> Simpan </button>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </form>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card shadow-none border mb-0">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Data Pesanan Rumah</h4>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0 table-nowrap">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Gambar</th>
                                                    <th scope="col">Product Desc</th>
                                                    <th scope="col">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><img src="<?= base_url('/rumah/') . $order['image']; ?>" alt="product-img" title="product-img" class="avatar-md"></th>
                                                    <td>
                                                        <h5 class="font-size-14 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Half sleeve T-shirt (64GB) </a></h5>
                                                        <p class="text-muted mb-0">$ 450 x 1</p>
                                                    </td>
                                                    <td>$ 450</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<script src="<?= base_url('assets/js/jquery-3.6.0.js'); ?>"></script>
<script>
    $('.customs-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>