<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB | MTS Al-Furqon</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url("assets2/") ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url("assets2/") ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="padding-top : 300px">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                        <div class="error mx-auto" data-text="404">404</div>
                        <p class="lead text-gray-800 mb-5">Halaman tidak ditemukan</p>
                        <p class="text-gray-500 mb-0">Sepertinya Anda menemukan kesalahan...</p>
                        <a>Kembali ke Halaman Utama? / Keluar?</a>
                        <?php if ($user['level'] == 'admin') { ?>
                            <a href="<?= base_url('Admin/Home') ?>" type="button" class="btn btn-primary">Kembali</a>
                        <?php } else if ($user['level'] == 'bendahara') { ?>
                                <a href="<?= base_url('Bendahara/Home') ?>" type="button" class="btn btn-primary">Kembali</a>
                        <?php } else if ($user['level'] == 'panitia') { ?>
                                <a href="<?= base_url('PanitiaPSB/Home') ?>" type="button" class="btn btn-primary">Kembali</a>
                        <?php }
                        ?>
                        <a href="<?= base_url('PintuMasuk/logout') ?>" type="button" class="btn btn-warning">Keluar</a>
                    </div>

                </div>


            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PPDB Al-Furqon</span>

                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url("assets2/") ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url("assets2/") ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url("assets2/") ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url("assets2/") ?>js/sb-admin-2.min.js"></script>

</body>

</html>