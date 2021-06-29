		<div class="content-wrapper">

            <div class="page-header">
				<h3 class="page-title"><?php echo ucfirst($title) ?> </h3>
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

                            <div class="d-lg-flex justify-content-between align-items-center pt-2 pb-3 border-bottom">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0 mr-3">Add <?php echo ucfirst($title) ?></h4>
                                </div>
                            </div>
                            <br>
                            <p class="card-description">Komponen yang diberi tanda bintang (*) wajib diisi</p>
                            
                            <form class="form-sample" action="" method="post">
                                <!-- <table class="table table-bordered"> -->
                                <table class="table">
                                    <tr>
                                        <td>Kode Principal</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="idPrincipal" class="form-control col-sm-8" value="<?php echo $idPrincipal; ?>" readonly="readonly">
                                            </div>
                                        </td>
                                        <td>Is DK Note</td>
                                        <td>
                                            <div class="row">
                                                <div class="form-check col-sm-3">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="dkNote" id="dkNote" value="Y"> Ya </label>
                                                </div>
                                                <div class="form-check col-sm-5">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="dkNote" id="dkNote" value="N"> Tidak </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Nama Principal, Singkatan</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="namaPrincipal" class="form-control col-sm-5"> 
                                                <label class="col-form-label">&nbsp; , &nbsp;</label> 
                                                <input type="text" name="initPrincipal" class="form-control form-control-sm col-sm-1">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Alamat</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <textarea class="form-control col-sm-8" name="alamatSatu" rows="1"></textarea> &nbsp;
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="border-top: 0"></td>
                                        <td colspan="3" style="border-top: 0">
                                            <div class="row" style="margin-top: -25px;">
                                                <textarea class="form-control col-sm-8" name="alamatDua" rows="1"></textarea> &nbsp;
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Kode Pos</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="kodePos" class="form-control col-sm-8">
                                            </div>
                                        </td>
                                        <td>Negara</td>
                                        <td>
                                            <div class="row">
                                                <select name="selectCountry" class="js-example-basic-single" style="width:100%">
                                                    <option value="">- Pilih Negara -</option>
                                                    <?php foreach ($countryData as $value): ?>
                                                        <option value="<?php echo $value->iso_code ?>"><?php echo '+'.$value->country_code .' - '. $value->country_name; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Telepon 1</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="areaTelpSatu" class="form-control form-control-sm col-sm-2"> &nbsp;
                                                <input type="text" name="teleponSatu" class="form-control form-control-sm col-sm-5">
                                            </div>
                                        </td>
                                        <td>Telepon 2</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="areaTelpDua" class="form-control form-control-sm col-sm-2"> &nbsp;
                                                <input type="text" name="teleponDua" class="form-control form-control-sm col-sm-5">
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Fax</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="areaFax" class="form-control form-control-sm col-sm-1"> &nbsp;
                                                <input type="text" name="fax" class="form-control form-control-sm col-sm-2">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Contact Person</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="contactPerson" class="form-control form-control-sm col-sm-4">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Akun</td>
                                        <td colspan="2">
                                            <div class="row">
                                                <select name="selectAccount" class="js-example-basic-single" style="width:100%">
                                                    <option value="">- Pilih Akun -</option>
                                                    <?php foreach ($dataAccount as $value): ?>
                                                        <option value="<?php echo $value->no_acc ?>"><?php echo $value->no_acc . ' - ' . $value->nama_acc; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td colspan="4">
                                            <div class="d-flex flex-row-reverse">
                                                <button type="submit" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                  		</div>
                	</div>
             	</div>
                
          </div>
          <!-- content-wrapper ends -->
