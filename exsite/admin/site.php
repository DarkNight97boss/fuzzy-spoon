<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include '../init.php';

$Auth::Session_Disconnected($_SESSION);

$pageid = 2;
$pagename = "config";
  
include './init.hk.php';

if(isset($_POST['Name']) && isset($_POST['Url']) && isset($_POST['Keyword']) && isset($_POST['Description']) && isset($_POST['Contact']))
{
$Name = safe($_POST['Name'],'SQL');
$Url = safe($_POST['Url'],'SQL');
$Keyword = safe($_POST['Keyword'],'SQL');
$Description = safe($_POST['Description'],'SQL');
$Contact = safe($_POST['Contact'],'SQL');
if(isset($Name) && isset($Url) && isset($Keyword) && isset($Description) && isset($Contact)) {
$bdd->exec("UPDATE `retrophp_settings` SET `Name` = '".safe($Name,'SQL')."', `Nickname` = '".safe($Name,'SQL')."', `Url` = '".safe($Url,'SQL')."', `Url_Images` = '".safe($Url,'SQL')."/web-gallery', `Keyword` = '".safe($Keyword,'HTML')."', `Description` = '".safe($Description,'HTML')."', `Contact` = '".safe($Contact,'SQL')."' WHERE `id` = 1");
$User->AddLogs($user['username'],'Configuration de base.');
$post_config = true;
}
}
if(isset($_POST['Credits']) && isset($_POST['Mission']) && isset($_POST['Pixels']) && isset($_POST['Jetons']) && isset($_POST['Rank']))
{
$Credits = safe($_POST['Credits'],'SQL');
$Mission = safe($_POST['Mission'],'SQL');
$Pixels = safe($_POST['Pixels'],'SQL');
$Jetons = safe($_POST['Jetons'],'SQL');
$Rank = safe($_POST['Rank']);
if(isset($Credits) && isset($Mission) && isset($Pixels) && isset($Jetons) && isset($Rank)) {
$bdd->exec("UPDATE `retrophp_settings` SET `Credits` = '".safe($Credits,'SQL')."', `Mission` = '".safe($Mission,'SQL')."', `Pixels` = '".safe($Pixels,'SQL')."', `Jetons` = '".safe($Jetons,'SQL')."', `Rank` = '".safe($Rank,'SQL')."' WHERE `id` = 1");
$User->AddLogs($user['username'],'Configuration du site (Inscription).');
$post_config = true;
}
}
if(isset($_POST['Facebook']) && isset($_POST['Twitter']) && isset($_POST['Youtube']))
{
$Facebook = safe($_POST['Facebook'],'SQL');
$Twitter = safe($_POST['Twitter'],'SQL');
$Youtube = safe($_POST['Youtube'],'SQL');
if(isset($Facebook) && isset($Twitter) && isset($Youtube)) {
$bdd->exec("UPDATE `retrophp_settings` SET `Facebook` = '".safe($Facebook,'SQL')."', `Twitter` = '".safe($Twitter,'SQL')."', `Youtube` = '".safe($Youtube,'SQL')."' WHERE `id` = 1");
$User->AddLogs($user['username'],'Configuration du site (Réseaux sociaux).');
$post_config = true;
}
}
if(isset($_POST['APP_ID']) && isset($_POST['APP_SECRET']))
{
$APP_ID = safe($_POST['APP_ID'],'SQL');
$APP_SECRET = safe($_POST['APP_SECRET'],'SQL');
if(isset($APP_ID) && isset($APP_SECRET)) {
$bdd->exec("UPDATE `retrophp_settings` SET `APP_ID` = '".safe($APP_ID,'SQL')."', `APP_SECRET` = '".safe($APP_SECRET,'SQL')."' WHERE `id` = 1");
$User->AddLogs($user['username'],'Configuration du site (FB CONNECT).');
$post_config = true;
}
}
if(isset($_POST['Host']) && isset($_POST['Port']) && isset($_POST['Mus']) && isset($_POST['Variables']) && isset($_POST['Texts']) && isset($_POST['Override']) && isset($_POST['Productdata']) && isset($_POST['Furnidata']) && isset($_POST['Banner']) && isset($_POST['Base']) && isset($_POST['Habbo']))
{
$Host = safe($_POST['Host'],'SQL');
$Port = safe($_POST['Port'],'SQL');
$Mus = safe($_POST['Mus'],'SQL');
$Variables = safe($_POST['Variables'],'SQL');
$Texts = safe($_POST['Texts'],'SQL');
$Override = safe($_POST['Override'],'SQL');
$Productdata = safe($_POST['Productdata'],'SQL');
$Furnidata = safe($_POST['Furnidata'],'SQL');
$Banner = safe($_POST['Banner'],'SQL');
$Base = safe($_POST['Base'],'SQL');
$Habbo = safe($_POST['Habbo'],'SQL');
if(isset($Host) && isset($Port) && isset($Mus) && isset($Variables) && isset($Texts) && isset($Override) && isset($Productdata) && isset($Furnidata) && isset($Banner) && isset($Base) && isset($Habbo)) {
$bdd->exec("UPDATE `retrophp_swfs` SET `Host` = '".safe($Host,'SQL')."', `Port` = '".safe($Port,'SQL')."', `Mus` = '".safe($Mus,'SQL')."', `Variables` = '".safe($Variables,'SQL')."', `Texts` = '".safe($Texts,'SQL')."', `Override` = '".safe($Override,'SQL')."', `Productdata` = '".safe($Productdata,'SQL')."', `Furnidata` = '".safe($Furnidata,'SQL')."', `Banner` = '".safe($Banner,'SQL')."', `Base` = '".safe($Base,'SQL')."', `Habbo` = '".safe($Habbo,'SQL')."' WHERE `id` = 1");
$User->AddLogs($user['username'],'Configuration du serveur.');
$post_config = true;
}
}

