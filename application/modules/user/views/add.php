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
                                        <td>Perusahaan</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectCompany" id="selectCompany" class="js-example-basic-single col-sm-5">
                                                    <option value="" selected="select">- Pilih Perusahaan -</option>
                                                    <?php foreach ($companyList as $value): ?>
                                                        <option value="<?php echo $value->id_company ?>"><?php echo $value->init . ' - ' . str_replace('PT Karana Line', '', $value->company_name); ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>User</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectEmployee" id="selectEmployee" class="js-example-basic-single col-sm-5">
                                                    <option value="">- Pilih Karyawan -</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="userName" id="userName">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Departemen</td>
                                        <td>
                                            <input type="hidden" name="departemenCode" id="departemenCode" readonly="readonly">
                                            <div class="row">
                                                <input type="text" name="departemenName" id="departemenName" class="form-control form-control-sm col-sm-9" readonly="readonly">
                                            </div>
                                        </td>
                                        <td>Jabatan</td>
                                        <td>
                                            <input type="hidden" name="positionCode" id="positionCode" readonly="readonly">
                                            <input type="text" name="positionName" id="positionName" class="form-control form-control-sm col-sm-9" readonly="readonly">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Level</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectLevel" id="selectLevel" class="js-example-basic-single col-sm-5">
                                                    <option value="" selected="select">- Pilih Level -</option>
                                                    <?php foreach ($levelList as $value): ?>
                                                        <option value="<?php echo $value->id_level; ?>"><?php echo $value->level; ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Is Active</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <div class="form-check col-sm-2">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="isActive" id="isActive" value="1"> Aktif </label>
                                                </div>
                                                <div class="form-check col-sm-2">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="isActive" id="isActive" value="0"> Tidak </label>
                                                </div>
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
