<?php
/* #################################################################### \
||                                                                     ||
|| HubixCMS - La distribuzione di questo CMS è severamente proibita    *#
|| # Copyright (C) 2016 JAlf (Giovanni aka giovanni256)                *#
||																	   *#
||																	   *#
|| Questo script è stato realizzato in esclusiva per Hubix Hotel.      *#
||                                                                     ||
\ ################################################################### */
ob_start();
	require_once 'inc/core.php';
	$user->logged('yes');
	$page = "Community";
	$tab  = "2";
	$myusername = $user->Get('username');
	$mylook = $user->Get('look');
	$mymotto = $user->Get('motto');
	$mycoins = $user->Get('credits');
	$myduckets = $user->Get('activity_points');
	$mydiamonds = $user->Get('vip_points');
	echo $row['username'];
	require_once 'extra/header.php';
	?>
<body style="font: 13px 'open sans', sans-serif;    background: url();    text-shadow: 0 .02rem .1rem rgba(0,0,0,.1);">
 <style type='text/css'>h2{color:#fff;font-family:'Raleway',sans-serif;font-weight:300;font-size:30px;text-transform:uppercase;margin-top:8px;}.carousel-inner a{color:#fff;text-decoretion:none;}</style>

<?php include("extra/menu.php"); ?>
<div class="container">
<div class="row">
<div class="col-sm-8">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>


  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
 <?php 	
								$result = $db->query("SELECT * FROM cms_news_new ORDER BY id DESC LIMIT 1");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ ?>
    <div class="item active">
<div style=" height: 300px; width: 759px;  image-rendering: pixelated; position: relative; background: url(<?php echo $data['campaignimg']; ?>) left bottom/100%; border: 0px solid; line-height: 33px;  background-color: #006FBF;"></div>      <div class="carousel-caption">
        <h2><a href="<?php echo PATH; ?>/news?id=<?php echo $data['id']; ?>"><?php echo $data['title']; ?></a></h2>
        <p><?php echo $data['shortstory']; ?></p>
      </div>
    </div>
				<?php } }else{ echo '<i>Non ci sono news</i>'; } ?>
   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Precedente</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Prossimo</span>
  </a>
</div></div>
<div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">

<style type="text/css">.room-occupancy-1{background-image:url('public/images/hotel/community/room_icon_1.gif')!important;width:35px;height:44px;background-repeat:no-repeat;background-position:1px;}.room-occupancy-2{background-image:url('public/images/hotel/community/room_icon_2.gif')!important;width:35px;height:44px;background-repeat:no-repeat;background-position:1px;}.room-occupancy-3{background-image:url('public/images/hotel/community/room_icon_3.gif')!important;width:35px;height:44px;background-repeat:no-repeat;background-position:1px;}.room-occupancy-4{background-image:url('public/images/hotel/community/room_icon_4.gif')!important;width:35px;height:44px;background-repeat:no-repeat;background-position:1px;}.room-occupancy-5{background-image:url('public/images/hotel/community/room_icon_5.gif')!important;width:35px;height:44px;background-repeat:no-repeat;background-position:1px;}</style>
<script>
                                            (function(e, a, f) {
                                                var c, b = e.getElementsByTagName(a)[0];
                                                if (e.getElementById(f)) {
                                                    return
                                                }
                                                c = e.createElement(a);
                                                c.id = f;
                                                c.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                                b.parentNode.insertBefore(c, b)
                                            }(document, "script", "facebook-jssdk"));
                                        </script>
                                        <div style="
    border-radius: 100px;
" class="fb-like-box" data-href="http://www.facebook.com/WorldGiBBo" data-width="345" data-height="350" data-show-faces="true" data-stream="true" data-show-border="false" data-header="false"></div>
<div class="media-right">
</div></div></div>
</li>

</br>
<div class="row">
<div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item list-group-item-moeda" style=" text-transform: uppercase; "><i class="fa fa-money"></i> Top Crediti</li>
<?php 	global $db;
								$result = $db->query("SELECT * FROM users WHERE rank < 4  ORDER BY credits DESC LIMIT 6");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 
									if($data['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}?>
<li class="list-group-item media v-middle">
<div class="media-left">
<div data-toggle="tooltip" data-placement="right" title="HUBIX" class="icon-block half img-circle bg-grey-200" style=" overflow: hidden; ">
<a href=""><img alt="HOBB" src="<?php echo AVATARIMAGE . $data['look']; ?>&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;size=b" style="margin-top: -11px;margin-left: -08px;"></a>
</div>
</div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"><?php echo $data['username']; ?></spam> <img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/>

</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="Crediti" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/community/moneda.png"/> <b> <?php echo $data['credits']; ?> </b> Crediti</td>
</div>
</div>
<div class="media-right">
</div>

    <div class="media-right">
    </div>		



						<?php } } else{ echo '<center><b style="color:red">No hay Usuarios</b></center>'; } ?>
<br>
                        </li>


                        </ul>

                    </div>
              









</div>
<div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item list-group-item-moeda" style=" text-transform: uppercase; "><i class="fa fa-diamond"></i> Top Diamanti</li>
<?php 	global $db;
								$result = $db->query("SELECT * FROM users WHERE rank < 4  ORDER BY vip_points DESC LIMIT 6");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 
									if($data['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}?>
<li class="list-group-item media v-middle">
<div class="media-left">
<div data-toggle="tooltip" data-placement="right" title="HOBB" class="icon-block half img-circle bg-grey-200" style=" overflow: hidden; ">
<a href=""><img alt="HOBB" src="<?php echo AVATARIMAGE . $data['look']; ?>&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;size=b" style="margin-top: -11px;margin-left: -08px;"></a>
</div>
</div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"><?php echo $data['username']; ?></spam> <img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/>

</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="Diamantes" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/community/diamantes.png"/> <b> <?php echo $data['vip_points']; ?> </b> Diamanti</td>
</div>
</div>
<div class="media-right">
</div>
    <div class="media-right">
    </div>		
<?php } } else{ echo '<center><b style="color:red">No hay Usuarios</b></center>'; } ?>
<br>
                        </li>
                        </ul>
                    </div>
