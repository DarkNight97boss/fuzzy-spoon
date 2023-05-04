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
	$tab = "5";
	$page = "Logs";
	require_once 'templates/header.php';
?>

		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
						
					<div id="column-1">
						<div id="box">
							<div class="title orenge"><b>Logs de la CMS</b></div>
							<div class="content-box" style="height: 200px;display: inline-block;overflow: scroll;">
										
								<table class="striped">
									<thead>
										<tr>
											<th>Acci&oacute;n:</th>
											<th class="right">Info:</th>
											<th class="right">Archivo:</th>
											<th class="right">Fecha:</th>
											<th class="right">Usuario:</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$u = $db->query("SELECT * FROM stafflogs ORDER BY id DESC");
										while($ur = $u->fetch_array()){		   
									?>
										<tr>
											<td><textarea disabled="disabled" style="max-width: 98px;"><?php echo $ur['action']; ?></textarea></td>
											<td class="right" style="width: 10px"><textarea disabled="disabled" style="max-width: 98px;"><?php echo $ur['message']; ?></textarea></td>
											<td class="right"><textarea disabled="disabled" style="max-width: 98px;"><?php echo $ur['note']; ?></textarea></td>
											<td class="right"><?php echo date('d.m.Y - H:i:s', $ur['timestamp']); ?></td>
											<td class="right"><?php echo $ur['username']; ?></td>
										</tr>

									<?php
										} 
									?>

									</tbody>
									<tfoot>      
									</tfoot>
								</table>
							</div>
						</div>
						<div id="box">
							<div class="title"><b>Logs del EMU</b></div>
							<div class="content-box" style="height: 200px;display: inline-block;overflow: scroll;">
										
								<table class="striped">
									<thead>
										<tr>
											<th>Comando:</th>
											<th class="right">Info:</th>
											<th class="right">Archivo:</th>
											<th class="right">Fecha:</th>
											<th class="right">Usuario:</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$ul = $db->query("SELECT * FROM staff_logs ORDER BY id DESC");
										while($ur = $ul->fetch_array()){		   
									?>
										<tr>
											<td><textarea disabled="disabled" style="max-width: 98px;"><?php echo $ur['action_type']; ?></textarea></td>
											<td class="right" style="width: 10px"><textarea disabled="disabled" style="max-width: 98px;"><?php echo $ur['description']; ?></textarea></td>
											<td class="right"><textarea disabled="disabled" style="max-width: 98px;">Client</textarea></td>
											<td class="right"><?php echo $ur['time']; ?></td>
											<td class="right"><?php echo $ur['staffuser']; ?></td>
										</tr>

									<?php
										} 
									?>

									</tbody>
									<tfoot>      
									</tfoot>
								</table>
							</div>
						</div>
					</div>
					<div id="column-2">
						<div id="box">
							<div class="title green"><b>Nuestro Facebook</b></div>
							<div class="content-box">
							<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2F<?php echo FBPAGE; ?>&amp;width=300&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:258px;" allowTransparency="true"></iframe>
							</div>
						</div>
						
						<div id="box">
							<div class="title cyan"><b>Estadisticas del Hotel</b></div>
							<div class="content-box">
								<table class="hovered" style="float: left;margin-left: 32px;">
									<thead>
										<tr>
											<th>Usuarios Online</th>
											<th class="right">Usuarios Registrados</th>
											<th>Usuarios banneados</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $user->GetOns(); ?></td>
											<td class="right"><?php echo $user->GetCount('users'); ?></td>
											<td><?php echo $user->GetCount('bans'); ?></td>
										</tr>
									</tbody>
									<tfoot></tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
<?php
	require_once '../templates/footer.php';
?>
	</div>
<?php ob_end_flush(); ?>