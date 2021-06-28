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
						          <h4 class="mb-0 mr-3"><?php echo ucfirst($title) ?></h4>
						        </div>
						        <div class="ml-lg-auto d-flex align-items-stretch justify-content-end">
						            <a href="<?php echo base_url('principal/add/') ?>" class="btn btn-success no-wrap ml-0" title="add">+ add principal</a>
						        </div>
						    </div>

						    
						    

						    <br>
						    <div class="row">
						    	<div class="col-12">
							        <div class="table-responsive">
										<table id="order-listing" class="table">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Principal</th>
													<th>Contact Person</th>
													<th>Kode Pos</th>
													<th>Telepon 1</th>
													<th>Telepon 2</th>
													<th>Fax</th>
													<th class="text-center">Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													$no = 1;
													if (!empty($table_data)) {
														foreach ($table_data as $value) {
												?>
														<tr>
															<td><?php echo $no++; ?></td>
															<td><?php echo strtoupper($value->nama_principal . ' - '. $value->inisial_nama); ?></td>
															<td><?php echo strtoupper($value->contact_person); ?></td>
															<td><?php echo strtoupper($value->kode_pos); ?></td>
															<td><?php echo strtoupper($value->telepon_satu); ?></td>
															<td><?php echo strtoupper($value->telepon_dua); ?></td>
															<td><?php echo strtoupper($value->fax); ?></td>
															<td class="text-center">
																<a href="<?php echo base_url('principal/edit/'.$value->id_principal); ?>" class="btn btn-warning" title="edit"><i class="mdi mdi-pencil"></i> </a>
															</td>
														</tr>
												<?php 
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