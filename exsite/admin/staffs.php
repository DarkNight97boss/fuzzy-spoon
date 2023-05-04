<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

include '../init.php';

$Auth::Session_Disconnected($_SESSION);

$pageid = 3;
$pagename = "grade";
  
include("./init.hk.php");
if(isset($_POST['User']) && isset($_POST['Grade']))
{
$User = safe($_POST['User'],'SQL');
$Grade = safe($_POST['Grade'],'SQL');
if(isset($User) && isset($Grade)) {
$user_s = $bdd->query("SELECT * FROM users WHERE username = '".safe($User,'SQL')."'");
$row = $user_s->rowCount();
if($row < 1) {
$error = true;
$grade = false;
} else {
$users = $user_s->fetch(PDO::FETCH_ASSOC);
$bdd->exec("INSERT INTO retrophp_stafflog (pseudo,action,date) VALUES ('".safe($user['username'],'SQL')."','Attribue un grade (".safe($users['username'],'SQL')."). ','".time()."')");
$bdd->exec("UPDATE users SET rank = '".safe($Grade,'SQL')."' WHERE id = '".safe($users['id'],'SQL')."'");
$User->AddLogs($user['username'],'Attribue un grade ('.safe($users['username'],'SQL').').');	
$staffs = true;
$grade = true;
}
}
}

if(isset($_POST['Retrograde']))
{
$Retrograde = safe($_POST['Retrograde'],'SQL');
if(isset($Retrograde)) {
$user_s = $bdd->query("SELECT * FROM users WHERE id = '".safe($Retrograde,'SQL')."'");
$users = $user_s->fetch(PDO::FETCH_ASSOC);
if($user['id'] != $users['id']) {
$User->AddLogs($user['username'],'Rétrograde ('.safe($users['username'],'SQL').').');
} else {
$User->AddLogs($user['username'],'Un staff quitte l\'équipe ('.safe($users['username'],'SQL').').');
}
$bdd->exec("UPDATE users SET rank = '".Settings('Rank')."' WHERE id = '".safe($users['id'],'SQL')."'");
$staffs = true;	
$retrograde = true;
}
}

include './templates/header.php';
?>
<div class="row">

			<div class="col-md-12">
				<article class="widget">
					<header class="widget__header">
						<h3 class="widget__title">Busca el Usuario para Otorgarle un Rango</h3>
					</header>

					<div class="widget__content">
						<?php if($staffs == true){ ?>
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <div class="media">
                <figure class="pull-left alert--icon">
                  <i class="pe-7s-attention"></i>
                </figure>
                <div class="media-body">
                  <h3 class="alert--title">Está hecho!</h3> 
                  <?php if($retrograde == true){ ?>
                  <p class="alert--text">Se Realizo el cambio Correctamente.</p>
                  <?php } ?>
                  <?php if($grade == true){ ?>
                  <p class="alert--text">Sele ah Otorgado un Rango Al Usuario.</p>
                  <?php } ?>
                </div>
              </div>
            </div>
            <?php } ?>
            <?php if($grade == false && $error == true){ ?>
            <div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><div class="media"><figure class="pull-left alert--icon"><i class="pe-7s-close-circle"></i></figure><div class="media-body"><h3 class="alert--title">Error</h3><p class="alert--text">El nombre del usuario no Existe.</p></div></div></div>
            <?php } ?>
						<form method="post">
<input type="text" value="" name="User" class="input-text" placeholder="Usuario" />
<br/>
						<div class="dropdown">
							<select name="Grade" class="dropdown-select">
								<?php $ranks = $bdd->query("SELECT * FROM ranks LIMIT ".$user['rank'].""); while($rank = $ranks->fetch()) { ?>
								<option value="<?php print $rank['id']; ?>"><?php print utf8_encode($rank['name']); ?></option>
								<?php } ?>
							</select>
						</div>
<input type="submit" value="Dar Rango" class="btn btn-light pull-right"/>
<div class="clearfix"></div>
</form>
<br>
            <form method="post">
						<table class="table">
							<thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Rango</th>
                            <th>Ultima Conexion</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
							<tbody>
								<?php 
								$staff = $bdd->query("SELECT * FROM users WHERE rank >= '4' ORDER BY rank DESC"); while($staff_user = $staff->fetch()) { 
								$grades = $bdd->query("SELECT * FROM ranks WHERE id = '".safe($staff_user['rank'],'SQL')."'");
								$grade = $grades->fetch(PDO::FETCH_ASSOC);
								?>
								<tr>
									<td><?php print $staff_user['username']; ?></td>
									<td><?php print utf8_encode($grade['name']); ?> (<?php print $staff_user['rank']; ?>)</td>
									<td><?php print date_fr("d M. Y H:i:s", $staff_user['last_offline']); ?></td>
									<?php if($user['rank'] >= 9 && $staff_user['rank'] <= 9) { ?>
									<td><button class="btn btn-red" type="submit" name="Retrograde" value="<?php print $staff_user['id']; ?>">Otorgar</button></td>
									<?php } else { ?>
									<?php if($user['id'] != $staff_user['id']) { ?>
									<td><a class="btn btn-green">Admirar</a></td>
									<?php } else { ?>
									<td><button class="btn btn-red" type="submit" name="Retrograde" value="<?php print $staff_user['id']; ?>">quitar</button></td>
									<?php }} ?>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</form>
					</article>
				</div>

			</div>
<?php include './templates/footer.php'; ?>