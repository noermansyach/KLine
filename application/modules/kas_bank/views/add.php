<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      	<div class="modal-content">
      		<form method="post" action="<?php echo base_url("kas_bank/add") ?>">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Add Bank</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>

	            <div class="modal-body">
	                <table class="table table-modal" width="500px" style="table-layout: fixed;"> 
	                	<tr>
	                		<td width="200px">Akun Induk</td>
	                		<td><select name="id_company" class="js-example-basic-single" style="width:100%">
         							<option>- Pilih Akun Induk -</option>
         							<option value="1">1 - AKTIVA </option>
         							<option value="10">10 - AKTIVA LANCAR</option>
         							<option value="100">100 - KAS & SETARA KAS</option>
                 				</select>
                 			</td>
	                	</tr>

	                	<tr>
	                		<td width="200px">Nama Kas Bank</td>
	                		<td><input type="text" name="nama_kas_bank" class="form-control form-control-sm"></td>
	                	</tr>

	                	<tr>
	                		<td>Inisial</td>
	                		<td><input type="text" name="init_kas_bank" class="form-control form-control-sm"></td>
	                	</tr>

	                	<tr>
	                		<td>No. Rekening</td>
	                		<td><input type="text" name="no_rekening" class="form-control form-control-sm"></td>
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