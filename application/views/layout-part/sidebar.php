    <nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav">
			
			<li class="nav-item nav-category">Master</li>

			<!-- <li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('dashboard') ?>">
					<span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
					<span class="menu-title">Dashboard</span>
				</a>
			</li> -->

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
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('currency') ?>">Mata Uang</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('bank') ?>">Bank</a></li>
						<!-- <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('kas_bank') ?>">Kas Bank</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('jenis_jurnal') ?>">Jenis Jurnal</a></li> -->
						
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
						<!-- <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('') ?>">Currency Rate</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('') ?>">InQuery</a></li> -->
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
				<a class="nav-link" data-toggle="collapse" href="#kasBank" aria-expanded="false" aria-controls="page-layouts">
					<span class="icon-bg"> <i class="fa fa-bank menu-icon"></i> </span>
					<span class="menu-title">Kas & Bank</span>
					<i class="menu-arrow"></i>
				</a>
				<div class="collapse" id="kasBank">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('#') ?>">Entry Kas</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?php echo base_url('#') ?>">Entry Bank</a></li>
					</ul>
				</div>
			</li>

		</ul>
    </nav>