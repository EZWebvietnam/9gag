<!DOCTYPE html>

<html lang="en">

<head>

	<!--

		Charisma v1.0.0



		Copyright 2012 Muhammad Usman

		Licensed under the Apache License v2.0

		http://www.apache.org/licenses/LICENSE-2.0



		http://usman.it

		http://twitter.com/halalit_usman

	-->

	<meta charset="utf-8">

	<title>ADMINISTRATOR XXX</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">

	<meta name="author" content="Muhammad Usman">

     



	<!-- The styles -->

	<link id="bs-css" href="<?php echo base_url();?>template/admin_ninhbinhcoop/css/bootstrap-cerulean.css" rel="stylesheet">

	<style type="text/css">

	  body {

		padding-bottom: 40px;

	  }

	  .sidebar-nav {

		padding: 9px 0;

	  }

	</style>

	<link href="<?php echo base_url();?>template/admin_ninhbinhcoop/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="<?php echo base_url();?>template/admin_ninhbinhcoop/css/charisma-app.css" rel="stylesheet">

	<link href="<?php echo base_url();?>template/admin_ninhbinhcoop/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/fullcalendar.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/fullcalendar.print.css' rel='stylesheet'  media='print'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/chosen.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/uniform.default.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/colorbox.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/jquery.cleditor.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/jquery.noty.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/noty_theme_default.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/elfinder.min.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/elfinder.theme.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/jquery.iphone.toggle.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/opa-icons.css' rel='stylesheet'>

	<link href='<?php echo base_url();?>template/admin_ninhbinhcoop/css/uploadify.css' rel='stylesheet'>



	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->

	<!--[if lt IE 9]>

	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

	<![endif]-->



	<!-- The fav icon -->

	<link rel="shortcut icon" href="<?php echo base_url();?>template/admin_ninhbinhcoop/img/favicon.ico">

		

</head>



<body>

		<!-- topbar starts -->

	<div class="navbar">

		<div class="navbar-inner">

			<div class="container-fluid">

				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

				</a>

				<a class="brand" href=""> <img alt="" src="<?php echo base_url();?>template/admin_ninhbinhcoop/img/logo20.png" /> <span>DCBLAND</span></a>

				

				<!-- theme selector starts -->

				<div class="btn-group pull-right theme-container" >

					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">

						<i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>

						<span class="caret"></span>

					</a>

					<ul class="dropdown-menu" id="themes">

						<li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>

						<li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>

						<li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>

						<li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>

						<li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>

						<li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>

						<li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>

						<li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>

						<li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>

					</ul>

				</div>

				<!-- theme selector ends -->

				

				<!-- user dropdown starts -->

				<div class="btn-group pull-right" >

					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">

						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $this->session->userdata['username']?></span>

						<span class="caret"></span>

					</a>

					<ul class="dropdown-menu">

						<li><a href="<?php echo base_url();?>admin/user/setting">Profile</a></li>

						<li class="divider"></li>

						<li><a href="<?php echo base_url();?>admin/index/logout">Logout</a></li>

					</ul>

				</div>

				<!-- user dropdown ends -->

				

				<div class="top-nav nav-collapse">

					<ul class="nav">

						<li><a href="#">Visit Site</a></li>

						<li>

							<form class="navbar-search pull-left">

								<input placeholder="Search" class="search-query span2" name="query" type="text">

							</form>

						</li>

					</ul>

				</div><!--/.nav-collapse -->

			</div>

		</div>

	</div>

	<!-- topbar ends -->

		<div class="container-fluid">

		<div class="row-fluid">

				

			<!-- left menu starts -->

			<div class="span2 main-menu-span">

				<div class="well nav-collapse sidebar-nav">

					<ul class="nav nav-tabs nav-stacked main-menu">

						<li class="nav-header hidden-tablet">Main</li>

						<li><a class="ajax-link" href="<?php echo base_url(); ?>admin/user/listuser"><i class="icon-user"></i><span class="hidden-tablet">Thanh vien</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/admincatediscovery"><i class="icon-info-sign"></i><span class="hidden-tablet">Danh muc Kham Pha</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/admincateproject"><i class="icon-plane"></i><span class="hidden-tablet">Danh muc Du an</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/admincateproperty"><i class="icon-th-large"></i><span class="hidden-tablet">Danh muc tai san</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/admincatenew"><i class="icon-th-list"></i><span class="hidden-tablet">Danh muc tin tuc</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/admindiscovery"><i class="icon-list-alt"></i><span class="hidden-tablet">Kham pha</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/adminproperty"><i class="icon-list-alt"></i><span class="hidden-tablet">Tai san</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/adminproject"><i class="icon-list-alt"></i><span class="hidden-tablet">Du an</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/adminnew"><i class="icon-list-alt"></i><span class="hidden-tablet">Tin tuc</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/adminbusiness"><i class="icon-list-alt"></i><span class="hidden-tablet">Doanh nghiep</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/adminnhadep"><i class="icon-list-alt"></i><span class="hidden-tablet">Nha dep</span></a></li>

                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/adminadv"><i class="icon-list-alt"></i><span class="hidden-tablet">Quang cao</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/adminemailsubcrise"><i class="icon-list-alt"></i><span class="hidden-tablet">Email nhan tin</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/admincontact"><i class="icon-list-alt"></i><span class="hidden-tablet">Lien he</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/adminthamdinh"><i class="icon-list-alt"></i><span class="hidden-tablet">Tham dinh</span></a></li>
                            <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/adminorder"><i class="icon-list-alt"></i><span class="hidden-tablet">Hoa don</span></a></li>

					</ul>

					

				</div><!--/.well -->

			</div><!--/span-->

			<!-- left menu ends -->

			

			<noscript>

				<div class="alert alert-block span10">

					<h4 class="alert-heading">Warning!</h4>

					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>

				</div>

			</noscript>

			

			<div id="content" class="span10">

			<!-- content starts -->

			



			<div>

				<ul class="breadcrumb">

					<li>

						<a href="#">Home</a> <span class="divider">/</span>

					</li>

					<li>

						<a href="#">Tables</a>

					</li>

				</ul>

			</div>

			

			<?php echo $this->load->view($main_content);?>



	

			

			

			

			

    

					<!-- content ends -->

			</div><!--/#content.span10-->

				</div><!--/fluid-row-->

				

		<hr>



		



		<footer>

    <p class="pull-left">&copy; <a href="http://www.facebook.com/ezwebvietnam" target="_blank">EZWEBVIETNAM</a> 2013</p>

    <p class="pull-right">Powered by: <a href="http://www.facebook.com/ezwebvietnam">EZWEBVIETNAM</a></p>

