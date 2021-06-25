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

             	<div class="col-md-7 grid-margin stretch-card">
                	<div class="card">
                 		<div class="card-body">

                            <div class="d-lg-flex justify-content-between align-items-center pt-2 pb-3 border-bottom">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 mr-3"><?php echo ucfirst($title) ?></h4>
                                </div>
                            </div>

                            <br>
                            <form class="form-sample" action="<?php echo('mperkiraan/add/') ?>" method="post">
								<div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Level</label> &nbsp; &nbsp;
                                    <div class="row">
                                        <div class="col-sm-6 row">
                                            <div class="col-sm-4">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="level" id="level" value="1" checked> 1 </label>
                                              </div>
                                            </div>
                                            <div class="col-sm-4">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="level" id="level" value="2" > 2 </label>
                                              </div>
                                            </div>
                                            <div class="col-sm-4">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="level" id="level" value="3" > 3 </label>
                                              </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6 row">
                                            <div class="col-sm-4">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="level" id="level" value="4" > 4 </label>
                                              </div>
                                            </div>
                                            <div class="col-sm-4">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="level" id="level" value="5" > 5 </label>
                                              </div>
                                            </div>
                                            <div class="col-sm-4">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="level" id="level" value="6" > 6 </label>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                 				<div class="form-group row" id="accLevel1">
                 					<label class="col-sm-3 col-form-label">Level 1</label>
                                    <div id="textLevel1" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="noAcc1" class="form-control" id="noAcc1" placeholder="Nomor Akun">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="namaAcc1" class="form-control" id="namaAcc1" placeholder="Nama Perkiraan">
                                        </div>
                                    </div>
                                    
                 					<div class="col-sm-7" id="selectLevel1">
                 						<select name="selectAccLevel1" id="selectAccLevel1" class="js-example-basic-single" style="width:100%">
		         							<option>- Pilih Akun Induk -</option>
                                            <?php foreach ($dataLevel as $value): ?>
                                                <option value="<?php echo $value->no_acc ?>"><?php echo $value->no_acc . ' - ' . $value->nama_acc .' - '. $value->jenis_perkiraan; ?></option>
                                            <?php endforeach ?>
		                 				</select>
                 					</div>
                 				</div>

                 				<div class="form-group row" id="accLevel2">
                 					<label class="col-sm-3 col-form-label">Level 2</label>
                                    <div id="textLevel2" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="noAcc2" class="form-control" id="noAcc2" placeholder="Nomor Akun">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="namaAcc2" class="form-control" id="namaAcc2" placeholder="Nama Perkiraan">
                                        </div>
                                    </div>
                 					<div class="col-sm-7" id="selectLevel2">
                 						<select name="selectAccLevel2" id="selectAccLevel2" class="js-example-basic-single" style="width:100%">
		         							<option>- Pilih Akun Induk -</option>
                                            <?php foreach ($dataAccLevel2 as $value): ?>
                                                <option value="<?php echo $value->no_acc; ?>"><?php echo $value->nama_acc .' - '. $value->jenis_perkiraan; ?></option>
                                            <?php endforeach ?>
		                 				</select>
                 					</div>
                 				</div>

                 				<div class="form-group row" id="accLevel3">
                 					<label class="col-sm-3 col-form-label">Level 3</label>
                                    <div id="textLevel3" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="noAcc3" class="form-control" id="noAcc3" placeholder="Nomor Akun">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="namaAcc3" class="form-control" id="namaAcc3" placeholder="Nama Perkiraan">
                                        </div>
                                    </div>

                 					<div class="col-sm-7" id="selectLevel3">
                 						<select name="selectAccLevel3" id="selectAccLevel3" class="js-example-basic-single" style="width:100%">
		         							<option>- Pilih Akun Induk -</option>
		                 				</select>
                 					</div>
                 				</div>

                 				<div class="form-group row" id="accLevel4">
                 					<label class="col-sm-3 col-form-label">Level 4</label>
                 					<div id="textLevel4" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="noAcc4" class="form-control" id="noAcc4" placeholder="Nomor Akun">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="namaAcc4" class="form-control" id="namaAcc4" placeholder="Nama Perkiraan">
                                        </div>
                                    </div>

                                    <div class="col-sm-7" id="selectLevel4">
                                        <select name="selectAccLevel4" id="selectAccLevel4" class="js-example-basic-single" style="width:100%">
                                            <option>- Pilih Akun Induk -</option>
                                        </select>
                                    </div>
                 				</div>

                                <div class="form-group row" id="accLevel5">
                                    <label class="col-sm-3 col-form-label">Level 5</label>
                                    <div id="textLevel5" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="noAcc5" class="form-control" id="noAcc5" placeholder="Nomor Akun">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="namaAcc5" class="form-control" id="namaAcc5" placeholder="Nama Perkiraan">
                                        </div>
                                    </div>

                                    <div class="col-sm-7" id="selectLevel5">
                                        <select name="selectAccLevel5" id="selectAccLevel5" class="js-example-basic-single" style="width:100%">
                                            <option>- Pilih Akun Induk -</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row" id="accLevel6">
                                    <label class="col-sm-3 col-form-label">Level 6</label>
                                    <div id="textLevel6" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="noAcc6" class="form-control" id="noAcc6" placeholder="Nomor Akun">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="namaAcc6" class="form-control" id="namaAcc6" placeholder="Nama Perkiraan">
                                        </div>
                                    </div>

                                </div>
                 			

                  		</div>
                	</div>
             	</div>

                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="col-form-label">Jenis Perkiraan</label>
                                <select name="selectJenisPerkiraan" id="selectJenisPerkiraan" class="js-example-basic-single" style="width:100%">
                                    <option>- Pilih Jenis Perkiraan -</option>
                                    <option value="AKTIVA">Aktiva</option>
                                    <option value="PASSIVA">Passiva</option>
                                    <option value="AKTIVABY">AktivaBy</option>
                                    <option value="PASSIVABY">PassivaBy</option>
                                    <option value="BIAYA">Biaya</option>
                                    <option value="PENDAPATAN">Pendapatan</option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Is Jurnal</label>
                                <div class="col-sm-3">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="isJurnal" id="isJurnal" value="YES" checked> Yes </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="isJurnal" id="isJurnal" value="NO"> No </label>
                                  </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Jenis Jurnal</label>
                                <select name="selectJenisJurnal" id="selectJenisJurnal" class="js-example-basic-single" style="width:100%">
                                    <option>- Pilih Jenis Jurnal -</option>
                                    <option value="KAS">Kas</option>
                                    <option value="BANK">Bank</option>
                                    <option value="PIUTANG">Piutang</option>
                                    <option value="HUTANG">Hutang</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Laporan GL</label>
                                <input type="text" name="laporanGl" id="laporanGl" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Pilih Cabang</label>
                                <select name="selectCompany" id="selectCompany" class="js-example-basic-single" style="width:100%">
                                    <option>- Pilih Cabang -</option>
                                    <?php foreach ($companyData as $value): ?>
                                        <option value="<?php echo $value->id_company ?>"><?php echo str_replace('PT Karana Line', '', $value->company_name) . ' - ' . $value->init ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Pilih Currency</label>
                                <select name="selectCurrency" id="selectCurrency" class="js-example-basic-single" style="width:100%">
                                    <option>- Pilih Currency -</option>
                                    <?php foreach ($currencyData as $value): ?>
                                        <option value="<?php echo $value->id_currency ?>"><?php echo $value->init . ' - ' . $value->currency; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Pilih Bank</label>
                                <select name="selectBank" id="selectBank" class="js-example-basic-single" style="width:100%">
                                    <option>- Pilih Bank -</option>
                                    <?php foreach ($bankData as $value): ?>
                                        <option value="<?php echo $value->id_bank ?>"><?php echo $value->initial . ' - ' . $value->nama_bank; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Inisial Kas</label>
                                <input type="text" name="initKas" id="initKas" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">No. Rekening</label>
                                <input type="text" name="noRek" id="noRek" class="form-control">
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Budget</label>
                                <div class="col-sm-3">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="isBudget" id="isBudget" value="YES" checked> Yes </label>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="form-check">
                                    <label class="form-check-label">
                                      <input type="radio" class="form-check-input" name="isBudget" id="isBudget" value="NO"> No </label>
                                  </div>
                                </div>
                            </div>

                            <div class="d-flex flex-row-reverse">
                                <button type="submit" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                            </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
          </div>
          <!-- content-wrapper ends -->