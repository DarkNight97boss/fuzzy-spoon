<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include './init.php';
    
$pagename = "Equipo Staffs";
$pageid = "staffs";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php print Settings('Name'); ?>: <?php print $pagename; ?></title>
        <link type="text/css" href="<?php print URL; ?>/web/css/material.css?<?php print UPDATE; ?>" rel="stylesheet">

<?php include './templates/header.php'; ?>
<style>body{background:#fff;}#staff_display{display:inline-block;background-color:rgba(0,0,0,0.04);margin-left:19px;box-shadow:3px 3px rgba(0,0,0,.2);margin-right:19px;margin-bottom:15px;margin-top:15px;width:155px;padding:17px 3px;border-radius:4px;}#staff_display:hover{box-shadow:5px 5px rgba(0,0,0,.2);}#titre_staff{text-align:center;font-size:14px;margin-bottom:5px;color:#000;text-shadow:1px 1px #FFFFFF;font-weight:bold;}#desc_staff{text-align:center;font-size:14px;margin-bottom:5px;color:#fff;text-shadow:1px 1px #000;font-weight:bold;background:#069;}.display_staff{-ms-interpolation-mode:nearest-neighbor;image-rendering:-webkit-crisp-edges;image-rendering:-moz-crisp-edges;image-rendering:-o-crisp-edges;image-rendering:pixelated;height:83px;}</style>
<div id="gradient_bg_adow" style="background: linear-gradient(white,#E6E6E6);">
<div class="container_24">
<div class="grid_21">
<div id="contentBox" class="activity" style="border-top: 3px solid #FF6E6E;">
<div class="head" style="    padding: 0px 3px 0px;min-height: 30px;">
Equipo Staffs del Hotel,<a style="float:right;color:#069;text-decoretion:none;font-size:12px;">Ellos están aquí para supervisar y animar el hotel. podras saber si estan en linea</a><br>
</div>
<xss style="display:inline;">
<?php $sql = $bdd->query("SELECT * FROM users WHERE rank >= '7'"); while($s = $sql->fetch()) { ?>
<div id="staff_display">
<div id="titre_staff"><?php print $s['username']; ?></div>
<div id="desc_staff" style="    <?php if($s['online'] == '0') { ?>background: #EF5350;<?php } elseif($s['online'] == '1') { ?>background: #4CAF50;<?php } ?>"><?php $gradesql = $bdd->query("SELECT * FROM ranks WHERE id = '".safe($s['rank'],'SQL')."'"); while($grade = $gradesql->fetch()) { print $grade['name']; } ?></div>
<center><img src="<?php print Settings('C_Images'); ?>/album1584/ADM.gif" style="
    box-shadow: 0px 3px 7px rgba(239, 83, 80, 0.46);    border-radius: 26px;
    margin-bottom: 9px;
"><div style="background-image:url(<?php print Settings('Avatarimage'); ?>avatarimage?figure=<?php print $s['look'] ; ?>&direction=3&head_direction=3&gesture=sml&action=&size=l);    height: 101px;
    background-position: 12px -41px;z-index: 999;"></div></center>
<center>
<?php if($s['online'] == '0') { ?>
<a class="button raised red" style="
    width: auto;
    padding: 0px 14px;
    margin-bottom: -4px;
    margin-top: 7px;
">
<div class="center" style="line-height: 32px;" fit="">Desconectado</div>
<paper-ripple fit=""></paper-ripple>
</a>
<?php } elseif($s['online'] == '1') { ?>
<a class="button raised green" style="
    width: auto;
    padding: 0px 14px;
    margin-bottom: -4px;
    margin-top: 7px;
">
<div class="center" style="line-height: 32px;" fit="">Conectado</div>
<paper-ripple fit=""></paper-ripple>
</a>
<?php } ?>
</center> </div> 
<?php } ?>

 </xss> </div></div></div></div>

<?php include './templates/footer.php'; ?>

</body>
</html>