<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include './init.php';

$Auth::Session_Disconnected($_SESSION);
    
$pageid = "hotel";
$pub = "client";

if(Settings('Hotel') == 'true') {
$roomask = false;
if(isset($_GET['roomId'])){
$roomId = safe(intval($_GET['roomId']),'SQL');
if(Settings('Emulator') == 'Azure') {
$roominfo = $bdd->query("SELECT roomtype FROM rooms_data WHERE id = '".safe($roomId,'SQL')."' LIMIT 1");
} else {
$roominfo = $bdd->query("SELECT roomtype FROM rooms WHERE id = '".safe($roomId,'SQL')."' LIMIT 1");
}
$roomrow = $roominfo->rowCount();
if($roomrow == 1)
{
$room = $roominfo->fetch(PDO::FETCH_ASSOC);
if($room['roomtype'] == "public"){
$forward_type = 1;
$roomIdask = $roomId;
$roomask = true;
} else {
$forward_type = 2;
$roomIdask = $roomId;
$roomask = true;
}
}
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php print Settings('Name'); ?>: </title> 
 
<script type="text/javascript"> 
var andSoItBegins = (new Date()).getTime();
var ad_keywords = "";
document.habboLoggedIn = true;
var habboName = "<?php print $user['username']; ?>";
var habboReqPath = "<?php print URL; ?>";
var habboStaticFilePath = "<?php print Settings('Url_Images'); ?>";
var habboImagerUrl = "<?php print Settings('Avatarimage'); ?>";
var habboPartner = "";
var habboDefaultClientPopupUrl = "<?php print URL; ?>/client";
window.name = "habboMain";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "uberClientWnd"; }
</script> 

<link rel="shortcut icon" href="<?php print URL; ?>/favicon.ico" type="image/vnd.microsoft.icon" /> 
<script src="<?php print URL; ?>/web/flashclient/js/libs2.js?<?php print UPDATE; ?>" type="text/javascript"></script>
<script src="<?php print URL; ?>/web/flashclient/js/visual.js?<?php print UPDATE; ?>" type="text/javascript"></script>
<script src="<?php print URL; ?>/web/flashclient/js/libs.js?<?php print UPDATE; ?>" type="text/javascript"></script>
<script src="<?php print URL; ?>/web/flashclient/js/common.js?<?php print UPDATE; ?>" type="text/javascript"></script>

<script src="<?php print URL; ?>/web/flashclient/js/fullcontent.js?<?php print UPDATE; ?>" type="text/javascript"></script>
<link rel="stylesheet" href="<?php print URL; ?>/web/flashclient/css/style.css?6" type="text/css" />
<link rel="stylesheet" href="<?php print URL; ?>/web/flashclient/css/tooltips.css?<?php print UPDATE; ?>" type="text/css" />
<link rel="stylesheet" href="<?php print URL; ?>/web/flashclient/css/habboclient.css?<?php print UPDATE; ?>" type="text/css" />
<link rel="stylesheet" href="<?php print URL; ?>/web/flashclient/css/habboflashclient.css?<?php print UPDATE; ?>" type="text/css" />
<script src="<?php print URL; ?>/web/flashclient/js/habboflashclient.js?<?php print UPDATE; ?>" type="text/javascript"></script>
 
<meta name="build" content="<?php print Settings('Build'); ?>" /> 

</head> 
<body id="client" class="flashclient"> 

<script type="text/javascript"> 
var habboDefaultClientPopupUrl = "<?php print URL; ?>/client";
</script> 
 
<script type="text/javascript"> 

FlashExternalInterface.loginLogEnabled = true;
 
FlashExternalInterface.logLoginStep("web.view.start");
 
if (top == self) {
FlashHabboClient.cacheCheck();
}
var flashvars = {
"client.allow.cross.domain" : "1", 
"client.notify.cross.domain" : "0", 
"connection.info.host" : "25.118.123.244", 
"connection.info.port" : "30000", 
"site.url" : "<?php print URL; ?>", 
"url.prefix" : "<?php print URL; ?>", 
"client.reload.url" : "<?php print URL; ?>/client", 
"client.fatal.error.url" : "<?php print URL; ?>/flash_client_error", 
"client.connection.failed.url" : "<?php print URL; ?>/flash_client_error", 
"external.variables.txt" : "http://25.118.123.244/swf/gamedata/external_variables.txt",
"external.texts.txt" : "http://25.118.123.244/swf/gamedata/external_flash_texts.txt",
<?php if(Settings('Emulator') != "Phoenix") { ?>
<?php if(Settings('Emulator') != "Butterfly" or Settings('Emulator') != "Mercury") { ?>
"external.override.variables.txt" : "http://25.118.123.244/swf/gamedata/override/external_override_variables.txt",
"external.override.texts.txt" : "http://25.118.123.244/swf/gamedata/override/external_flash_override_texts.txt",
<?php } ?>
"productdata.load.url" : "http://25.118.123.244/swf/gamedata/productdata.txt",
"external.figurepartlist.txt" : "http://25.118.123.244/swf/gamedata/figuredata.xml",
"furnidata.load.url" : "http://25.118.123.244/swf/gamedata/furnidata.xml",
"hotelview.banner.url" : "<?php print Serveur('Banner'); ?>",
<?php } ?>
"use.sso.ticket" : "1",
"sso.ticket" : "<?php print TicketRefresh($user['username']); ?>", 
"processlog.enabled" : "0", 
"account_id" : "<?php print $user['id']; ?>", 
"client.starting" : "¡Por Favor Espera!, Habbo Se esta Cargando!", 
"flash.client.url" : "<?php print Serveur('Base'); ?>", 
"user.hash" : "", 
"has.identity" : "0", 
<?php if($roomask == true){ ?>
"forward.type" : "<?php print $forward_type; ?>",
"forward.id" : "<?php print $roomIdask['id']; ?>",
<?php } ?>
"flash.client.origin" : "popup" 
 };
    var params = {
        "base" : "http://25.118.123.244/swf/gordon/PRODUCTION-201601012205-226667486/",
        "allowScriptAccess" : "always",
        "menu" : "false"                
    };
 
        if (!(HabbletLoader.needsFlashKbWorkaround())) {
            params["wmode"] = "opaque";
        }
 
    FlashExternalInterface.signoutUrl = "<?php print URL; ?>/account/logout";
 
    var clientUrl = "http://25.118.123.244/swf/gordon/PRODUCTION-201601012205-226667486/Habbo.swf";
    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "<?php print URL; ?>/web/flashclient/swfobject/expressInstall.swf", flashvars, params);
 
    window.onbeforeunload = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.indexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unloading();
        } catch (e) {}
    }
