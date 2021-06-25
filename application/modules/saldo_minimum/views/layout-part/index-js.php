	<!-- Plugin js for the page -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
    <!-- End plugin js for the page -->

    <!-- Custom js for the page -->
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript">
    	function detail(noAcc) {
    		$("#noAcc").val(noAcc)
    		$.ajax({
				url : "<?php echo base_url('saldo_minimum/detail/'); ?>" + noAcc,
				type : "GET",
				success : function(result) {
                    var saldoMin = 0;
                    var objSaldoMin = JSON.parse(result);
                    if (objSaldoMin.saldo_min != null) {
                        var saldoMin = objSaldoMin.saldo_min;
                    }
					$("#namaAcc").val(objSaldoMin.nama_acc);
					$("#saldoMinimum").val(saldoMin);
				},
				error : function(result){
					// $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
				}
			});
    	}

    	
    </script>