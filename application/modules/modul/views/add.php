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

             	<div class="col-md-8 grid-margin stretch-card">
                	<div class="card">
                 		<div class="card-body">
                    		<h4 class="card-title">Form Suplier</h4>
                    		<p class="card-description"> Formulir penambahan suplier bahan baku</p>

		                    <form class="forms-sample" action="<?php echo base_url('suplier/add') ?>" method="post">
		                    

		                    	<div class="form-group row">
		                            <div class="col-sm-7">
		                                <input type="hidden" class="form-control" id="nkd_suplier" name="kd_suplier" value="<?php echo $kodeSuplier ?>" readonly>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Suplier *</label>
		                            <div class="col-sm-7">
		                                <input type="text" class="form-control" id="nama_suplier" name="nama_suplier">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alamat *</label>
		                            <div class="col-sm-7">
		                                <textarea class="form-control" id="alamat" name="alamat" cols="10" rows="5"></textarea>
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nomor Telepon *</label>
		                            <div class="col-sm-5">
		                                <input type="text" class="form-control" id="telp" name="telp">
		                            </div>
		                        </div>

		                        <button type="submit" class="btn btn-primary mr-2">Simpan</button>
		                        <!-- <button class="btn btn-dark">Batalkan</button> -->
		                       	
		                    <!-- <?php echo form_close(); ?> -->
		                    </form>
                  		</div>
                	</div>
             	</div>
          </div>
          <!-- content-wrapper ends -->