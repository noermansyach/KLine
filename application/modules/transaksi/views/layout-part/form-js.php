	<!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/vendors/select2/select2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/typeahead.js/typeahead.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/dropify/dropify.min.js') ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('assets/js/off-canvas.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverable-collapse.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/misc.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/settings.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/todolist.js') ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/js/file-upload.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/typeahead.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/select2.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/dropify.js') ?>"></script>
    <!-- End custom js for this page -->

    <script>
        
        $(document).ready(function() {
            $("#selectDepartment").change(function() {
                var idDepartment = $("#selectDepartment option:selected").text() + "";
                var tanggal = $("#tanggal").val();
                var status = $("#receivePayment:checked").val();
                if (status == 'DEBIT') {
                    status = 'R';
                } else {
                    status = 'P';
                }
                var tahun = tanggal.substr(8,2);    
                var bulan = tanggal.substr(3,2);
                var noPPU = idDepartment.substring(0, 3) + "-" + status + "-" + tahun + "-" + bulan + "-";
                $.ajax({
                    url: "<?php echo base_url('operational/generatePpuNumber/'); ?>" + noPPU,
                    type: "GET",
                    success: function(result) {
                        var hasil = result;
                        noPPU = hasil.replace(/['"]+/g, '');
                        noPPU = noPPU.replace(/[-]+/g, '/');
                        $("#noPPU").val(noPPU);
                    }

                })

                // $("#noPPU").val(noPPU);
            });

            $("#selectVesel").change(function() {
                var idKunjungan = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('operational/getKunjunganKapal/'); ?>" + idKunjungan,
                    type: "GET",
                    success: function(result) {
                        var objVesel = JSON.parse(result);
                        $("#voyage").val(objVesel.voyage);
                        $("#eta").val(objVesel.tgl_berangkat);
                        $("#etd").val(objVesel.tgl_tiba);
                        $("#port").val(objVesel.nama_pelabuhan);
                    }
                })
            });

            $("#selectAccBank").change(function() {
                var strParam = $("#selectAccBank option:selected").text();
                var arrParam = strParam.split(" / ");
                var dataK = {noAcc: arrParam[0], namaAcc: arrParam[1], initKasBank: arrParam[2]};
                $.ajax({
                    url: "<?php echo base_url('operational/getNoRekeningAcc/'); ?>",
                    type: "POST",
                    data:dataK,
                    success: function(result) {
                        var objRekening = JSON.parse(result);
                        $("#noRekening").val(objRekening.no_rek);
                    }
                })
            });


            selectAccBank
        });

    </script>