<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>style-pdf.css">
    <title>
        <?= $judul; ?>
    </title>
</head>

<body>
    <div style="text-align: center;">
        <img src="<?= base_url('assets/img/kop.JPG') ?>" width="100%" height="auto" /><br />
        <!-- <h2 class="logo"><a style="position:absolute;" class="logo"><a href="#hero"><img src="assets\img\Logo MTs Al-Furqon.png" alt="" style="width:50px; margin-right: 30px">MTS Al-FURQON</a></h2> -->

    </div><br />
    <div style="text-align: center;">
        <u>
            <h3>BUKTI DITERIMA</h3>
        </u>
    </div>
    <p>Berdasarkan hasil peninjaun dan penilaian kami, maka kami menyatakan bahwa data siswa dibawah ini</p><br />
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>


            <?php $i = 1; ?>
            <?php foreach ($calonsiswa as $us): ?>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        <?= $us['nama_lengkap']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?= $us['alamat']; ?>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <?= $us['status']; ?>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>


        </tbody>
    </table>
    <br />
    <p>Bagi siswa yang telah dinyatakan diterima bisa langsung datang kembali ke sekolah dengan menyerahkan bukti ini
        kepada pihak sekolah</p><br />
    <div class="row" style="padding-top:50px">
        <div class="col-md-6">Kepala Sekolah</div>
        <div class="col-md-6 text-right"><img src="<?= base_url('assets/img/kop.JPG') ?>" width="30%"
                height="auto" /><br /></div>
        <div class="col-md-6"><u>Nama Kepala Sekolah</u></div>
        <div class="col-md-6">NIP</div>

    </div>


</body>