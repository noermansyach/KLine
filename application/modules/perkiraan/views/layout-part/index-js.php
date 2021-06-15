	<!-- Plugin js for the page -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
    <!-- End plugin js for the page -->

    <!-- Custom js for the page -->
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript">
    	function detail(id_position) {
    		$("#idPosition").val(id_position)
    		$.ajax({
				url : "<?php echo base_url('position/detail/'); ?>" + id_position,
				type : "GET",
				success : function(result) {
					objPosition = JSON.parse(result);
					$("#position").val(objPosition.position);
					$("#init").val(objPosition.init);
				},
				error : function(result){
					// $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
				}
			});
    	}

    	
    </script>