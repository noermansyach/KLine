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
        
        function hide() {

        }

        // $("#accLevel1").hide();
        $("#selectLevel1").hide();
        $("#accLevel2").hide();
        $("#accLevel3").hide();
        $("#accLevel4").hide();
        $("#accLevel5").hide();
        $("#accLevel6").hide();

        $(document).ready(function() {
            $("#selectAccLevel1").change(function() {
                var noAcc = $(this).val();
                $("#selectAccLevel2").empty();
                $.ajax({
                    url: "<?php echo base_url('mperkiraan/getAccLevel2/'); ?>" + noAcc,
                    type: "GET",
                    success: function(result) {
                        var objLevel1 = JSON.parse(result);
                        var opt = "<option selected>- Pilih Akun Induk -</option>";
                        $("#selectAccLevel2").append(opt);
                        jQuery.each(objLevel1, function(i, obj) {

                            opt = "<option value='"+obj.no_acc+"'>"+ obj.no_acc +" - "+obj.nama_acc + " - " + obj.jenis_perkiraan +"</option>";

                            $("#selectAccLevel2").append(opt);
                        });
                    }

                })
            });

            $("#selectAccLevel2").change(function() {
                var noAcc = $(this).val();
                $("#selectAccLevel3").empty();
                $.ajax({
                    url: "<?php echo base_url('mperkiraan/getAccLevel3/'); ?>" + noAcc,
                    type: "GET",
                    success: function(result) {
                        var objLevel2 = JSON.parse(result);
                        var opt = "<option selected>- Pilih Akun Induk -</option>";
                        $("#selectAccLevel3").append(opt);                        
                        jQuery.each(objLevel2, function(i, obj) {
                            opt = "<option value='"+obj.no_acc+"'>"+ obj.no_acc +" - "+obj.nama_acc + " - " + obj.jenis_perkiraan +"</option>";

                            $("#selectAccLevel3").append(opt);
                        });
                    }

                })
            });

            $("#selectAccLevel3").change(function() {
                var noAcc = $(this).val();
                $("#selectAccLevel4").empty();
                $.ajax({
                    url: "<?php echo base_url('mperkiraan/getAccLevel4/'); ?>" + noAcc,
                    type: "GET",
                    success: function(result) {
                        var objLevel3 = JSON.parse(result);
                        var opt = "<option selected>- Pilih Akun Induk -</option>";
                        $("#selectAccLevel4").append(opt);
                        jQuery.each(objLevel3, function(i, obj) {
                            opt = "<option value='"+obj.no_acc+"'>"+ obj.no_acc +" - "+obj.nama_acc + " - " + obj.jenis_perkiraan +"</option>";

                            $("#selectAccLevel4").append(opt);
                        });
                    }

                })
            });

            $("#selectAccLevel4").change(function() {
                var noAcc = $(this).val();
                $("#selectAccLevel5").empty();
                $.ajax({
                    url: "<?php echo base_url('mperkiraan/getAccLevel5/'); ?>" + noAcc,
                    type: "GET",
                    success: function(result) {
                        var objLevel3 = JSON.parse(result);
                        var opt = "<option selected>- Pilih Akun Induk -</option>";
                        $("#selectAccLevel5").append(opt);
                        jQuery.each(objLevel3, function(i, obj) {
                            opt = "<option value='"+obj.no_acc+"'>"+ obj.no_acc +" - "+obj.nama_acc + " - " + obj.jenis_perkiraan +"</option>";

                            $("#selectAccLevel5").append(opt);
                        });
                    }

                })
            });

            $('input[name="level"]').change(function(){
                var inputValue = $(this).attr("value");
                $("#accLevel1").hide();
                $("#textLevel1").hide();
                $("#accLevel2").hide();
                $("#accLevel3").hide();
                $("#accLevel4").hide();
                $("#accLevel5").hide();
                $("#accLevel6").hide();
                
                if (inputValue == '1') {
                    $("#accLevel1").show();
                    $("#textLevel1").show();
                    $("#selectLevel1").hide();
                } else if (inputValue == '2') {
                    $("#accLevel1").show();
                    $("#textLevel1").hide();
                    $("#selectLevel1").show();

                    $("#accLevel2").show();
                    $("#textLevel2").show();
                    $("#selectLevel2").hide();
                } else if (inputValue == '3') {
                    $("#accLevel1").show();
                    $("#textLevel1").hide();
                    $("#selectLevel1").show();

                    $("#accLevel2").show();
                    $("#textLevel2").hide();
                    $("#selectLevel2").show();

                    $("#accLevel3").show();
                    $("#textLevel3").show();
                    $("#selectLevel3").hide();
                }  else if (inputValue == '4') {
                    $("#accLevel1").show();
                    $("#textLevel1").hide();
                    $("#selectLevel1").show();

                    $("#accLevel2").show();
                    $("#textLevel2").hide();
                    $("#selectLevel2").show();

                    $("#accLevel3").show();
                    $("#textLevel3").hide();
                    $("#selectLevel3").show();
                    
                    $("#accLevel4").show();
                    $("#textLevel4").show();
                    $("#selectLevel4").hide();
                } else if (inputValue == '5') {
                    $("#accLevel1").show();
                    $("#textLevel1").hide();
                    $("#selectLevel1").show();

                    $("#accLevel2").show();
                    $("#textLevel2").hide();
                    $("#selectLevel2").show();

                    $("#accLevel3").show();
                    $("#textLevel3").hide();
                    $("#selectLevel3").show();
                    
                    $("#accLevel4").show();
                    $("#textLevel4").hide();
                    $("#selectLevel4").show();

                    $("#accLevel5").show();
                    $("#textLevel5").show();
                    $("#selectLevel5").hide();
                } else if (inputValue == '6') {
                    $("#accLevel1").show();
                    $("#textLevel1").hide();
                    $("#selectLevel1").show();

                    $("#accLevel2").show();
                    $("#textLevel2").hide();
                    $("#selectLevel2").show();

                    $("#accLevel3").show();
                    $("#textLevel3").hide();
                    $("#selectLevel3").show();
                    
                    $("#accLevel4").show();
                    $("#textLevel4").hide();
                    $("#selectLevel4").show();

                    $("#accLevel5").show();
                    $("#textLevel5").hide();
                    $("#selectLevel5").show();

                    $("#accLevel6").show();
                    $("#textLevel6").show();
                }
            });

            $("#bankOption").hide();
            $("#kasOption").hide();

            $("#selectJenisJurnal").change(function() {
                $("#bankOption").hide();
                $("#kasOption").hide();
                var jenisJurnal = $(this).val();
                if (jenisJurnal == 'BANK') {
                    $("#bankOption").show();
                } else {
                    $("#kasOption").show();
                }
            });
        });

    </script>

    