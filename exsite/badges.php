<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include './init.php';

$Auth::Session_Disconnected($_SESSION);
    
$pagename = "Compra de placas";
$pageid = "badges";

if(isset($_GET['id'])) {
$badge_id = safe($_GET['id'],'SQL');
$badge = $bdd->query("SELECT * FROM retrophp_badges WHERE badge_id = '".safe($badge_id,'SQL')."'");
$shop = $badge->fetch(PDO::FETCH_ASSOC);
if(Settings('Emulator') == "Azure") {
$verif_badge = $bdd->query("SELECT * FROM users_badges WHERE badge_id = '".safe($shop['badge_id'],'SQL')."' AND user_id = ".safe($user['id'],'SQL')."");
} else {
$verif_badge = $bdd->query("SELECT * FROM user_badges WHERE badge_id = '".safe($shop['badge_id'],'SQL')."' AND user_id = ".safe($user['id'],'SQL')."");
}
$row = $verif_badge->rowCount();
if($row == 1) {
$message = "<div style=\"padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;\" class=\"not_enought_money\">Le badge demander figure déjà dans votre inventaire.</div>";
} else {
$do = safe($_GET['id'],'SQL');
if($do == $shop['badge_id']) {
if($user['seasonal_currency'] >= $shop['prix']) {
if(Settings('Emulator') == "Azure") {
$bdd->exec("INSERT INTO `users_badges` (`user_id`, `badge_id`) VALUES ('".safe($user['id'],'SQL')."', '".safe($shop['badge_id'],'SQL')."')");
} else {
$bdd->exec("INSERT INTO `user_badges` (`user_id`, `badge_id`) VALUES ('".safe($user['id'],'SQL')."', '".safe($shop['badge_id'],'SQL')."')");
}
$bdd->exec("UPDATE `users` SET `seasonal_currency` = `seasonal_currency` - '".safe($shop['prix'],'SQL')."' WHERE `id` = ".safe($user['id'],'SQL')."");
$message = "<div style=\"padding:10px;font-size:18px;background:#60B200;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;\">Tu viens de recevoir ton badge!</div>";
} else {
$message = "<div style=\"padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;\" class=\"not_enought_money\">Tu n'as pas assez de diamants</div>";
}
}
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
<style>body{background:#fff;}#badge_display{display:inline-block;background-color:rgba(0,0,0,0.04);margin-left:19px;box-shadow:3px 3px rgba(0,0,0,.2);margin-right:19px;margin-bottom:15px;margin-top:15px;width:155px;padding:17px 3px;border-radius:4px;}#titre_badge{text-align:center;font-size:14px;margin-bottom:5px;color:#000;text-shadow:1px 1px #FFFFFF;font-weight:bold;}#desc_badge{text-align:center;font-size:14px;margin-bottom:5px;color:#fff;text-shadow:1px 1px #000;font-weight:bold;background:#069;}.display_badge{-ms-interpolation-mode:nearest-neighbor;image-rendering:-webkit-crisp-edges;image-rendering:-moz-crisp-edges;image-rendering:-o-crisp-edges;image-rendering:pixelated;height:83px;}</style>
<div class="container_24"><div class="grid_16"><div id="contentBox" class="activity" style="border-top: 3px solid #4CAF50;"><div class="head" style="    padding: 0px 3px 0px;min-height: 30px;">
Compra De placas, Mas pacas cada 5 dias<a style="float:right;color:#069;text-decoretion:none;font-size:12px;" href="/virtual">aora tienes <?php print $user['seasonal_currency']; ?> Diamantes</a><br>
</div>
<?php if(isset($message)) { print $message; } ?>
<xss style="display:inline;">
<?php $sql = $bdd->query("SELECT * FROM retrophp_badges"); while($b = $sql->fetch()) { ?>
<div id="badge_display">
<div id="titre_badge"><?php print stripslashes($b['titre']); ?></div>
<center><img src="<?php print Settings('C_Images'); ?>/album1584/<?php print $b['badge_id']; ?>.gif" class="display_badge"></center>
<center><a class="button raised green" href="<?php print Settings('Url'); ?>/badges/<?php print $b['badge_id']; ?>" style="
    width: auto;
    padding: 0px 14px;
    margin-bottom: -4px;
    margin-top: 7px;
">
<div class="center" style="line-height: 32px;" fit=""><?php print $b['prix']; ?> Diamantes</div>
<paper-ripple fit=""></paper-ripple>
</a></center>
</div> 
<?php } ?>

</xss> </div></div> <div class="grid_6">
<div id="contentBox" class="activity">
<div class="head" style="    padding: 0px 3px 0px;">
<div class="badgeImage trade"></div>
Mi Inventario<br>
<span class="date"><?php print $user['username']; ?></span>
</div>
<div class="creditsIcon" style="
    background: url(web/img/me/duckets.png) no-repeat;
    height: 15px;
    background-position: 2px 7px;
    line-height: 15px;
    padding: 8px 21px 0px;
    margin-top: 7px;
    "><?php print $user['activity_points']; ?> Duckets</div>
<div class="creditsIcon" style="
    background: url(web/img/me/diamonds.png) no-repeat;
    height: 15px;
    line-height: 15px;
    padding: 0px 21px 0px;
    margin-top: -15px;
    float: right;
    margin-right: -3px;
    "><?php print $user['seasonal_currency']; ?> Diamantes</div>
</div></div><div class="grid_6">
</div><div class="grid_6">
<div id="contentBox" class="activity">
<div class="head">
<div class="badgeImage guide"></div>
Que es Esto?<br>
<span class="date">Informacion</span>
</div>
con los creditos te puedes diferenciarse de otros Usuarios de <?php print Settings('Name'); ?>, Puedes comprar <a style="color:#069;">Vip</a>, <a style="color:#069;">O Comprar Placas</a>, <a style="color:#069;">o Comprar</a>, <a style="color:#069;">diamantes</a> en Cuestion de minuti ...
Si Algo sale mal Durante la compra por Favor Dar Aviso <a style="color:#069;">Aun Equipo Staffs</a>.
</div>
</div></div>

<?php include './templates/footer.php'; ?>

</body>
</html>