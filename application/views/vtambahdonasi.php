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
		                <li><a href="<?php echo site_url();?>administrator/tambahdaerah">Masukan Data Daerah</a></li>
		                <li><a href="<?php echo site_url();?>administrator/tambahposko">Masukan Data Posko</a></li>
		                <li><a href="<?php echo site_url();?>administrator/tambahkorban">Masukan Data Korban</a></li>
		                <li class="divider"></li>
		                <li><a href="<?php echo site_url();?>administrator/tambahketinggian">Masukan Data Ketinggian</a></li>
		                <li><a href="<?php echo site_url();?>administrator/tambahdonatur">Masukan Data Donatur</a></li>
		                <li class="active"><a href="<?php echo site_url();?>administrator/tambahdonasi">Masukan Data Donasi</a></li>
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
			<form action="<?php echo site_url();?>administrator/tambahDonasi" method="POST">
                <fieldset>
            	     <legend>TAMBAH DATA BARANG DONASI</legend>
            	     
                     <label>JENIS DONASI</label>
                     <div class="input-control select">
    					<select name="jenis_donasi">
						
						<option value="barang">Barang</option>
						<option value="uang">Uang</option>
						
						</select>
					</div>

                     <label>KETERANGAN</label>
                     <div class="input-control text" data-role="input-control">
                 	    <input type="text" placeholder="Masukan Keterangan Jenis Donasi (Cont. 10 Pack Mie Instan/ Uang Rp.1jt)" name="keterangan">
                    	 <button class="btn-clear" tabindex="-1"></button>
                     </div>

                    <label>NAMA DONATUR</label>
                                    
					<div class="input-control select">
    					<select name="id_donatur">
						<?php 
						
							if (empty($hasildonatur)) {
	        				# coded by Raessa Fathul Alim
	        				echo "data kosong";
							}else{
							
							foreach ($hasildonatur as $data):
						?>

						<option value="<?php echo $data->id_donatur;?>"><?php echo $data->nama_donatur;?></option>
						        	
						<?php endforeach; 
							}
						?>
						</select>
					</div>

					<label>POSKO TUJUAN</label>
                                    
					<div class="input-control select">
    					<select name="id_posko">
						<?php 
						
							if (empty($hasilposko)) {
	        				# code...
	        				echo "data kosong";
							}else{
							
							foreach ($hasilposko as $data):
						?>

						<option value="<?php echo $data->id_posko;?>"><?php echo $data->nama_posko;?></option>
						        	
						<?php endforeach; 
							}
						?>
						</select>
					</div>
                                        
       	             <?php echo form_submit('submit','Simpan Data Barang') ?>
                 </fieldset>
            </form>
		</div>

	</div>
	</div>
</div>