if(isset($_POST['MaintenanceTrue']))
{
$MaintenanceTrue = safe($_POST['MaintenanceTrue'],'SQL');
if(isset($MaintenanceTrue)) {
$bdd->exec("UPDATE `retrophp_settings` SET `Maintenance` = 'true' WHERE `Maintenance` = 'false'");
$User->AddLogs($user['username'],'Maintenance activer.');
$post_config = true;
}
}

if(isset($_POST['MaintenanceFalse']))
{
$MaintenanceFalse = safe($_POST['MaintenanceFalse'],'SQL');
if(isset($MaintenanceFalse)) {
$bdd->exec("UPDATE `retrophp_settings` SET `Maintenance` = 'false' WHERE `Maintenance` = 'true'");
$User->AddLogs($user['username'],'Maintenance désactiver.');
$post_config = true;
}
}

if(isset($_POST['HotelTrue']))
{
$HotelTrue = safe($_POST['HotelTrue'],'SQL');
if(isset($HotelTrue)) {
$bdd->exec("UPDATE `retrophp_settings` SET `Hotel` = 'true' WHERE `Hotel` = 'false'");
$User->AddLogs($user['username'],'Ouverture de l\'hôtel.');
$post_config = true;
}
}

if(isset($_POST['HotelFalse']))
{
$HotelFalse = safe($_POST['HotelFalse'],'SQL');
if(isset($HotelFalse)) {
$bdd->exec("UPDATE `retrophp_settings` SET `Hotel` = 'false' WHERE `Hotel` = 'true'");
$User->AddLogs($user['username'],'Fermeture de l\'hôtel.');
$post_config = true;
}
}

if(isset($_POST['Emulator']))
{
$Emulator = safe($_POST['Emulator'],'SQL');
if(isset($Emulator)) {
$bdd->exec("UPDATE `retrophp_settings` SET `Emulator` = '".safe($Emulator,'SQL')."'");
$User->AddLogs($user['username'],'Changement d\'emulateur.');
$post_config = true;
}
}

