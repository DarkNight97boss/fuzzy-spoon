<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include './init.php';
    
$pagename = "Mis preferencias";
$pageid = "settings";

if(isset($_POST['currentPassword']) && isset($_POST['newPassword']) && isset($_POST['retypedNewPassword']))
{
$mdpactuel = safe($_POST['currentPassword'],'SQL');
$mdpnew = safe($_POST['newPassword'],'SQL');
$mdpnewre = safe($_POST['retypedNewPassword'],'SQL');
$mdp5actuel = Hashage($mdpactuel);
$md5 = Hashage($mdpnew);
if($mdp5actuel == $user['password']){
if($mdpnew == $mdpnewre){
if(strlen($mdpnew) < 6){
$message = "Su contraseña es demasiado corta!" and $color='#b00049';
}  else {
if(strlen($mdpnew) > 25){
$message = "Su contraseña es demasiado larga!" and $color='#b00049';
} else {
$bdd->exec("UPDATE users SET password = '".safe($md5,'SQL')."' WHERE username = '".safe($user['username'],'SQL')."' y la contraseña = '".safe($mdp5actuel,'SQL')."'") or die(mysql_error());
$message     = "Perfil de news" and $color='#2BB000';
}
}
} else {
$message = "As senhas não coincidem." and $color='#b00049';
}
} else {
$message = "A senha atual não é um deles." and $color='#b00049';
}
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php print Settings('Name'); ?>: <?php print $pagename; ?></title>
        <link type="text/css" href="<?php print URL; ?>/web/css/material.css?<?php print UPDATE; ?>" rel="stylesheet">

<?php include './templates/header.php'; ?>

<style>p{margin-bottom:4px;margin-top:1px;color:#333;}h3{margin-bottom:6px;color:#069;}</style>
<div id="gradient_bg_adow" style="background: linear-gradient(white,#E6E6E6);">
<div class="container_24"><div class="grid_18"><div id="contentBox" class="activity" style="border-top: 3px solid #FF6E6E;">
<form method="post">
<h3>cambio de contraseña :</h3>
<?php if($message) { ?>
<i><a style="color:<?php print $color; ?>"><?php print $message; ?></a></i>
<?php } ?>
<p>contraseña antigua</p>
<img src="https://i.imgur.com/kMoAZjE.png" style="float:right;">
<input name="currentPassword" type="password" placeholder="Antigua contraseña" required="" style="
    padding: 0px 12px;
    height: 39px;
    width: auto;
    right: 111px;
    border: 1px solid #bdc7d8;
    border-radius: 4px;
    line-height: 19px;
    font-size: 18px;
    margin-bottom: 8px;
    width: 384px;
" maxlength="25" required="">
<p>introduce la nueva contraseña</p>
<input name="newPassword" type="password" placeholder="Nueva contraseña" required="" style="
    padding: 0px 12px;
    height: 39px;
    width: auto;
    right: 111px;
    border: 1px solid #bdc7d8;
    border-radius: 4px;
    line-height: 19px;
    font-size: 18px;
    margin-bottom: 8px;
    width: 384px;
" maxlength="25" required="">
<p>Introduzca de nuevo la contraseña ...</p>
<input name="retypedNewPassword" type="password" placeholder="introduzca de nuevo" required="" style="
    padding: 0px 12px;
    height: 39px;
    width: auto;
    right: 111px;
    border: 1px solid #bdc7d8;
    border-radius: 4px;
    line-height: 19px;
    font-size: 18px;
    margin-bottom: 8px;
    width: 384px;
" maxlength="25" required="">
</p>
<button type="submit" class="button raised green" id="checkInHeader" style="
    padding: 4px 24px;
    width: auto;
    border-radius: 5px;
    font-size: 14px;
    border: 1px solid #069;
    height: 40px;
">Cambiar contraseña »</button>
</form></div></div></div>

<?php include './templates/footer.php'; ?>

</body>
</html>