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
                                        <td>Receive or Payment</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <div class="form-check col-sm-2">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="receivePayment" id="receivePayment" value="R" <?php echo ($dataPPU->jenis_transaksi == 'R') ? 'checked' : ''; ?>> Receive </label>
                                                </div>
                                                <div class="form-check col-sm-2">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="receivePayment" id="receivePayment" value="P" <?php echo ($dataPPU->jenis_transaksi == 'R') ? '' : 'checked'; ?>> Payment </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Nomor Bukti</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="noBukti" class="form-control form-control-sm col-sm-3" readonly="readonly" value="<?php echo $dataPPU->no_bukti; ?>">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tanggal</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="tanggal" id="tanggal" class="form-control col-sm-2" value="<?php echo date('d-m-Y', strtotime($dataPPU->created_time)); ?>" readonly="readonly">
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
                                                        <option value="<?php echo $value->id_department; ?>" <?php echo ($dataPPU->id_department == $value->id_department) ? 'selected' : ''; ?>><?php echo $value->init . ' - ' . $value->department_name;  ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>Nomor PPU</td>
                                        <td>
                                            <input type="text" name="noPPU" id="noPPU" class="form-control col-sm-7" value="<?php echo $dataPPU->no_ppu; ?>" readonly="readonly">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Dibayar Kepada</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectPrincipal" class="js-example-basic-single col-sm-6">
                                                    <option value=""> - </option>
                                                    <?php foreach ($principalList as $value): ?>
                                                        <option value="<?php echo $value->id_principal ?>" <?php echo ($dataPPU->id_principal == $value->id_principal) ? 'selected': ''; ?>><?php echo $value->inisial_nama . ' - ' . $value->nama_principal;  ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Jumlah</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" class="form-control form-control-sm col-sm-6" name="jumlah" value="<?php echo $dataPPU->jumlah; ?>">
                                            </div>
                                        </td>
                                        <td>Terbilang</td>
                                        <td>
                                            <input type="text" class="form-control" name="terbilang" value="<?php echo $dataPPU->terbilang ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Keterangan</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <textarea class="form-control col-sm-8" name="ketSatu" rows="1"><?php echo $dataPPU->ket_1; ?></textarea> &nbsp;
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="border-top: 0"></td>
                                        <td colspan="3" style="border-top: 0">
                                            <div class="row" style="margin-top: -25px;">
                                                <textarea class="form-control col-sm-8" name="ketDua" rows="1"><?php echo $dataPPU->ket_2; ?></textarea> &nbsp;
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="border-top: 0"></td>
                                        <td colspan="3" style="border-top: 0">
                                            <div class="row" style="margin-top: -25px;">
                                                <textarea class="form-control col-sm-8" name="ketTiga" rows="1"><?php echo $dataPPU->ket_3; ?></textarea> &nbsp;
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Bank</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectAccBank" id="selectAccBank" class="js-example-basic-single col-sm-9">
                                                    <option value=""> - </option>
                                                    <?php foreach ($accBankData as $value): ?>
                                                        <option value="<?php echo $value->no_acc ?>" <?php echo ($value->no_acc == $dataPPU->no_acc_bank) ? 'selected' : ''; ?>><?php echo $value->no_acc . ' / ' . $value->nama_acc . ' / ' .$value->init_kas_bank . ' / ' . $value->init; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <div class="col-sm-3">
                                                    <input type="text" name="noRekening" class="form-control form-control-sm" id="noRekening" value="<?php echo $dataPPU->no_rekening; ?>">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Vesel</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectVesel" id="selectVesel" class="js-example-basic-single col-sm-9">
                                                    <option value=""> - </option>
                                                    <?php foreach ($vesel as $value): ?>
                                                        <?php if ($value->id_kunjungan == $dataPPU->id_kunjungan): ?>
                                                            <option value="<?php echo $value->id_kunjungan ?>" selected="selected"><?php echo $value->id_kunjungan . ' - ' . $value->voyage . ' - '. date('d/m/Y', strtotime($value->tgl_berangkat)) .' - '. date('d/m/Y', strtotime($value->tgl_tiba)) .' - '.$value->nama_kapal; ?></option>    
                                                        <?php else: ?>
                                                            <option value="<?php echo $value->id_kunjungan ?>"><?php echo $value->id_kunjungan . ' - ' . $value->voyage . ' - '. date('d/m/Y', strtotime($value->tgl_berangkat)) .' - '. date('d/m/Y', strtotime($value->tgl_tiba)) .' - '.$value->nama_kapal; ?></option>    
                                                        <?php endif ?>
                                                        
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Vogage</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" class="form-control form-control-sm col-sm-6" name="voyage" id="voyage" value="<?php echo $detailKunjungan->voyage; ?>">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <label class="col-form-label col-sm-2">TA</label> 
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control form-control-sm" name="eta" id="eta" value="<?php echo $detailKunjungan->tgl_berangkat; ?>">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <label class="col-form-label col-sm-2">TD</label> 
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control form-control-sm" name="etd" id="etd" value="<?php echo $detailKunjungan->tgl_tiba; ?>">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Port</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="port" class="form-control form-control-sm col-sm-5" id="port" value="<?php echo $detailKunjungan->nama_pelabuhan ?>">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Acknowledge By</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectAcknowledge" class="js-example-basic-single col-sm-4">
                                                    <option value=""> - </option>
                                                    <?php foreach ($acknowledgeList as $value): ?>
                                                        <option value="<?php echo $value->id_employee ?>" <?php echo ($value->id_employee == $dataPPU->acknowledgeBy) ? 'selected' : ''; ?>><?php echo $value->employee_name; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
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
