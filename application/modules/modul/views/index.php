		<!-- content wrapper -->
		<div class="content-wrapper">
            <div class="page-header">
				<h3 class="page-title"> <?php echo ucfirst($title); ?> </h3>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
					  	<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					  	<li class="breadcrumb-item active" aria-current="page"><?php echo ucfirst($title); ?></li>
					</ol>
				</nav>
            </div>
            <div class="row">
				<div class="col-12">
					<div class="card">
					  	<div class="card-body">
					    
						    <div class="d-lg-flex justify-content-between align-items-center pt-2 pb-3 border-bottom">
						        <div class="d-flex align-items-center">
						          <h4 class="mb-0 mr-3">Modul</h4>
						        </div>
						        <div class="ml-lg-auto d-flex align-items-stretch justify-content-end">
						            <button type="button" class="btn btn-success btn-fw" data-toggle="modal" data-target="#add" title="Detail">+ Tambah Modul</button>
						        </div>
						    </div>
						    <br>

						    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						        <div class="modal-dialog" role="document">
						          	<div class="modal-content">

						          		<form class="form-sample" method="post">

							            <div class="modal-header">
							                <h5 class="modal-title" id="exampleModalLabel">Add Modul</h5>
							                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							                    <span aria-hidden="true">&times;</span>
							                </button>
							            </div>
							            <div class="modal-body">
							                <div class="form-group">
						                        <label for="exampleInputUsername2">Modul Name : </label>
						                        <input type="text" name="namaModul" class="form-control">
						                    </div>

									    	<div class="form-group">
									    		<label>Modul Action :</label>
									    		<input name="tags" id="tags" value="Add,Edit,Delete,Read"/>
									    	</div>
										    	
										    
							            </div>
							            <div class="modal-footer">
							            	<button type="button" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
							                <!-- <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button> -->
							            </div>

						            	</form>

						          </div>
						        </div>
						    </div>

						    <br>
						    <div class="row">
						    	<div class="col-12">
							        <div class="table-responsive">
										<table id="order-listing" class="table" cellspacing="0" width="100%">
											<thead>
												<tr class="bg-primary text-white">
													<th>No #</th>
													<th>Modul Name</th>
													<th>Modul Action</th>
													<th class="text-center">Actions</th>
												</tr>
											</thead>
											<tbody>
											<?php 
												$no = 1;
												if (!is_string($table_data)) {
													foreach ($table_data as $value) {
											?>
													<tr>
														<td><?php echo $no ?></td>
														<td><?php echo $value->modul_name; ?></td>
														<td><?php /*echo $value->telp;*/ ?></td>
														<td class="text-center">

															<!-- <button type="button" class="btn btn-light" data-toggle="modal" data-target="#detail" onclick="detail('<?php echo $value->id_suplier; ?>')" title="Detail"><i class="mdi mdi-eye text-primary"></i> </button>-->

															<a href="<?php /*echo base_url('suplier/edit/'.$value->kd_suplier)*/ ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil"></i> </a> 

															<a href="<?php /*echo base_url('suplier/delete/'.$value->kd_suplier)*/ ?>" class="btn btn-danger tombol-hapus" title="Delete"><i class="fa fa-trash-o"></i> </a>

														</td>
													</tr>
											<?php 
														$no++;
													}
												} 
											?>

												
											</tbody>
										</table>
							        </div>
						    	</div>
						    </div>

					  </div>
					</div>
				</div>
            </div>
        </div>