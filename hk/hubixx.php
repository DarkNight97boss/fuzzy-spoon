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
	$page = "HK Staff";
	require_once 'templates/header.php';
		
	$do = $_GET['do'];
	$key = $user->filtertext($_GET['key']);
	if($do == "dele"){
		$check2 = $db->query("UPDATE users SET hubixx = '0' WHERE id = '$key'");
		$_SESSION['HK_GOOD_RETURN'] = "Utente srankato con successo";
		header("LOCATION: ". HK ."/hubixx.php");		
	}
		
	if(isset($_POST['dairank'])){
		if(empty($_POST['ruoloutente']) || empty($_POST['name'])){
			$_SESSION['HK_ERROR_RETURN'] = "Riempi tutti i campi!";	
			header("LOCATION: ". HK ."/hubixx.php");		
		}
			$queryCercaUtente = mysql_query("SELECT COUNT(id) AS esiste FROM users WHERE username = '".$user->filtertext($_POST['name'])."' LIMIT 1") or die(mysql_error()); 
			$cercautente = mysql_fetch_assoc($queryCercaUtente);
			if ($cercautente['esiste']==0) {
				$_SESSION['HK_ERROR_RETURN'] = "Questo utente non esiste";
				header("LOCATION: ". HK ."/hubixx.php");		
			}
		else {
			$result = mysql_query("UPDATE users SET hubixx = '1', rank_lijst = '".$user->filtertext($_POST['ruoloutente'])."' WHERE username = '".$user->filtertext($_POST['name'])."'") or die(mysql_error());
					$_SESSION['HK_GOOD_RETURN'] = "Utente rankato correttamente";
					header("LOCATION: ". HK ."/hubixx.php");		
				
			}
	}
?>
<?php if ($user->Get('rank') > 6) : ?>
		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
			
				<div id="box">
					<div class="title yellow"><b>HubixX di Hubix Hotel</b></div>
					<div class="content-box" style="height: 200px;width: 908px;
overflow: scroll;
display: inline-block;">
						
						 <table class="striped">
							<thead>
								<tr>
									<th>ID Utente</th>
									<th class="right">Username</th>
									<th class="right">Stato</th>
									<th class="right">Rank</th>
									<th class="right">Ruolo</th>
									<th class="right">Rimuovere Rank</th>
								</tr>
								
							</thead>
							<tbody>
								<hr>
								<?php	
									$get_ranks = $db->query("SELECT * FROM users WHERE hubixx = '1' ORDER BY id ASC");
									while($row = $get_ranks->fetch_array()){
										
									if($row['online']==1){
									$stat = "<font color='green'>Online</font>";
									}
									
									if($row['online']==0){
									$stat = "<font color='red'>Offline</font>";
									}
								?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td class="right"><span class="<?php echo $color; ?>"><?php echo $row['username']; ?></span></td>
									<td class="right"><span class="<?php echo $color; ?>"><?php echo $stat; ?></span></td>
									<td class="right"><?php echo $row['rank']; ?></td>
									<td class="right"><?php echo $row['rank_lijst']; ?></td>
									<td class="right"><center><a href="<?php echo HK; ?>/hubixx.php?do=dele&key=<?php echo $row['id']; ?>"><img src="<?php echo CDN; ?>/images/del.gif"></a></center></td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot></tfoot>
						</table>
					</div>
				</div>
		

				<div id="box">
					<div class="title green"><b>Ranking</b></div>
					<div class="content-box" id="addban">	
						<form action="<?php echo HK; ?>/hubixx.php" method="post" name="dairank" id="dairank">
							<table width='100%' cellspacing='0' cellpadding='5' align='center' border='0'>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Nome</b><div class='graytext'>Utente che vuoi rankare</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type='text' name="name" id="name" value="" size='30' class='textinput'></td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Ruolo</b><div class='graytext'>Ruolo dell'utente</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="ruoloutente" id="ruoloutente" style="margin-top: 10px;" value=""><br /><br>
								</td>
								</tr>
								<tr><td align="center" class="tablesubheader" colspan="2"><input type="submit" name="dairank" value="Dai rank" class="realbutton" accesskey="s"></td></tr>
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