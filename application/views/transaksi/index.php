<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

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
            <?= form_error('menu', '<div id="alert" class="rounded-md px-5 py-4 mb-2 bg-theme-6 text-white text-center">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h4 class="card-title"><?= $title; ?></h4>

                            </div>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Kode Transaksi</th>
                                        <th>Konsumen</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Tanggal Pembayaran</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Status Pembayaran</th>
                                        <th>Aksi</th>
                                </thead>

                                <tbody>
                                    <?php foreach ($bayar as $b) : ?>
                                        <tr>
                                            <td><?= $b['kode_transaksi']; ?></td>
                                            <td> <?= $b['nama']; ?></td>
                                            <td><?= date('d F Y', $b['date_created']); ?></td>
                                            <td><?= date('d-F-Y', $b['tanggal_bayar']); ?></td>
                                            <td>
                                                <?php if ($b['image'] == null) : ?>
                                                    <!-- Button trigger modal -->
                                                    <div class="alert alert-danger" role="alert">
                                                        Data Pembayaran Tidak Ditemukan!
                                                    </div>
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
                                            <td>
                                                <?php if ($b['status_pembayaran'] === 'Berhasil') : ?>
                                                    <span class="badge badge-success"><?= $b['status_pembayaran']; ?></span>
                                                <?php else : ?>
                                                    <span class="badge badge-warning"><?= $b['status_pembayaran']; ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if ($b['status_pembayaran'] === 'Berhasil') : ?>
                                                    <a href="<?= base_url('transaksi/view_invoice/') . $b['id']; ?>" type="button" class="btn btn-success btn-sm waves-effect waves-light">
                                                        <i class="bx bx-printer font-size-16 align-middle mr-2"></i> Invoice
                                                    </a>
                                                <?php else : ?>
                                                    <a href="<?= base_url('transaksi/terima/') . $b['id']; ?>" class="btn btn-success btn-sm waves-effect waves-light">
                                                        <i class="bx bx-check-double font-size-16 align-middle mr-2"></i> Terima
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-sm waves-effect waves-light">
                                                        <i class="bx bx-block font-size-16 align-middle mr-2"></i> Tolak
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>