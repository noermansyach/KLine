<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('layout-part/head'); ?>
</head>
<body>
	<div class="contaioner-scroller">
		<!-- navbar -->
		<?php $this->load->view('layout-part/navbar'); ?>
		<!-- navbar end -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar.html -->
			<?php $this->load->view('layout-part/sidebar'); ?>
	        <!-- partial -->

	        
	        <div class="main-panel">
				<!-- main content -->
				<?php $this->load->view($content); ?>
				<!-- end main content -->

				<!-- footer -->
				<?php $this->load->view('layout-part/footer'); ?>
				<!-- end of footer -->
			</div>
			
		</div>
	</div>

	<?php $this->load->view('layout-part/js'); ?>

</body>
</html>