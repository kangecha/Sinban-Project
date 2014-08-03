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
		                <li class="active"><a href="<?php echo site_url();?>administrator/tambahposko">Masukan Data Posko</a></li>
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
			<form action="<?php echo site_url();?>administrator/tambahPosko" method="POST">
                <fieldset>
            	     <legend>TAMBAH DATA POSKO</legend>
                     <label>NAMA POSKO</label>
                     <div class="input-control text" data-role="input-control">
                 	    <input type="text" placeholder="Masukan Nama Posko" name="nama_posko">
                    	 <button class="btn-clear" tabindex="-1"></button>
                     </div>

                     <label>ALAMAT POSKO</label>
                     <div class="input-control text" data-role="input-control">
                 	    <input type="text" placeholder="Masukan Alamat Posko" name="alamat_posko">
                    	 <button class="btn-clear" tabindex="-1"></button>
                     </div>

                     <label>NAMA DAERAH</label>
                                    
					<div class="input-control select">
    					<select name="id_daerah">
						<?php 
						
							if (empty($hasildaerah)) {
	        				# coded by Raessa Fathul Alim
	        				echo "data kosong";
							}else{
							
							foreach ($hasildaerah as $data):
						?>

						<option value="<?php echo $data->id_daerah;?>"><?php echo $data->nama_daerah;?></option>
						        	
						<?php endforeach; 
							}
						?>
						</select>
					</div>
                                        
       	             <?php echo form_submit('submit','Tambah Posko') ?>
                 </fieldset>
            </form>
		</div>

	</div>
	</div>
</div>