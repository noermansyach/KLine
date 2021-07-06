	<!-- Plugin js for the page -->
    <script src="<?php echo base_url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/select2/select2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jquery-toast-plugin/jquery.toast.min.js') ?>"></script>
    <!-- End plugin js for the page -->

    <!-- Custom js for the page -->
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/toastDemo.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/desktop-notification.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/select2.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/formpickers.js'); ?>"></script>
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

    	function approveManager() {
    		var noTransaksi = $("#noTransaksiApprove").val()
    		$.ajax({
				url : "<?php echo base_url('transaksi/approveManager/'); ?>" + noTransaksi,
				type : "GET",
				success : function(result) {
					//successToast();
                    window.location.href = "<?php echo base_url('transaksi') ?>";
				},
				error : function(result){
					alert(error);
				}
			});	
    	}

        function detailPPU(noTransaksi) {
            $.ajax({
                url : "<?php echo base_url('transaksi/getDataPPU/'); ?>" + noTransaksi,
                type : "GET",
                success : function(result) {
                    objTrans = JSON.parse(result);
                    $("#no-transaksi").text(objTrans.no_transaksi);
                    $("#noTransaksiApprove").val(objTrans.no_transaksi);
                    $("#no-ppu").text(objTrans.no_ppu);
                    var tipeTrans;
                    if (objTrans.no_ppu == "KREDIT") {
                    	tipeTrans = "PAYMENT";
                    } else {
                    	tipeTrans = "RECEIVE";
                    }
                    $("#tipe-trans").text(tipeTrans);
                    $("#nama-cabang").text(objTrans.company_name);
                    $("#nama-departemen").text(objTrans.department_name);
                    $("#tanggal-dibuat").text(objTrans.tanggal_dibuat);
                    $("#nama-pembuat").text(objTrans.employee_name);
                    $("#nominal").text(objTrans.jumlah);
                    $("#terbilang").text(objTrans.terbilang);
                    $("#nama-principal").text(objTrans.nama_principal);
                    $("#ket-satu").text(objTrans.keterangan_satu);
                    $("#ket-dua").text(objTrans.keterangan_dua);
                    $("#ket-tiga").text(objTrans.keterangan_tiga);
                    var vesel = "-";
                    var voyage = "-";
                    var port = "-";
                    var ta = "-";
                    var td = "-";
                    if (objTrans.id_kunjungan != "-") {
                    	vesel = objTrans.nama_kapal;
                    	voyage = objTrans.voyage;
                    	port = objTrans.nama_pelabuhan;
                    	ta = objTrans.tgl_berangkat;
                    	td = objTrans.tgl_tiba;
                    }
                    $("#nama-kapal").text(vesel);
                    $("#voyage").text(voyage);
                    $("#nama-pelabuhan").text(port);
                    $("#TA").text(ta);
                    $("#TD").text(td);
                },
                error : function(result){
                    // $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
                }
            });
        }

        // teknik menfilter datatable

        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = new Date($("#fromD").val());
                var max = new Date($("#untilD").val());
                var tanggal = new Date(data[5]);
         
                if (( isNaN(min) && isNaN(max) ) ||
                    ( isNaN(min) && tanggal <= max ) ||
                    ( min <= tanggal && isNaN(max) ) ||
                    ( min <= tanggal && tanggal <= max )) {
                    return true;
                } 
                return false;
                
            }
        );

        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var status = $("#selectStatus option:selected").val();
                var acknowledge = data[7];
                var approve = data[6];
         
                if (status == approve || status == acknowledge || status == "") {
                    return true;
                } 
                return false;
                
            }
        );

        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var status = $("#selectCompany option:selected").val();
                var cabang = data[8];
         
                if (status == cabang || status == "") {
                    return true;
                } 
                return false;
                
            }
        );
        
        $(document).ready(function() {

            if ($("#datepicker-popup").length) {
                $('#datepicker-popup').datepicker({
                  format: 'dd/mm/yyyy',
                  enableOnReadonly: true,
                  todayHighlight: true,
                  autoclose:true,
                });
            }

            if ($("#datepicker-popup-dua").length) {
                $('#datepicker-popup-dua').datepicker({
                  format: 'dd/mm/yyyy',
                  enableOnReadonly: true,
                  todayHighlight: true,
                  autoclose:true,
                });
            }

            $('#transaksi').DataTable({
                "aLengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ],
                "ordering": false,
                "iDisplayLength": 10,
                "language": {
                search: ""
                }
            });
            $('#transaksi').each(function() {
                var datatable = $(this);
                // SEARCH - Add the placeholder for Search and Turn this into in-line form control
                var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
                search_input.attr('placeholder', 'Search');
                search_input.removeClass('form-control-sm');
                // LENGTH - Inline-Form control
                var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
                length_sel.removeClass('form-control-sm');
            });

            var table = $('#transaksi').DataTable();

            $('#fromD, #untilD').on('change', function () {
                table.draw();
            });

            $("#selectStatus").change(function() {
                table.draw();
            });

            $("#selectCompany").change(function() {
                table.draw();
            });

            // akhir dari teknik filter datatable
        });

    	
    </script>