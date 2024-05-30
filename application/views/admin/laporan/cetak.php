<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <!-- <p>Jadwal Absensi :
            <?php echo $jadwal ?>
        </p> -->
    </ol>
    <h2 class="h3 mb-2 text-gray-800">
        <!-- <?= $judul; ?> -->
    </h2>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- <?= $this->session->flashdata('message'); ?>
        <div class="card-header py-3">
            <a href=<?= base_url('Admin/Absensi/add/') . $id_jadwal ?> class="btn btn-primary">Tambah
                Data Absensi</a>
        </div> -->
        <div style='margin: '>
            <h2 style="margin: 0 auto; ">Laporan Absensi Bulanan Pegawai</h2>
            <p style="margin: 0 auto; ">priode :
                <?php echo $waktu ?>
            </p>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>nama Pegawai</th>
                            <th>tanggal absensi</th>
                            <th>Absen Pagi</th>
                            <th>Lokasi Absen Pagi</th>
                            <th>Absen Siang</th>
                            <th>Lokasi Absen Siang</th>
                            <th>Absen Sore</th>
                            <th>Lokasi Absen Sore</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($absen as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <?= $us['nama_pegawai']; ?>
                                </td>
                                <td>
                                    <?= $us['tanggal']; ?>
                                </td>
                                <td>
                                    <?= $us['absen_pagi']; ?>
                                </td>
                                <td>
                                    <?= $us['lokasi1']; ?>
                                </td>
                                <td>
                                    <?= $us['absen_siang']; ?>
                                </td>
                                <td>
                                    <?= $us['lokasi1']; ?>
                                </td>
                                <td>
                                    <?= $us['absen_sore']; ?>
                                </td>
                                <td>
                                    <?= $us['lokasi1']; ?>
                                </td>



                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->