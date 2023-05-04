<?php

require_once('core/nucleo.php');
require_once('core/extra_clases/logueo.php');
require_once('core/extra_clases/registro.php');

$Login = new Logueo;
$Register = new Registro;

if ($_GET['salir'] == "ok")
{
    session_destroy();
    echo"<script> document.location.href='index.php';</script>";
}

session_start();

if($_SESSION['username'])
{
	$funciones->Redireccionar("me");
}

if(isset($_POST['username']) && isset($_POST['password']))
{
	$Login->Loguear($_POST['username'], $_POST['password']);
}

if(isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['look']) && isset($_POST['pass']) && isset($_POST['pass2']) && isset($_POST['dia']) && isset($_POST['mes']) && isset($_POST['year']))
{
	$Register->Registrar($_POST['usuario'], $_POST['email'], $_POST['look'], $_POST['pass'], $_POST['pass2'], $_POST['dia'], $_POST['mes'], $_POST['year']);
}

?>

<html>

	<head>
		<title><?php echo $conf->nombre; ?> - Créditos, HC y más... ¡GRATIS!</title>

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

	<body>
	
		<video autoplay="" loop="" style="visibility: visible; margin: auto; position: fixed; z-index: -1; top: 0%; left: 100%; transform: translate(-100%, 0%); height: auto;"><source src="galeria/videos/strap-hero-poster.mp4" type="video/mp4"><source src="galeria/videos/strap-hero-poster.webm" type="video/webm"><source src="galeria/videos/strap-hero-poster.ogv" type="video/ogv"></video>

		<div class="container">

			<nav>
				<div class="nav-wrapper white" style="padding-left: 15px; margin-top: 10px;">
					<a href="#" class="brand-logo black-text"><?php echo $conf->nombre; ?></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#" class="black-text"><?php echo $funciones->Onlines(users_online); ?> conectados</a></li>
					</ul>
				</div>
			</nav>

			<?php
			if(isset($_SESSION['error']))
			{
				echo"<div class='col s12 red white-text error-form' style='padding: 5px; font-size: 18px;'><i class='material-icons tiny'>clear</i> ".$_SESSION['error']."</div>";
				$_SESSION['error'] = null;
			}
			?>

			<?php if($_GET['reg'] == "ok"){ ?>
			<div id="o-r" style="display:none;">
			<?php }else { ?>

				<div id="o-r" class="bounceIn animated">
					<div id="box">
					<div id="box" style="background-color: #DCDCDC; border: none;">
						<center>
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- horizontal -->
							<ins class="adsbygoogle"
							style="display:inline-block;width:728px;height:90px"
							data-ad-client="ca-pub-7757752186208773"
							data-ad-slot="4080929641"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</center>
					</div>
						<h4><b>¡Loguéate!</b></h4>
						<div class="row">
							<form action="" method="post" class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<i class="material-icons prefix">account_circle</i>
										<input id="icon_prefix" type="text" name="username" class="validate">
										<label for="icon_prefix">NOMBRE DE USUARIO</label>
									</div>
									<div class="input-field col s6">
										<i class="material-icons prefix">lock</i>
										<input id="icon_password" type="password" name="password" class="validate">
										<label for="icon_password">CONTRASEÑA</label>
									</div>
								</div>
								<button class="waves-effect waves-light btn" name="loguear" type="submit"><i class="mdi-content-send right"></i>Conectarse</button>
							</form>
						</div>
					</div>

					<div id="box">
						<h4><b>¿Qué es <?php echo $conf->nombre; ?>?</b></h4>
						<div class="row">
							<div class="col s12">
								<img src="galeria/imagenes/cosas.png" style="float: right;"/>
								<?php echo $conf->nombre; ?>, es una Comunidad Virtual, en la que podrás crear tus propias habitaciones, hacer infinitos amigos, divertirte en las mejores fiestas virtuales y millones de cosas más que descubrirás accediendo a nuestra Comunidad. 
								<br><br>
								Recuerda que en <?php echo $conf->nombre; ?>, comenzarás tu aventura con créditos gratis que te ayudarán a poder hacerte ¡El más famoso dentro del Hotel!<br><br>
								<a class="waves-effect waves-light btn-large" href="index.php?reg=ok"><i class="mdi-content-add right"></i>¡REGISTRATE! ES GRATIS</a>
							</div>
						</div>
					</div>

					<?php } ?>

				</div>

				<?php if($_GET['reg'] == "ok"){ ?>

				<div id="box" class="flip animated">
					<h4><b>Regístrate aora <i class="material-icons prefix">mood</i></b></h4>
					<div class="row">
						<form action="" method="post">
							<div class="input-field col s6">
								<i class="material-icons prefix">account_circle</i>
								<input id="icon_usuario" name="usuario" type="text" class="validate">
								<label for="icon_usuario">NOMBRE DE USUARIO</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">local_post_office</i>
								<input id="icon_email" name="email" type="text" class="validate">
								<label for="icon_email">E-MAIL</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">lock</i>
								<input id="icon_pass" name="pass" type="password" class="validate">
								<label for="icon_pass">CONTRASEÑA</label>
							</div>

							<div class="input-field col s6">
								<i class="material-icons prefix">lock</i>
								<input id="icon_pass2" name="pass2" type="password" class="validate">
								<label for="icon_pass2">REPTITE LA CONTRASEÑA</label>
							</div>

							<center><i class="material-icons prefix">cake</i> <b>FECHA DE NACIMIENTO</b></center>

							<div class="input-field col s12 m4 14">
								<select class="browser-default" name="dia">
									<option value="" disabled selected>Día</option>
									<?php for($i=1; $i<32; $i++){?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="input-field col s12 m4 14">
								<select class="browser-default" name="mes">
									<option value="" disabled selected>Mes</option>
									<option value="1" >Enero</option><option value="2" >Febrero</option><option value="3" >Marzo</option><option value="4" >Abril</option><option value="5" >Mayo</option><option value="6" >Junio</option><option value="7" >Julio</option><option value="8" >Agosto</option><option value="9" >Septiembre</option><option value="10" >Octubre</option><option value="11" >Noviembre</option><option value="12" >Diciembre</option>
								</select>
							</div>

							<div class="input-field col s12 m4 14">
								<select class="browser-default" name="year">
									<option value="" disabled selected>Año</option>
									<?php for($i=1990; $i<2011; $i++){?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select><br>
							</div>
							
							<center><i class="material-icons prefix">accessibility</i> <b>ELIGE VESTIMENTA</b></center><br>
							
					<table class="centered">
						<thead style="border: 0;">
							<tr>
								<th>
									<input class="with-gap" name="look" type="radio" id="look1" value="<?php echo $conf->look1; ?>" checked />
										<label for="look1">
											<div class="look-r" style="background-image: url('http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $conf->look1; ?>&size=b&direction=4&head_direction=3&action=wlk&gesture=sml&size=s');"></div>
										</label>
								</th>
								
								<th>
									<input class="with-gap" name="look" type="radio" id="look2" value="<?php echo $conf->look2; ?>" />
									<label for="look2">
										<div class="look-r" style="background-image: url('http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $conf->look2; ?>&size=b&direction=4&head_direction=3&action=wlk&gesture=sml&size=s');"></div>
									</label>
								</th>
								
								<th>
									<input class="with-gap" name="look" type="radio" id="look3" value="<?php echo $conf->look3; ?>" />
									<label for="look3">
										<div class="look-r" style="background-image: url('http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $conf->look3; ?>&size=b&direction=4&head_direction=3&action=wlk&gesture=sml&size=s');"></div>
									</label>
								</th>
								
								<th>
									<input class="with-gap" name="look" type="radio" id="look4" value="<?php echo $conf->look4; ?>"/>
									<label for="look4">
										<div class="look-r" style="background-image: url('http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $conf->look4; ?>&size=b&direction=4&head_direction=3&action=wlk&gesture=sml&size=s');"></div>
									</label>
								</th>
							</tr>
						</thead>
					</table>
							
							<center><button class="waves-effect waves-light btn-large" name="registrarse" type="submit" style="margin-top: 11%;"><i class="material-icons prefix right">forward</i>¡ESTOY LISTO! A JUGAR</button><br>
							<a style="font-size: 16px;" href="index.php">No quiero registrarme aora :(</a></center>
						</form>
					</div>
				</div>

				<?php } ?>

				<div id="box">
					<h4><b>ÚLTIMOS REGISTRADOS</b></h4>
	
					<div class="row">
					
					<?php $users = mysql_query("SELECT username,look,motto,account_created FROM users ORDER BY id DESC LIMIT 4");
					while ($userd = mysql_fetch_array($users)) { ?>
					
						<div class="col s6">
							<div class="collection" style="padding-top: 14px; padding-left: 11px;">
								<div class="look" style="background-image: url('http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $funciones->filtro($userd['look']); ?>&size=b&direction=4&head_direction=3&action=wlk&gesture=sml&size=s');"></div>
								<?php echo $funciones->filtro($userd['username']); ?><br>
								<i><?php echo $funciones->filtro($userd['motto']); ?></i><br>
								Registrado: <?php echo $funciones->Registrado_hace($funciones->filtro($userd['account_created'])); ?>
							</div>
						</div>
						
						<?php } ?>
						
					</div>
				</div>

			</div>
		</div>

		<?php include('menus/footer.php'); ?>


		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>

		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
		<script type="text/javascript">
		window.cookieconsent_options = {"message":"<?php echo $conf->nombre; ?> utiliza cookies propias y de terceros para ofrecer un mejor servicio y mostrar publicidad acorde con tus preferencias . Si utilizas nuestra web consideramos que aceptas su uso.","dismiss":"Acepto","learnMore":"Leer más","link":"<?php echo $conf->link; ?>/politica","theme":"light-top"};
		</script>

		<script type="text/javascript" src="//s3.amazonaws.com/cc.silktide.com/cookieconsent.latest.min.js"></script>
		<!-- End Cookie Consent plugin -->

	</body>

</html>