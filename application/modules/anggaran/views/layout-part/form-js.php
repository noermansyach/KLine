	<!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
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
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/file-upload.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/typeahead.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/select2.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/dropify.js') ?>"></script>
    <!-- End custom js for this page -->

    <script>
        $("#listVerifikasi").hide();
        $(document).ready(function() {
           $("#showVerifiedList").click(function(e) {
                e.preventDefault();
                $("#listVerifikasi").show();
           });

           $("#selectAccount").change(function() {
                var value = $("#selectAccount option:selected").text();
                var arrData = value.split(" / ");
                var dataAcc = {noAcc : arrData[0], namaAcc : arrData[1]};
                $.ajax({
                    url: "<?php echo base_url('anggaran/getDataAccount'); ?>",
                    type: "POST",
                    data: dataAcc,
                    success: function(result) {
                        var objAccount = JSON.parse(result);
                        $("#initBank").val(objAccount.init_kas_bank);
                        $("#noRekening").val(objAccount.no_rek);
                    }
                });
           });

        });

    </script>