</div>


<div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item list-group-item-moeda" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i> Top Duckets</li>
<?php 	global $db;
								$result = $db->query("SELECT * FROM users WHERE rank < 4  ORDER BY activity_points DESC LIMIT 6");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 
									if($data['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}?><li class="list-group-item media v-middle">
<div class="media-left">
<div data-toggle="tooltip" data-placement="right" title="HOBB" class="icon-block half img-circle bg-grey-200" style=" overflow: hidden; ">
<a href=""><img alt="HOBB" src="<?php echo AVATARIMAGE . $data['look']; ?>&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;size=b" style="margin-top: -11px;margin-left: -08px;"></a>
</div>
</div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"><?php echo $data['username']; ?></spam> <img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/>

</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="duckets" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/community/duckets.png"/> <b> <?php echo $data['activity_points']; ?> </b> Duckets</td>
</div>
</div>
<div class="media-right">
</div>

    <div class="media-right">
    </div>		
<?php } } else{ echo '<center><b style="color:red">No hay Usuarios</b></center>'; } ?>
<br>
                        </li>
                        </ul>
                    </div>
</div>


<div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item" style=" text-transform: uppercase; "><i class="fa fa-home"></i> Top stanze</li>
<li class="list-group-item media v-middle">
<?php 	
								$result = $db->query("SELECT * FROM rooms ORDER BY users_now DESC LIMIT 6");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 
									?>

<div class="media-left">
<div data-toggle="tooltip" data-placement="right" title="HapoloEventos" class="icon-block half img-circle bg-grey-200" style=" overflow: hidden; ">
<img alt="HapoloEventos" src="public/images/hotel/me/room_icon_open.gif" style="margin-top: -11px;margin-left: -08px;">
</div>
</div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"><?php echo $data['caption']; ?></spam> <img data-toggle="tooltip" data-placement="left" title="on " src="public/images/hotel/staff/on.gif"/>

</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="Users on" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/index/user.gif"/> <b> <?php echo $data['users_now']; ?> </b> utenti dentro</td>
</div>
</div>
<div class="media-right">
</div>
    <div class="media-right">
    </div><br>
<?php } } else{ echo '<center><b style="color:red">No hay salas abiertas</b></center>'; } ?>

   </li>

  </ul>
   </div>

</div>
<div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item list-group-item-moeda" style=" text-transform: uppercase; "><i class="fa fa-plus"></i> Top punti</li>
<?php

                                    $result = $db->query("SELECT * FROM user_stats ORDER BY AchievementScore DESC LIMIT 6");
                                    if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 
									$userinfo = $db->query("SELECT * FROM users WHERE id = '".$data['id']."'");
									if($userinfo->num_rows > 0){
									while($userrinf = $userinfo->fetch_array()){
										if($userrinf['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}?>
									<li class="list-group-item media v-middle">
<div class="media-left">
<div data-toggle="tooltip" data-placement="right" title="HOBB" class="icon-block half img-circle bg-grey-200" style=" overflow: hidden; ">
<a href=""><img alt="HOBB" src="<?php echo AVATARIMAGE . $userrinf['look']; ?>&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;size=b" style="margin-top: -11px;margin-left: -08px;"></a>
</div>
</div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"><?php echo $userrinf['username']; ?></spam> <img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/>

</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="duckets" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/community/like.png"/> 
<b> <?php echo utf8_encode($data['AchievementScore']) ?> </b> punti di ricompensa</td>
</div>
</div>
<div class="media-right">
</div>

    <div class="media-right">
    </div>		


							<?php }}}}else{ echo '<center><b style="color:red;">No hay Salas para mostrar</b></center>'; } ?>
                          <br>
                        </li>
                        </ul>
                    </div>
                     </div>
					 
					 <div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item list-group-item-moeda" style=" text-transform: uppercase; "><i class="fa fa-thumbs-o-up"></i> Top respetti</li>
<?php

                                    $result = $db->query("SELECT * FROM user_stats ORDER BY RespectGiven DESC LIMIT 6");
                                    if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 
									$userinfo = $db->query("SELECT * FROM users WHERE id = '".$data['id']."'");
									if($userinfo->num_rows > 0){
									while($userrinf = $userinfo->fetch_array()){
										if($userrinf['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}?>
									<li class="list-group-item media v-middle">
<div class="media-left">
<div data-toggle="tooltip" data-placement="right" title="HOBB" class="icon-block half img-circle bg-grey-200" style=" overflow: hidden; ">
<a href=""><img alt="HOBB" src="<?php echo AVATARIMAGE . $userrinf['look']; ?>&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;size=b" style="margin-top: -11px;margin-left: -08px;"></a>
</div>
</div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"><?php echo $userrinf['username']; ?></spam> <img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/>

</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="duckets" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/community/like.png"/> 
<b> <?php echo utf8_encode($data['RespectGiven']) ?> </b> respetti</td>
</div>
</div>
<div class="media-right">
</div>

    <div class="media-right">
    </div>		


							<?php }}}}else{ echo '<center><b style="color:red;">No hay Salas para mostrar</b></center>'; } ?>
                          <br>
                        </li>
                        </ul>
                    </div>
                     </div>
					 


					 
					 
                        </div>
</div>
				</div>

	</div></div></div>
</div>

 

<div class="container">
<hr>

<?php include("extra/footer.php"); ?>

</div>