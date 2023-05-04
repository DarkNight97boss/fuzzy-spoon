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
	$tab = "1";
	$page = "HK Dashboard";
	require_once 'templates/header.php';
?>
		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
					<div id="column">
						<div id="column-1">
							
							<div id="box">
								<div class="title orange"><b>Statistiche di Hubix Hotel</b></div>
								<div class="content-box">
									<table class="hovered" style="float: left;margin-top: 35px;margin-left: 32px;">
										<thead>
											<tr>
												<th>Utenti Online</th>
												<th class="right">Utenti Registrati</th>
												<th>Utenti Bannati</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php 
$quson = mysql_query("SELECT COUNT(id) AS utentionline FROM users WHERE online = '1'") or die(mysql_error()); 
$utention = mysql_fetch_assoc($quson);
echo $utention['utentionline'];?></td>
												<td class="right"><?php echo $user->GetCount('users'); ?></td>
												<td><?php echo $user->GetCount('bans'); ?></td>
											</tr>
										</tbody>
										<tfoot></tfoot>
									</table>
								</div>
							</div>
						</div>
						<div id="column-2">
							
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
<?php ob_end_flush(); ?>