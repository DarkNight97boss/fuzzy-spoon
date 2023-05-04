<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include '../init.php';

$Auth::Session_Disconnected($_SESSION);

$pageid = 9;
$pagename = "users";
  
include './init.hk.php';

if(isset($_POST['username']))
{
$username = safe($_POST['username'],'SQL');
$usid = $bdd->query("SELECT * FROM users WHERE username = '".safe($username,'SQL')."'");
$row = $usid->rowCount();
if($row < 1) {
$erreur = true;
} else {
$usid = $usid->fetch(PDO::FETCH_ASSOC);
$trouver = true;
}
}

if(isset($_POST['Number']) && isset($_POST['Username']) && isset($_POST['Cred']) && isset($_POST['Perso']))
{
$Number = safe($_POST['Number'],'SQL');
$Username = safe($_POST['Username'],'SQL');
$Cred = safe($_POST['Cred'],'SQL');
$Perso = safe($_POST['Perso'],'SQL');
if(isset($Cred) && isset($Perso) && isset($Number) && isset($Username)) {
$bdd->exec("UPDATE `users` SET `credits` = '".safe($Cred,'SQL')."', `motto` = '".safe(utf8_decode($Perso),'SQL')."' WHERE `id` = '".safe($Number,'SQL')."'");
$User->AddLogs($user['username'],'Modification du compte ('.safe($Username,'SQL').').');
$post_user = true;
}
}

include './templates/header.php';
?>
<div class="row">
<div class="col-md-12">
				<article class="widget">
					<header class="widget__header">
						<h3 class="widget__title">Buscar Usuario.</h3>
					</header>

					<div class="widget__content">
<?php if($erreur == true) { ?>
<br>
<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><div class="media"><figure class="pull-left alert--icon"><i class="pe-7s-close-circle"></i></figure><div class="media-body"><h3 class="alert--title">Error</h3><p class="alert--text">El nombre del usuario no Existe.</p></div></div></div>
<?php } ?>
<?php if($post_user == true){ ?>
						<div class="alert alert-warning alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<div class="media">
								<figure class="pull-left alert--icon">
									<i class="pe-7s-attention"></i>
								</figure>
								<div class="media-body">
									<<h3 class="alert--title">Está hecho!</h3> 
									<p class="alert--text">Se Realizo el cambio Correctamente.</p>
								</div>
							</div>
						</div>
						<?php } ?>
<form method="post">
<input type="text" value="" name="username" class="input-text" placeholder="Usuario" />
<br/>
<input type="submit" value="Buscar" class="btn btn-light pull-right"/>
<div class="clearfix"></div>
</form>
<?php if($trouver == true) {
$ms = $bdd->query("SELECT * FROM users WHERE id = '".safe($usid['id'],'SQL')."'"); while($ms1 = $ms->fetch()) {
?>
<div class="media">
<figure class="pull-left rounded-image social_msg__img">
<img src="<?php print $User->Avatar($usid['look'],"b,2,2,sml,1,0"); ?>" alt="user">
</figure>
<div class="media-body">
<form method="post">
<h4 class="media-heading social_msg__heading"><?php print $usid['username']; ?> </h4>
<small class="social_msg__meta">ID de usuario</small>
<input type="text" class="input-text" disabled="disabled" value="<?php print $usid['id']; ?>" />
<input type="hidden" name="Number" value="<?php print $usid['id']; ?>" />
<small class="social_msg__meta">Nombre</small>
<input type="text" class="input-text" disabled="disabled" value="<?php print $usid['username']; ?>" />
<input type="hidden" name="Username" value="<?php print $usid['username']; ?>" />
<small class="social_msg__meta">Créditos</small>
<input type="text" class="input-text" name="Cred" value="<?php print $usid['credits']; ?>" />
<small class="social_msg__meta">Mission</small>
<input type="text" class="input-text" name="Perso" value="<?php print utf8_encode(stripslashes($usid['motto'])); ?>" />
<small class="social_msg__meta">Ultima Conexion</small>
<input type="text" class="input-text" disabled="disabled" value="<?php print $date." ".date('H:i:s', $usid['last_offline']); ?>" />
<?php if($user['rank'] >= 9) { ?>
<small class="social_msg__meta">Direccion IP</small>
<input type="text" class="input-text" disabled="disabled" value="<?php print $usid['ip_last']; ?>" />
<small class="social_msg__meta">IP de Registro</small>
<input type="text" class="input-text" disabled="disabled" value="<?php print $usid['ip_reg']; ?>" />
<?php } ?>
<button class="btn btn-light pull-right" type="submit">Realizar Cambios</button>
</form>
<div class="social_msg"></div><br>
<button type="button" class="btn btn-red">Bannear</button> <?php if($user['rank'] >= 10) { ?><button type="button" class="btn btn-orenge">Des-Bannear</button><?php } ?>
<form method="post" action="chatlogs"><input type="hidden" value="<?php print $usid['username']; ?>" name="pseudo"><input type="submit" value="Chat" style="margin-top:-40px;" class="btn btn-green pull-right"/></form>
<?php }} ?>
</article>
</div></div>
<?php include './templates/footer.php'; ?>