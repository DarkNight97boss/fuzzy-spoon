<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include './init.php';

$id = safe($_GET['id'],'SQL');
$idpage = safe($_GET['idpage'],'SQL');
$sql = $bdd->query("SELECT * FROM retrophp_news WHERE id_page = '".safe($idpage,'SQL')."' AND id = '".safe($id,'SQL')."'");
$n = $sql->fetch(PDO::FETCH_ASSOC);

//$Auth::Session_Disconnected($_SESSION);
    
$pagename = "Notícias";
$pageid = "news";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php print Settings('Name'); ?>: <?php print $pagename; ?></title>
        <link type="text/css" href="<?php print URL; ?>/web/css/material.css?<?php print UPDATE; ?>" rel="stylesheet">

<?php include './templates/header.php'; ?>
<div class="container_24"><div class="grid_18">
<?php if(empty($n)) { ?>
<div id="contentBox" class="activity">
<div class="head">
<div class="badgeImage fansite"></div>
Notícias
<br>
<span class="date">Aqui podras ver las ultimas news publicadas por <?php print Settings('Name'); ?>.</span>
</div>
<?php $news = $bdd->query("SELECT * FROM retrophp_news LIMIT 80"); while($a = $news->fetch()) { ?>
<li class="payment__steps__title">
<a href="<?php print URL; ?>/news/<?php print $a['id']; ?>-<?php print $a['id_page']; ?>" style="color:#069;">
<?php print $a['title']; ?>&nbsp;»</a>
</li>
<?php } ?>
</div>
<?php } else { ?>
<div id="contentBox" class="activity" style="    border-top: 3px solid #FF6E6E;">
<div class="head">
<div class="badgeImage fansite"></div>
<?php print $n['title']; ?> <br>
<span class="date"><?php print $n['snippet']; ?></span>
</div><div style="    padding: 6px;">
<?php print $n['body']; ?>
</div>
</div>
<?php } ?>
</div></div>
</div>
<?php include './templates/footer.php'; ?>

</body>
</html>