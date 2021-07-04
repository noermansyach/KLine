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
						    </div>

						    <br>
						    <div class="row">
						    	<div class="col-12">
							        <div class="table-responsive">
										<table id="order-listing" class="table">
											<thead>
												<tr>
													<th>No</th>
													<th>No. PPU</th>
													<th>Tanggal</th>
													<th>Total Estimasi</th>
													<th>Total Verifikasi</th>
													<th>Tipe</th>
													<th>Dibayar Kepada</th>
													<th>Status</th>
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
															<td><?php echo strtoupper($value->no_ppu); ?></td>
															<td><?php echo date('Y-m-d', strtotime($value->updated_time)) ?></td>
															<td><?php echo strtoupper($value->jumlah); ?></td>
															<td><?php echo strtoupper($value->jumlah); ?></td>
															<td><?php echo strtoupper($value->status); ?></td>
															<td><?php echo strtoupper($value->nama_principal); ?></td>
															<td></td>
															<td class="text-center">
																<a href="<?php echo base_url('verifikasi_uang/edit/'.$value->no_bukti); ?>" class="btn btn-warning" title="Verifikasi"><i class="mdi mdi-pencil"></i> </a>

																<!-- <a href="<?php echo base_url('pelabuhan/delete/' . $value->id_pelabuhan) ?>" class="btn btn-danger tombol-hapus" title="Delete"><i class="fa fa-trash-o"></i> </a> -->
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