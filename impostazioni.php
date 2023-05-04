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
	require_once 'inc/core.php';
	$user->logged('yes');
	$page = "Impostazioni";
	$tab  = "2";
	$myusername = $user->Get('username');
	$mylook = $user->Get('look');
	$mymotto = $user->Get('motto');
	$mycoins = $user->Get('credits');
	$myduckets = $user->Get('activity_points');
	$mydiamonds = $user->Get('vip_points');
	echo $row['username'];
	require_once 'extra/header.php';
	
	require_once 'inc/core.php';
	$user->logged('yes');
	$tab  = "8";
	if($_GET['tab'] == "2"){
		$pagenum = "2";
		$pn = "La mia mail";
		$png = "Cambia la tua email";
	}
	elseif($_GET['tab'] == "3"){
		$pagenum = "3";
		$pn = "La mia password";
		$png = "Cambia password";
	}elseif($_GET['tab'] == "4"){
		$pagenum = "4";
		$pg = "Vinculaci&oacute;n";
		$png = "Cambia portada";
	}else{
		$pagenum = "1";
		$pn = "Mi Perfil";
		$png = "Cambiar tu perfil";
	}
	$page = $png;
	
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	if($pagenum == "2"){
		if(isset($_POST['save'])){
			$emaila = $user->filtertext($_POST['emaila']);
			$emailn = $user->filtertext($_POST['emailn']);
			$email_check = preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $emailn);
			if(empty($emaila) || empty($emailn)){
				$_SESSION['ERROR_RETURN'] = 'Riempi tutti i campi';
				header("LOCATION: ". PATH ."/impostazioni.php?tab=2&return");
			}elseif($emaila !== $user->Get('mail')){
				$_SESSION['ERROR_RETURN'] = 'La tua email non deve essere uguale a quella attuale';
				header("LOCATION: ". PATH ."/impostazioni.php?tab=2&return");
			}elseif($user->ComprobateExist($emailn)){
				$_SESSION['ERROR_RETURN'] = 'Questa email è già in uso';
				header("LOCATION: ". PATH ."/impostazioni.php?tab=2&return");
			}elseif($email_check !== 1){
				$_SESSION['ERROR_RETURN'] = 'Inserisci un indirizzo email valido';
				header("LOCATION: ". PATH ."/impostazioni.php?tab=2&return");
			}else{
				$ex = $db->query("UPDATE users SET mail = '{$emailn}' WHERE id = '{$user->Get('id')}' LIMIT 1");													
				$_SESSION['GOOD_RETURN'] = 'Aggiornamento eseguito!';
				header("LOCATION: ". PATH ."/impostazioni.php?tab=2&return");
			}
		}
	}
	
