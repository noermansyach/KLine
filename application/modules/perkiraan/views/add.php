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

             	<div class="col-md-8 grid-margin stretch-card">
                	<div class="card">
                 		<div class="card-body">
                 			<form class="form-sample" action="" method="post">
                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">No. Acc</label>
                 					<div class="col-sm-7">
                 						<input type="text" class="form-control" name="no_acc">
                 					</div>
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Nama Perkiraan</label>
                 					<div class="col-sm-7">
                 						<input type="text" class="form-control" name="nama_acc">
                 					</div>
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Acc Induk</label>
                 					<div class="col-sm-7">
                 						<select name="acc_induk" class="js-example-basic-single" style="width:100%">
                 							<option>- Pilih Acc Induk -</option>
                 							<?php 
                 								if (!empty($dataAccInduk)) {
                 									foreach ($dataAccInduk as $value) {
                 							?>
                 							<option value="<?php echo $value->no_acc; ?>"><?php echo $value->no_acc . '-' . $value->nama_acc?></option>
                 							<?php
                 									}
                 								}
                 							?>
                 						</select>
                 					</div>
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Cabang</label>
                 					<div class="col-sm-7">
                 						<select id="company" name="company" class="js-example-basic-single" style="width:100%">
		                                   <option>- Pilih Cabang -</option>
		                                   <?php foreach ($dataCabang as $value): ?>
		                                   		<option value="<?php echo $value->id_company ?>"><?php echo str_replace('PT Karana Line', '', $value->company_name) . ' - ' . $value->init ?></option>
		                                   <?php endforeach ?>
		                                </select>
                 					</div>
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Level</label>
                 					<div class="col-sm-7">
                 						<input type="radio" name="level" value="1"> 1 &nbsp;
                 						<input type="radio" name="level" value="2"> 2 &nbsp;
                 						<input type="radio" name="level" value="3"> 3 &nbsp;
                 						<input type="radio" name="level" value="4"> 4 &nbsp;
                 						<input type="radio" name="level" value="5"> 5 &nbsp; 
                 						<input type="radio" name="level" value="6"> 6 &nbsp;
                 					</div> 
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Currency</label>
                 					<div class="col-sm-7">
                 						<select id="currency" name="currency" class="js-example-basic-single" style="width:100%">
		                                   <option>- Pilih Currency -</option>
		                                   <?php foreach ($dataCurrency as $value): ?>
		                                   		<option value="<?php echo $value->id_currency ?>"><?php echo $value->currency . ' - ' . $value->init; ?></option>
		                                   <?php endforeach ?>
		                                </select>
                 					</div>
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Jenis Jurnal</label>
                 					<div class="col-sm-7">
                 						<select id="jenisJurnal" name="jenis_jurnal" class="js-example-basic-single" style="width:100%">
		                                   <option>- Pilih Jenis Jurnal -</option>
		                                   <option value="KAS">Kas</option>
		                                   <option value="BANK">Bank</option>
		                                   <option value="PIUTANG">Piutang</option>
		                                   <option value="HUTANG">Hutang</option>
		                                </select>
                 					</div>
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Init Kas Bank</label>
                 					<div class="col-sm-7">
                 						<input type="text" class="form-control" name="init_kas_bank">
                 					</div>
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Kategori</label>
                 					<div class="col-sm-7">
                 						<input type="radio" name="Kategori" class="" value="AKTIVA"> Aktiva &nbsp;
                 						<input type="radio" name="Kategori" class="f" value="PASSIVA"> Passiva &nbsp;
                 						<input type="radio" name="Kategori" class="" value="AKTIVA"> Aktivaby &nbsp;
                 						<input type="radio" name="Kategori" class="" value="AKTIVA"> Passivaby &nbsp;
                 					</div>
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Budget</label>
                 					<div class="col-sm-7">
                 						<input type="radio" name="budget" class="" value="YES"> Yes &nbsp;
                 						<input type="radio" name="budget" class="" value="NO"> No &nbsp;
                 					</div>
                 				</div>

                 				<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Disb</label>
                 					<div class="col-sm-7">
                 						<input type="radio" name="disb" class="" value="YES"> Yes &nbsp;
                 						<input type="radio" name="disb" class="" value="NO"> No &nbsp;
                 					</div>
                 				</div>

                 				<div class="d-flex flex-row-reverse">
                 					<button type="submit" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                 				</div>
                 			</form>

                  		</div>
                	</div>
             	</div>
          </div>
          <!-- content-wrapper ends -->