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
						            <a href="<?php echo base_url('non_operational/add/') ?>" class="btn btn-success no-wrap ml-0" title="add">+ add transaksi</a>
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
													<th>Departemen</th>
													<th>Jenis Transaksi</th>
													<th>Dibayar Kepada</th>
													<th>Tanggal</th>
													<th class="text-center">Aksi</th>
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
															<td><?php echo strtoupper($value->department_name); ?></td>
															<td><?php echo ($value->jenis_transaksi == 'P') ? 'MASUK' : 'KELUAR'; ?></td>
															<td><?php echo strtoupper($value->dibayar_kepada); ?></td>
															<td><?php echo date('d-m-Y', strtotime($value->created_time)) ?></td>
															<td class="text-center">
																<a href="<?php echo base_url('non_operational/generateReportPPU/'.$value->no_bukti); ?>" class="btn btn-outline-dark" title="print"><i class="mdi mdi-clipboard-text"></i> </a>
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