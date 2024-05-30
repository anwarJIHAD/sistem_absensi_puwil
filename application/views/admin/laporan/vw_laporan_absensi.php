<!-- Begin Page Content -->
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= site_url('Admin/home'); ?>">Dashboard</a>
        </li>

        <li class="breadcrumb-item active">
            Laporan
        </li>
    </ol>
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    Form Cetak Laporan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Admin/Laporan/cetak/') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tgl_jadwal">Tahun</label>
                            <select name="tahun" class="form-control">
                                <?php
                                $tahun_sekarang = date('Y');
                                for ($tahun = $tahun_sekarang; $tahun >= 1900; $tahun--) {
                                    echo "<option value='$tahun'>$tahun</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_jadwal">Bulan</label>
                            <select name="bulan" class="form-control">
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>