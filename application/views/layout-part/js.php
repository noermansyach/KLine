	<script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js') ?>"></script>
	<?php 
		if ($js != "") {
			$this->load->view($js);
		}
	?>

	 <!-- sweet alert 2 -->
	<script src="<?php echo base_url('assets/plugin/sweetalert2/sweetalert2.all.min.js') ?>"></script>
	<!-- toastr -->
	<script src="<?php echo base_url('assets/plugin/toastr/js/toastr.min.js') ?>"></script>
	<script>
		$('.tombol-hapus').on('click', function(e){
			e.preventDefault();
		  	const href = $(this).attr('href');
		  	Swal.fire({
			    title: 'Anda yakin?',
			    text: "Anda tidak akan dapat mengembalikan data ini!",
			    type: 'question',
			    showCancelButton: true,
			    confirmButtonColor: '#3085d6',
			    cancelButtonColor: '#d33',
			    confirmButtonText: 'Ya, hapus!',
			    cancelButtonText: 'Batal'
			}).then((result) => {
			    if (result.value) {
			      document.location.href = href;
			    }
		  	})

		  	
		});
	</script>
