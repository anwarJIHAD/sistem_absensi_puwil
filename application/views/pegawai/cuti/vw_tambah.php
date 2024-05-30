<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('pegawai/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('pegawai/cuti'); ?>">Pengajuan Cuti</a>
        </li>
        <li class="breadcrumb-item active">
            Ajukan Cuti
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Formulir Pengajuan Cuti
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tgl_mulai_cuti">Tanggal Mulai Cuti</label>
                            <input name="tgl_mulai_cuti" type="date" value="<?= set_value('tgl_mulai_cuti'); ?>"
                                class="form-control" id="tgl_mulai_cuti" placeholder="masukkan tanggal selesai cuti anda..">
                            <?= form_error('tgl_mulai_cuti', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl_selesai_cuti">Tanggal Selesai Cuti</label>
                            <input name="tgl_selesai_cuti" type="date" value="<?= set_value('tgl_selesai_cuti'); ?>"
                                class="form-control" id="tgl_selesai_cuti" placeholder="masukkan tanggal selesai cuti anda..">
                            <?= form_error('tgl_selesai_cuti', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jml_hari_cuti">Jumlah Hari Cuti <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="jml_hari_cuti" required="required"
                                    type="number" placeholder="Masukkan jumlah hari cuti anda..."
                                    value="<?= set_value('jml_hari_cuti'); ?>">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Hari</div>
                                </div>
                            </div>
                            <small class="form-text text-muted"></small>
                            <?= form_error('jml_hari_cuti', '<small class="form-text text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alasan_cuti">Tanggal Selesai Cuti</label>
                            <input name="alasan_cuti" type="Text" value="<?= set_value('alasan_cuti'); ?>"
                                class="form-control" id="alasan_cuti" placeholder="Masukkan alasan cuti anda...">
                            <?= form_error('alasan_cuti', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>