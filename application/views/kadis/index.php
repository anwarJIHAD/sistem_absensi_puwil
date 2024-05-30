<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Selamat Datang Admin
    </h1>
    <h3> Sistem Absensi Kepegawaian Dinas Perpustakaan Wilayah Riau</h3>
    <br>
    <div class="row">


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Pegawai</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo $jumlah_pegawai ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Jadwal Absensi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo $jadwal_absensi ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Pegajuan Cuti</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo $cuti ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class='col-10' style="height:600px;">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var hadir1 = <?php echo $hadir_1 ?>;
        var hadir2 = <?php echo $hadir_2 ?>;
        var hadir3 = <?php echo $hadir_3 ?>;
        var hadir4 = <?php echo $hadir_4 ?>;
        var hadir5 = <?php echo $hadir_5 ?>;
        var hadir6 = <?php echo $hadir_6 ?>;
        var hadir7 = <?php echo $hadir_7 ?>;
        var hadir8 = <?php echo $hadir_8 ?>;
        var hadir9 = <?php echo $hadir_9 ?>;
        var hadir10 = <?php echo $hadir_10 ?>;
        var hadir11 = <?php echo $hadir_11 ?>;
        var hadir12 = <?php echo $hadir_12 ?>;


        var alfa1 = <?php echo $alfa_1 ?>;
        var alfa2 = <?php echo $alfa_2 ?>;
        var alfa3 = <?php echo $alfa_3 ?>;
        var alfa4 = <?php echo $alfa_4 ?>;
        var alfa5 = <?php echo $alfa_5 ?>;
        var alfa6 = <?php echo $alfa_6 ?>;
        var alfa7 = <?php echo $alfa_7 ?>;
        var alfa8 = <?php echo $alfa_8 ?>;
        var alfa9 = <?php echo $alfa_9 ?>;
        var alfa10 = <?php echo $alfa_10 ?>;
        var alfa11 = <?php echo $alfa_11 ?>;
        var alfa12 = <?php echo $alfa_12 ?>;

        var dataX1 = ['January', 'February', 'March', 'April', 'May', 'June', 'juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var dataY1 = [hadir1, hadir2, hadir3, hadir4, hadir5, hadir6, hadir7, hadir8, hadir9, hadir10, hadir11, hadir12];

        // Data untuk set data kedua x
        var dataX2 = ['January', 'February', 'March', 'April', 'May', 'June', 'juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        var dataY2 = [alfa1, alfa2, alfa3, alfa4, alfa5, alfa6, alfa7, alfa8, alfa9, alfa10, alfa11, alfa12];

        // Inisialisasi grafik
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: dataX1, // Menggunakan dataX1 sebagai label
                datasets: [{
                    label: 'HADIR',
                    data: [{ x: dataX1[0], y: dataY1[0] }, { x: dataX1[1], y: dataY1[1] }, { x: dataX1[2], y: dataY1[2] }, { x: dataX1[3], y: dataY1[3] }, { x: dataX1[4], y: dataY1[4] }, { x: dataX1[5], y: dataY1[5] }, { x: dataX1[6], y: dataY1[6] }, { x: dataX1[7], y: dataY1[7] }, { x: dataX1[8], y: dataY1[8] }, { x: dataX1[9], y: dataY1[9] }, { x: dataX1[10], y: dataY1[10] }, { x: dataX1[11], y: dataY1[11] }, { x: dataX1[11], y: dataY1[11] }],
                    backgroundColor: 'rgba(0, 128, 0, 0.7)',
                    borderColor: 'rgba(0, 128, 0, 1)',
                    borderWidth: 1
                }, {
                    label: 'TIDAK HADIR',
                    data: [{ x: dataX2[0], y: dataY2[0] }, { x: dataX2[1], y: dataY2[1] }, { x: dataX2[2], y: dataY2[2] }, { x: dataX2[3], y: dataY2[3] }, { x: dataX2[4], y: dataY2[4] }, { x: dataX2[5], y: dataY2[5] }, { x: dataX2[6], y: dataY2[6] }, { x: dataX2[7], y: dataY2[7] }, { x: dataX2[8], y: dataY2[8] }, { x: dataX2[9], y: dataY2[9] }, { x: dataX2[10], y: dataY2[10] }, { x: dataX2[11], y: dataY2[11] }, { x: dataX2[12], y: dataY2[12] }],
                    backgroundColor: 'rgba(255, 0, 0, 0.7)',
                    borderColor: 'rgba(255, 0, 0, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        type: 'category', // Menggunakan skala kategori untuk label bulan
                        position: 'bottom'
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


</div>  