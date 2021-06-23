	<!-- Plugin js for the page -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
    <!-- End plugin js for the page -->

    <!-- Custom js for the page -->
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript">
    	function detail(idKapal) {
    		$("#idKapal").val(idKapal)
    		$.ajax({
				url : "<?php echo base_url('kapal/detail/'); ?>" + idKapal,
				type : "GET",
				success : function(result) {
					objKapal = JSON.parse(result);
                    $("#kapal").val(objKapal.nama_kapal);
                    console.log(objKapal.nama_kapal);
				},
				error : function(result){
					// $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
				}
			});
    	}

    	
    </script>