	<!-- Plugin js for the page -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jquery-toast-plugin/jquery.toast.min.js') ?>"></script>
    <!-- End plugin js for the page -->

    <!-- Custom js for the page -->
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/toastDemo.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/desktop-notification.js') ?>"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript">
        function successToast() {
            'use strict';
            resetToastPosition();
            $.toast({
                heading: 'Success',
                text: 'Barcode berhasil digenerate',
                showHideTransition: 'slide',
                icon: 'success',
                loaderBg: '#f96868',
                position: 'top-right'
            })
        };

    	function generateBarcode(noBukti) {
    		$.ajax({
				url : "<?php echo base_url('operational/generateReportPPU/'); ?>" + noBukti,
				type : "GET",
				success : function(result) {
					successToast();
				},
				error : function(result){
					// $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
				}
			});
    	}

        function viewBarcode(noBukti) {
            $.ajax({
                url : "<?php echo base_url('operational/viewBarcode/'); ?>" + noBukti,
                type : "GET",
                success : function(result) {
                    objOpr = JSON.parse(result);
                    $("#gambarQr").attr("src", objOpr.qr_code_add);
                    $("#linkReport").attr("href", objOpr.link_report);
                },
                error : function(result){
                    // $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
                }
            });
        }

    	
    </script>