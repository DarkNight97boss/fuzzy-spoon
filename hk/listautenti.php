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
	$page = "HK Lista Utenti";
	require_once 'templates/header.php';
?>
<?php if ($user->Get('rank') > 6) : ?>
		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
					
				<div id="box">
					<div class="title yellow"><b>Utenti di Hubix Hotel</b></div>
					<div class="content-box" style="height: 400px;width: 908px;
overflow: scroll;
display: inline-block;">
						
						 <table class="striped">
							<thead>
								<tr>
									<th>ID Utente</th>
									<th class="right">Username</th>
									<th class="right" width="50px">Stato</th>
									<th class="right">Rank</th>
									<th class="right" width="70px">Crediti</th>
									<th class="right" width="70px">Duckets</th>
									<th class="right" width="70px">Diamanti</th>
									<th class="right" width="250px">E-Mail</th>
									<th class="right" width="50px">VIP</th>
									<th class="right">Modifica utente</th>
								</tr>
								
							</thead>
							<tbody>
								<hr>
								<?php
									if($user->Get('rank') < 8){
									$get_ranks = $db->query("SELECT * FROM users WHERE rank < '8' ORDER BY id ASC");
									}
									if($user->Get('rank') < 9){
									$get_ranks = $db->query("SELECT * FROM users WHERE rank < '9' ORDER BY id ASC");
									}
									if($user->Get('rank') == 9){
									$get_ranks = $db->query("SELECT * FROM users ORDER BY id ASC");
									}
									while($row = $get_ranks->fetch_array()){
										
									if($row['online']==1){
									$stat = "<font color='green'>Online</font>";
									}
									
									if($row['online']==0){
									$stat = "<font color='red'>Offline</font>";
									}
								?>
								<tr>
									<td><center><?php echo $row['id']; ?></td>
									<td class="right"><center><span class="<?php echo $color; ?>"><?php echo $row['username']; ?></span></center></td>
									<td class="right"><center><span class="<?php echo $color; ?>"><?php echo $stat; ?></span></center></td>
									<td class="right"><center><?php echo $row['rank']; ?></center></td>
									<td class="right"><center><?php echo $row['credits']; ?></center></td>
									<td class="right"><center><?php echo $row['activity_points']; ?></center></td>
									<td class="right"><center><?php echo $row['vip_points']; ?></center></td>
									<td class="right"><center><?php echo $row['mail']; ?></center></td>
									<td class="right"><center><?php if($row['vip']==1) echo 'Utente VIP'; else echo 'No';?></center></td>
									<td class="right"><center><a href="<?php echo HK; ?>/modificautente.php?do=mod&key=<?php echo $row['id']; ?>"><img src="<?php echo CDN; ?>/images/edit.gif"></a></center></td>
								</tr>
								<?php } ?>
							</tbody>
							<tfoot></tfoot>
						</table>
					</div>
				</div>
			
				
		</div>

				</div>
	</div>
	<?php else : header("Location: nonautorizzato.php"); ?>
        <?php endif; ?>
<?php ob_end_flush(); ?>