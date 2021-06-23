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
                            <form class="form-sample" action="" method="post">
                            	<?php  
                            		$date = date_create($dataKunjungan->tgl_transaksi);
                            		$tgl_transaksi = date_format($date, "d/m/Y");
                            	?>
                            	<table class="table table-striped">
                            		<tr>
                            			<td><label class="col-form-label">No. Transaksi</label></td>
                            			<td>
                            				<input type="text" name="idTransaksi" class="form-control" id="idTransaksi" value="<?php echo $dataKunjungan->id_transaksi; ?>" readonly="readonly">
                                    	</td>

                                    	<td></td>
                            			<td>
                            				
                                    	</td>
                                        <td><label class="col-form-label">Tanggal Transaksi</label></td>
                                        <td><input type="text" name="tglTransaksi" class="form-control" id="tglTransaksi" class="text-center" value="<?php echo $tgl_transaksi; ?>" readonly="readonly"></td>
                            		</tr>

                                    <tr>
                                        <td><label class="col-form-label">Kapal / MV</label></td>
                                        <td class="text-left" colspan="3">
                                            <select name="selectMV" id="selectMV" class="js-example-basic-single" style="width:100%">
                                                <option>- Pilih MV -</option>
                                                <?php foreach ($dataMv as $value): ?>
                                                	<?php if ($dataKunjungan->id_kapal == $value->id_kapal): ?>
                                                		<option value="<?php echo $value->id_kapal ?>" selected><?php echo $value->id_kapal . ' - ' . $value->nama_kapal; ?></option>
                                                	<?php else: ?>
                                                		<option value="<?php echo $value->id_kapal ?>"><?php echo $value->id_kapal . ' - ' . $value->nama_kapal; ?></option>
                                                	<?php endif ?>
                                                <?php endforeach ?>
                                            </select>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td style=""><label class="col-form-label">Pelabuhan</label></td>
                                        <td style="" class="text-left" colspan="3">
                                            <select name="selectPort" id="selectPort" class="js-example-basic-single" style="width:100%">
                                                <option>- Pilih Port -</option>
                                                <?php foreach ($dataPort as $value): ?>
                                                	<?php if ($dataKunjungan->id_pelabuhan == $value->id_pelabuhan): ?>
                                                	<option value="<?php echo $value->id_pelabuhan; ?>" selected><?php echo $value->id_pelabuhan . ' - ' . $value->nama_pelabuhan ?></option>
                                                	<?php else: ?>
                                                	<option value="<?php echo $value->id_pelabuhan; ?>"><?php echo $value->id_pelabuhan . ' - ' . $value->nama_pelabuhan ?></option>
                                                	<?php endif ?>
                                                    
                                                <?php endforeach ?>
                                            </select>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td><label class="col-form-label">Voyage</label></td>
                                        <td>
                                            <input type="text" name="voyage" class="form-control" id="voyage" value="<?php echo $dataKunjungan->voyage; ?>" placeholder="">
                                        </td>

                                        <td class="text-right">
                                            <label class="col-form-label">TA</label>
                                        </td>
                                        <td style="width: 20%">
                                            <input type="date" name="ta" class="form-control" id="ta" value="<?php echo $dataKunjungan->tgl_berangkat; ?>" placeholder="TA">
                                        </td>
                                        <td class="text-right">
                                            <label class="col-form-label">TD</label>
                                        </td>
                                        <td style="width: 20%"><input type="date" name="td" class="form-control" id="td" value="<?php echo $dataKunjungan->tgl_tiba ?>" placeholder="TD"></td>
                                    </tr>

                                    <tr>
                                        <td><label class="col-form-label">No. Akun</label></td>
                                        <td colspan="3">
                                            <select name="selectAcc" id="selectAcc" class="js-example-basic-single" style="width:100%">
                                                <option>- Pilih Akun -</option>
                                                <?php foreach ($dataAcc as $value): ?>
                                                	<?php if ($dataKunjungan->no_acc == $value->no_acc): ?>
	                                                	<option value="<?php echo $value->no_acc ?>" selected><?php echo $value->no_acc . ' - ' . $value->nama_acc; ?></option>
	                                                <?php else: ?>
	                                                	<option value="<?php echo $value->no_acc ?>"><?php echo $value->no_acc . ' - ' . $value->nama_acc; ?></option>
	                                                <?php endif ?>
                                                    
                                                <?php endforeach ?>
                                            </select>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td><label class="col-form-label">Is Close</label></td>
                                        <td colspan="3">
                                        	<div class="row">
	                                            <div class="form-check col-sm-2">
	                                                <label class="form-check-label">
	                                                  <input type="radio" class="form-check-input" name="isClose" id="isClose" value="OPEN" <?php echo ($dataKunjungan->is_close == 'OPEN') ? 'checked' : ''; ?> > Open </label>
	                                            </div>
	                                            <div class="form-check col-sm-2">
	                                                <label class="form-check-label">
	                                                  <input type="radio" class="form-check-input" name="isClose" id="isClose" value="CLOSE" <?php echo ($dataKunjungan->is_close == 'CLOSE') ? 'checked' : ''; ?>> Close </label>
	                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                        	
                                        </td>
                                        <td></td>
                                    </tr>

                            	</table>

                                <br>
                 			
                                <div class="d-flex flex-row-reverse">
                                    <button type="submit" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                                </div>
                  		</div>
                	</div>
             	</div>
                
          </div>
          <!-- content-wrapper ends -->