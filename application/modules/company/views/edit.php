<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      	<div class="modal-content">
      		<form method="post" action="<?php echo base_url('currency/edit/') ?>">
      			<input type="hidden" name="id_currency" id="id_currency" value="">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Edit Currency</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>

	            <div class="modal-body">
	                <table class="table table-modal" width="500px" style="table-layout: fixed;"> 
	                	<tr>
	                		<td width="200px">Currency Name</td>
	                		<td>
	                			<div>
	                				<input type="text" name="currency" id="currency" class="form-control form-control-sm">
	                			</div>
	                		</td>
	                	</tr>

	                	<tr>
	                		<td>Initial</td>
	                		<td>
	                			<div>
	                				<input type="text" name="init" id="init" class="form-control form-control-sm">
	                			</div>
	                		</td>
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