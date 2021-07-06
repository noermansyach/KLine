<div class="modal fade" id="manager-approve" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      	<div class="modal-content" style="color: black;">
	            <div class="modal-header">
	                <h5 class="modal-title" id="exampleModalLabel">Permintaan Permohonan Uang</h5>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	            <div class="modal-body">
	            	<div class="row">
		            	<div class="col-sm-4">
			            	<div class="row">
			            		<div class="col-sm-4"><b>No. Transaksi</b></div>
			            		<div class="col-sm-6"> : <font id="no-transaksi"></font></div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-4"><b>No. PPU</b></div>
			            		<div class="col-sm-5"> : <font id="no-ppu"></font></div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-4"><b>Tipe Transaksi</b></div>
			            		<div class="col-sm-6"> : <font id="tipe-trans"></font></div>
			            	</div>
		            	</div>

		            	<div class="col-sm-4">
			            	<div class="row">
			            		<div class="col-sm-4"><b>Cabang</b></div>
			            		<div class="col-sm-6"> : <font id="nama-cabang"></font></div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-4"><b>Departemen</b></div>
			            		<div class="col-sm-5"> : <font id="nama-departemen"> </font></div>
			            	</div>
		            	</div>

		            	<div class="col-sm-4">
			            	<div class="row">
			            		<div class="col-sm-4"><b>Tanggal Dibuat</b></div>
			            		<div class="col-sm-6"> : <font id="tanggal-dibuat"></font></div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-4"><b>Pembuat</b></div>
			            		<div class="col-sm-5"> : <font id="nama-pembuat"></font></div>
			            	</div>
		            	</div>
		            </div>
	            	<hr>
	            	<div class="row">
		            	<div class="col-sm-4">
			            	<div class="row">
			            		<div class="col-sm-4"><b>Jumlah</b></div>
			            		<div class="col-sm-7"> : Rp. <font id="nominal"></font></div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-4"><b>Terbilang</b></div>
			            		<div class="col-sm-7"> : <font size="2" id="terbilang"></font></div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-4"><b>Dibayar Kepada</b></div>
			            		<div class="col-sm-7"> : <font id="nama-principal"></font></div>
			            	</div>
		            	</div>

		            	<div class="col-sm-6">
			            	<div class="row">
			            		<div class="col-sm-3"><b>Keterangan</b>  </div>
			            		<div class="col-sm-9">
			            		    : <small><font id="ket-satu">Untuk beli alat tempur</font><br>
			            			&nbsp;&nbsp;<font id="ket-dua">Donasi untuk pembangunan Palestina</font><br>
			            			&nbsp;&nbsp;<font id="ket-tiga">Ngeganti dana haji yang dimakan pemerintah</font></small>
			            		</div>
			            	</div>
		            	</div>
		            </div>
		            <hr>
	            	<div class="row">
		            	<div class="col-sm-4">
			            	<div class="row">
			            		<div class="col-sm-4"><b>Vesel</b></div>
			            		<div class="col-sm-6"> : <font id="nama-kapal"></font></div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-4"><b>Voyage</b></div>
			            		<div class="col-sm-5"> : <font id="voyage"></font></div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-4"><b>Port</b></div>
			            		<div class="col-sm-6"> : <font id="nama-pelabuhan"></font></div>
			            	</div>
		            	</div>

		            	<div class="col-sm-4">
			            	<div class="row">
			            		<div class="col-sm-4"><b>TA</b></div>
			            		<div class="col-sm-6"> : <font id="TA"></font></div>
			            	</div>
			            	<div class="row">
			            		<div class="col-sm-4"><b>TD</b></div>
			            		<div class="col-sm-5"> : <font id="TD"></font></div>
			            	</div>
		            	</div>

		            </div>
		            
		            
	            </div>

	            <div class="modal-footer">
	            	<input type="hidden" name="noTransaksiApprove" id="noTransaksiApprove">
		            <button class="btn btn-outline-primary btn-icon-text" onclick="approveManager()"><i class="mdi mdi-file-check btn-icon-prepend"></i> Approve </button>
	            </div>
            
      </div>
    </div>
</div>