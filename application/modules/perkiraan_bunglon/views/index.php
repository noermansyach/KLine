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
						        	<a href="<?php echo base_url('mperkiraan/add/') ?>" class="btn btn-success no-wrap ml-0" title="add">+ add akun perkiraan</a>
						        </div>
						    </div>

						    <br>
						    <div class="row">
						    	<div class="col-12">
							        <div class="table-responsive">
										<table id="order-listing" class="table">
											<thead>
												<tr>
													<th>Nomor Akun</th>
													<th>Nama Perkiraan</th>
													<th>Nomor Akun Bunglon</th>
													<th>Cabang</th>
													<th>Level</th>
													<th>Currency</th>
													<th class="text-center">Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php 
													if (!empty($table_data)) {
														foreach ($table_data as $value) {
												?>

												<tr>
													<td><?php echo $value->no_acc; ?></td>
													<td><?php echo $value->nama_acc; ?></td>
													<td><?php echo $value->no_acc_bunglon; ?></td>
													<td><?php echo $value->acc_induk; ?></td>
													<td><?php echo $value->company_name ?></td>
													<td><?php echo $value->level ?></td>
													<td><?php echo $value->currency . ' - ' .  $value->init ?></td>
													<td class="text-center">
														<a href="<?php echo base_url('mperkiraan/delete/'.  $value->no_acc); ?>" class="btn btn-danger tombol-hapus" title="Delete"><i class="fa fa-trash-o"></i> </a>
														<a href="<?php echo base_url('mperkiraan/delete/'.  $value->no_acc); ?>" class="btn btn-light tombol-hapus" title="Detail"><i class="fa fa-eye"></i> </a>
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