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
                                        <th>NO</th>
                                        <th>JUDUL</th>
                                        <th>MENU</th>
                                        <th>ACTIVE</th>
                                        <th>ACTION</th>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td> <?= $sm['judul']; ?></td>
                                        <td> <?= $sm['menu']; ?></td>
                                        <td>
                                            <!-- <?php if ($sm['is_active'] == 1) : ?> -->
                                            <span class="badge badge-success">Aktif</span>
                                            <!-- <?php else : ?> -->
                                            <!-- <span class="badge badge-danger">Non Aktif</span> -->
                                            <!-- <?php endif; ?> -->
                                        </td>
                                        <td>

                                            <button type="button" class="btn btn-warning btn-sm waves-effect btn-label waves-light"><i class="bx bx-edit label-icon "></i> Edit</button>
                                            <!-- <a href="<?= base_url('menu/delete_submenu/') . $sm['id']; ?>" type="button" class="btn btn-danger btn-sm waves-effect btn-label waves-light"><i class="bx bx-trash-alt label-icon "></i> Delete</a> -->

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>