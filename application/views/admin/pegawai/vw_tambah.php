<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/Pegawai'); ?>">Pengajuan Cuti</a>
        </li>
        <li class="breadcrumb-item active">
            Tambah Pegawai
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Pegawai 
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_pegawai">Nama Pegawai</label>
                            <input name="nama_pegawai" type="text" value="<?= set_value('nama_pegawai'); ?>"
                                class="form-control" id="nama_pegawai"
                                placeholder="masukkan tanggal selesai cuti anda..">
                            <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text" value="<?= set_value('alamat'); ?>"
                                class="form-control" id="alamat"
                                placeholder="masukkan alamat anda..">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input name="no_hp" type="text" value="<?= set_value('no_hp'); ?>" class="form-control"
                                id="no_hp" placeholder="masukkan no hp anda..">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input name="jabatan" type="text" value="<?= set_value('jabatan'); ?>" class="form-control"
                                id="jabatan" placeholder="masukkan jabatan anda..">
                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" value="<?= set_value('username'); ?>"
                                class="form-control" id="username"
                                placeholder="masukkan username anda..">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="text" value="<?= set_value('password'); ?>" class="form-control"
                                id="password" placeholder="masukkan password anda minimal 8 karakter..">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>