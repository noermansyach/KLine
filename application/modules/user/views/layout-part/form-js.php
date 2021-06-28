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

    <script type="text/javascript">
        $(document).ready(function() {
            $("#selectCompany").change(function() {
                $("#selectEmployee").empty();
                var idCompany = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('user/getEmployee/'); ?>" + idCompany,
                    type: "GET",
                    success: function(result) {
                        var objEmployee = JSON.parse(result);
                        var opt = "<option value=''>- Pilih Karyawan -</option>";
                        $("#selectEmployee").append(opt);
                        jQuery.each(objEmployee, function(i, obj) {

                            opt = "<option value='"+obj.id_employee+"'>"+ obj.employee_name +"</option>";

                            $("#selectEmployee").append(opt);
                        });
                    }

                })
            });

            $("#selectEmployee").change(function() {
                var idEmployee = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('user/getEmployeeDepartmentPosition/'); ?>" + idEmployee,
                    type: "GET",
                    success: function(result) {
                        var objEmployee = JSON.parse(result);
                        $("#userName").val(objEmployee.employee_name);
                        $("#departemenCode").val(objEmployee.id_department);
                        $("#departemenName").val(objEmployee.department_name);
                        $("#positionCode").val(objEmployee.id_position);
                        $("#positionName").val(objEmployee.position)
                    }

                })
            });
        });
    </script>