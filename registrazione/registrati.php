<?php
/* #################################################################### \
||                                                                     ||
|| HubixCMS - La distribuzione di questo CMS è severamente proibita    *#
|| # Copyright (C) 2016 JAlf (Giovanni aka giovanni256)                *#
||																	   *#
||																	   *#
|| Questo script è stato realizzato in esclusiva per Hubix Hotel.      *#
||                                                                     ||
\ ################################################################### */
ob_start();
	require_once '../inc/core.php';
	$user->logged('no');
?>

<html>

	<head>
		<title>Hubix - Registrazione</title>

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
	</head>

	<body style="background: url(habbo15_view.png); background-repeat: no-repeat; background-attachment: fixed;">
	<div class="container">

			<nav>
				<div class="nav-wrapper white" style="padding-left: 15px; margin-top: 10px;">
					<a href="../home.php" class="brand-logo red-text<br>Hubix Hotel</a>
					<ul class="right hide-on-med-and-down">
						<li><a class="black-text"><?php echo $user->GetOns(); ?> utenti online</a></li>
					</ul>
				</div>
			</nav>
	
	<div id="box" class="flip animated">
					<h4><b>Registrati subito! <i class="material-icons prefix">mood</i></b></h4>
					<div class="row">
						<form action="<?php echo PATH; ?>/register_submit.php" method="post">
							<div class="input-field col s6">
								<i class="material-icons prefix">account_circle</i>
								<input id="icon_usuario" name="reg.username" type="text" class="validate">
								<label for="icon_usuario">NOME UTENTE</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">local_post_office</i>
								<input id="icon_email" name="reg.mail" type="text" class="validate">
								<label for="icon_email">E-MAIL</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">lock</i>
								<input id="icon_pass" name="reg.password" type="password" class="validate">
								<label for="icon_pass">PASSWORD</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">lock</i>
								<input id="icon_pass2" name="reg.password2" type="password" class="validate">
								<label for="icon_pass2">RIPETI LA PASSWORD</label>
							</div>
							<center><button class="waves-effect waves-light btn-large" name="registrarse" type="submit" id="input_button" style="margin-top: 11%;"><i class="material-icons prefix right">forward</i>Registrami!</button><br>
						</form>
					</div>
				</div>
				
				<?php include('menus/footer.php'); ?>

</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
		<script type="text/javascript">
		window.cookieconsent_options = {"message":"Hubix Hotel utiliza cookies propias y de terceros para ofrecer un mejor servicio y mostrar publicidad acorde con tus preferencias . Si utilizas nuestra web consideramos que aceptas su uso.","dismiss":"Acepto","learnMore":"Leer más","link":"<?php echo $conf->link; ?>/politica","theme":"light-top"};
		</script>

		<script type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>
		<!-- End Cookie Consent plugin -->

	</body>

</html>