<?php
/* #################################################################### \
||                                                                     ||
|| TwinkieCMS - Use of this software is strictly prohibited.           *#
|| # Copyright (C) 2014 lD@vidl.                                       *#
||---------------------------------------------------------------------*#
||---------------------------------------------------------------------*#
|| Script pensado para la gestión de retroservers Habbo.               *#
|| Tanto el script como los autores del mismo no tienen ningún tipo    *#
|| de asociación con Habbo y/o Sulake Oy Corp. Por lo tanto, estos no  *#
|| se hacen responsables del uso que el usuario le dé.                 *#
||                                                                     ||
\ ################################################################### */
if($myrow['rank'] > 5 ) {

require_once('./datixdlol.php');
}
ob_start();
	require_once 'inc/core.php';
	$user->logged('yes');
	$user->clientstaff();
	if($user->Get("rank") >= RANKMIN && $_SESSION['CLIENT_PIN_NOW'] !== true){
		header("LOCATION: ". PATH ."/clientstaff/index.php");
		exit;
	}else{
		unset($_SESSION['CLIENT_PIN_NOW']);
		$myid = $user->Get('id');
		$my_id = $myid;
	}

	$_config['client'] = array(
		'host' 					=> '89.46.69.135',
		'port' 					=> '3030',
		'external_variables' 	=> 'http://hubixhotel.tk/gamedata/external_variables.txt',
		'external_flash_texts' 	=> 'http://hubixhotel.tk/gamedata/external_flash_texts.txt',
		'productdata' 			=> 'http://hubixhotel.tk/gamedata/productdata.txt',
		'furnidata' 			=> 'http://hubixhotel.tk/gamedata/furnidata.xml',
		'flash_client_url' 		=> 'http://hubixhotel.tk/gordon/PRODUCTION-201601012205-226667486/',
		'habbo_swf' 			=> 'HubixSWF1.swf'
	);
	$myusername = $user->Get('username');
	$ticket = $user->GenerateTicket();	
	$ip = USER_IP;
    $query = $db->query("UPDATE users SET auth_ticket = '{$ticket}', ip_last = '" . USER_IP . "', last_used = '". time() ."' WHERE id = '" . $myid . "'");
	$rvip = $db->query("UPDATE users SET rank = 1 WHERE rank = 1");//Pa rango 2 a todos los users PD:David plp
?>
<!DOCTYPE html>
<html lang="es_ES">
    <head>
		<title><?php echo SHORTNAME; ?> - Client / Entra a giocare!</title> 
		<link rel="shortcut icon" href="<?php echo CDN; ?>/images/favicon.ico" type="image/vnd.microsoft.icon" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="Diversión al limite!" />
        <script type="text/javascript" src="/libs2.js"></script>
        <style type="text/css"> 
            * { margin: 0; padding: 0; }
            html, #flash-container { height: 100%; text-align: left; background-color: black; }
            #flash-container { position: absolute; overflow: hidden; left: 0; top: 0; right: 0; bottom: 0; }
        </style>
        <script type="text/javascript">
        var flashvars = {
            "client.allow.cross.domain" : "1", 
            "client.notify.cross.domain" : "1", 
            "connection.info.host" : "<?php echo $_config['client']['host']; ?>", 
            "connection.info.port" : "<?php echo $_config['client']['port']; ?>", 
            "site.url" : "<?php echo PATH; ?>", 
            "url.prefix" : "<?php echo PATH; ?>", 
            "client.reload.url" : "<?php echo PATH; ?>/staffclient.php", 
            "client.fatal.error.url" : "<?php echo PATH; ?>/staffclient.php", 
            "client.connection.failed.url" : "<?php echo PATH; ?>/staffclient.php", 
            "logout.url" : "<?php echo PATH; ?>/staffclient.php", 
            "logout.disconnect.url" : "<?php echo PATH; ?>/staffclient.php", 
            "external.variables.txt" : "<?php echo $_config['client']['external_variables']; ?>", 
            "external.texts.txt" : "<?php echo $_config['client']['external_flash_texts']; ?>",
            "productdata.load.url" : "<?php echo $_config['client']['productdata']; ?>", 
            "furnidata.load.url" : "<?php echo $_config['client']['furnidata']; ?>",  
            "sso.ticket": "<?php echo $ticket; ?>",
            "processlog.enabled" : "1", 
            "account_id" : "<?php echo $user->Get('username'); ?>", 
            "client.starting" : "Per favore, aspetta! <?php echo $myrow['username']; ?>Hubix sta caricando.", 
            "flash.client.url" : "<?php echo $_config['client']['flash_client_url']; ?>", 
            "user.hash" : "5690170255dbf26e0275377f436614c91d1a810d", 
            "has.identity" : "1", 
            "flash.client.origin" : "popup", 
            "nux.lobbies.enabled" : "false", 
            "country_code" : "DO" 
        };

        var params = {
            "base" : "<?php echo $_config['client']['flash_client_url']; ?>",
            "allowScriptAccess" : "always",
            "menu" : "true"
        };

        swfobject.embedSWF("<?php echo $_config['client']['flash_client_url'] . $_config['client']['habbo_swf']; ?>?s", "flash-container", "100%", "100%", "10.1.0", "http://cdn.uber.meth0d.org/expressInstall.swf", flashvars, params, null);
         </script>

    </head>
    <body>
        <div id="flash-container">
        </div>

</html>
<?php ob_end_flush(); ?>