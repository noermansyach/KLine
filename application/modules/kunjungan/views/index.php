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
						            <a href="<?php echo base_url('kunjungan/add/') ?>" class="btn btn-success no-wrap ml-0" title="add">+ add kunjungan kapal</a>
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
													<th>No. Transaksi</th>
													<th>TA</th>
													<th>TD</th>
													<th>Kapal</th>
													<th>Pelabuhan</th>
													<th>Voyage</th>
													<th>Status Close</th>
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
															<td><?php echo strtoupper($value->id_kunjungan); ?></td>
															<td><?php echo strtoupper($value->tgl_berangkat); ?></td>
															<td><?php echo strtoupper($value->tgl_tiba); ?></td>
															<td><?php echo strtoupper($value->nama_kapal); ?></td>
															<td><?php echo strtoupper($value->nama_pelabuhan); ?></td>
															<td><?php echo strtoupper($value->voyage); ?></td>
															<td><?php echo strtoupper($value->is_close); ?></td>
															<td class="text-center">
																<a href="<?php echo base_url('kunjungan/edit/'.$value->id_kunjungan); ?>" class="btn btn-warning" title="edit"><i class="mdi mdi-pencil"></i> </a>
																<!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit" onclick="detail('<?php echo $value->id_pelabuhan; ?>')" title="edit"><i class="mdi mdi-pencil"></i> </button>

																<a href="<?php echo base_url('pelabuhan/delete/' . $value->id_pelabuhan) ?>" class="btn btn-danger tombol-hapus" title="Delete"><i class="fa fa-trash-o"></i> </a> -->
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