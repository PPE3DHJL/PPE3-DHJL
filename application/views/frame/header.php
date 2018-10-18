<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8"/>
        <title>Welcome to Troc2Temps</title>

        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" media="screen" href="<?php echo base_url('styles/bootstrap.css');?>" />
        <script src="<?php echo base_url('js/jquery.js');?>"></script>
		<script src="<?php echo base_url('js/bootstrap.js');?>"></script>
		<link rel="stylesheet" href="<?php echo base_url('styles/style.css');?>"/>
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
				<a class="navbar-brand" href="<?php echo base_url();?>">
				 
					<img src="<?php echo base_url('img/core/sandcounter.png'); ?>"  /><b>Troc2Temps</b>
				</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <!-- class="active"> --><a href="<?php echo base_url('demandes');?>"><img title="Demandes" src="<?php echo base_url('/img/core/geo.svg');?>"/><span>Demandes</span></a></li>
                    <li ><a   href="<?php echo base_url('offres');?>"><img title="Offres" src="<?php echo base_url('/img/core/offer.svg');?>"/><span >Offres</span></a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <button type="submit" class="btn btn-default" style="padding :0"><img src="<?php echo base_url('img/core/search_icon.svg'); ?>" /></button>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li id="li_inscription"><a href="<?php echo base_url('signup');?>"><img src="<?php echo base_url();?>/img/core/make.svg"/>inscription</a></li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url();?>/img/core/me.svg"/><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                    <?php if($_COOKIE['token'] && $_COOKIE['user']){?>
                            <li><a href="#"><img src="<?php echo base_url();?>/img/core/me.svg"/>Mon compte</a></li>
							<li><a href="<?php echo base_url('demandes/recherche/mes_demandes');?>">
									<img src="<?php echo base_url();?>/img/core/geo.svg"/>
									<span>Mes demandes</span>
							</a></li>
							<li><a href="<?php echo base_url('offres/rechercher/mes_offres');?>">
									<img src="<?php echo base_url();?>/img/core/offer.svg"/>Mes Offres
								</a></li>
							<li><a id="li_logout" href="#"><img src="<?php echo base_url();?>/img/core/lock.svg"/>Deconnexion</a></li>
                    <?php }else{ ?>
							<li ><a id="li_login" href="#<?php // echo base_url('login');?>" ><img src="<?php echo base_url();?>/img/core/key.svg"/>Authentification</a></li>
                    <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="container">
            <div id="body">
