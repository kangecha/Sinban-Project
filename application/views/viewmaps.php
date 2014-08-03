            <div class="row">
            	<div class="content" style="margin:auto 0.5%">
            		<a href="<?php echo site_url();?>maps/lihatDaerah">
					    <div class="tile double bg-amber">
						    <div class="tile-content icon">
						        <i class="icon-location-3"></i>
						    </div>
						    <div class="brand bg-black">
						        <span class="label fg-white"><center>DATA DAERAH</center></span>
						    </div>
						</div>
					</a>
					<a href="<?php echo site_url();?>maps/lihatKorban">
						<div class="tile double bg-lightGreen" >
						    <div class="tile-content icon">
						        <i class="icon-accessibility"></i>
						    </div>
						    <div class="brand bg-black">
						        <span class="label fg-white"><center>DATA KORBAN</center></span>
						    </div>
						</div>
					</a>
					<a href="<?php echo site_url();?>maps/lihatPosko">
						<div class="tile double bg-darkIndigo" >
						    <div class="tile-content icon">
						        <i class="icon-cabinet"></i>
						    </div>
						    <div class="brand bg-black">
						        <span class="label fg-white"><center>DATA POSKO</center></span>
						    </div>
						</div>
					</a>
				
					<a href="<?php echo site_url();?>maps/lihatDonatur">
						<div class="tile double bg-violet" >
						    <div class="tile-content icon">
						        <i class="icon-user"></i>
						    </div>
						    <div class="brand bg-black">
						        <span class="label fg-white"><center>DATA DONATUR</center></span>
						    </div>
						</div>
					</a>
					<a href="<?php echo site_url();?>maps/printdata">
						<div class="tile bg-emerald" >
						    <div class="tile-content icon">
						        <i class="icon-printer"></i>
						    </div>
						    <div class="brand bg-black">
						        <span class="label fg-white"><center>PRINT</center></span>
						    </div>
						</div>
					</a>
            	</div>
            </div>

             <div class="content"> <!-- PETA DI SINI -->
    		    <div><?php echo $map['html']; ?></div>
             </div>

             
             <div class="row" ><!-- Daleman 1 -->
             	<div class="content">
	                 	<div class="panel vpb_news_scroller_wrapper" style="height:310px" >
							    <div class="panel-header bg-lightRed fg-white vpb_news_scroller_header">
							        INFORMASI BANJIR
							    </div>
							    <div class="panel-content vpb_news_scroller">
							        <!-- UNTUK INFORMASI BANJIR-->
							        <ul>
							        		<?php 
						             			if(empty($hasilkomen)){
						             				echo "Tidak Ada Komentar";
						             			}else{
						             				foreach ($hasilkomen as $data) {
						             					# code...

						             					echo "<li><b>".$data->nama_pemberi_info." </b> dari ".$data->alamat_pemberi_info." | ".$data->tanggal_info."<br>";
						             					echo $data->informasi_masyarakat."<hr></li>";
						             					
						             				}
						             			}
						             		?>
						             </ul>     
								</div>
								<script>
									$(document).ready(function(){
							  		$(".popup").hide();
							   		
							  		$(".klik").click(function(){
							    			$(".popup").show();
							  			});
							  		$(".close-button").click(function(){
							    			$(".popup").hide();
							  			});
									});
								</script>
								
								<center><button class="bg-red fg-white bg-hover-cyan large klik" align="center"><i class="icon-share-3"></i> BERI INFO</button></center>

								<div class="popup">
									<div class="tampilankomen">
										<a href="#" class="close-button" title="Close">X</a>
										
										<?php echo form_open_multipart(site_url().'maps/komentar');?>
										
							                <fieldset>
							            	     <legend>BERIKAN INFORMASI</legend>
							            	     <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
							                     <label>NAMA LENGKAP</label>
							                     <div class="input-control text" data-role="input-control">
							                 	    <input type="text" placeholder="Masukan Nama Lengkap Anda" name="nama">
							                    	 <button class="btn-clear" tabindex="-1"></button>
							                     </div>

							                     <label>ALAMAT LENGKAP</label>
							                     <div class="input-control text" data-role="input-control">
							                 	    <input type="text" placeholder="Masukan Alamat Lengkap Korban" name="alamat">
							                    	 <button class="btn-clear" tabindex="-1"></button>
							                     </div>

												 <label>INFORMASI YANG DI BERIKAN</label>
							                     <div class="input-control text" data-role="input-control">
							                 	    <input type="text" placeholder="Masukan no yang dapat di hubungi" name="info">
							                    	 <button class="btn-clear" tabindex="-1"></button>
							                     </div>
                   
							       	             <?php echo form_submit('submit','Masukan Informasi') ?>
							                 </fieldset>
							            </form>
									</div>
								</div>
	                	</div>
	            </div>
	         </div>      