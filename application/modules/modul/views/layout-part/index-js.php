	<!-- Plugin js for the page -->
    <script src="<?php echo base_url('assets/vendors/datatables.net/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') ?>"></script>
    <!-- End plugin js for the page -->

    <!-- Custom js for the page -->
    <script src="<?php echo base_url('assets/js/data-table.js') ?>"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript">
    	function detail(id_suplier) {
    		$.ajax({
				url : "<?php echo base_url('suplier/detail/'); ?>" + id_suplier,
				type : "GET",
				success : function(result) {
					objSuplier = JSON.parse(result);
					// document.getElementById("cetak_objek").innerHTML = objSuplier;
					$(".nama_suplier").text(objSuplier.nama_suplier);
					$(".pic").text(objSuplier.pic);
					$(".alamat").text(objSuplier.alamat);
					$(".telepon").text(objSuplier.telepon);
				},
				error : function(result){
					// $("#alert").prop("style", "display: block").text("Error koneksi mengambil data supplier");
				}
			});
    	}

    	$(document).ready(function(){
    		$('#tags').tagsInput({
			    'width': '100%',
			    'height': '75%',
			    'interactive': true,
			    'defaultText': 'Add More',
			    'removeWithBackspace': true,
			    'minChars': 0,
			    'maxChars': 20, // if not provided there is no limit
			    'placeholderColor': '#666666'
			 });
    	});
    </script>