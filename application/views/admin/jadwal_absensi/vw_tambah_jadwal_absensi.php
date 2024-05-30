<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('Admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('Admin/JadwalAbsensi'); ?>">Jadwal Absensi</a>
        </li>
        <li class="breadcrumb-item active">
            Tambahkan Jadwal Absensi
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambahakan Jadwal Absensi
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tgl_jadwal">Tanggal Absensi</label>
                            <input name="tgl_jadwal" type="date" value="<?= set_value('tgl_jadwal'); ?>"
                                class="form-control" id="tgl_jadwal" placeholder="masukkan tanggal selesai cuti anda..">
                            <?= form_error('tgl_jadwal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>