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
	require_once 'inc/databasegiovanni.php';
	$user->logged('yes');
	$page = "Altri Staff";
	$tab  = "2";
	$myusername = $user->Get('username');
	$mylook = $user->Get('look');
	$mymotto = $user->Get('motto');
	$mycoins = $user->Get('credits');
	$myduckets = $user->Get('activity_points');
	$mydiamonds = $user->Get('vip_points');
	echo $row['username'];
	require_once 'extra/header.php';?>
	<body style="font: 13px 'open sans', sans-serif;    background: url();    text-shadow: 0 .02rem .1rem rgba(0,0,0,.1);">
 
<?php include("extra/menu.php"); ?>
	
<div class="container">
<div class="row">
<div class="col-sm-8">
<ul class="list-group"> <li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i> Ambasciatori</li>
<li class="list-group-item media v-middle">
<?php	
						$query2 = $db->query("SELECT * FROM users WHERE rank = '3'");
						if($query2->num_rows > 0){
							while($staffuser = $query2->fetch_array()){
								if($staffuser['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}
									
					?>		
<div class="media-left">
<div class="user-img" style="background: url('<?php echo AVATARIMAGE . $staffuser['look']; ?>&direction=2&head_direction=2&gesture=sml&size=n&action=none,crr=9'), url('<?php echo $staffuser['staff_profileimage_url']; ?>');    width: 79px;background-position: 9px 3px, center;background-repeat: no-repeat;height: 79px;">
                                </div></div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"> <?php echo $staffuser['username']; ?></spam>
</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="ruolo" style="vertical-align:bottom" src="public/images/icons/id.png"/>
Ruolo: <?php echo $user->GetLast($staffuser['rank_lijst']); ?> |
<img data-toggle="tooltip" data-placement="left" title="motto" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/staff/mis.png"/>
<?php echo $user->filtertext($staffuser['motto']); ?> |
<img data-toggle="tooltip" data-placement="left" title="Ultimo login" style="vertical-align:bottom" src="public/images/hotel/staff/ua.png"/>
Ultima connessione: <?php echo $user->GetLast($staffuser['last_online']); ?></div>
</div>
<div class="media-right">
<img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/>
</div>
<hr>
<?php }
							}else{ echo '<i>Nessun utente ha questo rank</i>'; }?>	
</ul> 

<ul class="list-group"> <li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i>Guide</li>
<li class="list-group-item media v-middle">
<?php	
						$query2 = $db->query("SELECT * FROM users WHERE hubixx = '1'");
						if($query2->num_rows > 0){
							while($staffuser = $query2->fetch_array()){
								if($staffuser['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}
									
					?>		
<div class="media-left">
<div class="user-img" style="background: url('<?php echo AVATARIMAGE . $staffuser['look']; ?>&direction=2&head_direction=2&gesture=sml&size=n&action=none,crr=9'), url('<?php echo $staffuser['staff_profileimage_url']; ?>');    width: 79px;background-position: 9px 3px, center;background-repeat: no-repeat;height: 79px;">
                                </div></div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"> <?php echo $staffuser['username']; ?></spam>
</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="ruolo" style="vertical-align:bottom" src="public/images/icons/id.png"/>
Ruolo: <?php echo $user->GetLast($staffuser['rank_lijst']); ?> |
<img data-toggle="tooltip" data-placement="left" title="motto" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/staff/mis.png"/>
<?php echo $user->filtertext($staffuser['motto']); ?> |
<img data-toggle="tooltip" data-placement="left" title="Ultimo login" style="vertical-align:bottom" src="public/images/hotel/staff/ua.png"/>
Ultima connessione: <?php echo $user->GetLast($staffuser['last_online']); ?></div>
</div>
<div class="media-right">
<img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/>
</div>
<hr>
<?php }
							}else{ echo '<i>Nessun utente ha questo rank</i>'; }?>	
</ul>

<ul class="list-group"> <li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i> Spammer</li>
<li class="list-group-item media v-middle">
<?php	
						$query2 = $db->query("SELECT * FROM users WHERE spammer = '1'");
						if($query2->num_rows > 0){
							while($staffuser = $query2->fetch_array()){
								if($staffuser['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}
									
					?>		
<div class="media-left">
<div class="user-img" style="background: url('<?php echo AVATARIMAGE . $staffuser['look']; ?>&direction=2&head_direction=2&gesture=sml&size=n&action=none,crr=9'), url('<?php echo $staffuser['staff_profileimage_url']; ?>');    width: 79px;background-position: 9px 3px, center;background-repeat: no-repeat;height: 79px;">
                                </div></div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"> <?php echo $staffuser['username']; ?></spam>
</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="ruolo" style="vertical-align:bottom" src="public/images/icons/id.png"/>
Ruolo: <?php echo $user->GetLast($staffuser['rank_lijst']); ?> |
<img data-toggle="tooltip" data-placement="left" title="motto" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/staff/mis.png"/>
<?php echo $user->filtertext($staffuser['motto']); ?> |
<img data-toggle="tooltip" data-placement="left" title="Ultimo login" style="vertical-align:bottom" src="public/images/hotel/staff/ua.png"/>
Ultima connessione: <?php echo $user->GetLast($staffuser['last_online']); ?></div>
</div>
<div class="media-right">
<img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/>
</div>
<hr>
<?php }
							}else{ echo '<i>Nessun utente ha questo rank</i>'; }?>	
</ul>  


</div>
<div class="col-sm-4">
<li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-heart-o"></i> Chi siamo?
</li>
<div class="panel panel-default paper-shadow" data-z="0.5" style="
    padding: 15px;
">
Lo Staff di Hubix Hotel ti aiuterà ad ottenere il meglio dal nostro gioco e ti aiuterà in ogni caso!<br>
<br><b><font color="cyan">Ambasciatori</font></b><br>
Gli Ambasciatori di Hubix Hotel hanno la missione di dare il benvenuto ai nuovi utenti di Hubix. Aiuteranno anche a far sì che le Stanze pubbliche siano sempre dei luoghi sicuri per tutta la Community. 
Inoltre aiuteranno a tenere lontano dalle Stanze ufficiali o dagli Eventi quegli Hubix che danno fastidio ad esempio bloccando nei Giochi.<br>
<br><b><font color="orange">Spammer</font> </b><br>
ma si occupano dello spam in altri hotel o in profili facebook, twitter, forum, pagine youtube o tramite chat private per aumentare l'affluenza.<br><br>
<b><font color="grey">Guide</font></b><br>
Si occupano di aiutare gli utenti in difficoltà e possono essere considerati degli aspiranti MOD.<br><br>
<br><br/>
<img src="http://imgur.com/AKgFVUa.png" align="right"/> Lo staff di Hubix Hotel è formato da ragazzi evente età superiore ai 16 anni, con voglia lavorativa per migliorare il nostro caro Hotel! Puoi riconoscerli dal distintivo illustrato!
</div>
</div>
</div></div></div>
</div>
<div class="container">
<hr>
<?php include("extra/footer.php"); ?>
</div>
</body>
</html>