if($pagenum == "4"){
		if(isset($_POST['portada'])){
			$query = $db->query("UPDATE users SET portada = '{$user->filtertext($_POST['portada'])}' WHERE username = '{$user->Get('username')}' LIMIT 1");
			$_SESSION['ERROR_RETURN'] = 'Tu portada ha sido actualizada';
			header("LOCATION: ". PATH ."/impostazioni.php?tab=4&return");
		}
	}
	
	if($pagenum == "3"){
		if(isset($_POST['save'])){
			$pp = $user->filtertext($_POST['ppassword']);
			$pnp = $user->filtertext($_POST['pnpass']);
			$prp = $user->filtertext($_POST['pnrp']);
			$orpassword = $user->HoloHash($pp, $user->Get('username'));
			$newpassword = $user->HoloHash($pnp, $user->Get('username'));
			if($orpassword !== $user->Get('password')){
			$_SESSION['ERROR_RETURN'] = 'La tua password attuale non coincide';
			header("LOCATION: ". PATH ."/impostazioni.php?tab=3&return");
				}else{
					if(strlen($pnp) < 6 || strlen($pnp) > 32){
					
							$_SESSION['ERROR_RETURN'] = 'Inserisci una password valida';
							header("LOCATION: ". PATH ."/impostazioni.php?tab=3&return");
					}else{
							if($pnp !== $prp){
					
							$_SESSION['ERROR_RETURN'] = 'Le password non sono uguali';
							header("LOCATION: ". PATH ."/impostazioni.php?tab=3&return");
						
							}else{
							$ex = $db->query("UPDATE users SET password = '{$newpassword}'
																WHERE id = '{$user->Get('id')}' LIMIT 1");
							$_SESSION['password'] = $newpassword;
							$_SESSION['GOOD_RETURN'] = 'Aggiornamento eseguito!';
							header("LOCATION: ". PATH ."/impostazioni.php?tab=3&return");
							}
						}
				
					}
				}
	}
	if($pagenum == "1"){
		if(isset($_POST['save'])){
			$m = $user->filtertext($_POST['motto']);
			$fr = $user->filtertext($_POST['friendRequestsAllowed']);
			if($fr){
				$fr = "0";
			}else{
				$fr = "1";
			}
			$so = $user->filtertext($_POST['showOnlineStatus']);
			if($so == "0"){
				$so = "0";
			}else{
				$so = "1";
			}
			$ff = $user->filtertext($_POST['followFriendMode']);
			if($ff == "1"){
				$ff = "0";
			}else{
				$ff = "1";
			}
			$ex = $db->query("UPDATE users
								SET block_newfriends = '{$fr}',
								motto = '{$m}',
								hide_online = '{$so}',
								hide_inroom = '{$ff}'
									WHERE id = '{$user->Get('id')}' LIMIT 1");
			$_SESSION['GOOD_RETURN'] = 'Aggiornamento eseguito!';
			header("LOCATION: ". PATH ."/impostazioni.php?tab=1&return");
		}
		

	}
	
	
	
	?>

<body style="font: 13px 'open sans', sans-serif;    background: url();    text-shadow: 0 .02rem .1rem rgba(0,0,0,.1);">
<?php include("extra/menu.php"); ?>
<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="panel panel-default" data-open="false">
<div class="panel-heading panel-collapse-trigger">
<h4 class="panel-title">Impostazioni</h4>
</div>
<div class="panel-body list-group">
<ul class="list-group list-group-menu">


<li class="list-group-item"><a class="link-text-color" href="impostazioni.php">Missione</a></li>
<li class="list-group-item"><a class="link-text-color" href="/impostazioni.php?tab=3">Cambia password</a></li>
<li class="list-group-item"><a class="link-text-color" href="impostazioni.php?tab=4">Immagine di sfondo</a></li>


</ul>
</div>
</div>
</div>
				<?php if($pagenum == "3"){ ?>

<div class="col-sm-9">
<div class="panel panel-default paper-shadow" data-z="0.5">
<div class="panel-heading">
<h4 class="text-headline">Cambia password</h4>
</div>
<div class="panel-body">

			<form action="<?php echo PATH; ?>/impostazioni.php?save=true&tab=3" method="post" id="profileForm">
							<h3>Password attuale:</h3>

<div class="form-control-material">
<input type="password" class="form-control" id="exampleInputLastName" value="" name="ppassword" placeholder="Password attuale">
<label for="exampleInputLastName">Password attuale</label>
</div>
<h3>Nuova Password:</h3>
<div class="form-control-material">
<input type="password" class="form-control" id="exampleInputLastName" value="" name="pnpass" placeholder="Nuova Password">
<label for="exampleInputLastName">Nuova Password</label>
</div>
<h3>Reinserisci la nuova password:</h3>
<div class="form-control-material">
<input type="password" class="form-control" id="exampleInputLastName" value="" name="pnrp" placeholder="Reinserisci la nuova password">
<label for="exampleInputLastName">Reinserisci la nuova password</label>
</div>


<br>
<div class="form-group margin-none">
<div class="col-md-offset-2 col-md-10">
<button type="submit" value="Aggiorna" name="save" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Aggiorna</button>
</div>
</div>
						</form>

</div>
</div>




<div style="width: 100%; height:5px;"></div>
<div style="width: 100%; height:auto; overflow:hidden; padding:5px 0px 5px 7px" id="avaliar_news">
</div>
</div>
	<?php }elseif($pagenum == "4"){ ?>
<div class="col-sm-9">
<div class="panel panel-default paper-shadow" data-z="0.5">
<div class="panel-heading">
<h4 class="text-headline">Configurazione</h4>
</div>
<div class="panel-body">

<h3>Profilo</h3>
			<form action="<?php echo PATH; ?>/impostazioni.php?save=true&tab=4" method="post" id="profileForm">

<div class="form-control-material">
<input type="text" class="form-control used" id="inputPassword3" value="<?php echo $user->Get('portada'); ?>" name="portada" placeholder="portada">
<label for="inputPassword3">Immagine del Profilo</label>
</div>

<br>
<div class="form-group margin-none">
<div class="col-md-offset-2 col-md-10">
<button type="submit" value="Salva" name="save" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Salva</button>
</div>
</div>
						</form>

</div>
</div>




<div style="width: 100%; height:5px;"></div>
<div style="width: 100%; height:auto; overflow:hidden; padding:5px 0px 5px 7px" id="avaliar_news">
</div>
</div>
				<?php }else{ ?>




<div class="col-sm-9">
<div class="panel panel-default paper-shadow" data-z="0.5">
<div class="panel-heading">
<h4 class="text-headline">Configurazione</h4>
</div>
<div class="panel-body">

<h3>Motto</h3>
			<form action="<?php echo PATH; ?>/impostazioni.php?save=true&tab=1" method="post" id="profileForm">

<div class="form-control-material">
<input type="text" class="form-control used" id="inputPassword3" value="<?php echo $user->Get('motto'); ?>" name="motto" placeholder="Motto">
<label for="inputPassword3">Motto</label>
</div>
<?php
							if($user->Get('block_newfriends') == "1"){ $c1 = ""; }else{ $c1 = ' checked="checked"'; }
							?>
							<h3>Richieste di amicizia</h3>
							<p>
							<label><input type="checkbox" name="friendRequestsAllowed"<?php echo $c1; ?> value="true"/>
							Attivato</label>
							</p>

							<?php
								if($user->Get('hide_online') == "1"){ $c2 = ' checked="checked"'; $c2_ = ""; }else{ $c2_ = ' checked="checked"'; $c2 = ""; }
							?>
							<h3>Status online</h3>
							<p>
							Chi può vedere se sei online:<br />
							<label>
							<input type="radio" name="showOnlineStatus" value="1"<?php echo $c2; ?>/>Nessuno</label>
							<input type="radio" name="showOnlineStatus" value="0"<?php echo $c2_; ?>/>Tutti</label>
							</p>

							<h3>Chi può seguirti</h3>
							<p>
							Chi può seguirti nella stanza in cui ti trovi:<br />
							<?php
								if($user->Get('hide_inroom') == "1"){ $c3 = ' checked="checked"'; $c3_ = ""; }else{ $c3_ = ' checked="checked"'; $c3 = ""; }
							?>
							<label><input type="radio" name="followFriendMode" value="0" <?php echo $c3; ?>/>Nessuno</label>
							<label><input type="radio" name="followFriendMode" value="1" <?php echo $c3_; ?> />Miei amici</label>
							</p>

<br>
<div class="form-group margin-none">
<div class="col-md-offset-2 col-md-10">
<button type="submit" value="Salva" name="save" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Salva</button>
</div>
</div>
						</form>

</div>
</div>
	<?php } ?>




<div style="width: 100%; height:5px;"></div>
<div style="width: 100%; height:auto; overflow:hidden; padding:5px 0px 5px 7px" id="avaliar_news">
</div>
</div>
</div>

</div>



<style type='text/css'>.fb_iframe_widget,.fb_iframe_widget span,.fb_iframe_widget iframe[style]{width:100%!important;}.box-avatar2>img{margin-left:-15px;margin-top:-30px;border-radius:100px;-webkit-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-moz-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-ms-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-o-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);transition:all .8s cubic-bezier(.190,1.000,.220,1.000)}.box-avatar2:hover>img{margin-top:-20px;-webkit-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-moz-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-ms-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-o-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);transition:all .8s cubic-bezier(.190,1.000,.220,1.000)}.eita{margin-top:50px}.fuck-adblock{margin:50px 0 0}.home>li>a:hover,.home>li>a:focus{text-decoretion:none;color:#fff;background-color:#000}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{background-image:none;filter:none;background-color:#4c5566;color:#fff}.avatar img{border-radius:500px;background-color:#fff;margin-top:-31px;margin-left:-18px;}.huge{font-size:35px;font-weight:100}.home>li>a:hover,.home>li>a:focus{text-decoretion:none;color:#fff;background-color:#000}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{background-image:none;filter:none;background-color:#4c5566;color:#fff}#colorfill{width:135px;height:35px}.box-avatar{position:relative;text-align:center;width:130px;height:130px;border-radius:100px;background-color:#eee;overflow:hidden}.box-avatar>img{max-width:100%;vertical-align:middle;border-radius:100px;-webkit-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-moz-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-ms-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-o-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);transition:all .8s cubic-bezier(.190,1.000,.220,1.000)}.box-avatar:hover>img{margin-top:-20px;-webkit-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-moz-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-ms-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-o-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);transition:all .8s cubic-bezier(.190,1.000,.220,1.000)}.nav>li>a .avatar{width:32px;height:32px;overflow:hidden;border:1px solid #4FB5D0;}.box-avatar2.no{position:relative;text-align:center;width:35px;height:35px;border-radius:100px;background-color:#B31F17;overflow:hidden;float:left;margin:4px;}.box-avatar2.yes{position:relative;text-align:center;width:35px;height:35px;border-radius:100px;background-color:#66C331;overflow:hidden;float:left;margin:4px;}.red-tooltip+.tooltip>.tooltip-inner{background-color:#f00;}.red-tooltip+.tooltip>.tooltip-arrow{border-bottom-color:#f00;}</style>
</div></div></div>
</div>
<div class="container">
<hr>
<?php include("extra/footer.php"); ?>
<?php if($_SESSION['GOOD_RETURN']){ unset($_SESSION['ERROR_RETURN']); unset($_SESSION['LOGIN_USERNAME']); unset($_SESSION['LOGIN_PASSWORD']);} ?>