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
						        	<a href="<?php echo base_url('perkiraan/add') ?>" class="btn btn-success no-wrap ml-0" title="add">+ add perkiraan</a>
						            <!-- <button type="button" class="btn btn-success no-wrap ml-0" data-toggle="modal" data-target="#add" title="add">+ add perkiraan</button> -->
						        </div>
						    </div>

						    
						    <?php $this->load->view('edit'); ?>

						    <br>
						    <div class="row">
						    	<div class="col-12">
							        <div class="table-responsive">
										<table id="order-listing" class="table">
											<thead>
												<tr>
													<th>No. Acc</th>
													<th>Nama Perkiraan</th>
													<th>Acc Induk</th>
													<th>Cabang</th>
													<th>Level</th>
													<th>Jurnal</th>
													<th>Currency</th>
													<th>Jenis</th>
													<th>Init</th>
													<th>Kategori</th>
													<th>Budget</th>
													<th>Disb</th>
													<th class="text-center">Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
													if (!empty($tableData)) {
														foreach ($tableData as $value) {
												?>
														<tr>
															<td><?php echo $value->no_acc ?></td>
															<td><?php echo $value->nama_acc ?></td>
															<td><?php echo $value->acc_induk ?></td>
															<td><?php echo $value->init_company ?></td>
															<td><?php echo $value->level ?></td>
															<td><?php echo $value->is_jurnal ?></td>
															<td><?php echo $value->init_curr ?></td>
															<td><?php echo $value->kategori ?></td>
															<td><?php echo $value->is_budget ?></td>
															<td><?php echo $value->is_disb ?></td>
															<td class="text-center">
																<!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit" onclick="detail('<?php echo $value->id_position; ?>')" title="edit"><i class="mdi mdi-pencil"></i> </button>

																<a href="<?php echo base_url('position/delete/' . $value->id_position) ?>" class="btn btn-danger tombol-hapus" title="Delete"><i class="fa fa-trash-o"></i> </a> -->
															</td>
														</tr>
												<?php 
														}
													} else {
														echo "tidak ada data untuk ditampilkan";
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