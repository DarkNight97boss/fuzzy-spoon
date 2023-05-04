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
	$page = "HK Modifica utente";
	require_once 'templates/header.php';
	
	$do = $_GET['do'];
	$key = $user->filtertext($_GET['key']);
	if($do == "mod"){
		$get_ranks = $db->query("SELECT * FROM users WHERE id = '$key' LIMIT 1");
		while($row = $get_ranks->fetch_array()){
			$nomeutente = $row['username'];
			$rank = $row['rank'];
			$mail = $row['mail'];
			$credits = $row['credits'];
			$vippoints = $row['vip_points'];
			$apoints = $row['activity_points'];
			$gender = $row['gender'];
			$motto = $row['motto'];
			$rruolo = $row['rank_lijst'];
	}
	}
	
		
	if(isset($_POST['moduser'])){
		
		$nnusername = mysql_real_escape_string($_POST['name']);
		$nnrank = mysql_real_escape_string($_POST['rankutente']);
		$nnruolo = mysql_real_escape_string($_POST['ruoloutente']);
		$nncrediti = mysql_real_escape_string($_POST['crediti']);
		$nndiamanti = mysql_real_escape_string($_POST['diamanti']);
		$nnduckets = mysql_real_escape_string($_POST['duckets']);
		$nngenere = mysql_real_escape_string($_POST['genere']);
		$nnemail = mysql_real_escape_string($_POST['email']);
		$nnid = mysql_real_escape_string($_POST['iduser']);
		$nnmotto = mysql_real_escape_string($_POST['motto']);
		
		$nusername = htmlentities($nnusername);
		$nrank = htmlentities($nnrank);
		$nruolo = htmlentities($nnruolo);
		$ncrediti = htmlentities($nncrediti);
		$ndiamanti = htmlentities($nndiamanti);
		$nduckets = htmlentities($nnduckets);
		$ngenere = htmlentities($nngenere);
		$nemail = htmlentities($nnemail);
		$nid = htmlentities($nnid);
		$nmotto = htmlentities($nnmotto);
		
			$result = mysql_query("UPDATE users SET username = '$nusername', mail = '$nemail', rank = '$nrank', rank_lijst = '$nruolo', credits = '$ncrediti', vip_points = '$ndiamanti', activity_points = '$nduckets', motto = '$nmotto', gender = '$ngenere' WHERE id = '$nid'") or die(mysql_error());
			$_SESSION['HK_GOOD_RETURN'] = "Utente modificato correttamente";
			header("LOCATION: ". HK ."/listautenti.php");		
	}
?>
<?php if ($user->Get('rank') > 6) : ?>
		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
			
				<div id="box">
					<div class="title red"><b>Modifica utente</b></div>
					<div class="content-box" id="addban">	
						<form action="<?php echo HK; ?>/modificautente.php" method="post">
							<table width='100%' cellspacing='0' cellpadding='5' align='center' border='0'>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Nome</b><div class='graytext'>Utente</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type='text' name="name" id="name" size='30' class='textinput' value="<?php echo $nomeutente?>" required></td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>EMail</b><div class='graytext'>Email utente</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="email" id="email" style="margin-top: 10px;" value="<?php echo $mail?>" required><br /><br>
								</td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Crediti</b><div class='graytext'>Crediti utente</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="crediti" id="crediti" style="margin-top: 10px;" value="<?php echo $credits?>" required><br /><br>
								</td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Diamanti</b><div class='graytext'>Diamanti utente</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="diamanti" id="diamanti" style="margin-top: 10px;" value="<?php echo $vippoints?>" required><br /><br>
								</td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Duckets</b><div class='graytext'>Duckets utente</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="duckets" id="duckets" style="margin-top: 10px;" value="<?php echo $apoints?>" required><br /><br>
								</td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Genere</b><div class='graytext'>M o F</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="genere" id="genere" style="margin-top: 10px;" value="<?php echo $gender?>" required><br /><br>
								</td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Motto</b><div class='graytext'>Motto utente</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="motto" id="motto" style="margin-top: 10px;" value="<?php echo $motto?>" required><br /><br>
								</td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Rank</b><div class='graytext'>Seleziona il rank</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'>        
										<select name='rankutente' id="rankutente">
											<option value="1">1 (Utente normale)</option>
											<option value="3">3 (Aiutante)</option>
											<option value="4">4 (Arbitro)</option>
											<option value="5">5 (Moderatore)</option>
											<option value="6">6 (Amministratore)</option>
											<option value="7">7 (Amministratore Generale)</option>
											<option value="8">8 (Gestore)</option>
											<?php if ($user->Get('rank') == 9) { echo '<option value="9">9 (Fondatore)</option>';} ?>
										</select></td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Ruolo</b><div class='graytext'>Ruolo utente</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="ruoloutente" id="ruoloutente" style="margin-top: 10px;" value="<?php echo $rruolo?>"><br /><br>
								</td>
								</tr>
								<input type='hidden' value='<?php echo $key ?>' name='iduser' id='iduser'>
								<tr><td align="center" class="tablesubheader" colspan="2"><input type="submit" name="moduser" value="Conferma modifiche" class="realbutton" accesskey="s"></td></tr>
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