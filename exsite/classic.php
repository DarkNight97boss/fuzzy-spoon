<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include './init.php';

$Auth::Session_Disconnected($_SESSION);
    
$pagename = "VIP Clássico";
$pageid = "classic";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php print Settings('Name'); ?>: <?php print $pagename; ?></title>
        <link type="text/css" href="<?php print URL; ?>/web/css/material.css?<?php print UPDATE; ?>" rel="stylesheet">

<?php include './templates/header.php'; ?>

<div class="container_24"><div class="grid_18"><div id="contentBox" class="activity" style="border-top: 3px solid #4CAF50;">
<div class="head" style="text-transform: uppercase;">
<div class="badgeImage fansite"></div>
Únete a los VIP clásicos
<br>
<span class="date">suscripción mensual a los VIP Clásico.</span>
</div>
<style>a{color:#069;}</style><br>
<a>Las ventajas únicas del club,:</a><br><br>

<li class="payment__steps__title">{Como Membrecia}, Placa VIP, Furnis VIP y Efectos</li>
<a class="button raised green" href="<?php print URL; ?>/proceedWithPayment/VIP/1" style="
    float: right;
    width: auto;
    padding: 9px;
    margin-top: -46px;
    margin-bottom: 12px;
">
<div class="center" style="line-height: 32px;" fit="">Comprar por <?php print Settings('Prix_VIP'); ?> Diamantes</div>
<paper-ripple fit=""></paper-ripple>
</a> </div></div> <div class="grid_6">
<div id="contentBox" class="activity">
<div class="head" style="    padding: 0px 3px 0px;">
<div class="badgeImage trade"></div>
Mi inventario<br>
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