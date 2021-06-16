	<!-- Plugin js for the page -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
    <!-- End plugin js for the page -->

    <!-- Custom js for the page -->
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript">
    	function detail(id_currency) {
    		$("#id_currency").val(id_currency)
    		$.ajax({
				url : "<?php echo base_url('currency/detail/'); ?>" + id_currency,
				type : "GET",
				success : function(result) {
					objCurrency = JSON.parse(result);
					$("#currency").val(objCurrency.currency);
					$("#init").val(objCurrency.init);
				},
				error : function(result){
					// $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
				}
			});
    	}

    	
    </script>