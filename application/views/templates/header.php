<!DOCTYPE html>
<html>
<head>
	<title><?php echo !empty($title)? $title : 'UrentUs Market Place';  ?> - UrentUs Market Place</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo asset_url("images/favicon.png"); ?>">
	<link href="<?php echo asset_url('css/custom.css'); ?>" rel="stylesheet" type="text/css" media="screen" />	
    <!-- Bootstrap -->
    
    <link href="<?php echo asset_url('jquery-ui/themes/smoothness/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo asset_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo asset_url('css/bootstrap-modal-bs3patch.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo asset_url('css/bootstrap-modal.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo asset_url('css/theme_metro.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo asset_url('css/sticky-footer.css'); ?>" rel="stylesheet">
	<link href="<?php echo asset_url('css/navbar-static-top.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo asset_url('css/layout.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo asset_url('css/style-responsive.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css" media="screen" />	
    <link href="<?php echo asset_url('/css/jquery.dataTables.css'); ?>" rel="stylesheet" type="text/css">
    
	
	
    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php echo asset_url('js/html5shiv.js'); ?>"></script>
      <script type="text/javascript" src="<?php echo asset_url('js/respond.min.js'); ?>"></script>
    <![endif]-->
   
    <script type="text/javascript" src="<?php echo asset_url('/js/jquery-1.10.2.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/js/bootstrap-modalmanager.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/js/bootstrap-modal.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset_url('/js/jquery-ui.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset_url('/js/bootstrap-datepicker.js');?>"></script>
    
    <script type="text/javascript" src="<?php echo asset_url('/js/twitter-bootstrap-hover-dropdown.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo asset_url('/js/jquery.cookie.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo asset_url('/js/Mod.js');?>"></script>
	<script type="text/javascript" src="<?php echo asset_url('/js/typeahead.js');?>"></script>
	<!-- <script type="text/javascript" src="<?php echo asset_url('/js/mobile-menu.js');?>"></script> -->
	<script type="text/javascript" src="<?php echo asset_url('/js/bootstrap-tabdrop.js');?>"></script>
	<script type="text/javascript" src="<?php echo asset_url('/js/jquery.dataTables.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo asset_url('/js/jquery-dateFormat.min.js');?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			 //$('#main-nav').mobileMenu();
		});
		var config = {
		     baseURL: "<?php echo base_url(); ?>",
		     siteURL: "<?php echo site_url(); ?>",
			 csrf_token_name: "<?php echo $this->config->item("csrf_token_name"); ?>",
			 csrf_cookie_name: "<?php echo $this->config->item("csrf_cookie_name"); ?>"
		 };
	</script>
    <!--  <script type="text/javascript" src="<?php echo asset_url('/js/custom.js');?>"></script> -->
    
</head>
<body class="metro" id="top">
	<div class="navbar header navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<div class="header-inner">
					<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar">	</span>
						<span class="icon-bar">	</span>
						<span class="icon-bar">	</span>
					</button>
					
					<a class="navbar-brand visible-sm visible-md visible-lg">UrentUs</a>
					<?php if ($this->session->userdata('loggedin')): ?>
						<a class="navbar-brand visible-xs">C A S T</a>
						<ul class="nav navbar-nav pull-right">						
							<?php 
							//$menus = $this->session->userdata('menus');
							//echo generate_menus($menus); 
							?>
	
							<li class="dropdown user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<!-- <img alt="" src="<?php echo asset_url('images/unknown_person.png'); ?>"> -->
								<i class="icon-user"></i>
								<span class="username"><?php echo $this->session->userdata('fullname'); ?></span>
								<i class="icon-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="<?php echo site_url('/users/logout'); ?>"><i class="icon-key"></i> Log Out</a>
									</li>
								</ul>
							</li>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<div id="navigation">
		<div class="container">
			<ul class="nav navbar-nav pull-left" id="main-nav">
	<?php 
		//$menus = $this->session->userdata('menus');
		//echo generate_menus($menus); 
	?>	
			</ul>
		</div>
	</div>
	
	<div class="clearfix">
	</div>
	
	<div id="wrap">
		<div class="container">
			<?php 
			$errorMessage = $this->session->flashdata('error'); 
			$warnMessage = $this->session->flashdata('warn');
			$successMessage = $this->session->flashdata('success');
			?>
			<?php if (!empty($errorMessage)): ?>
				<div class="alert alert-danger">
					<?php echo $errorMessage; ?>
					<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
				</div>
			<?php endif; ?>
			<?php if (!empty($warnMessage)): ?>
				<div class="alert alert-warning">
					<?php echo $warnMessage; ?>
					<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
				</div>
			<?php endif; ?>
			<?php if (!empty($successMessage)): ?>
				<div class="alert alert-success">
					<?php echo $successMessage; ?>
					<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
				</div>
			<?php endif; ?>
