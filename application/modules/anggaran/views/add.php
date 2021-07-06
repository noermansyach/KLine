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
                                    <h4 class="mb-0 mr-3">Entry <?php echo ucfirst($title) ?></h4>
                                </div>
                            </div>
                            <br>
                            <!-- <p class="card-description">Komponen yang diberi tanda bintang (*) wajib diisi</p> -->
                            
                            <form class="form-sample" action="" method="post">
                                <div class="row">
                                    <div class="form-group row col-sm-6">
                                        <label class="col-form-label col-sm-3">No. Entry</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-sm" name="noEntry" id="noEntry" value="<?php echo $noAnggaran; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-6">
                                        <label class="col-form-label col-sm-3">Tanggal Entry</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-sm" name="tglEntry" id="tglEntry" value="<?php echo date('Y-m-d') ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group row col-sm-6">
                                        <label class="col-form-label col-sm-3">Akun</label>
                                        <div class="col-sm-9">
                                            <select name="selectAccount" id="selectAccount" class="js-example-basic-single" style="width:100%">
                                                <option> - </option>
                                                <?php foreach ($dataAcc as $value): ?>
                                                    <option value="<?php echo $value->no_acc ?>"><?php echo $value->no_acc . ' / ' . $value->nama_acc?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group row col-sm-6">
                                        <label class="col-form-label col-sm-3">Bank</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="initBank" id="initBank" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group row col-sm-6">
                                        <label class="col-form-label col-sm-3">No. Rekening</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="noRekening" id="noRekening" class="form-control form-control-sm">
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-outline-info btn-fw" id="showVerifiedList">Tampilkan Daftar Verifikasi PPU</button>
                                <!-- <div id="tesajalah">
                                    coba
                                </div> -->
                                <div id="listVerifikasi">
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-sm-3">
                                            <label>Saldo Awal</label>
                                            <input type="text" name="saldoAwal" id="saldoAwal" class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label>Verifikasi In</label>
                                            <input type="text" name="verIn" id="verIn" class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label>Verifikasi Out</label>
                                            <input type="text" name="verOut" id="verOut" class="form-control form-control-sm">
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label>Saldo Akhir</label>
                                            <input type="text" name="saldoAkhir" id="saldoAkhir" class="form-control form-control-sm">
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-outline-warning btn-fw" name="proses" id="proses">Proses</button>
                                    </div>

                                
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                                <table id="order-listing" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center"></th>
                                                            <th>No</th>
                                                            <th>No. PPU</th>
                                                            <th>Tanggal Entry</th>
                                                            <th>Departemen</th>
                                                            <th>Tipe</th>
                                                            <th>Nama Vesel</th>
                                                            <th>Jumlah</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php 
                                                            $no = 1;
                                                            foreach ($ppuVerified as $value): 
                                                        ?>
                                                           <tr>
                                                                <td>
                                                                   <button name="pilih" id="pilih" class="btn btn-warning" title="Pilih" onclick=""> <i class="mdi mdi-border-color"></i> </button>
                                                               </td>
                                                               <td><?php echo $no++; ?></td>
                                                               <td><?php echo $value->no_ppu; ?></td>
                                                               <td><?php echo date('Y-m-d', strtotime($value->tgl_dibuat)) ?></td>
                                                               <td><?php echo $value->department_name; ?></td>
                                                               <td><?php echo ($value->status == 'R') ? 'Masuk' : 'Keluar'; ?></td>
                                                               <td><?php echo $value->nama_principal ?></td>
                                                               <td><?php echo $value->debitKredit ?></td>
                                                               
                                                           </tr>
                                                       <?php endforeach ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                  		</div>
                	</div>
             	</div>
                
          </div>
          <!-- content-wrapper ends -->
