    <nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav">
			
			<li class="nav-item nav-category">Master</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#general" aria-expanded="false" aria-controls="page-layouts">
					<span class="icon-bg"> <i class="mdi mdi-apps menu-icon"></i> </span>
					<span class="menu-title">Umum</span>
					<i class="menu-arrow"></i>
				</a>
				<div class="collapse" id="general">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('company') ?>">Perusahaan</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('department') ?>">Departemen</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('position') ?>">Jabatan</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('karyawan') ?>">Karyawan</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('currency') ?>">Mata Uang</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('bank') ?>">Bank</a></li>
						
					</ul>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#finance" aria-expanded="false" aria-controls="page-layouts">
					<span class="icon-bg"> <i class="mdi mdi-apps menu-icon"></i> </span>
					<span class="menu-title">Keuangan</span>
					<i class="menu-arrow"></i>
				</a>
				<div class="collapse" id="finance">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('mperkiraan') ?>">Perkiraan</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('perkiraan_bunglon') ?>">Akun Bunglon</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('saldo_minimum') ?>">Saldo Minimum</a></li>
					</ul>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#disb" aria-expanded="false" aria-controls="page-layouts">
					<span class="icon-bg"> <i class="mdi mdi-apps menu-icon"></i> </span>
					<span class="menu-title">Disbursment</span>
					<i class="menu-arrow"></i>
				</a>
				<div class="collapse" id="disb">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('principal') ?>">Principal</a></li>
					</ul>
				</div>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#ship" aria-expanded="false" aria-controls="page-layouts">
					<span class="icon-bg"> <i class="mdi mdi-apps menu-icon"></i> </span>
					<span class="menu-title">Kapal & Pelabuhan</span>
					<i class="menu-arrow"></i>
				</a>
				<div class="collapse" id="ship">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('kapal') ?>">Kapal</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('pelabuhan') ?>">Pelabuhan</a></li>
					</ul>
				</div>
			</li>

			<li class="nav-item nav-category">Transaksi</li>

			<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kunjungan') ?>">
          <span class="icon-bg"><i class="mdi mdi-anchor menu-icon"></i></span>
          <span class="menu-title">Kunjungan Kapal</span>
        </a>
      </li>

            <li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#rp" aria-expanded="false" aria-controls="page-layouts">
					<span class="icon-bg">&nbsp; <i class="mdi mdi-cash menu-icon"></i> &nbsp;</span>
					<span class="menu-title">Receive & Payment</span>
					<i class="menu-arrow"></i>
				</a>
				<div class="collapse" id="rp">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('operational') ?>">Operasional</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('non_operational') ?>">Non Operasional</a></li>
						
					</ul>
				</div>
			</li>

			<li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('verifikasi_uang') ?>">
          <span class="icon-bg"><i class="mdi mdi-briefcase-check menu-icon"></i></span>
          <span class="menu-title">Verifikasi Uang</span>
        </a>
      </li>

		</ul>
    </nav>