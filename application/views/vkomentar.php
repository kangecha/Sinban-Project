<!DOCTYPE html>
<html>
    <head>
   		<link href="<?php echo site_url(); ?>assets/css/metro-bootstrap.css" rel="stylesheet">
	    <link href="<?php echo site_url(); ?>assets/css/metro-bootstrap-responsive.css" rel="stylesheet">
	    <link href="<?php echo site_url(); ?>assets/css/iconFont.css" rel="stylesheet">
	    <link href="<?php echo site_url(); ?>assets/css/docs.css" rel="stylesheet">
	    <link href="<?php echo site_url(); ?>assets/js/prettify/prettify.css" rel="stylesheet">

	    <!-- Load JavaScript Libraries -->
	    <script src="<?php echo site_url(); ?>assets/js/jquery/jquery.min.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/jquery/jquery.widget.min.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/jquery/jquery.mousewheel.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/prettify/prettify.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/holder/holder.js"></script>

	    <!-- Metro UI CSS JavaScript plugins -->
	    <script src="<?php echo site_url(); ?>assets/js/metro.min.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/metro/metro-loader.js"></script>

	    <!-- Local JavaScript -->
	    <script src="<?php echo site_url(); ?>assets/js/docs.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/Chart.js"></script>
	   
	    
        <title>.: SINBAN PROJECT :: SISTEM INFORMASI BANJIR KOTA BEKASI :.</title>
    </head>
 <body class="metro">
   <div class="grid">
     <div class="row">
     	<?php echo form_open_multipart(site_url().'maps/komentar');?>
			
                <fieldset>
            	     <legend>BERIKAN INFORMASI</legend>
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
 </body>
</html>