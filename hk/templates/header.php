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

if(!defined("TwinkieCMS")){ header("LOCATION: ../index.php"); exit; }
if($_SESSION['HK_GOOD_RETURN']){ $error = $_SESSION['HK_GOOD_RETURN']; unset($_SESSION['HK_GOOD_RETURN']);}
if($_SESSION['HK_ERROR_RETURN']){ $error = $_SESSION['HK_ERROR_RETURN']; unset($_SESSION['HK_ERROR_RETURN']);}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
	<title><?php echo SHORTNAME; ?> ~ <?php echo $page; ?></title>
	<link rel="shortcut icon" href="/hk/images/favicon.ico" type="image/vnd.microsoft.icon">
		<link rel="stylesheet" href="/hk/css/manage.css" type="text/css"/>
		<link rel="stylesheet" href="/hk/css/manage-nav.css" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="/hk/fonts/Brannboll_Fet/stylesheet.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/hk/ckeditor/ckeditor.js"></script>
									<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
	<?php if($error){ ?>
	<script>
		$(document).ready(function(){
		  $("#close").click(function(){
			$("#overlay").fadeOut()
		  });
		});
		$(document).ready(function(){
			$("#overlay").fadeIn()
		});
	</script>
	<?php } ?>
</head>
<body>
	<?php if($error){ ?>
	<div id="overlay" style="display: none;">
		<div id="type">
			<div id="alert"><div id="close">X</div><?php echo $error; ?></div>
		</div>
	</div>
	<?php } ?>
	<div id="hk">
		<div id="nav">
			<div id="staff-user">
				
				<button id="staff-info"><?php echo $user->Get('username'); ?>, 
				<?php if ($user->Get('rank')==9) echo 'Fondatore';?>
				<?php if ($user->Get('rank')==8) echo 'Gestore';?>
				<?php if ($user->Get('rank')==7) echo 'Amm. Generale';?>
				<?php if ($user->Get('rank')==6) echo 'Amministratore';?>
				<?php if ($user->Get('rank')==5) echo 'Moderatore';?>
				</button>
				<div id="nav-links">
					<a href="<?php echo HK; ?>/main.php"><button id="staff-info-link">Home</button></a>
					<a href="<?php echo HK; ?>/bans.php"><button id="staff-info-link">Gestione Bans</button></a>
					<a href="<?php echo HK; ?>/news.php"><button id="staff-info-link">Gestione News</button></a>
					<?php if ($user->Get('rank') > 5) echo '<a href="monete.php"><button id="staff-info-link">Dai Monete</button></a>';?>
					<?php if ($user->Get('rank') > 5) echo '<a href="badges.php"><button id="staff-info-link">Dai Distintivo</button></a>';?>
					<?php if ($user->Get('rank') > 5) echo '<a href="rimuovibadge.php"><button id="staff-info-link">Rimuovi Distintivo</button></a>';?>
					<?php if ($user->Get('rank') > 6) echo '<a href="vip.php"><button id="staff-info-link">Dai VIP</button></a>';?>
					<?php if ($user->Get('rank') > 6) echo '<a href="spammer.php"><button id="staff-info-link">Ranka Spammer</button></a>';?>
					<?php if ($user->Get('rank') > 6) echo '<a href="hubixx.php"><button id="staff-info-link">Ranka Guida</button></a>';?>
					<?php if ($user->Get('rank') > 7) echo '<a href="listautenti.php"><button id="staff-info-link">Gestione Utenti</button></a>';?>
					<?php if ($user->Get('rank') > 6) echo '<a href="ranks.php"><button id="staff-info-link">Gestione Rank</button></a>';?>
					<?php if ($user->Get('rank') > 5) echo '<a href="aggiungibadge.php"><button id="staff-info-link">Aggiungi Distintivo</button></a>';?>
					<a href="<?php echo PATH; ?>/logout.php"><button id="staff-info-link" class="exit">Uscire</button></a>
					<a href="<?php echo PATH; ?>/index.php"><button id="staff-info-link" class="retry">Tornare alla Home</button></a>
				</div>
			</div>
		</div>