<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('Admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('Admin/Absensi'); ?>">Data Absensi</a>
        </li>
        <li class="breadcrumb-item active">
            Tambahkan Data Absensi
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambahakan Absensi
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_jadwal" value="<?= $id_jadwal ?>" id="">
                        <div class="form-group">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <select style="width:100%;" class="theSelect form-control" name="nama_pegawai"
                                id="nama_pegawai" value="<?= set_value('nama_pegawai'); ?>">
                                <option value="">pilih nama pegawai</option>
                                <?php foreach ($pegawai as $p): ?>
                                    <option value="<?= $p['id_pegawai']; ?>"><?= $p['nama_pegawai']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama_pegawai">Absensi</label>
                            <hr>

                            <p>Absensi Pagi : <input type="checkbox" name="absen_pagi" id=""> </p>
                            <p>Absensi Siang : <input type="checkbox" name="absen_siang" id=""> </p>
                            <p>Absensi Sore : <input type="checkbox" name="absen_sore" id=""> </p>
                            <hr>
                        </div>


                        <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>