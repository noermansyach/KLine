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

             	<div class="col-md-7 grid-margin stretch-card">
                	<div class="card">
                 		<div class="card-body">
                 			<form class="form-sample" action="" method="post">
								<div class="form-group row">
                 					<label class="col-sm-3 col-form-label">Level</label>
                 					<div class="col-sm-7">
                 						<input type="radio" name="level" value="1" id="level" checked=""> 1 &nbsp;
                 						<input type="radio" name="level" value="2" id="level"> 2 &nbsp;
                 						<input type="radio" name="level" value="3" id="level"> 3 &nbsp;
                 						<input type="radio" name="level" value="4" id="level"> 4 &nbsp;
                 						<input type="radio" name="level" value="5" id="level"> 5 &nbsp; 
                 						<input type="radio" name="level" value="6" id="level"> 6 &nbsp;
                 					</div> 
                 				</div>

                 				<div class="form-group row" id="accLevel1">
                 					<label class="col-sm-3 col-form-label">Level 1</label>
                                    <div id="textLevel1" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                    </div>
                                    
                 					<div class="col-sm-7" id="selectLevel1">
                 						<select name="selectAccLevel1" id="selectAccLevel1" class="js-example-basic-single" style="width:100%">
		         							<option>- Pilih Akun Induk -</option>
                                            <?php foreach ($dataLevel as $value): ?>
                                                <option value="<?php echo $value->no_acc ?>"><?php echo $value->no_acc . ' - ' . $value->nama_acc .' - '. $value->jenis_perkiraan; ?></option>
                                            <?php endforeach ?>
		                 				</select>
                 					</div>
                 				</div>

                 				<div class="form-group row" id="accLevel2">
                 					<label class="col-sm-3 col-form-label">Level 2</label>
                                    <div id="textLevel2" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                    </div>
                 					<div class="col-sm-7" id="selectLevel2">
                 						<select name="selectAccLevel2" id="selectAccLevel2" class="js-example-basic-single" style="width:100%">
		         							<option>- Pilih Akun Induk -</option>
                                            <?php foreach ($dataAccLevel2 as $value): ?>
                                                <option value="<?php echo $value->no_acc; ?>"><?php echo $value->nama_acc .' - '. $value->jenis_perkiraan; ?></option>
                                            <?php endforeach ?>
		                 				</select>
                 					</div>
                 				</div>

                 				<div class="form-group row" id="accLevel3">
                 					<label class="col-sm-3 col-form-label">Level 3</label>
                                    <div id="textLevel3" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                    </div>

                 					<div class="col-sm-7" id="selectLevel3">
                 						<select name="selectAccLevel3" id="selectAccLevel3" class="js-example-basic-single" style="width:100%">
		         							<option>- Pilih Akun Induk -</option>
		                 				</select>
                 					</div>
                 				</div>

                 				<div class="form-group row" id="accLevel4">
                 					<label class="col-sm-3 col-form-label">Level 4</label>
                 					<div id="textLevel4" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                    </div>

                                    <div class="col-sm-7" id="selectLevel4">
                                        <select name="selectAccLevel4" id="selectAccLevel4" class="js-example-basic-single" style="width:100%">
                                            <option>- Pilih Akun Induk -</option>
                                        </select>
                                    </div>
                 				</div>

                                <div class="form-group row" id="accLevel5">
                                    <label class="col-sm-3 col-form-label">Level 5</label>
                                    <div id="textLevel5" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                    </div>

                                    <div class="col-sm-7" id="selectLevel5">
                                        <select name="selectAccLevel5" id="selectAccLevel5" class="js-example-basic-single" style="width:100%">
                                            <option>- Pilih Akun Induk -</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row" id="accLevel6">
                                    <label class="col-sm-3 col-form-label">Level 6</label>
                                    <div id="textLevel6" class="col-sm-9 row">
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="" class="form-control" id="">
                                        </div>
                                    </div>

                                </div>

                 				<div class="d-flex flex-row-reverse">
                 					<button type="submit" id="muncul" class="btn btn-outline-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                 				</div>
                 			</form>

                  		</div>
                	</div>
             	</div>

                <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <!-- content-wrapper ends -->