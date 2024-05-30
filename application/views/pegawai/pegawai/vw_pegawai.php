<!-- Begin Page Content -->
<div class="container-fluid">
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
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Jabatan</th>
                            <th>username</th>
                            <th>Password</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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
                                    <?= $us['alamat']; ?>
                                </td>
                                <td>
                                    <?= $us['no_hp']; ?>
                                </td>
                                <td>
                                    <?= $us['jabatan']; ?>
                                    </td>
                                    <td>
                                    <?= $us['username']; ?>
                                        </td>
                                        <td>
                                    
                                            </td>
                                            <td>
                                       
                                            <a href="<?= base_url('Pegawai/pegawai/edit/') . $us['id_pegawai']; ?>"
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