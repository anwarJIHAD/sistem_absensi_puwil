<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ABSENSI | Puswil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href=<?= base_url("assets/img/favicon.png") ?> rel="icon">
  <link href=<?= base_url("assets/img/User_V_i_P-Home.png") ?> rel="User_V_i_P-Home">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=<?= base_url("assets/vendor/aos/aos.css") ?> rel="stylesheet">
  <link href=<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?> rel="stylesheet">
  <link href=<?= base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?> rel="stylesheet">
  <link href=<?= base_url("assets/vendor/boxicons/css/boxicons.min.css") ?> rel="stylesheet">
  <link href=<?= base_url("assets/vendor/glightbox/css/glightbox.min.css") ?> rel="stylesheet">
  <link href=<?= base_url("assets/vendor/swiper/swiper-bundle.min.css") ?> rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href=<?= base_url("assets/css/style.css") ?> rel="stylesheet">
</head>

<body>


  <section class="vh-100" style="background-color: #e5e6fa;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center ">
              <?= $this->session->flashdata('message'); ?>
              <h2 class="text-uppercase text-center mb-3">LOGIN</h2>
              <p class="text-muted">Sign In to your account</p>

              <form method="post" action="">
                <div class="form-floating mb-3">
                  <input class="form-control" id="username" required="required" type="text" name="username"
                    placeholder="Masukkan Username anda..." value="<?= set_value('username'); ?>" />
                  <label for="username">Username</label>
                  <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <!-- Username input-->
                <div class="form-floating mb-3">
                  <input class="form-control" id="password" required="required" type="password" name="password"
                    placeholder="Masukkan Password anda..." value="<?= set_value('password'); ?>" />
                  <label for="password">Password</label>
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div>
                  <input type="submit" class="btn btn-primary" value="Submit">
                </div>


            </div>
          </div>
        </div>
      </div>
      </form>
  </section>

  <!-- Vendor JS Files -->
  <script src=<?= base_url("assets/vendor/purecounter/purecounter_vanilla.js") ?>> </script>
  <script src=<?= base_url("assets/vendor/aos/aos.js") ?>> </script>
  <script src=<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
  <script src=<?= base_url("assets/vendor/glightbox/js/glightbox.min.js") ?>>   </script>
  <script src=<?= base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>></script>
  <script src=<?= base_url("assets/vendor/swiper/swiper-bundle.min.js") ?>> </script>
  <script src=<?= base_url("assets/vendor/waypoints/noframework.waypoints.js") ?>></script>
  <script src=<?= base_url("assets/vendor/php-email-form/validate.js") ?>></script>

  <!-- Template Main JS File -->
  <script src=<?= base_url("assets/js/main.js") ?>></script>

</body>

</html>