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
						            <button type="button" class="btn btn-success no-wrap ml-0" data-toggle="modal" data-target="#add" title="Detail">+ add kapal</button>
						        </div>
						    </div>

						    <?php $this->load->view('add'); ?>
						    <?php $this->load->view('edit'); ?>

						    <br>
						    <div class="row">
						    	<div class="col-12">
							        <div class="table-responsive">
										<table id="order-listing" class="table">
											<thead>
												<tr>
													<th>No</th>
													<th>Kapal</th>
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
													<td><?php echo strtoupper($value->nama_kapal); ?></td>
													<td class="text-center">
														<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit" onclick="detail('<?php echo $value->id_kapal; ?>')" title="edit"><i class="mdi mdi-pencil"></i> </button>

														<a href="<?php echo base_url('kapal/delete/' . $value->id_kapal) ?>" class="btn btn-danger tombol-hapus" title="Delete"><i class="fa fa-trash-o"></i> </a>
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