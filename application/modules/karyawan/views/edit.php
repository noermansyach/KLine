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
                                    <h4 class="mb-0 mr-3">Edit <?php echo ucfirst($title) ?></h4>
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
                                                <input type="text" name="idKaryawan" class="form-control col-sm-8" value="<?php echo $employeeData->id_employee; ?>" readonly="readonly">
                                            </div>
                                        </td>
                                        <td>Nama Karyawan</td>
                                        <td>
                                            <input type="text" name="namaKaryawan" class="form-control col-sm-12" value="<?php echo $employeeData->employee_name; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat, Tanggal Lahir</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="tempatLahir" class="form-control col-sm-3" placeholder="Tempat Lahir" value="<?php echo $employeeData->place_of_birth; ?>"> 
                                                <label class="col-form-label">&nbsp; , &nbsp;</label> 
                                                <input type="date" name="tanggalLahir" class="form-control col-sm-3" value="<?php echo $employeeData->date_of_birth; ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <div class="row">
                                                <div class="form-check col-sm-4">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="gender" id="gender" value="PRIA" <?php echo  ($employeeData->gender == 'PRIA') ? 'checked' : ''; ?> > Pria </label>
                                                </div>
                                                <div class="form-check col-sm-1">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="gender" id="gender" value="WANITA" <?php echo  ($employeeData->gender == 'WANITA') ? 'checked' : ''; ?> > Wanita </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Agama</td>
                                        <td> 
                                            <select name="selectReligion" class="js-example-basic-single" style="width:100%">
                                                <option value="">- Pilih Agama -</option>
                                                <option value="BUDHA" <?php echo ($employeeData->religion == 'BUDHA') ? 'selected' : ''; ?>>Budha</option>
                                                <option value="HINDU" <?php echo ($employeeData->religion == 'HINDU') ? 'selected' : ''; ?>>Hindu</option>
                                                <option value="ISLAM" <?php echo ($employeeData->religion == 'ISLAM') ? 'selected' : ''; ?>>Islam</option>
                                                <option value="KATOLIK" <?php echo ($employeeData->religion == 'KATOLIK') ? 'selected' : ''; ?>>Katolik</option>
                                                <option value="PROTESTAN" <?php echo ($employeeData->religion == 'PROTESTAN') ? 'selected' : ''; ?>>Protestan</option>
                                                <option value="KONG HU CU" <?php echo ($employeeData->religion == 'KONG HU CU') ? 'selected' : ''; ?>>Kong Hu Cu</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status Perkawinan</td>
                                        <td>
                                            <div class="row">
                                                <div class="form-check col-sm-3">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="maritalStatus" id="maritalStatus" value="KAWIN" <?php echo ($employeeData->marital_status == 'KAWIN') ? 'checked' : ''; ?>> Kawin </label>
                                                </div>
                                                <div class="form-check col-sm-5">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="maritalStatus" id="maritalStatus" value="BELUM KAWIN" <?php echo ($employeeData->marital_status == 'BELUM KAWIN') ? 'checked' : ''; ?>> Belum Kawin </label>
                                                </div>
                                                <div class="form-check col-sm-4">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="maritalStatus" id="maritalStatus" value="CERAI" <?php echo ($employeeData->marital_status == 'CERAI') ? 'checked' : ''; ?>> PISAH </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Pendidikan Terahir</td>
                                        <td>
                                            <select name="pendidikanTerakhir" class="js-example-basic-single" style="width:100%">
                                                <option value="">- Pilih Pendidikan Terakhir -</option>
                                                <option value="S3" <?php echo ($employeeData->last_education == 'S3') ? 'selected' : ''; ?> >SARJANA S3</option>
                                                <option value="S2" <?php echo ($employeeData->last_education == 'S2') ? 'selected' : ''; ?> >SARJANA S2</option>
                                                <option value="S1" <?php echo ($employeeData->last_education == 'S1') ? 'selected' : ''; ?> >SARJANA S1</option>
                                                <option value="D3" <?php echo ($employeeData->last_education == 'D3') ? 'selected' : ''; ?> >SARJANA D3</option>
                                                <option value="D2" <?php echo ($employeeData->last_education == 'D2') ? 'selected' : ''; ?> >SARJANA D2</option>
                                                <option value="D1" <?php echo ($employeeData->last_education == 'D1') ? 'selected' : ''; ?> >SARJANA D1</option>
                                                <option value="SMA - SETARA SMA" <?php echo ($employeeData->last_education == 'SMA - SETARA SMA') ? 'selected' : ''; ?> >SMA / SETARA SMA</option>
                                                <option value="SMP -SETARA SMP" <?php echo ($employeeData->last_education == 'SMP - SETARA SMP') ? 'selected' : ''; ?> >SMP / SETARA SMP</option>
                                                <option value="SD - SETARA SD" <?php echo ($employeeData->last_education == 'SD - SETARA SD') ? 'selected' : ''; ?> >SD / SETARA SD</option>
                                                <option value="PAUD/TK" <?php echo ($employeeData->last_education == 'PAUD/TK') ? 'selected' : ''; ?> >PAUD/TK</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kewarganegaraan</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $employeeData->citizenship; ?>">
                                            </div>
                                        </td>
                                        <td>Nomor Induk Kependudukan</td>
                                        <td><input type="text" name="nik" class="form-control" value="<?php echo $employeeData->nik; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>NPWP</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="npwp" class="form-control" value="<?php echo $employeeData->npwp; ?>">
                                            </div>
                                        </td>
                                        <td>PTKP</td>
                                        <td><input type="text" name="ptkp" class="form-control" value="<?php echo $employeeData->ptkp ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat, Kode Pos</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <textarea class="form-control col-sm-8" name="alamat" rows="1"><?php echo $employeeData->address ?></textarea> &nbsp;
                                                <input type="text" name="kodePos" class="form-control form-control-sm col-sm-2" placeholder="Kode Pos" value="<?php echo $employeeData->postal_code ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Handphone</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" class="form-control col-sm-6" name="nomorHp" value="<?php echo $employeeData->phone_number; ?>">
                                            </div>
                                        </td>
                                        <td>Nomor Telepon Rumah</td>
                                        <td><input type="text" class="form-control col-sm-6" name="nomorTelpRumah" value="<?php echo $employeeData->home_phone_number; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="email" name="email" class="form-control col-sm-5" value="<?php echo $employeeData->email ?>">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Bergabung</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="date" name="tanggalMasuk" class="form-control col-sm-3" value="<?php echo $employeeData->join_date ?>">
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
                                                        <option value="<?php echo $value->id_department ?>" <?php echo ($employeeData->id_department == $value->id_department) ? 'selected' : ''; ?>>
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
                                                    <option value="<?php echo $value->id_position; ?>" <?php echo ($employeeData->id_position == $value->id_position) ? 'selected' : ''; ?>>
                                                        <?php echo $value->position. ' - ' . $value->init; ?>
                                                    </option>
                                                <?php endforeach ?>
                                            </select>
                                        </td>
                                    </tr>

                                    <?php 
                                        $outDate = $employeeData->out_date;
                                        $status = "resign";
                                        if ($outDate == "0000-00-00") {
                                            $status = "aktif";
                                        }
                                    ?>

                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            <div class="row">
                                                <div class="form-check col-sm-4">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="status" id="status" value="aktif" <?php echo ($status == "aktif") ? 'checked':''; ?> > Aktif </label>
                                                </div>
                                                <div class="form-check col-sm-1">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="status" id="status" value="resign" <?php echo ($status == "resign") ? 'checked':''; ?> > Resign </label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Tanggal Resign</td>
                                        <td>
                                            <?php if ($status == "resign"): ?>
                                                <input type="date" name="tanggalKeluar" class="form-control col-sm-8" value="<?php echo $employeeData->out_date; ?>">
                                            <?php else: ?>
                                                <input type="date" name="tanggalKeluar" class="form-control col-sm-8">
                                            <?php endif ?>
                                        </td>
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