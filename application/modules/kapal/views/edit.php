<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      	<div class="modal-content">
      		<form method="post" action="<?php echo base_url("kapal/edit/") ?>">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Edit Kapal</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>

	            <div class="modal-body">
	            	<input type="hidden" name="idKapal" id="idKapal">
	                <table class="table table-modal" width="500px" style="table-layout: fixed;"> 
	                	<tr>
	                		<td width="200px">Nama Kapal</td>
	                		<td><input type="text" id="kapal" name="namaKapal" class="form-control form-control-sm"></td>
	                		
	                	</tr>
	                </table>
	            </div>

	            <div class="modal-footer">
	                <button type="submit" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
	            </div>
            </form>
      </div>
    </div>
</div>