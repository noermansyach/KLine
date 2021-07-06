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
						            <a href="<?php echo base_url('operational/add/') ?>" class="btn btn-success no-wrap ml-0" title="add">+ add transaksi</a>
						        </div>
						    </div>

						    <?php $this->load->view('detail'); ?>

						    <br>

						    <div class="row">
						    	<div class="col-sm-3">
					    			<label>From</label>
			                        <div id="datepicker-popup" class="input-group date datepicker">
										<input type="text" name="from" id="fromD" class="form-control form-control-sm">
										<span class="input-group-addon input-group-append border-left">
											<span class="mdi mdi-calendar input-group-text"></span>
										</span>
			                        </div>
					    		</div>

					    		<div class="col-sm-3">
					    			<label>Until</label>
			                        <div id="datepicker-popup-dua" class="input-group date datepicker">
										<input type="text" name="until" id="untilD" class="form-control form-control-sm">
										<span class="input-group-addon input-group-append border-left">
											<span class="mdi mdi-calendar input-group-text"></span>
										</span>
			                        </div>
					    		</div>

					    		<div class="col-sm-3">
					    			<label>Cabang</label>
					    			<select name="selectCompany" id="selectCompany" class="js-example-basic-single" style="width:100%">
                                        <option value="">- Pilih Company -</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Surabaya">Surabaya</option>
                                    </select>	
					    		</div>

					    		<div class="col-sm-3">
					    			<label>Status</label>
					    			<div class="">
						    			<select name="selectStatus" id="selectStatus" class="js-example-basic-single" style="width:100%">
	                                        <option value="">- Pilih Status -</option>
	                                        <option value="Approved">Approved</option>
	                                        <option value="Acknowledge">Acknowledge</option>
	                                    </select>
                                    </div>	
					    		</div>
						    </div>

						    <br>

						    <div class="row">
						    	<div class="col-12">
							        <div class="table-responsive">
										<table id="transaksi" class="table">
											<thead>
												<tr>
													<th>Detail</th>
													<th>No. PPU</th>
													<th>Departemen</th>
													<th>Jenis Transaksi</th>
													<th>Dibayar Kepada</th>
													<th>Tanggal</th>
													<th>Approved</th>
													<th>Acknowledge</th>
													<th>Cabang</th>
													<!-- <th class="text-center">Generate</th>
													<th class="text-center">Detail</th>
													<th class="text-center">Edit</th> -->
												</tr>
											</thead>
											<tbody>
												<?php 
													$no = 1;
													$approve = "";
													$acknowled = "";
													$cabang = "";
													if (!empty($table_data)) {
														foreach ($table_data as $value) {
															switch ($no) {
																case 1:
																	$approve = '';
																	$cabang = "Jakarta";
																	break;
																case 2:
																	$approve = '';
																	$acknowled = "Acknowledge";
																	$cabang = "Surabaya";
																	break;
																
																default:
																	$approve = 'Approved';
																	$acknowled = "Acknowledge";
																	$cabang = "Jakarta";
																	break;
															}
															$no++;
												?>	
														<tr>
															<td><button data-toggle="modal" name="viewQr" id="viewQr" data-target="#detail" class="btn btn-outline-warning" title="View Barcode" onclick="viewBarcode(<?php echo $value->no_transaksi; ?>)"> <i class="mdi mdi-eye"></i> </button></td>
															<td><?php echo strtoupper($value->no_ppu); ?></td>
															<td><?php echo strtoupper($value->department_name); ?></td>
															<td><?php echo ($value->jenis_transaksi == 'pP') ? 'KELUAR' : 'MASUK'; ?></td>
															<td><?php echo strtoupper($value->dibayar_kepada); ?></td>
															<td><?php echo date('d/m/Y', strtotime($value->created_time)) ?></td>
															<td><?php echo $approve ?></td>
															<td><?php echo $acknowled ?></td>
															<td><?php echo $cabang ?></td>
															<!-- <td class="text-center">
																<button id="genQr" name="genQr" class="btn btn-outline-dark" onclick="generateBarcode(<?php echo $value->no_bukti; ?>)" title="Generate Barcode"> <i class="mdi mdi-clipboard-text"></i> </button>
															</td>
															<td class="text-center">
																<button data-toggle="modal" name="viewQr" id="viewQr" data-target="#detail" class="btn btn-outline-warning" title="View Barcode" onclick="viewBarcode(<?php echo $value->no_bukti; ?>)"> <i class="mdi mdi-eye"></i> </button>
															</td>
															<td class="text-center">
																<a href="<?php echo base_url('operational/edit/'. $value->no_bukti) ?>" class="btn btn-light" title="Edit"> <i class="mdi mdi-lead-pencil"></i> </a>
															</td> -->
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