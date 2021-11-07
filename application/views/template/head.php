<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title><?= $title; ?> | PT. AMK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets\images\favicon.ico'); ?>">

    <link href="<?= base_url('assets\libs\bootstrap-touchspin\jquery.bootstrap-touchspin.min.css'); ?>" rel="stylesheet">
    <!-- DataTables -->
    <link href="<?= base_url('assets\libs\datatables.net-bs4\css\dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets\libs\datatables.net-buttons-bs4\css\buttons.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="<?= base_url('assets\libs\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets\css\bootstrap.min.css'); ?>" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="<?= base_url('assets\css\icons.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="<?= base_url('assets\css\app.min.css'); ?>" id="app-style" rel="stylesheet" type="text/css">
    <style>
        .popup {
            width: 60px;
            margin: auto;
            text-align: left
        }

        .popup img {
            width: 50px;
            height: 50px;
            cursor: pointer
        }

        .show {
            z-index: 999;
            display: none;
        }

        .show .overlay {
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .66);
            position: absolute;
            top: 0;
            left: 0;
        }

        .show .img-show {
            width: 600px;
            height: 400px;
            background: #FFF;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            overflow: hidden
        }

        .img-show span {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 99;
            cursor: pointer;
        }

        .img-show img {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        /*End style*/
    </style>
</head>