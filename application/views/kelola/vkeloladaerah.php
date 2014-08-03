<div class="row">
	<div class="span4">
		<nav class="sidebar light">
		    <ul>
		        <li class="title">Hello, Administrator</li>
		        <li><a href="<?php echo site_url();?>administrator"><i class="icon-home"></i>Dashboard</a></li>
		        <li class="stick bg-cyan"><a href="<?php echo site_url();?>administrator/editpassword"><i class="icon-cog"></i>Edit Password</a></li>
		        <li class="stick bg-yellow">
		            <a class="dropdown-toggle" href="#"><i class="icon-tree-view"></i>Kelola Data Banjir</a>
		            <ul class="dropdown-menu" data-role="dropdown">
		                <li  class="active"><a href="<?php echo site_url();?>administrator/tambahdaerah">Masukan Data Daerah</a></li>
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

		<div class="span9">
			<div class="notice marker-on-right bg-white fg-black" style="height:500px">
				
				<div class="row">
					<div id="cari">
						<form action="<?php echo site_url(); ?>kelola/caridaerah" method="POST">
							<input  name="cari" type="text" value="" class="input-xlarge"/>
							<button class="btn" title="Mencari">Cari</button>
						</form>
						<div class="place-right">
							<a href="<?php echo site_url();?>kelola/DataDaerah" class="button small">TAMPILKAN SEMUA</a>
							<a href="<?php echo site_url();?>administrator/tambahdaerah" class="button small">TAMBAH DATA</a>
						</div>
					</div>

		<?php
		if (empty($hasildatadaerah)){
			echo br(2);
			echo "<center><h1>Maaf Data Tidak Di Temukan Silahkan <a href='administrator/tambahdata.html'>Tambahkan Data </a></h1></center>";
		}
		else
		{
			?>
		<table class="table hovered">
           <thead>
            <tr>
			<th class="text-left">Nama Daerah</th>
			<th class="text-left">Latitude</th>
			<th class="text-left">Longitude</th>
			<th class="text-left">Aksi</th>
			</tr>
		   </thead>
		   <tbody>
			
			<?php
			foreach ($hasildatadaerah as $data):
				?>
			<tr>

				<td><?php echo $data->nama_daerah; ?></td>
				<td><?php echo $data->latitude; ?></td>
				<td><?php echo $data->longitude; ?></td>
				<td>
					<a href="<?php echo site_url(); ?>kelola/editDataDaerah/<?php echo $data->id_daerah;?>" class="button small"><i class=icon-pencil> EDIT</i></a>
					<a href="<?php echo site_url(); ?>kelola/hapusdaerah/<?php echo $data->id_daerah;?>" class="button small"><i class=icon-remove> HAPUS</i></a>
				</td>
			</tr>
			<?php endforeach; }?>
			</tbody>
		</table>
		<div class="pagination"> <?php echo $this->pagination->create_links(); ?> </div>

		</div>

		</div>
	</div>
</div