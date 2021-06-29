	<!-- Plugin js for the page -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
     <script src="<?php echo base_url('assets/vendors/select2/select2.min.js') ?>"></script>
    <!-- End plugin js for the page -->

    <!-- Custom js for the page -->
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/select2.js') ?>"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript">
    	function detail(id_department) {
    		$("#idDepartment").val(id_department);
    		$.ajax({
				url : "<?php echo base_url('department/detail/'); ?>" + id_department,
				type : "GET",
				success : function(result) {
					objDepartment = JSON.parse(result);
                    $("#departmentId").val(objDepartment.id_department);
					$("#departmentName").val(objDepartment.department_name);
					$("#init").val(objDepartment.init);
				},
				error : function(result){
					// $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
				}
			});
    	}

        function getCompany() {
            $.ajax({
                url : "<?php echo base_url('department/detail/'); ?>" + id_department,
                type : "GET",
                success : function(result) {
                    objDepartment = JSON.parse(result);
                    $("#departmentName").val(objDepartment.department_name);
                    $("#init").val(objDepartment.init);
                },
                error : function(result){
                    // $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
                }
            });
        }

    	
    </script>