 <!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>

        <li class="breadcrumb-item active">
            Diterima
        </li>
    </ol>

    <h2 class="h3 mb-2 text-gray-800">
        <?= $judul; ?>
    </h2>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Jumlah Hari </th>
                            <th>Alasan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($pegawai) > 0): ?>
                            <?php $i = 1; ?>
                            <?php foreach ($pegawai as $us): ?>
                                    <tr>
                                        <td>
                                            <?= $i; ?>
                                        </td>
                                        <td>
                                            <?= $us['nama_pegawai']; ?>
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
                                            <a href="<?= base_url('Admin/PengajuanCuti/verifikasi_terima/') . $us['id_cuti']; ?>" title="Verifikasi"><i
                                                    class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('Admin/Cuti/hapus/') . $us['id_cuti']; ?>" title="Delete"><i
                                                    class="fas fa-trash"></i></a>
                                        </td>
                                        </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->