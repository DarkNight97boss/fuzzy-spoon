<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include './init.php';

$Auth::Session_Disconnected($_SESSION);
$User::Expire($user['id']);
    
$pagename = "Bienvenido /me";
$pageid = "accueil";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php print Settings('Name'); ?>: <?php print $pagename; ?></title>
        <link type="text/css" href="<?php print URL; ?>/web/css/material.css?<?php print UPDATE; ?>" rel="stylesheet">

<?php include './templates/header.php'; ?>

                                                <style>
        #promo-box .enter-btn.closed b{background-position:0 -108px}#promo-box{width:685px;height:200px;float:left;margin-bottom:7px;margin-left:1px;position:relative}#promo-box #promo-bullets{position:absolute;left:0;top:0;width:400px;height:12px;padding:20px 0 18px 20px;z-index:30}
#promo-box #promo-bullets a{background-color:#fff;float:left;height:12px;margin-right:10px;text-indent:-9999px;width:12px;border-radius:3px;-moz-border-radius:7px;opacity:.3;outline:0}#promo-box #promo-bullets a:hover,#promo-box #promo-bullets a.active{opacity:1.0}#promo-box .promo-container{position:absolute;left:0;top:0;width:685px;height:200px;border: 2px solid black;border-radius: 2px;padding:45px 0 0 20px;z-index:20}
#promo-box .promo-content{width:380px;color:#fff}#promo-box .promo-content .title{font-size:22px;font-weight:bold;text-transform:uppercase;font: 400 22px 'Roboto';margin-bottom:15px;width:300px;}#promo-box .promo-content .body{font-size:14px;font: 400 14px 'Roboto';width:300px;}#promo-box .enter-hotel-btn{position:absolute;bottom:5px;right:8px}#promo-box .enter-hotel-btn .enter-btn{white-space:nowrap}
#promo-box .facebook-link,#promo-box .twitter-link{display:block;width:26px;height:26px;position:absolute;bottom:18px}#promo-box .facebook-link{background:transparent url(./images/shared_icons/icon_fb.png) no-repeat 0 0;left:20px}#promo-box .twitter-link{background:transparent url(../../images/shared_icons/icon_twitter.png) no-repeat 0 0;left:54px}
#promo-box .appstore-link{background:transparent url(./images/shared_icons/icon_appstore.png) no-repeat 0 0;display:block;width:129px;height:45px;position:absolute;bottom:9px;right:8px}
</style>
        <div class="container_24">
            <div class="grid_18">
                <div id="contentBox" style="background:url(<?php print URL; ?>/web/img/me/view_generic.png) center center;height:130px;padding:0;">
                    <div class="overlay">
                        <div style="background-image:url(<?php print $User->Avatar($user['look'],"l,2,2,sml,1,0"); ?>);" class="profile-header__avatar__image"></div>
                        <div class="profile-header__avatar__position">
                                                    <span style="font-size:25px;">Bienvenid@, <?php print $user['username']; ?>!</span>
                            <div class="motto"><b>Mission:</b> <?php print safe(utf8_encode($user['motto']),'HTML'); ?></div>
                            <div class="lastLogin"><b>Última Conexion :</b> <?php print date_fr("d M. Y H:i:s", $user['last_offline']); ?></div>
                            <div class="creditsAvailable">
                                <div class="credits">
                                    <div class="creditsIcon"></div>
                                    <?php print $user['credits']; ?>                              </div>
                                <div class="duckets">
                                    <div class="ducketsIcon"></div>
                                    <?php print $user['activity_points']; ?>                            </div>
                                <div class="diamonds">
                                    <div class="diamondsIcon"></div>
                                    <?php print $user['seasonal_currency']; ?>                                </div>
                            </div>
                        </div>
<a href="<?php print URL; ?>/client" target="_blank" class="button raised green" id="profileCheckIn" style="
    width: auto;
    margin-top: 42px;
">
<div class="center" style="line-height: 32px;font-size: 15px;text-transform:uppercase;" fit="">Entrar a <?php print Settings('Name'); ?>!</div>
<paper-ripple fit=""></paper-ripple>
</a>
                    </div>
                </div>

                <div class="news" style="margin-bottom:10px">
                   <div id="promo-box" style="margin-top: -5px;width: 685px;">
    <div id="promo-bullets"></div>

<?php $news = $bdd->query("SELECT * FROM retrophp_news LIMIT 1"); while($a = $news->fetch()) { ?>
<div class="promo-container" style=" background-image: url(<?php print $a['topstory_image']; ?>);    background-position: center;">

        <div class="promo-content">
    <div class="title"><?php print $a['title']; ?></a></div>
    <div class="body"><?php print $a['snippet']; ?></div><br></div><br> 
<a href="<?php print URL; ?>/news/<?php print $a['id']; ?>-<?php print $a['id_page']; ?>" class="button raised green" id="newsButton" style="
    right: 0;
    margin-right: 15px;
    bottom: 12px;
    position: absolute;
">
<div class="center" fit="">Leer Noticia »</div>
<paper-ripple fit=""></paper-ripple>
</a>


</div>
<?php } ?>

</div>
                </div>
            </div>
                        <div class="grid_10" style="    margin-top: 49px;height:390px;">
                        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_es/sdk.js#xfbml=1&version=v2.5&appId=308059415886911";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/<?php print Settings('Facebook'); ?>" data-width="389" data-height="310" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/<?php print Settings('Facebook'); ?>"><a href="https://www.facebook.com/<?php print Settings('Facebook'); ?>"><?php print Settings('Name'); ?></a></blockquote></div></div>
            </div>
                        <div class="grid_8" style="    margin-top: 49px;">
             ...
            </div>
                        <div class="grid_5" style="    margin-top: -342px;">
                       ...
                       </div>
            </div>
        </div>

<?php include './templates/footer.php'; ?>

</body>
</html>