</script> 

<div id="overlay"></div> 

<div id="client-ui" > 
<div id="flash-wrapper"> 
<div id="flash-container"> 
<div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none"> 
<div class="cbb clearfix"> 
<h2 class="title">Installer Adode Flash Player</h2> 
<div class="box-content"> 
<p>Pour installer Flash Player : <a href="http://get.adobe.com/flashplayer/">Clique ICI</a>. More instructions for installation can be found here: <a href="http://www.adobe.com/products/flashplayer/productinfo/instructions/">More information</a></p> 

<p><a href="http://www.adobe.com/go/getflashplayer"><img src="<?php print URL; ?>/images/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p> 
</div> 
</div> 
</div> 
<script type="text/javascript"> 
$('content').show();
</script> 
<noscript> 
<div style="width: 400px; margin: 20px auto 0 auto; text-align: center"> 
<p>If you are not automatically redirected, please <a href="/client/nojs">click here</a></p> 
</div> 
</noscript> 
</div> 
</div>

</div>
</div>
<div id="content" class="client-content"></div>
</div>
<div style="display: none"> 

<script language="JavaScript" type="text/javascript"> 
setTimeout(function() {
HabboCounter.init(600);
}, 20000);

</script> 
</div> 
<script type="text/javascript"> 
RightClick.init("flash-wrapper", "flash-container");
</script> 

</body> 

</html>
<?php } ?>
