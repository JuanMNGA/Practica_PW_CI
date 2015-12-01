<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page = "/RedSocial/index.php/Main/show_main_page";
$sec = "10";
?><!DOCTYPE html>
<html lang="es-es">
<head>
	<!--<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">-->
	<meta charset="utf-8">
	<title>Tiny Book</title>
	<link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
      				<a class="navbar-brand" href="#">Tiny Book</a>
    			</div>
    			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    				<ul class="nav navbar-nav navbar-right">
    					<span class="pull-right">
    						<button class="btn btn-default navbar-btn" onClick="location.href='<?php echo base_url('index.php/Main/logout_user');?>'">Cerrar Sesión</button>
    					</span>
    				</ul>
    			</div> <!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
