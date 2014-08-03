<div class="row">
	<div class="span4">
		<nav class="sidebar light">
		    <ul>
		        <li class="title">Hello, Administrator</li>
		        <li class="active"><a href="<?php echo site_url();?>administrator"><i class="icon-home"></i>Dashboard</a></li>
		        <li class="stick bg-cyan"><a href="<?php echo site_url();?>administrator/editpassword"><i class="icon-cog"></i>Edit Password</a></li>
		        <li class="stick bg-yellow">
		            <a class="dropdown-toggle" href="#"><i class="icon-tree-view"></i>Kelola Data Banjir</a>
		            <ul class="dropdown-menu" data-role="dropdown">
		                <li><a href="<?php echo site_url();?>administrator/tambahdaerah">Masukan Data Daerah</a></li>
		                <li><a href="<?php echo site_url();?>administrator/tambahposko">Masukan Data Posko</a></li>
		                <li><a href="<?php echo site_url();?>administrator/tambahkorban">Masukan Data Korban</a></li>
		                <li class="divider"></li>
		                <li><a href="<?php echo site_url();?>administrator/tambahketinggian">Masukan Data Ketinggian</a></li>
		                <li><a href="<?php echo site_url();?>administrator/tambahdonatur">Masukan Data Donatur</a></li>
		                <li><a href="<?php echo site_url();?>administrator/tambahdonasi">Masukan Data Donasi</a></li>
		            </ul>
		        </li>
		        <li class="stick bg-green"><a href="#"><i class="icon-user-3"></i>Kelola Petugas</a></li>
		        <li class="stick bg-red"><a href="<?php echo site_url();?>administrator/logout"><i class="icon-switch"></i>Logout</a></li>
		    </ul>
		</nav>
	</div>

	<div class="span10">
	<div class="notice marker-on-bottom bg-cyan fg-white">
		<div class="row">
			<div class="notice marker-on-left bg-gray">
	   			 <i class="icon-rocket"></i> Selamat Datang di Halaman Administrator Sistem Informasi Banjir Kota Bekasi
			</div>
		</div>
		<div class="row"><p> </p></div>
		<div class="row">
			<a href="<?php echo site_url();?>kelola/DataDaerah">
			    <div class="tile double bg-amber">
				    <div class="tile-content icon">
				        <i class="icon-location-3"></i>
				    </div>
				    <div class="brand bg-black">
				        <span class="label fg-white"><center>KELOLA DAERAH</center></span>
				    </div>
				</div>
			</a>
			<a href="<?php echo site_url();?>kelola/DataKorban">
				<div class="tile double bg-lightGreen" >
				    <div class="tile-content icon">
				        <i class="icon-accessibility"></i>
				    </div>
				    <div class="brand bg-black">
				        <span class="label fg-white"><center>KELOLA KORBAN</center></span>
				    </div>
				</div>
			</a>
			<a href="<?php echo site_url();?>kelola/DataPosko">
				<div class="tile bg-darkIndigo" >
				    <div class="tile-content icon">
				        <i class="icon-cabinet"></i>
				    </div>
				    <div class="brand bg-black">
				        <span class="label fg-white"><center>KELOLA POSKO</center></span>
				    </div>
				</div>
			</a>
		</div>
		<div class="row">
			<a href="<?php echo site_url();?>kelola/DataKetinggian">
				<div class="tile bg-violet" >
				    <div class="tile-content icon">
				        <i class="icon-stats-up"></i>
				    </div>
				    <div class="brand bg-black">
				        <span class="label fg-white"><center>KETINGGIAN AIR</center></span>
				    </div>
				</div>
			</a>
			<a href="<?php echo site_url();?>kelola/DataDonatur">
				<div class="tile bg-emerald" >
				    <div class="tile-content icon">
				        <i class="icon-user"></i>
				    </div>
				    <div class="brand bg-black">
				        <span class="label fg-white"><center>KELOLA DONATUR</center></span>
				    </div>
				</div>
			</a>

			<a href="<?php echo site_url();?>kelola/DataDonasi">
				<div class="tile bg-lightRed" >
				    <div class="tile-content icon">
				        <i class="icon-clipboard-2"></i>
				    </div>
				    <div class="brand bg-black">
				        <span class="label fg-white"><center>KELOLA DONASI</center></span>
				    </div>
				</div>
			</a>

			<a href="<?php echo site_url();?>kelola/DataPetugas">
				<div class="tile bg-yellow" >
				    <div class="tile-content icon">
				        <i class="icon-user-3"></i>
				    </div>
				    <div class="brand bg-black">
				        <span class="label fg-white"><center>KELOLA PETUGAS</center></span>
				    </div>
				</div>
			</a>

			<a href="<?php echo site_url();?>kelola/DataKomentar">
				<div class="tile bg-orange">
				    <div class="tile-content icon">
				        <i class="icon-comments"></i>
				    </div>
				    <div class="brand bg-black">
				        <span class="label fg-white"><center>KELOLA KOMENTAR</center></span>
				    </div>
				</div>
			</a>

		</div>

	</div>
	</div>
</div>