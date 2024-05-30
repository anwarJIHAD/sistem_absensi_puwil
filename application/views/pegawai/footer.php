</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Puswil Riau</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('Auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src=<?= base_url("assets2/vendor/jquery/jquery.min.js") ?>></script>
<script src=<?= base_url("assets2/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>></script>

<!-- Core plugin JavaScript-->
<script src=<?= base_url("assets2/vendor/jquery-easing/jquery.easing.min.js") ?>></script>

<!-- Custom scripts for all pages-->
<script src=<?= base_url("assets2/js/sb-admin-2.min.js") ?>></script>
<script src=<?= base_url("assets2/vendor/datatables/jquery.dataTables.min.js") ?>></script>
<script src=<?= base_url("assets2/vendor/datatables/dataTables.bootstrap4.min.js") ?>></script>

<!-- Page level custom scripts -->
<script src=<?= base_url("assets2/js/demo/datatables-demo.js") ?>></script>


<script>
    $(document).ready(function () {

    });
    function hadir() {
        $.ajax({
            type: 'POST',
            url: 'Pegawai/Absen/hadir',
            data: {},
            success: function (response) {
                berhasil
            }
        })
    }
</script>
<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        console.log(latitude + '-' + longitude);
        // Kirim koordinat ke server CodeIgniter menggunakan AJAX
        $.ajax({
            url: '<?php echo base_url("pegawai/absen/get_location"); ?>',
            type: 'POST',
            data: {
                latitude: latitude,
                longitude: longitude
            },
            success: function (response) {
                // Tampilkan nama daerah dari respons server
                var long = response
                $('#location').html(response);
                $('#lokasi').val(response)
            }
        });
    }
</script>

</body>

</html>