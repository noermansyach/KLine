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
                                        <td>ID Karyawan</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="idKaryawan" class="form-control col-sm-8" value="<?php echo $idKaryawan; ?>" readonly="readonly">
                                            </div>
                                        </td>
                                        <td>Nama Karyawan</td>
                                        <td>
                                            <input type="text" name="namaKaryawan" class="form-control col-sm-12">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat, Tanggal Lahir</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="tempatLahir" class="form-control col-sm-3" placeholder="Tempat Lahir"> 
                                                <label class="col-form-label">&nbsp; , &nbsp;</label> 
                                                <input type="date" name="tanggalLahir" class="form-control col-sm-3">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <div class="row">
                                                <div class="form-check col-sm-4">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="gender" id="gender" value="PRIA" checked="checked"> Pria </label>
                                                </div>
                                                <div class="form-check col-sm-1">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="gender" id="gender" value="WANITA"> Wanita </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Agama</td>
                                        <td> 
                                            <select name="selectReligion" class="js-example-basic-single" style="width:100%">
                                                <option value="">- Pilih Agama -</option>
                                                <option value="BUDHA">Budha</option>
                                                <option value="HINDU">Hindu</option>
                                                <option value="ISLAM">Islam</option>
                                                <option value="KATOLIK">Katolik</option>
                                                <option value="PROTESTAN">Protestan</option>
                                                <option value="KONG HU CU">Kong Hu Cu</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status Perkawinan</td>
                                        <td>
                                            <div class="row">
                                                <div class="form-check col-sm-3">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="maritalStatus" id="maritalStatus" value="KAWIN" checked="checked"> Kawin </label>
                                                </div>
                                                <div class="form-check col-sm-5">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="maritalStatus" id="maritalStatus" value="BELUM KAWIN"> Belum Kawin </label>
                                                </div>
                                                <div class="form-check col-sm-4">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="maritalStatus" id="maritalStatus" value="CERAI"> Cerai </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Pendidikan Terahir</td>
                                        <td>
                                            <select name="pendidikanTerakhir" class="js-example-basic-single" style="width:100%">
                                                <option value="">- Pilih Pendidikan Terakhir -</option>
                                                <option value="S3">SARJANA S3</option>
                                                <option value="S2">SARJANA S2</option>
                                                <option value="S1">SARJANA S1</option>
                                                <option value="D3">SARJANA D3</option>
                                                <option value="D2">SARJANA D2</option>
                                                <option value="D1">SARJANA D1</option>
                                                <option value="SMA - SETARA SMA">SMA / SETARA SMA</option>
                                                <option value="SMP -SETARA SMP">SMP / SETARA SMP</option>
                                                <option value="SD - SETARA SD">SD / SETARA SD</option>
                                                <option value="PAUD/TK">PAUD/TK</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kewarganegaraan</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="kewarganegaraan" class="form-control">
                                            </div>
                                        </td>
                                        <td>Nomor Induk Kependudukan</td>
                                        <td><input type="text" name="nik" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>NPWP</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="npwp" class="form-control">
                                            </div>
                                        </td>
                                        <td>PTKP</td>
                                        <td><input type="text" name="ptkp" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat, Kode Pos</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <textarea class="form-control col-sm-8" name="alamat" rows="1"></textarea> &nbsp;
                                                <input type="text" name="kodePos" class="form-control form-control-sm col-sm-2" placeholder="Kode Pos">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Handphone</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" class="form-control col-sm-6" name="nomorHp">
                                            </div>
                                        </td>
                                        <td>Nomor Telepon Rumah</td>
                                        <td><input type="text" class="form-control col-sm-6" name="nomorTelpRumah"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="email" name="email" class="form-control col-sm-5">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Bergabung</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="date" name="tanggalMasuk" class="form-control col-sm-3">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Departemen</td>
                                        <td>
                                            <div class="row">
                                                <select name="selectDepartemen" class="js-example-basic-single" style="width:100%">
                                                    <option value="">- Pilih Departemen -</option>
                                                    <?php foreach ($departmentData as $value): ?>
                                                        <option value="<?php echo $value->id_department ?>">
                                                            <?php echo $value->department_name . ' - ' . $value->init; ?>
                                                        </option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>Jabatan</td>
                                        <td>
                                            <select name="selectPosition" class="js-example-basic-single" style="width:100%">
                                                <option value="">- Pilih Jabatan -</option>
                                                <?php foreach ($positionData as $value): ?>
                                                    <option value="<?php echo $value->id_position; ?>">
                                                        <?php echo $value->position. ' - ' . $value->init; ?>
                                                    </option>
                                                <?php endforeach ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <div class="row">
                                                <div class="form-check col-sm-4">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="status" id="status" value="aktif" checked="checked"> Aktif </label>
                                                </div>
                                                <div class="form-check col-sm-1">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="status" id="status" value="resign"> Resign </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Tanggal Resign</td>
                                        <td><input type="date" name="tanggalKeluar" class="form-control col-sm-8"></td>
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