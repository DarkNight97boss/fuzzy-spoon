<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		<meta name="description" content="¡Disfruta al máximo en nuestra comunidad!" />
		<meta property="og:title" content="Créditos, HC y más... ¡GRATIS!"/>
		<meta property="og:description" content="Disfruta de créditos, Club HC, rares y más ¡¡GRATIS!!"/>

		<link href="galeria/estilos/index.css" rel="stylesheet" type="text/css" />
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
		<link href="galeria/estilos/animate.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	</head>

	<body>
	
	<video autoplay="" loop="" style="visibility: visible; margin: auto; position: fixed; z-index: -1; top: 0%; left: 100%; transform: translate(-100%, 0%); height: auto;"><source src="galeria/videos/strap-hero-poster.mp4" type="video/mp4"><source src="galeria/videos/strap-hero-poster.webm" type="video/webm"><source src="galeria/videos/strap-hero-poster.ogv" type="video/ogv"></video>

		<ul id="slide-out" class="side-nav full">
			<div class="row">
				<div class="col s4 m6" style="margin-left: 42px; margin-top: 10px;">
					<div class="look-nav" style="background-image: url('look.php?figure=<?php echo $funciones->filtro($yo['look']); ?>');"></div>
				</div>
			</div>
			<hr>
			<?php if($pagina == "me") { ?>
			<li style="border-left: 6px solid #26A69A; background-color: rgba(51, 51, 51, 0.16);"><a href="me"><i class="tiny material-icons">face</i> <?php echo $funciones->filtro($yo['username']); ?></a></li>
			<?php }else { ?>
			<li style="border-left: 6px solid #A62626;"><a href="me"><i class="tiny material-icons">face</i> <?php echo $funciones->filtro($yo['username']); ?></a></li>
			<?php } ?>
			
			<?php if($pagina == "ajustes") { ?>
			<li style="border-left: 6px solid #26A69A; background-color: rgba(51, 51, 51, 0.16);"><a href="ajustes"><i class="tiny material-icons">settings</i> Ajustes</a></li>
			<?php }else { ?>
			<li style="border-left: 6px solid #26A634;"><a href="ajustes"><i class="tiny material-icons">settings</i> Ajustes</a></li>
			<?php } ?>
			
			<?php if($pagina == "perfil") { ?>
			<li style="border-left: 6px solid #26A69A; background-color: rgba(51, 51, 51, 0.16);"><a href="#"><i class="tiny material-icons">perm_identity</i> Perfil</a></li>
			<?php }else { ?>
			<li style="border-left: 6px solid #A6A126;"><a href="#"><i class="tiny material-icons">perm_identity</i> Perfil</a></li>
			<?php } ?>
			
			<?php if($pagina == "news") { ?>
			<li style="border-left: 6px solid #26A69A; background-color: rgba(51, 51, 51, 0.16);"><a href="#"><i class="tiny material-icons">insert_invitation</i> news</a></li>
			<?php }else { ?>
			<li style="border-left: 6px solid #A6268E;"><a href="#"><i class="tiny material-icons">insert_invitation</i> news</a></li>
			<?php } ?>
			
			<?php if($pagina == "equipo") { ?>
			<li style="border-left: 6px solid #26A69A; background-color: rgba(51, 51, 51, 0.16);"><a href="equipo"><i class="tiny material-icons">insert_emoticon</i> Equipo</a></li>
			<?php }else { ?>
			<li style="border-left: 6px solid #A66826;"><a href="equipo"><i class="tiny material-icons">insert_emoticon</i> Equipo</a></li>
			<?php } ?>
			
			<li style="background-color: rgba(232, 57, 57, 0.21); border-left: 6px solid #E83939;"><a href="index.php?salir=ok"><i class="tiny material-icons">close</i> Desconectarme</a></li><hr>
			
			<li style="background-color: rgba(38, 166, 154, 0.2);"><a href="#"><i class="tiny material-icons">info_outline</i> <?php echo $funciones->Onlines(users_online); ?> conectad@s</a></li>
		</ul>

		<nav>
			<div class="nav-wrapper white" style="padding-left: 15px; margin-top: 10px; padding-right: 15px;">
				<a href="#" data-activates="slide-out" data-position="bottom" data-delay="50" class="button-collapse show-on-large tooltipped black-text" data-tooltip="Menú" onClick="Materialize.toast('Haz click fuera del menú para cerrarlo', 4000)"><i class="mdi-navigation-menu"></i></a>
				<a href="#" class="brand-logo black-text center"><?php echo $conf->nombre; ?></a>
				<ul class="right hide-on-med-and-down">
					<li class="black-text"><?php echo $funciones->Onlines(users_online); ?> conectados</li>
				</ul>
			</div>
		</nav>

		<script>
		// Initialize collapse button
		$(".button-collapse").sideNav();
		</script>

	</body>

</html>