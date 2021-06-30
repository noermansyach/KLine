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
                var tahun = tanggal.substr(8,2);    
                var bulan = tanggal.substr(3,2);
                var noPPU = idDepartment.substring(0, 3) + "-" + status + "-" + tahun + "-" + bulan + "-";
                $.ajax({
                    url: "<?php echo base_url('non_operational/generatePpuNumber/'); ?>" + noPPU,
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
        });

    </script>