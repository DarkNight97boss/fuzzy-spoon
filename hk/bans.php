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
	$user->logged('yes');
	$user->hk();
	$tab = "4";
	$page = "HK Bans";
	require_once 'templates/header.php';
		
	$do = $_GET['do'];
	$key = $user->filtertext($_GET['key']);
	if($do == "dele"){
		$check2 = $db->query("DELETE FROM bans WHERE id = '{$key}' LIMIT 1");
		$_SESSION['HK_GOOD_RETURN'] = "Ban borrado Correctamente";
		header("LOCATION: ". HK ."/bans.php");		
	}
		
	if(isset($_POST['giveban'])){
		$check = $db->query("SELECT * FROM users WHERE username = '".$user->filtertext($_POST['name'])."' LIMIT 1");
		$row = $check->fetch_array();
		if(empty($_POST['length']) || empty($_POST['valorban']) || empty($_POST['name']) || empty($_POST['reason'])){
			$_SESSION['HK_ERROR_RETURN'] = "Hey weon no dejes todo vacio XD";	
			header("LOCATION: ". HK ."/bans.php");		
		}else{
			if($check->num_rows > 0){
				if($row['rank'] > $user->Get('rank')){
					$_SESSION['HK_ERROR_RETURN'] = "Non posso bannare queste utente";	
					header("LOCATION: ". HK ."/bans.php");		
				}else{
					if($_POST['valorban'] == "2"){
						$banuuu = $row['ip_last'];
						$baneee = "machine";
					}else{
						$banuuu = filter($_POST['name']);
						$baneee = "user";
					}
						
					$dbAdd= array();
					$dbAdd['bantype'] = $baneee;
					$dbAdd['value'] = $banuuu;
					$dbAdd['reason'] = $user->filtertext($_POST['reason']);
					$dbAdd['expire'] = time() + $user->filtertext($_POST['length']);
					$dbAdd['added_by'] = $user->Get('username');
					$dbAdd['added_date'] = time();
					$query = $db->insertInto('bans', $dbAdd);
					$_SESSION['HK_GOOD_RETURN'] = "El usuario fue baneado exitosamente";
					header("LOCATION: ". HK ."/bans.php");		
				}
			}else {
				$_SESSION['HK_ERROR_RETURN'] = "No se puede banear al usuario";
				header("LOCATION: ". HK ."/bans.php");		
			}
		}
		
	}
	
?>

		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
			
				<div id="box">
					<div class="title yellow"><b>Utenti Bannati</b></div>
					<div class="content-box" style="height: 200px;width: 908px;
