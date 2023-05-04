<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
$page = 'hk';
include '../init.php';

if(empty($user)) {
include './login.php';
} else {

$Auth::Session_Disconnected($_SESSION);

$pageid = 1;
$pagename = "hk";
 
include './init.hk.php';

include './templates/header.php';
?>
<div class="row">	
				<div class="col-md-7">
					<article class="widget widget--tabbed">
						<div class="tabs">
							<input type="radio" name="t" id="tab1" checked>
							<label for="tab1" class="tabs__tab">Staffs Recientes</label>
							<input type="radio" name="t" id="tab2">
							<label for="tab2" class="tabs__tab">miembros</label>
							<input type="radio" name="t" id="tab3">
							<label for="tab3" class="tabs__tab">Administradores</label>
							<div class="tabs__content">
								<div class="tabs__content--1">
									<?php $sql = $bdd->query("SELECT * FROM users ORDER BY id DESC LIMIT 5"); while($uss = $sql->fetch()) { ?>
									<div class="media social_msg">
										<figure class="pull-left rounded-image social_msg__img">
											 <img src="<?php print $User->Avatar($uss['look'],"b,2,2,sml,1,0"); ?>" alt="user">
										</figure>
										<div class="media-body">
											<h4 class="media-heading social_msg__heading"><?php print $uss['username'];?> <?php if($user['facebook'] == 1) { ?><span>via</span> <span>facebook</span><?php } ?></h4>
											<small class="social_msg__meta">registro : <?php print date_fr("d M. Y H:i:s", $uss['account_created']); ?></small>
										</div>
									</div>
									<?php } ?>

								</div>

								<div class="tabs__content--2">
									<?php $sql = $bdd->query("SELECT * FROM users ORDER BY RAND() LIMIT 5"); while($uss = $sql->fetch()) { ?>
									<div class="media social_msg">
										<figure class="pull-left rounded-image social_msg__img">
											 <img src="<?php print $User->Avatar($uss['look'],"b,2,2,sml,1,0"); ?>" alt="user">
										</figure>
										<div class="media-body">
											<h4 class="media-heading social_msg__heading"><?php print $uss['username'];?> <?php if($user['facebook'] == 1) { ?><span>via</span> <span>facebook</span><?php } ?></h4>
											<small class="social_msg__meta">última Conexion : <?php print date_fr("d M. Y H:i:s", $uss['last_offline']); ?></small>
										</div>
									</div>
									<?php } ?>
								</div>
								
								<div class="tabs__content--3">
									<?php $sql = $bdd->query("SELECT * FROM users WHERE rank >= '8' LIMIT 5"); while($uss = $sql->fetch()) { ?>
									<div class="media social_msg">
										<figure class="pull-left rounded-image social_msg__img">
											 <img src="<?php print $User->Avatar($uss['look'],"b,2,2,sml,1,0"); ?>" alt="user">
										</figure>
										<div class="media-body">
											<h4 class="media-heading social_msg__heading"><?php print $uss['username'];?> <?php if($user['facebook'] == 1) { ?><span>via</span> <span>facebook</span><?php } ?></h4>
											<small class="social_msg__meta">
												Rango : <?php $grade = mysql_query("SELECT * FROM ranks WHERE id = '".$user['rank']."'"); while($grade = mysql_fetch_array($grade)) { ?><?php print $grade['name']; ?><?php } ?>
												<br><br>
												Ultima Conexion : <?php print date_fr("d M. Y H:i:s", $uss['last_offline']); ?>
											</small>
										</div>
									</div>
									<?php } ?>
								</div> 
								
							</div> 

						</div>

					</article>
				</div>


				<div class="col-md-5">
					<article class="widget no-padding--lr">
						<header class="widget__header">
							<h3 class="widget__title">Mas Informacion</h3>					
						</header>
						<div class="widget__content">

							<div class="media user user--added">
								<figure class="pull-left rounded-image social_msg__img">
											 <img src="<?php print $User->Avatar($user['look'],"b,2,2,sml,1,0"); ?>" alt="user">
										</figure>
								<div class="media-body">
									<h4 class="media-heading user__name"><?php print $user['username']; ?></h4>
									<small class="user__location"> <?php print date_fr("d M. Y H:i:s", $user['account_created']); ?></small>

									<input type="checkbox" class="btn-more-check" id="more3" checked>

									<div class="accordion__details">
										
										<p>CRÉDITOS <span><?php print $user['credits']; ?></span></p>
										<p>DUCKETS <span><?php print $user['activity_points'] ; ?></span></p>
										<p>DIAMANTES <span><?php print $user['seasonal_currency'] ; ?></span></p>
										<p>RANGO <span><?php $grade = mysql_query("SELECT * FROM ranks WHERE id = '".$user['rank']."'"); while($grade = mysql_fetch_array($grade)) { ?><?php print utf8_encode($grade['name']); ?><?php } ?></span></p>
										<p>DIRECCION EMAIL VERIFICADO <span><?php if($user['mail_verified'] == 0) { ?> NO <?php } if($user['mail_verified'] == 1) { ?> SI <?php } ?> </span></p>
										<p>BANEADO <span><?php if($user['newsletter'] == 0) { ?> No <?php } if($user['newsletter'] == 1) { ?> SI <?php } ?> </span></p>
										<p>SUSCRIPCIONES <?php if($user['rank'] == 1) { ?><span class="btn-badge bg--skyblue">Miembro</span><?php } ?><?php if($user['rank'] == 2) { ?><span class="btn-badge bg--skyblue">VIP Classico</span><?php } ?><?php if($user['rank'] >= 3) { ?><span class="btn-badge bg--skyblue">VIP Premium</span><?php } ?></p>
										<p>DIRECCION IP <span class="color--skyblue-light"><?php print $user['ip_last']; ?></span></p>
									</div>
								</div>

							</div>
							<div class="user__more">
							<a href="mailto:<?php print $user['mail']; ?>" id="loadmore"><i class="pe-7s-plus"></i> <?php print $user['mail']; ?></a>
						</div>
						</div>

					</article>
				</div>

			</div>


			</section>
<?php include './templates/footer.php'; } ?>