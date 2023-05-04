<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administracion ACP</title>
	<link href="<?php print URL; ?>/admin/css/bootstrap/bootstrap.min.css?<?php print UPDATE; ?>" rel="stylesheet" />
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="<?php print URL; ?>/admin/css/jquery-jvectormap-1.2.2.css?<?php print UPDATE; ?>"/>
	<link href="<?php print URL; ?>/admin/css/style.css?<?php print UPDATE; ?>" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

</head>
<body>

	<header class="top-bar">
		<a class="mobile-nav" href="#"><i class="pe-7s-menu"></i></a>
		<div class="main-logo"><span><?php print Settings('Name'); ?></span></div>
		<?php if(Settings('Maintenance') == 'true') { ?>
		<input type="checkbox" id="s-logo" class="sw" disabled checked/>
		<label class="switch switch--dark switch--header" for="s-logo"></label>
		<?php } if(Settings('Maintenance') == 'false') { ?>
		<input type="checkbox" id="s-logo" class="sw" disabled/>
		<label class="switch switch--dark switch--header" for="s-logo"></label>
		<?php } ?>
		
		<div class="main-search">
			<form method="post" action="users" autocomplete="off">
			<input type="text" placeholder="Buscar Usuario" name="username" id="msearch">
		</form>
			<label for="msearch">
				<i class="pe-7s-search"></i>
			</label>
		</div>
		<ul class="profile">
			<li>
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" onclick="return false;" class="profile__user">
					<figure class="pull-left rounded-image profile__img">
						<img class="media-object" src="<?php print Settings('Avatarimage'); ?>avatarimage?figure=<?php print $user['look']; ?>&action=&direction=2&head_direction=2" alt="user">
					</figure>
					<span class="profile__name">
						<span><?php print $user['username']; ?></span> <i class="pe-7s-angle-down"></i>
					</span>
				</a>
				<ul class="dropdown-menu pull-right">
					<li><a href="<?php print URL; ?>/account/logout"><i class="icon pe-7s-close-circle"></i> Desconectar</a></li>
				</ul>
			</li>
			<?php if($user['rank'] >= 10) { ?>
			<li>
				<a href="<?php print URL; ?>/admin/site">
					<i class="pe-7f-config"></i>
				</a>
			</li>
			<?php } ?>
		</ul>

	</header>

	<div class="wrapper">

		<aside class="sidebar">
			<ul class="main-nav">
				<?php if($pageid == 1) { ?>
				<li class="main-nav--active">
				<?php } else { ?> 
				<li class="main-nav--collapsible">
				<?php } ?>
					<a class="main-nav__link" style="text-decoretion:none;" href="<?php print URL; ?>/admin/">
						<span class="main-nav__icon"><i class="icon pe-7s-home"></i></span>
						Home
					</a>
				</li>
				<li>
				<?php $hks = $bdd->query("SELECT * FROM retrophp_hk WHERE pagename = 'config'"); $hksecu = $hks->fetch(PDO::FETCH_ASSOC); if($user['rank'] >= $hksecu['rank']) { ?>
				<?php if($pageid == 2) { ?>
				<li class="main-nav--active">
				<?php } else { ?> 
				<li class="main-nav--collapsible">
				<?php } ?>
					<a class="main-nav__link" style="text-decoretion:none;" href="<?php print URL; ?>/admin/site">
						<span class="main-nav__icon"><i class="icon pe-7s-tools"></i></span>
						Configuracion
					</a>
					<ul class="main-nav__submenu">
						<li><a href="<?php print URL; ?>/admin/ranks"><i class="icon pe-7s-tools"></i><span>Modificar Rangos</span></a></li>
						<li><a href="<?php print URL; ?>/admin/site/boutique"><i class="icon pe-7s-tools"></i><span>Tienda & Precios</span></a></li>
						<?php if($user['rank'] >= 8) { ?><li><a href="<?php print URL; ?>/admin/site/fansites"><i class="icon pe-7s-tools"></i><span>Sitios de fans</span></a></li><?php } ?>
						
					</ul>
				</li>
				<?php } ?>

				<?php $hks = $bdd->query("SELECT * FROM retrophp_hk WHERE pagename = 'grade'"); $hksecu = $hks->fetch(PDO::FETCH_ASSOC); if($user['rank'] >= $hksecu['rank']) { ?>
				<?php if($pageid == 3) { ?>
				<li class="main-nav--active">
				<?php } else { ?> 
				<li class="main-nav--collapsible">
				<?php } ?>
					<a class="main-nav__link" style="text-decoretion:none;" href="<?php print URL; ?>/admin/staffs">
						<span class="main-nav__icon"><i class="icon pe-7s-star"></i></span>
						Rangos
					</a>
				</li>
				<?php } ?>

				<?php $hks = $bdd->query("SELECT * FROM retrophp_hk WHERE pagename = 'users'"); $hksecu = $hks->fetch(PDO::FETCH_ASSOC); if($user['rank'] >= $hksecu['rank']) { ?>
				<?php if($pageid == 9) { ?>
				<li class="main-nav--active">
				<?php } else { ?> 
				<li class="main-nav--collapsible">
				<?php } ?>
					<a class="main-nav__link" style="text-decoretion:none;" href="<?php print URL; ?>/admin/users">
						<span class="main-nav__icon"><i class="icon pe-7s-shopbag"></i></span>
						Buscar Usuarios
					</a>
				</li>
				<?php } ?>

				<?php $hks = $bdd->query("SELECT * FROM retrophp_hk WHERE pagename = 'bans'"); $hksecu = $hks->fetch(PDO::FETCH_ASSOC); if($user['rank'] >= $hksecu['rank']) { ?>
				<?php if($pageid == 4) { ?>
				<li class="main-nav--active">
				<?php } else { ?> 
				<li class="main-nav--collapsible">
				<?php } ?>
					<a class="main-nav__link" style="text-decoretion:none;" href="<?php print URL; ?>/admin/bans">
						<span class="main-nav__icon"><i class="icon pe-7s-lock"></i></span>
						Gestion De Baneos
					</a>
				</li>
				<?php } ?>

				<?php $hks = $bdd->query("SELECT * FROM retrophp_hk WHERE pagename = 'news'"); $hksecu = $hks->fetch(PDO::FETCH_ASSOC); if($user['rank'] >= $hksecu['rank']) { ?>
				<?php if($pageid == 5) { ?>
				<li class="main-nav--active">
				<?php } else { ?> 
				<li class="main-nav--collapsible">
				<?php } ?>
					<a class="main-nav__link" style="text-decoretion:none;" href="<?php print URL; ?>/admin/new">
						<span class="main-nav__icon"><i class="icon pe-7s-photo-gallery"></i></span>
						Realizar news
					</a>
				</li>
				<?php } ?>

				<?php $hks = $bdd->query("SELECT * FROM retrophp_hk WHERE pagename = 'delete_new'"); $hksecu = $hks->fetch(PDO::FETCH_ASSOC); if($user['rank'] >= $hksecu['rank']) { ?>
				<?php if($pageid == 6) { ?>
				<li class="main-nav--active">
				<?php } else { ?> 
				<li class="main-nav--collapsible">
				<?php } ?>
					<a class="main-nav__link" style="text-decoretion:none;" href="<?php print URL; ?>/admin/delete_new">
						<span class="main-nav__icon"><i class="icon pe-7s-trash"></i></span>
						Eliminar news
					</a>
				</li>
				<?php } ?>

				<?php $hks = $bdd->query("SELECT * FROM retrophp_hk WHERE pagename = 'logs'"); $hksecu = $hks->fetch(PDO::FETCH_ASSOC); if($user['rank'] >= $hksecu['rank']) { ?>
				<?php if($pageid == 7) { ?>
				<li class="main-nav--active">
				<?php } else { ?> 
				<li class="main-nav--collapsible">
				<?php } ?>
					<a class="main-nav__link" style="text-decoretion:none;" href="<?php print URL; ?>/admin/logs_site">
						<span class="main-nav__icon"><i class="icon pe-7s-server"></i></span>
						Historial Del sitio
					</a>
				</li>

				<?php if($pageid == 8) { ?>
				<li class="main-nav--active">
				<?php } else { ?> 
				<li class="main-nav--collapsible">
				<?php } ?>
					<a class="main-nav__link" style="text-decoretion:none;" href="<?php print URL; ?>/admin/logs_hotel">
						<span class="main-nav__icon"><i class="icon pe-7s-menu"></i></span>
						Chat de Comandos
					</a>
				</li>
				<?php } ?>
				
			</ul>
		</aside>
		
		<section class="content">
			<header class="main-header clearfix">
				<h1 class="main-header__title">
					<i class="icon pe-7s-home"></i>
					Administracion ACP
				</h1>
				<ul class="main-header__breadcrumb">
					<li><a style="text-decoretion:none; "><?php print SystemConfig('server_ver'); ?></a></li>
				</ul>
				<div class="main-header__date">
					<i class="icon pe-7s-date"></i>
					<span><?php print date_fr("d M. Y", time()); ?></span>
					<i class="pe-7s-angle-down-circle"></i>
				</div>
			</header>
			
			<div class="main-stats row">
				<div class="main-stats__stat col-lg-3 col-md-12 col-sm-12">
					<h3 class="stat__title">Numeros de Registros</h3>
					<div class="stat__number" id="inscrit"> <?php print $inscrits; ?></div>
					<div class="progress" id="progress-inscrit">
						<div class="progress-bar progress-bar--skyblue" role="progressbar" aria-valuenow="<?php print $inscrits; ?>" aria-valuemin="0" aria-valuemax="1000" style="width: <?php print $inscrits / 50; ?>%;"></div>
					</div>
				</div>
				
				<div class="main-stats__stat col-lg-3 col-md-12 col-sm-12">
					<h3 class="stat__title">Usuarios en Linea</h3>
					<div class="stat__number" id="online"> <?php print $online; ?></div>
					<div class="progress" id="progress-online">
						<div class="progress-bar progress-bar--anzac" role="progressbar" aria-valuenow="<?php print $online; ?>" aria-valuemin="0" aria-valuemax="<?php print SystemConfig('record_connect'); ?>" style="width: <?php print $online; ?>%;"></div>
					</div> 
				</div> 

				<div class="main-stats__stat col-lg-3 col-md-12 col-sm-12">
					<h3 class="stat__title">Número de visitas</h3>
					<div class="stat__number" id="visites"> <?php print $visites; ?></div>
					<div class="progress" id="progress-visites">
						<div class="progress-bar progress-bar--green" role="progressbar" aria-valuenow="<?php print $visites; ?>" aria-valuemin="0" aria-valuemax="500" style="width: <?php print $visites / 50; ?>%;"></div>
					</div>
				</div> 

				<div class="main-stats__stat col-lg-3 col-md-12 col-sm-12">
					<h3 class="stat__title">RECORD DE CONNEXION</h3>
					<div class="stat__number" id="record"> <?php print SystemConfig('record_connect'); ?></div>
					<div class="progress" id="progress-record">
						<div class="progress-bar progress-bar--red" role="progressbar" aria-valuenow="<?php print SystemConfig('record_connect'); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php print SystemConfig('record_connect'); ?>%;"></div>
					</div>
				</div>
			</div>