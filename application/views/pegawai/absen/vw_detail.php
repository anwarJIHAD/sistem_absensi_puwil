<!-- Begin Page Content -->


<div class="container-fluid">
    <ol class="breadcrumb">
        <p>Jadwal Absensi :
            <?php echo $jadwal ?>
        </p>
    </ol>
    <h2 class="h3 mb-2 text-gray-800">
        <?= $judul; ?>
        <div id="location"></div>
    </h2>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="card-header py-3">
            <p>Silahkan Lakukan Presensi</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= base_url('assets/img/'); ?>pagi.jpg" alt="Card image cap">
                        <div class="card-body">

                            <div class="col text-center">
                                <h5 class="card-title">Absensi Pagi</h5>
                                <input type="hidden" id='lokasi'>
                                <?php if ($data_absen1[0]['absen_pagi'] == NULL) { ?>
                                    <a href="<?= base_url('Pegawai/Absen/hadir_pagi/') . $data_absen1[0]['id_absen']; ?>"
                                        class="btn btn-success text-center"
                                        style="border-radius: 50%; width:80px; height:80px;"></br>HADIR</a>
                                    <a href="<?= base_url('Pegawai/Absen/alfa_pagi/') . $data_absen1[0]['id_absen']; ?>"
                                        class="btn btn-warning text-center"
                                        style="border-radius: 50%; width:80px; height:80px;"></br>alfa</a>

                                <?php } elseif ($data_absen1[0]['absen_pagi'] == 'off') { ?>
                                    <p class="card-text text-danger">ALFA</p>




                                <?php } else { ?>
                                    <p class="card-text text-success">HADIR</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= base_url('assets/img/'); ?>siang.jpg" alt="Card image cap">
                        <div class="card-body">

                            <div class="col text-center">
                                <h5 class="card-title">Absensi Siang</h5>
                                <?php if ($data_absen1[0]['absen_siang'] == NULL) { ?>
                                    <a href="<?= base_url('Pegawai/Absen/hadir_siang/') . $data_absen1[0]['id_absen']; ?>"
                                        class="btn btn-success text-center"
                                        style="border-radius: 50%; width:80px; height:80px;"></br>HADIR</a>
                                    <a href="<?= base_url('Pegawai/Absen/alfa_siang/') . $data_absen1[0]['id_absen']; ?>"
                                        class="btn btn-warning text-center"
                                        style="border-radius: 50%; width:80px; height:80px;"></br>alfa</a>

                                <?php } elseif ($data_absen1[0]['absen_siang'] == 'off') { ?>
                                    <p class="card-text text-danger">ALFA</p>




                                <?php } else { ?>
                                    <p class="card-text text-success">HADIR</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= base_url('assets/img/'); ?>sore.jpg" alt="Card image cap">
                        <div class="card-body">

                            <div class="col text-center">
                                <h5 class="card-title">Absensi Sore</h5>
                                <?php if ($data_absen1[0]['absen_sore'] == NULL) { ?>
                                    <a href="<?= base_url('Pegawai/Absen/hadir_sore/') . $data_absen1[0]['id_absen']; ?>"
                                        class="btn btn-success text-center"
                                        style="border-radius: 50%; width:80px; height:80px;"></br>HADIR</a>
                                    <a href="<?= base_url('Pegawai/Absen/alfa_sore/') . $data_absen1[0]['id_absen']; ?>"
                                        class="btn btn-warning text-center"
                                        style="border-radius: 50%; width:80px; height:80px;"></br>alfa</a>

                                <?php } elseif ($data_absen1[0]['absen_sore'] == 'off') { ?>
                                    <p class="card-text text-danger">ALFA</p>
                                <?php } else { ?>
                                    <p class="card-text text-success">HADIR</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('Pegawai/Absen/') ?>" style='margin-top:30px;'
                    class='btn btn-warning ml-3'>Kembali</a>
            </div>



        </div>
    </div>

</div>
<!-- /.container-fluid -->