</footer>

		

	</div><!--/.fluid-container-->



	<!-- external javascript

	================================================== -->

	<!-- Placed at the end of the document so the pages load faster -->



	<!-- jQuery -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery-1.7.2.min.js"></script>

	<!-- jQuery UI -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery-ui-1.8.21.custom.min.js"></script>

	<!-- transition / effect library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-transition.js"></script>

	<!-- alert enhancer library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-alert.js"></script>

	<!-- modal / dialog library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-modal.js"></script>

	<!-- custom dropdown library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-dropdown.js"></script>

	<!-- scrolspy library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-scrollspy.js"></script>

	<!-- library for creating tabs -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-tab.js"></script>

	<!-- library for advanced tooltip -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-tooltip.js"></script>

	<!-- popover effect library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-popover.js"></script>

	<!-- button enhancer library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-button.js"></script>

	<!-- accordion library (optional, not used in demo) -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-collapse.js"></script>

	<!-- carousel slideshow library (optional, not used in demo) -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-carousel.js"></script>

	<!-- autocomplete library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-typeahead.js"></script>

	<!-- tour library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/bootstrap-tour.js"></script>

	<!-- library for cookie management -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.cookie.js"></script>

	<!-- calander plugin -->

	<script src='<?php echo base_url();?>template/admin_ninhbinhcoop/js/fullcalendar.min.js'></script>

	<!-- data table plugin -->

	<script src='<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.dataTables.min.js'></script>



	<!-- chart libraries start -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/excanvas.js"></script>

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.flot.min.js"></script>

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.flot.pie.min.js"></script>

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.flot.stack.js"></script>

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.flot.resize.min.js"></script>

	<!-- chart libraries end -->



	<!-- select or dropdown enhancer -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.chosen.min.js"></script>

	<!-- checkbox, radio, and file input styler -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.uniform.min.js"></script>

	<!-- plugin for gallery image view -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.colorbox.min.js"></script>

	<!-- rich text editor library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.cleditor.min.js"></script>

	<!-- notification plugin -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.noty.js"></script>

	<!-- file manager library -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.elfinder.min.js"></script>

	<!-- star rating plugin -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.raty.min.js"></script>

	<!-- for iOS style toggle switch -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.iphone.toggle.js"></script>

	<!-- autogrowing textarea plugin -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.autogrow-textarea.js"></script>

	<!-- multiple file upload plugin -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.uploadify-3.1.min.js"></script>

	<!-- history.js for cross-browser state change on ajax -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/jquery.history.js"></script>

	<!-- application script for Charisma demo -->

	<script src="<?php echo base_url();?>template/admin_ninhbinhcoop/js/charisma.js"></script>

	

		

</body>

</html>

