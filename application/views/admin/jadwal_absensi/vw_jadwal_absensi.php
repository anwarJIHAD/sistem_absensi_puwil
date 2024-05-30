<!-- Begin Page Content -->
<div class="container-fluid">
    <h2 class="h3 mb-2 text-gray-800">
        <?= $judul; ?>
    </h2>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="card-header py-3">
            <a href=<?= base_url('Admin/JadwalAbsensi/add/'); ?> class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>tanggal absensi</th>
                            <th>status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($jadwal_absensi as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <?= $us['tanggal']; ?>
                                </td>
                                <td>
                                    <?= $us['status']; ?>
                                </td>
                                <td>

                                    <a href="<?= base_url('Admin/JadwalAbsensi/edit/') . $us['id_jadwal_absensi']; ?>"
                                        class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Admin/JadwalAbsensi/hapus/') . $us['id_jadwal_absensi']; ?>"
                                        class="badge badge-danger">Hapus</a>
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