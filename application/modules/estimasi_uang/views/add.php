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

             	<div class="col-md-12 grid-margin stretch-card">
                	<div class="card">
                 		<div class="card-body">

                            <!-- <div class="d-lg-flex justify-content-between align-items-center pt-2 pb-3 border-bottom"> -->
                            <div class="d-lg-flex justify-content-between align-items-center pt-2 pb-3">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 mr-3"><?php echo ucfirst($title) ?></h4>
                                </div>
                            </div>

                            <br>
                            <form class="form-sample" action="<?php echo('kunjungan/add/') ?>" method="post">

                                <table class="table">
                                    <tr>
                                        <td>
                                            Tipe
                                        </td>
                                        <td colspan="2">
                                            <div class="row">
                                                <div class="form-check col-sm-6">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="isClose" id="isClose" value="MASUK" checked> Masuk </label>
                                                </div>
                                                <div class="form-check col-sm-6">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="isClose" id="isClose" value="KELUAR"> Keluar </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td colspan="5"></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Nomor Bukti</td>
                                        <td><input type="text" name="" class="form-control"></td>
                                        <td>Tanggal Entry</td>
                                        <td><input type="date" name="" class="form-control"></td>
                                        <td>Tanggal Transaksi</td>
                                        <td colspan="2"><input type="date" name="" class="form-control"></td>
                                        <td></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Ref. AGR</td>
                                        <td><input type="text" name="reg_agr" class="form-control"></td>
                                        <td colspan="8"></td>
                                    </tr>

                                    <tr>
                                        <td>Akun</td>
                                        <td colspan="3">
                                            <select name="selectAkun" id="selectAkun" class="js-example-basic-single" style="width:100%">
                                                <option>- Pilih Akun -</option>
                                                <!-- <?php foreach ($dataMv as $value): ?>
                                                    <option value="<?php echo $value->id_kapal ?>"><?php echo $value->id_kapal . ' - ' . $value->nama_kapal; ?></option>
                                                <?php endforeach ?> -->
                                            </select> 
                                        </td>
                                        <td>Departemen</td>
                                        <td colspan="2">
                                            <select name="selectDepartemen" id="selectDepartemen" class="js-example-basic-single" style="width:100%">
                                                <option>- Pilih Departemen -</option>
                                                <!-- <?php foreach ($dataMv as $value): ?>
                                                    <option value="<?php echo $value->id_kapal ?>"><?php echo $value->id_kapal . ' - ' . $value->nama_kapal; ?></option>
                                                <?php endforeach ?> -->
                                            </select> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Mata Uang</td>
                                        <td><input type="text" name="mataUang" class="form-control text-center" readonly=""></td>
                                        <td>Rate</td>
                                        <td><input type="text" name="rate" class="form-control text-center" readonly=""></td>
                                        <td colspan="4"></td>
                                    </tr>

                                    <tr>
                                        <td>Jumlah Curr</td>
                                        <td colspan="2">
                                            <input type="text" class="form-control" name="curr">
                                        </td>
                                        <td>Jumlah Rp</td>
                                        <td colspan="2"><input type="text" class="form-control" name="jmlRp"></td>
                                        <td colspan="2"></td>
                                    </tr>

                                    <tr>
                                        <td>Dibayar Kepada / Diterima Kepada</td>
                                        <td colspan="2"><input type="text" name="dt" class="form-control"></td>
                                        <td colspan="5"></td>
                                    </tr>

                                    <tr>
                                        <td>Keterangan</td>
                                        <td colspan="7"><textarea class="form-control" rows="2"></textarea></td>
                                    </tr>
                                </table>

                                
                            	<!-- <table class="table table-striped">
                            		<tr>
                            			<td><label class="col-form-label">No. Transaksi</label></td>
                            			<td>
                            				<input type="text" name="idTransaksi" class="form-control" id="idTransaksi" value="<?php echo $idTransKunjungan ?>" readonly="readonly">
                                    	</td>

                                    	<td></td>
                            			<td>
                            				
                                    	</td>
                                        <td><label class="col-form-label">Tanggal Transaksi</label></td>
                                        <td><input type="text" name="tglTransaksi" class="form-control" id="tglTransaksi" class="text-center" value="<?php echo $tglTransaksi; ?>" readonly="readonly"></td>
                            		</tr>

                                    <tr>
                                        <td><label class="col-form-label">Kapal / MV</label></td>
                                        <td class="text-left" colspan="3">
                                            <select name="selectMV" id="selectMV" class="js-example-basic-single" style="width:100%">
                                                <option>- Pilih MV -</option>
                                                <?php foreach ($dataMv as $value): ?>
                                                    <option value="<?php echo $value->id_kapal ?>"><?php echo $value->id_kapal . ' - ' . $value->nama_kapal; ?></option>
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
                                                    <option value="<?php echo $value->id_pelabuhan; ?>"><?php echo $value->id_pelabuhan . ' - ' . $value->nama_pelabuhan ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td><label class="col-form-label">Voyage</label></td>
                                        <td>
                                            <input type="text" name="voyage" class="form-control" id="voyage" placeholder="">
                                        </td>

                                        <td class="text-right">
                                            <label class="col-form-label">TA</label>
                                        </td>
                                        <td style="width: 20%">
                                            <input type="date" name="ta" class="form-control" id="ta" placeholder="TA">
                                        </td>
                                        <td class="text-right">
                                            <label class="col-form-label">TD</label>
                                        </td>
                                        <td style="width: 20%"><input type="date" name="td" class="form-control" id="td" placeholder="TD"></td>
                                    </tr>

                                    <tr>
                                        <td><label class="col-form-label">No. Akun</label></td>
                                        <td colspan="3">
                                            <select name="selectAcc" id="selectAcc" class="js-example-basic-single" style="width:100%">
                                                <option>- Pilih Akun -</option>
                                                <?php foreach ($dataAcc as $value): ?>
                                                    <option value="<?php echo $value->no_acc ?>"><?php echo $value->no_acc . ' - ' . $value->nama_acc; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>


                            	</table> -->

                                <br>
                 			
                                <div class="d-flex flex-row-reverse">
                                    <button type="submit" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                                </div>
                  		</div>
                	</div>
             	</div>
                
          </div>
          <!-- content-wrapper ends -->