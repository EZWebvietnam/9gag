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
	<title>ADMINISTRATOR NINHBINHCOOP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="ADMINISTRATOR NINHBINHCOOP">
	<meta name="author" content="GiangBeo">

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
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>Welcome to XXX ADMINISTRATOR</h2>
				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<div class="alert alert-info">
						Please login with your Username and Password.
					</div>
					<?php 
                                        echo $this->load->view($main_content);
                                        ?>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
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
