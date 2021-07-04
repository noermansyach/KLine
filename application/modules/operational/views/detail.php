<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      	<div class="modal-content">
      		<!-- <form method="post" action="<?php echo base_url("department/edit") ?>"> -->
      			<input type="hidden" name="id_department" id="idDepartment">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Barcode</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>

	            <div class="modal-body">
	            	<div class="d-flex justify-content-center">
	            		<img id="gambarQr" style="width: 250px; height: 250px;">
	                </div>

	            </div>

	            <div class="modal-footer">
	                <a class="btn btn-outline-primary" id="linkReport" target="_blank">Link</a>
	            </div>
            <!-- </form> -->
      </div>
    </div>
</div>