if(IP_ADMIN_BACKUP == $_SERVER["REMOTE_ADDR"]) {
if(isset($_POST['backup']))
{
$User->AddLogs($user['username'],'Sauvegarde de la base de données.');
error_reporting(E_ALL);
header('Content-type: text/plain');

### KEY DE SECURITER ###
$dumpfile = '../includes/backup/'.date('Y-m-d').'_KEY_'.$generate_key.'.sql';
$fp = fopen($dumpfile, 'w');
if (!is_resource($fp)) {
    exit('Backup failed: unable to open dump file');
}

$out = '-- SQL Dump
--
-- Generation: '.print('r').'
-- MySQL version: '.mysql_get_server_info().'
-- PHP version: '.phpversion().'
 
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
';
 
fwrite($fp, $out);
$out = '';
 
$tables = mysql_query("SHOW TABLE STATUS");
$c = 0;
while ($table = mysql_fetch_assoc($tables)) {
 
    $tableName = $table['Name'];
 
    $tmp = mysql_query("SHOW CREATE TABLE `$tableName`");
 
    $create = mysql_fetch_assoc($tmp);
    $out .= "\n\n--\n-- Table structure: `$tableName`\n--\n\n".$create['Create Table'].' ;';
 
    mysql_free_result($tmp);
    unset($tmp);
 
    fwrite($fp, $out);
    $out = '';

    $tmp = mysql_query("SHOW COLUMNS FROM `$tableName`");
    $rows = array();
    while ($row = mysql_fetch_assoc($tmp)) {
        $rows[] = $row['Field'];
    }
 
    mysql_free_result($tmp);
    unset($tmp, $row);
 
    $tmp = mysql_query("SELECT * FROM `$tableName`");
    $count = mysql_num_rows($tmp);
 
    if ($count > 0) {
 
        $out .= "\n\n--\n-- Table data: `$tableName`\n--";
        $out .= "\nINSERT INTO `$tableName` (`".implode('`, `', $rows)."`) VALUES ";
 
        $i = 1;
        while ($entry = mysql_fetch_assoc($tmp)) {
 
            $out .= "\n(";
            $tmp2 = array();
 
            foreach ($rows as $row) {
                $tmp2[] = "'" . mysql_real_escape_string($entry[$row]) . "'";
            }
 
            $out .= implode(', ', $tmp2);
            $out .= $i++ === $count ? ');' : '),';
 
            fwrite($fp, $out);
            $out = '';
        }
 
        mysql_free_result($tmp);
        unset($tmp, $tmp2, $i, $count, $entry);
 
    }
 
    $c++;
}
 
fclose($fp);
Redirect("./".$dumpfile);
}
}

