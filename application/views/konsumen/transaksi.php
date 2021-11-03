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
            <?= form_error('menu', '<div id="alert" class="rounded-md px-5 py-4 mb-2 bg-theme-6 text-white text-center">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <div class="row">
                <div class="col-lg-12">

                    <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Kode Transaksi</th>
                                                    <th>Billing Name</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>Status Pembayaran</th>
                                                    <th>Payment Method</th>
                                                    <th>View Details</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (empty($bayar)) : ?>
                                                    <td>
                                                        <div class="col-12">
                                                            <div class="alert" role="alert">
                                                                Tidak ada data transaksi
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php else : ?>
                                                    <?php foreach ($bayar as $b) : ?>

                                                        <tr>
                                                            <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2540</a> </td>
                                                            <td>Neal Matthews</td>
                                                            <td>
                                                                <?= date('d-m-Y', strtotime($b["date_created"])); ?>
                                                            </td>
                                                            <td>
                                                                <?= $b['harga_rumah']; ?>
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-pill badge-soft-warning font-size-12"><?= $b['status_pembayaran']; ?></span>
                                                            </td>
                                                            <td>
                                                                <i class="fab fa-cc-mastercard mr-1"></i> <?= $b['metode']; ?>
                                                            </td>
                                                            <td>
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-primary btn-sm btn-rounded" data-toggle="modal" data-target=".exampleModal">
                                                                    View Details
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->