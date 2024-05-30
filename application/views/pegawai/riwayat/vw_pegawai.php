<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <p>Nama Pegawai :
            <?php echo $absen[1]['nama_pegawai'] ?>
        </p>
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
                            <!-- <th>nama Pegawai</th> -->
                            <th>tanggal absensi</th>
                            <th>Absen Pagi</th>
                            <th>Lokasi Absen Pagi</th>
                            <th>Absen Siang</th>
                            <th >Lokasi Absen Siang</th>
                            <th>Absen Sore</th>
                            <th>Lokasi Absen Sore</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($absen as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>
                                </td>
                                <!-- <td>
                                    <?= $us['nama_pegawai']; ?>
                                </td> -->
                                <td>
                                    <?= $us['tanggal']; ?>
                                </td>
                                <td>
                                    <?= $us['absen_pagi']; ?>
                                </td>
                                <td>
                                    <?php $lang = $us['lokasipagi_lang'];
                                    $long = $us['lokasipagi_long'];
                                    if ($lang != NULL) { ?>
                                        <iframe
                                            src="https://maps.google.com/maps?q=<?php echo $lang ?>,<?php echo $long ?>&hl=es;z=14&amp;output=embed"></iframe>
                                        <?php
                                    } else { ?>
                                        tidak ada
                                        <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= $us['absen_siang']; ?>
                                </td>
                                <td>
                                    <?php $lang = $us['lokasisiang_lang'];
                                    $long = $us['lokasisiang_long'];
                                    if ($lang != NULL) { ?>
                                        <iframe
                                            src="https://maps.google.com/maps?q=<?php echo $lang ?>,<?php echo $long ?>&hl=es;z=14&amp;output=embed"></iframe>
                                        <?php
                                    } else { ?>
                                        tidak ada
                                        <?php
                                    }
                                    ?>

                                </td>
                                <td>
                                    <?= $us['absen_sore']; ?>
                                </td>
                                <td>
                                    <?php $lang = $us['lokasisore_lang'];
                                    $long = $us['lokasisore_long'];
                                    if ($lang != NULL) { ?>
                                        <iframe
                                            src="https://maps.google.com/maps?q=<?php echo $lang ?>,<?php echo $long ?>&hl=es;z=14&amp;output=embed"></iframe>
                                        <?php
                                    } else { ?>
                                        tidak ada
                                        <?php
                                    }
                                    ?>
                                </td>
                                <!-- <td>

                                    <a href="<?= base_url('Admin/Absensi/edit/') . $us['id_absen']; ?>"
                                        class="badge badge-warning">Edit</a>
                                    <a href="<?= base_url('Admin/Absensi/hapus/') . $us['id_absen']; ?>"
                                        class="badge badge-danger">Delete</a>

                                </td> -->


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