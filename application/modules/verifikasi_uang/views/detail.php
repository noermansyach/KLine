        <div class="content-wrapper">

            <div class="page-header">
                <h3 class="page-title"> <?php echo ucfirst($title) ?> </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo ucfirst($title); ?></li>
                    </ol>
                </nav>
            </div>

            <div class="row">

                <div class="col-md-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <div class="d-lg-flex justify-content-between align-items-center pt-2 pb-3 border-bottom">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 mr-3"><?php echo ucfirst($title) ?></h4>
                                </div>
                            </div>

                            <br>
                            <form class="form-sample" action="<?php echo('kunjungan/add/') ?>" method="post">
                            	<div class="form-group row">
                            		<label class="col-form-label col-sm-2">Status</label>
                            		<div class="col-sm-2">
                            			<input type="text" name="status" id="Status" readonly="" class="form-control" value="<?php echo ($dataTransaksi->status == 'R') ? 'Masuk' : 'Keluar'; ?>">
                            		</div>
                            	</div>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nomor PPU</th>
                                            <th>Departemen</th>
                                            <th>Bayar Kepada</th>
                                            <th>Kredit</th>
                                            <th>Debit</th>
                                        </tr>
                                    </thead>
                                    <tbody id="verifikasi">
                                    	
                                    	<?php for ($i=0; $i < 2; $i++) { ?>
                                    			<tr>
	                                        		<td><?php echo strtoupper($dataTransaksi->no_ppu); ?></td>
	                                        		<td><?php echo strtoupper($dataTransaksi->department_name); ?></td>
	                                        		<td><?php echo strtoupper($dataTransaksi->nama_principal); ?></td>
	                                        		<td><?php echo ($i == 0) ? $dataTransaksi->debitKredit : '0'; ?></td>
	                                        		<td><?php echo ($i == 0) ? '0' : $dataTransaksi->debitKredit; ?></td>
	                                        	</tr>

                                    	<?php } ?>

                                        
                                    </tbody>
                                </table>

                                <br>
                                <div class="row">
                                	<div class="col-sm-4 d-flex justify-content-start">
                                		<a href="<?php echo base_url('verifikasi_uang/index'); ?>" class="btn btn-outline-dark "><i class="mdi mdi-keyboard-backspace"></i> Daftar PPU Belum di Verifikasi</a>		
                                	</div>
                                	<div class="col-sm-8 d-flex justify-content-end">
                                		<a href="<?php echo base_url('verifikasi_uang/index'); ?>" class="btn btn-outline-warning d-flex justify-content-end"><i class="mdi mdi-file-document-box "></i> Generate Report & Barcode</a>
                                	</div>
                                </div>
                                
                                
                        </div>
                    </div>
                </div>
                
          </div>
          <!-- content-wrapper ends -->