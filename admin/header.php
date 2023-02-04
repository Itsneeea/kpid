<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KPID Kalsel | Dashboard</title>
    <link href="../plugins/css/fontawesome.css" rel="stylesheet">
    <link href="../plugins/css/brands.css" rel="stylesheet">
    <link href="../plugins/css/solid.css" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- jQuery -->
    <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
    <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <style>
        .pagination li {
            display: inline-block;
            padding: 6px 12px;
            border: 1px solid #ddd;
            margin-right: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-color: #fff;
            border-radius: 4px;
        }

        .pagination li:hover {
            background-color: #eee;
        }

        .pagination .active {
            background-color: #337ab7;
            color: #fff;
        }

        .dataTables_paginate {
            float: right;
            width: 100px;
        }

        .pagination {
            width: 100px;
            float: bottom;
            margin-left: 100px;
        }

        .dataTables_filter {
            width: 250px;
            margin-right: 10px;
        }
    </style>
</head>

<?php
include '../koneksi.php';
session_start();

if ($_SESSION['status'] != "administrator_logedin") {
    header("location:../index.php?alert=belum_login");
}
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- < !-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- < !-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a></li>
            </ul>
            <!-- < !-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" data-widget="fullscreen" href="#" role="button"><i class="fas fa-expand-arrows-alt"></i></a></li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index.php" class="brand-link">
                <img src="../assets/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .8" width="120px">
                <span class="brand-text font-weight-light">KPID KALSEL</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="fa-regular fa-laptop-code nav-icon"></i>
                                <p>Dashboard </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="kategori.php" class="nav-link">
                                <i class="fa-regular fa-folder-open nav-icon"></i>
                                <p>KATEGORI NPHD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="transaksi.php" class="nav-link">
                                <i class="fa-solid fa-magnifying-glass-dollar nav-icon"></i>
                                <p>DATA TRANSAKSI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="bank.php" class="nav-link">
                                <i class="fa-solid fa-address-book nav-icon"></i>
                                <p>DATA AKUN</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="nphd.php" class="nav-link">
                                <i class="fa-regular fa-folder-open nav-icon"></i>
                                <p>ANGGARAN NPHD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="bukukas.php" class="nav-link">
                                <i class="fa-solid fa-book nav-icon"></i>
                                <p>L. BUKU KAS UMUM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="laporan_nphd.php?periode=1" class="nav-link">
                                <i class="fa-regular fa-folder-open nav-icon"></i>
                                <p>L. ANGGARAN NPHD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="danaterpakai.php?periode=1" class="nav-link">
                                <i class="fa-regular fa-folder-open nav-icon"></i>
                                <p>L. ANGGARAN TERPAKAI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="laporan.php" class="nav-link">
                                <i class="fa-solid fa-book nav-icon"></i>
                                <p>LAPORAN TRANSAKSI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="hutang.php" class="nav-link">
                                <i class="fa-regular fa-file-lines nav-icon"></i>
                                <p>LAPORAN HUTANG</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="piutang.php" class="nav-link">
                                <i class="fa-regular fa-file nav-icon"></i>
                                <p>LAPORAN PIUTANG</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="user.php" class="nav-link">
                                <i class="fa-regular fa-user-large nav-icon"></i>
                                <p>MANAJEMEN PENGGUNA</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="staff.php" class="nav-link">
                                <i class="fa-regular fa-user-large nav-icon"></i>
                                <p>DATA STAFF</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="gantipassword.php" class="nav-link">
                                <i class="fa-regular fa-key nav-icon"></i>
                                <p>GANTI PASSWORD</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="fa-regular fa-person-running nav-icon"></i>
                                <p>KELUAR</p>
                            </a>
                        </li>
                        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Level 1
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Level 2
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>