include './templates/header.php';
?>
<div class="row">
<?php if($post_config == true){ ?>
<div class="col-md-12">
	<article class="widget" class="close" data-dismiss="alert" aria-hidden="true">
					<header class="widget__header">
					</header>
						<div class="alert alert-warning alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<div class="media">
								<figure class="pull-left alert--icon">
									<i class="pe-7s-attention"></i>
								</figure>
								<div class="media-body">
									<h3 class="alert--title">Está hecho!</h3> 
									<p class="alert--text">Se Realizo el cambio Correctamente.</p>
								</div>
							</div>
						</div>
					</article>
						</div>
						<?php } ?>
			<div class="col-md-7">
				<article class="widget">
					<header class="widget__header">
						<h3 class="widget__title">Configuración básica</h3>
					</header>

					<div class="widget__content">
						<form method="post">
						<p class="alert--text">Nombre del sitio Web.</p>
						<input type="text" class="input-text" name="Name" value="<?php print Settings('Name'); ?>"/>
						<p class="alert--text">URL DEl Hotel.</p>
						<input type="text" class="input-text" name="Url" value="<?php print Settings('Url'); ?>"/>
						<p class="alert--text">Palabra Clave.</p>
						<input type="text" class="input-text" name="Keyword" value="<?php print Settings('Keyword'); ?>"/>
						<p class="alert--text">Descripción del sitio.</p>
						<input type="text" class="input-text" name="Description" value="<?php print Settings('Description'); ?>"/>
						<p class="alert--text">Email de contacto.</p>
						<input type="text" class="input-text" name="Contact" value="<?php print Settings('Contact'); ?>"/>
						<button class="btn btn-light pull-right" type="submit">Realizar Cambios</button>
						<div class="clearfix"></div>
					</form>
					</article>
				</div>

				<div class="col-md-5">
				<article class="widget">
					<header class="widget__header">
						<h3 class="widget__title">Registro Inicial</h3>
					</header>

					<div class="widget__content">
						<form method="post">
						<p class="alert--text">Creditos de Inicio.</p>
						<input type="text" class="input-text" name="Credits" value="<?php print Settings('Credits'); ?>"/>
						<p class="alert--text">Mission al registrar.</p>
						<input type="text" class="input-text" name="Mission" value="<?php print Settings('Mission'); ?>"/>
						<p class="alert--text">Duckets/Pixels al registrar.</p>
						<input type="text" class="input-text" name="Pixels" value="<?php print Settings('Pixels'); ?>"/>
						<p class="alert--text">Diamantes al registrar.</p>
						<input type="text" class="input-text" name="Jetons" value="<?php print Settings('Jetons'); ?>"/>
						<p class="alert--text">Rango por defecto.</p>
						<input type="text" class="input-text" name="Rank" value="<?php print Settings('Rank'); ?>"/>
						<button class="btn btn-light pull-right" type="submit">Realizar Cambios</button>
						<div class="clearfix"></div>
						</form>
					</article>
				</div>

				<div class="col-md-5">
				<article class="widget">
					<header class="widget__header">
						<h3 class="widget__title">Systema</h3>
					</header>

					<div class="widget__content">
						<form method="post">
						<table style="width: 370px;">
						<tbody>
						<tr>
						<td><p class="alert--text">Mantenimiento.</p>
						<?php if(Settings('Maintenance') == 'false') { ?>
						<button class="btn btn-red" type="submit" name="MaintenanceTrue">Activar</button>
						<?php } if(Settings('Maintenance') == 'true') { ?>
						<button class="btn btn-green" type="submit" name="MaintenanceFalse">Desactivar</button>
						<?php } ?></td>
						<td><p class="alert--text">Estado del Hotel.</p>
						<?php if(Settings('Hotel') == 'true') { ?>
						<button class="btn btn-red" type="submit" name="HotelFalse">Cerrar</button>
						<?php } if(Settings('Hotel') == 'false' or Settings('Hotel') == 'reboot') { ?>
						<button class="btn btn-green" type="submit" name="HotelTrue">Abrir</button>
						<?php } ?></td>
						<?php if(IP_ADMIN_BACKUP == $Auth->IP()) { ?>
						<td>
						<p class="alert--text">Base de Datos.</p>
						<button class="btn btn-warning" type="submit" name="backup">Guardar</button>
						</td>
						<?php } ?>
						</tr>
						</tbody>
						</table>

						<p class="alert--text">Elegir Emulador. al realizar esto debera editar el client.php</p>
						<div class="dropdown">
						<select name="Emulator" class="dropdown-select">
						<option value="<?php print Settings('Emulator'); ?>"><?php print Settings('Emulator'); ?></option>
						<?php if (Settings('Emulator') != 'Phoenix') { ?><option value="Phoenix">Phoenix</option><?php } ?>
						<?php if (Settings('Emulator') != 'Butterfly') { ?><option value="Butterfly">Butterfly</option><?php } ?>
						<?php if (Settings('Emulator') != 'Mercury') { ?><option value="Mercury">Mercury</option><?php } ?>
						<?php if (Settings('Emulator') != 'Azure') { ?><option value="Azure">Azure</option><?php } ?>
						</select>
						</div>

						<button class="btn btn-light pull-right" type="submit">Realizar Cambios</button>
						<div class="clearfix"></div>
					</form>
					</article>

				<article class="widget">
					<header class="widget__header">
						<h3 class="widget__title">Redes Sociales</h3>
					</header>

					<div class="widget__content">
						<form method="post">
						<p class="alert--text">Facebook.</p>
						<input type="text" class="input-text" name="Facebook" value="<?php print Settings('Facebook'); ?>"/>
						<p class="alert--text">Twitter.</p>
						<input type="text" class="input-text" name="Twitter" value="<?php print Settings('Twitter'); ?>"/>
						<p class="alert--text">Youtube.</p>
						<input type="text" class="input-text" name="Youtube" value="<?php print Settings('Youtube'); ?>"/>
						<button class="btn btn-light pull-right" type="submit">Realizar Cambios</button>
						<div class="clearfix"></div>
					</form>
					</article>

					<article class="widget">
					<header class="widget__header">
						<h3 class="widget__title">Fb Connect</h3>
					</header>

					<div class="widget__content">
						<form method="post">
						<p class="alert--text">APP_ID.</p>
						<input type="text" class="input-text" name="APP_ID" value="<?php print Settings('APP_ID'); ?>"/>
						<p class="alert--text">APP_SECRET.</p>
						<input type="text" class="input-text" name="APP_SECRET" value="<?php print Settings('APP_SECRET'); ?>"/>
						<button class="btn btn-light pull-right" type="submit">Realizar Cambios</button>
						<div class="clearfix"></div>
					</form>
					</article>
				</div>

				<div class="col-md-7">
				<article class="widget">
					<header class="widget__header">
						<h3 class="widget__title">Configuracion Del Client. editar, Client.php</h3>
					</header>

					<div class="widget__content">
						<form method="post">
						<p class="alert--text">IP Servidor .</p>
						<input type="text" class="input-text" name="Host" value="<?php print Serveur('Host'); ?>"/>
						<p class="alert--text">Puerto.</p>
						<input type="text" class="input-text" name="Port" value="<?php print Serveur('Port'); ?>"/>
						<p class="alert--text">Puerto Mus.</p>
						<input type="text" class="input-text" name="Mus" value="<?php print Serveur('Mus'); ?>"/>
						<p class="alert--text">Variables.</p>
						<input type="text" class="input-text" name="Variables" value="<?php print Serveur('Variables'); ?>"/>
						<p class="alert--text">Texts.</p>
						<input type="text" class="input-text" name="Texts" value="<?php print Serveur('Texts'); ?>"/>
						<?php if(Settings('Emulator') == "Azure" or Settings('Emulator') == "Mercury") { ?>
						<p class="alert--text">Override.</p>
						<input type="text" class="input-text" name="Override" value="<?php print Serveur('Override'); ?>"/>
						<?php } else { ?>
						<input type="hidden" class="input-text" name="Override" value="<?php print Serveur('Override'); ?>"/>
						<?php } ?>
						<?php if(Settings('Emulator') == "Azure" or Settings('Emulator') == "Mercury" or Settings('Emulator') == "Butterfly") { ?>
						<p class="alert--text">Furnidata.</p>
						<input type="text" class="input-text" name="Furnidata" value="<?php print Serveur('Furnidata'); ?>"/>
						<p class="alert--text">Productdata.</p>
						<input type="text" class="input-text" name="Productdata" value="<?php print Serveur('Productdata'); ?>"/>
						<p class="alert--text">Banner.</p>
						<input type="text" class="input-text" name="Banner" value="<?php print Serveur('Banner'); ?>"/>
						<?php } else { ?>
						<input type="hidden" class="input-text" name="Furnidata" value="<?php print Serveur('Furnidata'); ?>"/>
						<input type="hidden" class="input-text" name="Productdata" value="<?php print Serveur('Productdata'); ?>"/>
						<input type="hidden" class="input-text" name="Banner" value="<?php print Serveur('Banner'); ?>"/>
						<?php } ?>
						<p class="alert--text">Base.</p>
						<input type="text" class="input-text" name="Base" value="<?php print Serveur('Base'); ?>"/>

						<p class="alert--text">Habbo SWF.</p>
						<input type="text" class="input-text" name="Habbo" value="<?php print Serveur('Habbo'); ?>"/>
						<button class="btn btn-light pull-right" type="submit">Realizar Cambios</button>
						<div class="clearfix"></div>
						</form>
					</article>
				</div>
			</div>
<?php include './templates/footer.php'; ?>