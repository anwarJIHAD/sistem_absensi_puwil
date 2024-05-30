<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <form action="" method="POST" class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label for="status">Status Cuti <span class="text-danger">*</span></label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                            <option>Diterima</option>
                            <option>Ditolak</option>
                            <option>Belum Diverifikasi</option>

                        </select>
                        <small class="form-text text-muted"></small>
                        <?= form_error('status', '<small class="form-text text-danger">', '</small>'); ?>
                    </div>
                    <!-- <a href="<?= base_url('admin/cuti/') ?>" class="btn btn-danger">Tutup</a> -->
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>