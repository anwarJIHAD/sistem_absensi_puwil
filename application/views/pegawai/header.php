<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ABSENSI|Puswil</title>

    <!-- Custom fonts for this template-->
    <link href=<?= base_url("assets2/vendor/fontawesome-free/css/all.min.css") ?> rel="stylesheet" type="text/css">
    <link
        href=https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=<?= base_url("assets2/css/sb-admin-2.min.css") ?> rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href=<?= base_url("assets2/vendor/datatables/dataTables.bootstrap4.min.css") ?> rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <!-- <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            alert(longitude + '-' + latitude);
            console.log(longitude + '-' + latitude);
            // Kirim koordinat ke server CodeIgniter menggunakan AJAX
            $.ajax({
                url: '<?php echo base_url("pegawai/absen/get_location"); ?>',
                type: 'POST',
                data: {
                    latitude: latitude,
                    longitude: longitude
                },
                success: function (response) {
                    // Tampilkan nama daerah dari respons server

                    $('#location').html(response);
                }
            });
        }
    </script> -->
</head>

<body id="page-top" onload="getLocation()">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="sidebar-brand-text mx-3">Puswil Riau</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('pegawai/home'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('Pegawai/Pegawai/'); ?>">
                    <i class="fa fa-address-book"></i>
                    <span>Data Pegawai</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('pegawai/Absen'); ?>">
                    <i class="fas fa-fw fa-check-square"></i>
                    <span>Absensi</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('pegawai/Riwayat'); ?>">
                    <i class="fas fa-fw fa-check-square"></i>
                    <span>Riwayat Absensi</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('pegawai/cuti/'); ?>">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span>Pengajuan Cuti</span></a>
            </li>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?= $this->session->userdata('nama_pegawai') ?>
                                </span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/'); ?>user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>