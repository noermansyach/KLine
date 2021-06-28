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
                                        <td>Perusahaan</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="companyName" class="form-control form-control-sm col-sm-5" readonly="readonly" value="<?php echo $userData->company_name; ?>">
                                            </div>
                                        </td>
                                        <input type="hidden" name="idUser" value="<?php echo $userData->id_user ?>">
                                    </tr>

                                    <tr>
                                        <td>User</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <input type="text" name="username" class="form-control form-control-sm col-sm-5" readonly="readonly" value="<?php echo $userData->username; ?>">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Departemen</td>
                                        <td>
                                            <div class="row">
                                                <input type="text" name="departemen" class="form-control form-control-sm col-sm-9" readonly="readonly" value="<?php echo $userData->department_name; ?>">
                                            </div>
                                        </td>
                                        <td>Jabatan</td>
                                        <td>
                                            <input type="text" name="position" id="positionName" class="form-control form-control-sm col-sm-9" readonly="readonly" value="<?php echo $userData->position; ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Level</td>
                                        <td colspan="3">
                                            <div class="row">
                                                <select name="selectLevel" id="selectLevel" class="js-example-basic-single col-sm-5">
                                                    <option value="" selected="select">- Pilih Level -</option>
                                                    <?php foreach ($levelList as $value): ?>
                                                        <option value="<?php echo $value->id_level; ?>" <?php echo ($userData->id_level == $value->id_level) ? 'selected' : ''; ?>><?php echo $value->level; ?></option>
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
                                                      <input type="radio" class="form-check-input" name="isActive" id="isActive" value="1" <?php echo ($userData->is_active == '1') ? 'checked' : '' ?>> Aktif </label>
                                                </div>
                                                <div class="form-check col-sm-2">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input" name="isActive" id="isActive" value="0" <?php echo ($userData->is_active == '0') ? 'checked' : '' ?>> Tidak </label>
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
