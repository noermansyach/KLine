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

                                <div class="row">
                                    <div class="form-group col-sm-6 row">
                                        <label class="col-form-label col-sm-4">Tanggal Dibuat</label>
                                        <input type="text" name="tanggal" id="tanggal" class="form-control form-control-sm col-sm-5" readonly="readonly" value="<?php echo date('Y-m-d', strtotime($dataTransaksi->created_time)) ?>">
                                    </div>

                                    <div class="form-group col-sm-6 row">
                                        <label class="col-form-label col-sm-4">Tipe</label>
                                        <input type="text" name="receivePayment" id="receivePayment" class="form-control form-control-sm col-sm-5" readonly="readonly" value="<?php echo ($dataTransaksi->status == 'P')? 'Keluar' : 'Masuk';  ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6 row">
                                        <label class="col-form-label col-sm-4">No. Transaksi</label>
                                        <input type="text" name="noBukti" id="noBukti" class="form-control form-control-sm col-sm-6" readonly="readonly" value="<?php echo $dataTransaksi->no_bukti ?>">
                                    </div>

                                    <div class="form-group col-sm-6 row">
                                        <label class="col-form-label col-sm-4">No. PPU</label>
                                        <input type="text" name="noPPU" id="noPPU" class="form-control form-control-sm col-sm-6" readonly="readonly" value="<?php echo $dataTransaksi->no_ppu ?>">
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="form-group col-sm-6 row">
                                        <label class="col-form-label col-sm-4">Departemen</label>
                                        <input type="hidden" name="idDepartment" value="<?php echo $dataTransaksi->id_department; ?>">
                                        <input type="text" name="departemen" id="departemen" class="form-control form-control-sm col-sm-8" readonly="readonly" value="<?php echo $dataTransaksi->department_name ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-12 row">
                                        <label class="col-form-label col-sm-2">Vesel</label>
                                        <?php 
                                            $kunjunganKapal =  'Id Kunjungan : ' . $dataTransaksi->id_kunjungan . ' / Voyage : '. $dataTransaksi->voyage . ' / TA : ' . date('Y-m-d', strtotime($dataTransaksi->tgl_berangkat)) . ' / TD : ' . date('Y-m-d', strtotime($dataTransaksi->tgl_tiba));
                                        ?>
                                        <input type="text" name="vesel" id="vesel" class="form-control form-control-sm col-sm-10" readonly="readonly"
                                        value="<?php echo $kunjunganKapal; ?>">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="form-group col-sm-12 row">
                                        <label class="col-form-label col-sm-2">Bank</label>
                                        <input type="text" name="accBank" id="accBank" class="form-control form-control-sm col-sm-8" readonly="readonly" value="<?php echo $dataTransaksi->no_acc . ' / ' . $dataTransaksi->nama_acc . ' / ' . $dataTransaksi->init_kas_bank . ' / ' . $dataTransaksi->currency ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-12 row">
                                        <div class="col-sm-2"></div>
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <label>No. Rekening</label>
                                                <input type="text" name="noRekening" id="noRekening" class="form-control form-control-sm" readonly="readonly" value="<?php echo $dataTransaksi->no_rekening ?>">
                                            </div>    
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6 row">
                                        <label class="col-form-label col-sm-4"><?php echo ($dataTransaksi->status == 'P') ? 'Kredit' : 'Debit'  ?></label>
                                        <input type="text" name="jumlah" id="jumlah" class="form-control form-control-sm col-sm-6" readonly="readonly" value="<?php echo $dataTransaksi->jumlah ?>">
                                    </div>

                                    <div class="form-group col-sm-6 row">
                                        <label class="col-form-label col-sm-4">Dibayar Kepada</label>
                                        <input type="hidden" name="idPrincipal" value="<?php echo $dataTransaksi->id_principal ?>">
                                        <input type="text" name="principal" id="principal" class="form-control form-control-sm col-sm-8" readonly="readonly" value="<?php echo $dataTransaksi->nama_principal; ?>">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-12 row">
                                        <label class="col-form-label col-sm-2">Akun</label>
                                        <select name="selectAccount" id="selectAccount" class="js-example-basic-single col-sm-8">
                                            <option> - </option>
                                            <?php foreach ($dataAcc as $value): ?>
                                                <option value="<?php echo $value->no_acc; ?>"><?php echo $value->no_acc . ' / ' . $value->nama_acc . ' / '. $value->init_kas_bank . ' / ' . $value->currency; ?>
                                                    
                                                </option>
                                            <?php endforeach ?>
                                        </select>

                                        <input type="hidden" name="noAccContra" id="noAccContra">
                                        <input type="hidden" name="namaAccContra" id="namaAccContra">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-12 row">
                                        <label class="col-form-label col-sm-2"><?php echo ($dataTransaksi->status == 'P') ? 'Debit' : 'Kredit'; ?></label>
                                        <input type="text" name="debitKredit" class="form-control form-control-sm col-sm-4">
                                    </div>
                                </div>

                                <br>
                            
                                <div class="d-flex flex-row-reverse">
                                    <button type="submit" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-check btn-icon-prepend"></i> Verifikasi </button>
                                </div>
                            </form>

                                <br>

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nomor PPU</th>
                                            <th>Departemen</th>
                                            <th>Bayar Kepada</th>
                                            <th>Debit</th>
                                            <th>Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody id="verifikasi">
                                        <tr>
                                            <td><div class="colNoPpuSatu"></div></td>
                                            <td><div class="colDepartemenSatu"></div></td>
                                            <td><div class="colPrincipalSatu"></div></td>
                                            <td><div class="colDebitSatu"></div></td>
                                            <td><div class="colKreditSatu"></div></td>
                                        </tr>
                                        <tr>
                                            <td><div class="colNoPpuDua"></div></td>
                                            <td><div class="colDepartemenDua"></div></td>
                                            <td><div class="colPrincipalDua"></div></td>
                                            <td><div class="colDebitDua"></div></td>
                                            <td><div class="colKreditDua"></div></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <br>
                                <a href="<?php echo base_url('verifikasi_uang/index'); ?>" class="btn btn-outline-dark"><i class="mdi mdi-keyboard-backspace"></i> Daftar PPU Belum di Verifikasi</a>
                        </div>
                    </div>
                </div>
                
          </div>
          <!-- content-wrapper ends -->