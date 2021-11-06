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
                                                    <!-- <th>Konsumen</th> -->
                                                    <th class="text-center">Tanggal Pesan</th>
                                                    <th class="text-center">Tanggal Bayar</th>
                                                    <th class="text-center">Total</th>
                                                    <th class="text-center">Status Pembayaran</th>
                                                    <th class="text-center">Metode Pembayaran</th>
                                                    <th class="text-center">View Details</th>
                                                    <th class="text-center">Invoice</th>
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
                                                            <td><a href="#" class="text-body font-weight-bold"><?= $b['kode_transaksi']; ?></a> </td>
                                                            <!-- <td><?= $b['nama']; ?></td> -->
                                                            <td class="text-center">
                                                                <?= date('d F Y', $b['date_created']); ?>
                                                            </td>
                                                            <?php if ($b['tanggal_bayar'] == null) : ?>
                                                                <td class="text-center">Data pembayaran tidak ditemukan</td>
                                                            <?php else : ?>
                                                                <td><?= date('d-F-Y', $b['tanggal_bayar']); ?></td>
                                                            <?php endif; ?>
                                                            <td class="text-body font-weight-bold">
                                                                <?php $rupiah = "Rp " . number_format($b['harga_rumah'], 2, ',', '.'); ?>
                                                                <?= $rupiah; ?>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="badge badge-pill badge-soft-warning font-size-12"><?= $b['status_pembayaran']; ?></span>
                                                            </td>
                                                            <td>
                                                                <i class="fab fa-cc-mastercard mr-1"></i> <?= $b['metode']; ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($b['image'] == null) : ?>
                                                                    <!-- Button trigger modal -->
                                                                    <a href="<?= base_url('konsumen/checkout/') . $b['id']; ?>" class="btn btn-primary btn-sm btn-rounded">
                                                                        Lanjutkan Pembayaran
                                                                    </a>
                                                                <?php else : ?>
                                                                    <button type="button" class="btn btn-success btn-sm btn-rounded" data-toggle="modal" data-target=".exampleModal">
                                                                        Bukti Pembayaran
                                                                    </button>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p class="mb-2">Kode Transaksi: <span class="text-primary"><?= $b['kode_transaksi']; ?></span></p>
                                                                                    <p class="mb-2">Rekening Transfer: <span class="text-primary"><?= $b['nama_bank']; ?> - <?= $b['no_rek']; ?> [ <?= $b['nama_pemilik']; ?> ]</span></p>

                                                                                    <div class="table-responsive">
                                                                                        <table class="table table-centered table-nowrap">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>Bukti Pembayaran</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <th scope="row">
                                                                                                        <div>
                                                                                                            <img src="<?= base_url('/bukti/') . $b['image']; ?>" alt="" class="img-fluid">
                                                                                                        </div>
                                                                                                    </th>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                            </td>
                                                            <th>
                                                                <a href="<?= base_url('konsumen/view_invoice/') . $b['id']; ?>" class="btn btn-primary btn-sm btn-rounded">
                                                                    Invoice
                                                                </a>
                                                            </th>
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