overflow: scroll;
display: inline-block;">
						
						 <table class="striped">
							<thead>
								<tr>
									<th>Utente</th>
									<th class="right">Stato</th>
									<th class="right">Valore</th>
									<th class="right">Motivo</th>
									<th class="right">Bannato per</th>
									<th class="right">IP</th>
									<th class="right">Da</th>
									<th class="right">Bandito</th>
									<th class="right">IP-Ban</th>
									<th class="right">Rimuovere Ban</th>
								</tr>
								
							</thead>
							<tbody>
								<hr>
								<?php	
									$get_bans = $db->query("SELECT * FROM bans ORDER BY id DESC");
									while($row = $get_bans->fetch_array()){

									if($row['bantype'] == 'user'){
										$userdata = $db->query("SELECT * FROM users WHERE username = '".$row['value']."'");
										$users = $userdata->fetch_array();

										$ip_last = $users['ip_last'];
									}else{
										$ip_last = '-/-';
									}
									$minuten = $row['expire'] - time();
									if(time() >= $row['expire']){
									$stat = "Expirado";
									$color="online";
									}elseif(time() + 3600 >= $row['expire']){
									if(date('i', $minuten) > 0){
									$stat = "(Hace ".date('i', $minuten)." minutos)";
									$color="offline";
									}else{
									$stat = "(Hace ".date('s', $minuten)." segundos)";
									$color="offline";
									} }else{
									$stat = "Activado";
									$color="offline";
									}
									if($row['bantype'] == 'user'){ $img = "del"; }else{ $img = "check"; }
								?>
								<tr>
									<td><?php echo $row['id']; ?></td>
									<td class="right"><span class="<?php echo $color; ?>"><?php echo $stat; ?></span></td>
									<td class="right"><?php echo $row['value']; ?></td>
									<td class="right"><textarea disabled="disabled"><?php echo $row['reason']; ?></textarea></td>
									<td class="right"><?php echo $row['added_by']; ?></td>
									<td class="right"><?php echo $ip_last; ?></td>
									<td class="right"><?php echo $row['added_date']; ?></td>
									<td class="right"><?php echo date('d.m.Y - H:i:s', $row['expire']); ?></td>
									<td class="right"><center><img src="<?php echo CDN; ?>/images/<?php echo $img; ?>.gif"></center></td>
									<td class="right"><center><a href="<?php echo HK; ?>/bans.php?do=dele&key=<?php echo $row['id']; ?>"><img src="<?php echo CDN; ?>/images/del.gif"></a></center></td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot></tfoot>
						</table>
					</div>
				</div>
		

				<div id="box">
					<div class="title green"><b>Tools Ban</b></div>
					<div class="content-box" id="addban">	
						<form action="<?php echo HK; ?>/bans.php?some" method="post" name="theAdminForm" id="theAdminForm">
							<table width='100%' cellspacing='0' cellpadding='5' align='center' border='0'>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Nome</b><div class='graytext'>Utente che vuoi bannare</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type='text' name='name' value="" size='30' class='textinput'></td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Durata</b><div class='graytext'>Tempo </div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><script type="text/javascript">
								function banPreset(val)
								{
									document.getElementById('banlength').value = val;
								}
								</script>

									  <div class="input-control span2">
								<input type="text" name="length" id="banlength" style="margin-top: 10px;" value=""> (secondi)<br /><br>
									  </div>
								<small>
								<a href="#addban" onclick="banPreset(3600);">1 ora,</a>
								<a href="#addban" onclick="banPreset(7200);">2 ore,</a>
								<a href="#addban" onclick="banPreset(10800);">3 ore,</a> 
								<a href="#addban" onclick="banPreset(14400);">4 ore,</a>
								<a href="#addban" onclick="banPreset(43200);">12 ore,<br><br></a> 
								<a href="#addban" onclick="banPreset(86400);">1 giorno,</a> 
								<a href="#addban" onclick="banPreset(259200);">3 giorni,<br><br></a> 
								<a href="#addban" onclick="banPreset(604800);">1 settimana,</a> 
								<a href="#addban" onclick="banPreset(1209600);">2 settimane,<br><br></a> 
								<a href="#addban" onclick="banPreset(2592000);">1 mese,</a> 
								<a href="#addban" onclick="banPreset(7776000);">3 mesi,<br><br></a> 
								<a href="#addban" onclick="banPreset(1314000);">1 anno,</a> 
								<a href="#addban" onclick="banPreset(2628000);">2 anni,</a> 
								<a href="#addban" onclick="banPreset(360000000);">> 10 anni</a></small><br />
								</td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Bannato per</b><div class='graytext'>IP o Utente?</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'>        <select name='valorban'>
											<option value='1'>Bannato per Utente</option>
											<option value='2'>Bannato per IP</option>
										</option>
										</select></td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Motivo</b><div class='graytext'>O motivo per cui è stato bannato</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type='text' name='reason' value="" size='30' class='textinput'></td>
								</tr>
								<tr>
								</tr><tr><td align="center" class="tablesubheader" colspan="2"><input type="submit" name="giveban" value="Salvar" class="realbutton" accesskey="s"></td></tr>

								</tbody>
							</table>
						</form>
					</div>
				</div>
		</div>

				</div>
	</div>
<?php ob_end_flush(); ?>