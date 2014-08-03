<!DOCTYPE html>
<html>
    <head>
   		<link href="<?php echo site_url(); ?>assets/css/metro-bootstrap.css" rel="stylesheet">
	    <link href="<?php echo site_url(); ?>assets/css/metro-bootstrap-responsive.css" rel="stylesheet">
	    <link href="<?php echo site_url(); ?>assets/css/iconFont.css" rel="stylesheet">
	    <link href="<?php echo site_url(); ?>assets/css/docs.css" rel="stylesheet">
	    <link href="<?php echo site_url(); ?>assets/css/style.css" rel="stylesheet">
	    <link href="<?php echo site_url(); ?>assets/js/prettify/prettify.css" rel="stylesheet">

	    <!-- Load JavaScript Libraries -->
	    <script src="<?php echo site_url(); ?>assets/js/jquery/jquery.min.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/jquery/jquery.widget.min.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/jquery/jquery.mousewheel.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/prettify/prettify.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/holder/holder.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/jquery/jquery.dataTables.js"></script>

	    <!-- Metro UI CSS JavaScript plugins -->
	    <script src="<?php echo site_url(); ?>assets/js/metro.min.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/metro/metro-global.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/metro/metro-locale.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/metro/metro-calendar.js"></script>

	    <!-- Local JavaScript -->
	    <script src="<?php echo site_url(); ?>assets/js/docs.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/Chart.js"></script>
	    <script src="<?php echo site_url(); ?>assets/js/vpb_news_scroller.js"></script>
	    
	    
	    
	    
        <title>.: SINBAN PROJECT :: SISTEM INFORMASI BANJIR KOTA BEKASI :.</title>
    </head>
 <body class="metro">
   <div class="grid">
     <div class="row">
         <div class="content" style="box-shadow: 10px 10px 5px #888888;margin:auto 6%">
         	<!-- Navigasi -->
            <nav class="navigation-bar">
			    <nav class="navigation-bar-content">
			        <div class="element">
			            <a class="dropdown-toggle" href="#">SISTEM INFORMASI BANJIR KOTA BEKASI</a>
			            <ul class="dropdown-menu" data-role="dropdown">
			                <li><a href="<?php echo site_url(); ?>maps/lihatDonatur">Info Donatur</a></li>
			                <li><a href="<?php echo site_url(); ?>maps/lihatKorban">Info Korban</a></li>
			                <li><a href="<?php echo site_url(); ?>maps/lihatPosko">Info Posko</a></li>
			                <li><a href="<?php echo site_url(); ?>maps/lihatDaerah">Info Daerah</a></li>
			                <li class="divider"></li>
			                <li><a href="<?php echo site_url(); ?>maps/printData">Print...</a></li>
			                
			                
			            </ul>
			        </div>
			 
			        <span class="element-divider"></span>
			        <a class="element brand" href="<?php echo site_url(); ?>"><center><span class="icon-home"></span></center></a>
			        <a class="element brand" href="<?php echo site_url(); ?>maps/printdata"><center><span class="icon-printer"></span></center></a>
			        <span class="element-divider"></span>
			 	
			        <div class="element place-right">

			            <a class="dropdown-toggle" href="#">
			                <center><span class="icon-cog"></span></center>
			            </a>
			            <ul class="dropdown-menu place-right" data-role="dropdown">
			                <li><a href="<?php echo site_url();?>administrator/admin">Login Admin</a></li>
			                <li class="divider"></li>
			                <li><a href="<?php echo site_url();?>maps/bantuan">Bantuan?</a></li>
			            </ul>
			        </div>
			        
			        <span class="element-divider place-right"></span>

			        
			    </nav>
			</nav>
			<!-- Navigasi -->