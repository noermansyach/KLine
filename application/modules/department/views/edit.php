<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      	<div class="modal-content">
      		<form method="post" action="<?php echo base_url("department/edit") ?>">
      			<input type="hidden" name="id_department" id="idDepartment">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>

	            <div class="modal-body">
	                <table class="table table-modal" width="500px" style="table-layout: fixed;"> 

	                	<!-- <tr>
	                		<td width="150px">Company</td>
	                		<td><div class="nama_suplier">
	                			<select name="id_company" id="idCompany" class="js-example-basic-single" style="width:100%">
         							<option>- Pilih Perusahaan -</option>
         							<?php 
         								if (!empty($dataCompany)) {
         									foreach ($dataCompany as $value) {
         							?>
         							<option value="<?php echo $value->id_company; ?>"><?php echo $value->init . ' - ' . $value->company_name?></option>
         							<?php
         									}
         								}
         							?>
                 				</select>
	                		</div></td>

	                	</tr> -->

	                	<tr>
	                		<td width="200px">Department Name</td>
	                		<td>
	                			<div>
	                				<input type="hidden" name="departmentId" id="departmentId">
	                				<input type="text" name="department_name" id="departmentName" class="form-control form-control-sm">
	                			</div>
	                		</td>
	                	</tr>

	                	<tr>
	                		<td>Initial</td>
	                		<td>
	                			<div class="pic">
	                				<input type="text" name="init" id="init" class="form-control form-control-sm" maxlength="3">
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