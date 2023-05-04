<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include '../init.php';

$Auth::Session_Disconnected($_SESSION);

$pageid = 4;
$pagename = "bans";
  
include './init.hk.php';

if(isset($_POST['deban']))
{
$deban = safe($_POST['deban'],'SQL');
if(isset($deban)) {
$bdd->exec("DELETE FROM ".$BanSQL." WHERE value = '".safe($deban,'SQL')."'");
$User->AddLogs($user['username'],'Dé-bannissement ('.safe($deban,'SQL').').');
$post_deban = true;			
}	
}

include './templates/header.php';
?>
<div class="row">
			<div class="col-md-12">
				<article class="widget">
					<header class="widget__header">
						<h3 class="widget__title">Lista de Usuarios Baneados...</h3>
					</header>
<?php if($post_deban == true){ ?>
				<div class="alert alert-warning alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<div class="media">
								<figure class="pull-left alert--icon">
									<i class="pe-7s-attention"></i>
								</figure>
								<div class="media-body">
									<h3 class="alert--title">Está hecho!</h3> 
									<p class="alert--text">El Usuario a Sido Baneado <?php print $deban; ?> Correctamente.</p>
								</div>
							</div>
						</div>
						<?php } ?>
					<div class="widget__content">
						<table class="table">
							<thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Motivo</th>
                            <th>Baneado por</th>
                            <th>Vence</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
							<tbody>
								<?php $bans = $bdd->query("SELECT * FROM ".$BanSQL." ORDER BY id DESC"); while($ban_user = $bans->fetch()) { ?>
								<tr>
									<td><?php print $ban_user['value']; ?></td>
									<td><?php print $ban_user['reason']; ?></td>
									<td><?php print $ban_user['added_by']; ?></td>
									<td><?php print date_fr("d M. Y H:i:s", $ban_user['expire']); ?></td>
									<form method="post">
									<td><button class="btn btn-red" type="submit" name="deban" value="<?php print $ban_user['value']; ?>">Des-Banear</button></td>
								</form>
								</tr>
								<?php } ?>
							</tbody>
						</table>

					</article>
				</div>

			</div>
<?php include './templates/footer.php'; ?>