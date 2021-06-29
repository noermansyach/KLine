	<!-- Plugin js for the page -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
    <!-- End plugin js for the page -->

    <!-- Custom js for the page -->
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript">
    	function detail(idPelabuhan) {
    		$("#idPelabuhan").val(idPelabuhan)
    		$.ajax({
				url : "<?php echo base_url('pelabuhan/detail/'); ?>" + idPelabuhan,
				type : "GET",
				success : function(result) {
					objPelabuhan = JSON.parse(result);
                    $("#namaPelabuhan").val(objPelabuhan.nama_pelabuhan);
				},
				error : function(result){
					// $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
				}
			});
    	}

    	
    </script>