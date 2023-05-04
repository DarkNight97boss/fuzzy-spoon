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
ob_start();
	require_once '../inc/core.php';
	require_once '../inc/databasegiovanni.php';
	$user->logged('yes');
	$user->hk();
	$tab = "4";
	$page = "HK Distintivi";
	require_once 'templates/header.php';
		
		
	if(isset($_POST['daibadge'])){
		if(empty($_POST['name'])){
			$_SESSION['HK_ERROR_RETURN'] = "Inserisci il nome!";	
			header("LOCATION: ". HK ."/badges.php");		
		}
		
		$queryidutente = mysql_query("SELECT * FROM users WHERE username = '".$user->filtertext($_POST['name'])."' LIMIT 1") or die(mysql_error()); 
			$idutente = mysql_fetch_assoc($queryidutente);
			$userid = $idutente['id'];
		
			$queryCercaUtente = mysql_query("SELECT COUNT(id) AS esiste FROM users WHERE username = '".$user->filtertext($_POST['name'])."' LIMIT 1") or die(mysql_error()); 
			$cercautente = mysql_fetch_assoc($queryCercaUtente);
			if ($cercautente['esiste']==0) {
				$_SESSION['HK_ERROR_RETURN'] = "Questo utente non esiste";
				header("LOCATION: ". HK ."/badges.php");		
			}
			
			$queryCheckUtente = mysql_query("SELECT COUNT(id) AS esiste FROM user_badges WHERE user_id = '$userid' AND badge_id = '".$user->filtertext($_POST['badgecode'])."'") or die(mysql_error()); 
			$checkutente = mysql_fetch_assoc($queryCheckUtente);
			if ($checkutente['esiste']==1) {
				$_SESSION['HK_ERROR_RETURN'] = "Questo utente possiede già il badge";
				header("LOCATION: ". HK ."/badges.php");		
			}
			
		else {
			$result = mysql_query("INSERT INTO user_badges (user_id,badge_id) VALUES ('$userid','".$user->filtertext($_POST['badgecode'])."')") or die(mysql_error());
					$_SESSION['HK_GOOD_RETURN'] = "Abbiamo aggiunto correttamente il distintivo!";
					header("LOCATION: ". HK ."/badges.php");		
				
			}
	}
?>
<?php if ($user->Get('rank') > 5) : ?>
		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
			
				<div id="box">
					<div class="title red"><b>Distintivi</b></div>
					<div class="content-box" id="addban">	
						<form action="<?php echo HK; ?>/badges.php" method="post" name="dairank" id="dairank">
							<table width='100%' cellspacing='0' cellpadding='5' align='center' border='0'>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Nome</b><div class='graytext'>Utente</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type='text' name="name" id="name" value="" size='30' class='textinput'></td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Distintivo</b><div class='graytext'>Distintivo da assegnare</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="badgecode" id="badgecode" style="margin-top: 10px;" value=""><br /><br>
								</td>
								</tr>
								<tr><td align="center" class="tablesubheader" colspan="2"><input type="submit" name="daibadge" value="Assegna distintivo" class="realbutton" accesskey="s"></td></tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
		</div>

				</div>
	</div>
	<?php else : header("Location: nonautorizzato.php"); ?>
        <?php endif; ?>
<?php ob_end_flush(); ?>