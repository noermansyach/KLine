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
                                        <td>Receive or Payment</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <div class="form-check col-sm-2">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="receivePayment" id="receivePayment" value="R"> Receive </label>
                                                </div>
                                                <div class="form-check col-sm-2">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="receivePayment" id="receivePayment" value="P"> Payment </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Nomor Bukti</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="noBukti" class="form-control form-control-sm col-sm-3" readonly="readonly" value="<?php echo $noBukti; ?>">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tanggal</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="tanggal" id="tanggal" class="form-control col-sm-2" value="<?php echo $tanggalBuat; ?>" readonly="readonly">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Departemen</td>
                                        <td>
                                            <div class="row">
                                                <select name="selectDepartment" id="selectDepartment" class="js-example-basic-single col-sm-11">
                                                    <option value="">- Pilih Departemen -</option>
                                                    <?php foreach ($departementList as $value): ?>
                                                        <option value="<?php echo $value->id_department; ?>"><?php echo $value->init . ' - ' . $value->department_name;  ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>Nomor PPU</td>
                                        <td>
                                            <input type="text" name="noPPU" id="noPPU" class="form-control col-sm-7" readonly="readonly">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Dibayar Kepada</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectPrincipal" class="js-example-basic-single col-sm-6">
                                                    <option value=""> - </option>
                                                    <?php foreach ($principalList as $value): ?>
                                                        <option value="<?php echo $value->id_principal ?>"><?php echo $value->inisial_nama . ' - ' . $value->nama_principal;  ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Jumlah</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" class="form-control form-control-sm col-sm-6" name="jumlah">
                                            </div>
                                        </td>
                                        <td>Terbilang</td>
                                        <td>
                                            <input type="text" class="form-control" name="terbilang">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Keterangan</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <textarea class="form-control col-sm-8" name="ketSatu" rows="1"></textarea> &nbsp;
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="border-top: 0"></td>
                                        <td colspan="3" style="border-top: 0">
                                            <div class="row" style="margin-top: -25px;">
                                                <textarea class="form-control col-sm-8" name="ketDua" rows="1"></textarea> &nbsp;
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="border-top: 0"></td>
                                        <td colspan="3" style="border-top: 0">
                                            <div class="row" style="margin-top: -25px;">
                                                <textarea class="form-control col-sm-8" name="ketTiga" rows="1"></textarea> &nbsp;
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- <tr>
                                        <td>Requested By</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectEmployee" class="js-example-basic-single col-sm-4">
                                                    <option value="">- Pilih Karyawan -</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr> -->

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
