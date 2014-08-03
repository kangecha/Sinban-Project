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
		                <li class="active"><a href="<?php echo site_url();?>administrator/tambahkorban">Masukan Data Korban</a></li>
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
		
			<?php echo form_open_multipart(site_url().'administrator/tambahKorban');?>
			
                <fieldset>
            	     <legend>TAMBAH DATA POSKO</legend>
                     <label>NAMA LENGKAP KORBAN</label>
                     <div class="input-control text" data-role="input-control">
                 	    <input type="text" placeholder="Masukan Nama Lengkap Korban" name="nama_lengkap">
                    	 <button class="btn-clear" tabindex="-1"></button>
                     </div>

                     <label>ALAMAT LENGKAP</label>
                     <div class="input-control text" data-role="input-control">
                 	    <input type="text" placeholder="Masukan Alamat Lengkap Korban" name="alamat_korban">
                    	 <button class="btn-clear" tabindex="-1"></button>
                     </div>

					 <label>NO YANG DAPAT DI HUBUNGI</label>
                     <div class="input-control text" data-role="input-control">
                 	    <input type="text" placeholder="Masukan no yang dapat di hubungi" name="no_hp">
                    	 <button class="btn-clear" tabindex="-1"></button>
                     </div>

                     <label>UPLOAD FOTO KORBAN</label>
                     <div class="input-control file">
					    <input type="file" name="foto"/>
					    <button class="btn-file"></button>
					 </div>

                     <label>TEMPAT POSKO</label>
                                    
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
                                        
       	             <?php echo form_submit('submit','Tambah Data Korban') ?>
                 </fieldset>
            </form>
		

	</div>
	</div>
</div>