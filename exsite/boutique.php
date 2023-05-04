<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include './init.php';

$Auth::Session_Disconnected($_SESSION);
    
$pagename = "Compras de diamantes";
$pageid = "boutique";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php print Settings('Name'); ?>: <?php print $pagename; ?></title>
        <link type="text/css" href="<?php print URL; ?>/web/css/material.css?<?php print UPDATE; ?>" rel="stylesheet">

<?php include './templates/header.php'; ?>

<div class="container_24"><div class="grid_18"><div id="contentBox" class="activity">
<div class="head">
<div class="badgeImage fansite"></div>
Selecciona un metodo de compra.
<br>
<span class="date">a continuación Seleccione una forma de pagar por los diamantes.</span>
</div>
<?php $do2 = $_GET['p']; if($do2 == "error") { ?>
<div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;" class="not_enought_money">
el pago se redujo</div>
<?php } $do2 = $_GET['p']; if($do2 == "online_error") { ?>
<div style="padding:10px;font-size:18px;background:#c40000;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;" class="not_enought_money">
Usted debe estar desconectado del hotel para hacer una compra!</div>
<?php } $do2 = $_GET['p']; if($do2 == "success") { ?>
<div style="padding:10px;font-size:18px;background:#60B200;color:white;text-shadow:0 1px 0 #990000;-moz-border-radius:10px;-webkit-border-radius:10px;border-radius:10px;margin:10px;">pago aceptado</div>
<?php } ?>
<br>
<center><div id="starpass_<?php print Settings('IDD'); ?>"></div>
<script type="text/javascript" src="http://script.starpass.fr/script.php?idd=<?php print Settings('IDD'); ?>&amp;theme=white_grey_small&amp;verif_en_php=1&amp;datas=">
</script>
<noscript>Por favor, active JavaScript en su navegador<br />
<a href="http://www.starpass.fr">Forma de pago</a>
</noscript>
</center><br>
</div></div> <div class="grid_6">
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