<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('pegawai/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            Cuti
        </li>
    </ol>
    <h2 class="h3 mb-2 text-gray-800">
        <?= $judul; ?>
    </h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="card-header py-3">
            <a href=<?= base_url('Pegawai/Cuti/add'); ?> class="btn btn-primary">Ajukan Cuti</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Jumlah Hari </th>
                            <th>Alasan</th>
                            <th>Status</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($cuti as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <td>
                                    <?= $us['tgl_mulai_cuti']; ?>
                                </td>
                                <td>
                                    <?= $us['tgl_selesai_cuti']; ?>
                                </td>
                                <td>
                                    <?= $us['jml_hari_cuti']; ?>
                                </td>
                                <td>
                                    <?= $us['alasan_cuti']; ?>
                                </td>
                                <td>
                                    <?= $us['status']; ?>
                                </td>

                                <td>
                                    <a href="<?= base_url('Pegawai/Cuti/edit/') . $us['id_cuti']; ?>"
                                        class="badge badge-warning">Edit</a>
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