<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet"  href="<?php  echo site_url('styles/bootstrap.css');?>">
	<link rel="stylesheet"  href="<?php  echo site_url('styles/style.css');?>">
	<script src="<?php  echo site_url('js/jquery.js');?>"></script>
	<script src="<?php  echo site_url('js/bootstrap.js');?>"></script>
	
</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php  echo site_url('');?>">TrocTemps</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li><a href="<?php  echo site_url('offres');?>">Offres</a></li>
			<li><a href="<?php  echo site_url('Services');?>">Service</a></li>
		</ul>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" name class="form-control" placeholder="Search">
			</div>
			<button  class="btn btn-default">Submit</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
		<?php if(!isset($_COOKIE['token'])){ ?>
		<li><a  href="<?php  echo site_url('login');?>">Connexion</a></li>
			<li><a  href="<?php  echo site_url('inscription');?>">Inscription</a></li>
		<?php } else{ ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					Mon compte <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<!-- <li><a href="#">Action</a></li> -->
					<li><a  href="<?php  echo site_url('users');?>">Mon compte</a></li>
					<li><a  href="<?php  echo site_url('offres');?>">Mes offres</a></li>
					<li id="disconnect">Deconnexion</li>
				</ul>
		</li><?php } ?>
		</ul>
	</div><!-- /.navbar-collapse -->
</nav>

<div id="container">
	<div id="body">
		 
