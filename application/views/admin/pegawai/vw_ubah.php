<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/home'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= site_url('admin/pegawai'); ?>">Pengajuan Cuti</a>
        </li>
        <li class="breadcrumb-item active">
            Ubah Pegawai
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Data Pegawai
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai']; ?>">

                        <div class="form-group">
                            <label for="nama_pegawai">Nama </label>
                            <input name="nama_pegawai" type="text" value="<?= $pegawai['nama_pegawai']; ?>"
                                class="form-control" id="nama_pegawai"
                                placeholder="masukkan  anda..">
                            <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input name="alamat" type="text" value="<?= $pegawai['alamat']; ?>"
                                class="form-control" id="alamat"
                                placeholder="masukkan alamat anda..">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                         <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input name="no_hp" type="text" value="<?= $pegawai['no_hp']; ?>" class="form-control" id="no_hp"
                                placeholder="masukkan no hp anda..">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <input name="jabatan" type="Text" value="<?= $pegawai['jabatan']; ?>"
                                class="form-control" id="jabatan" placeholder="Masukkan jabatan anda...">
                            <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="Text" value="<?= $pegawai['username']; ?>" class="form-control" id="username"
                                placeholder="Masukkan username anda...">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                       <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="text" value="<?= set_value('password'); ?>" class="form-control" id="password"
                            placeholder="masukkan password anda  minimal 8 karakter..">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                        <a href="<?= base_url('Pegawai/pegawai') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>