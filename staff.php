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
	$page = "Staff";
	$tab  = "1";
	$myusername = $user->Get('username');
	$myid = $user->Get('id');
	$myrank = $user->Get('rank');
	$mylook = $user->Get('look');
	$mymotto = $user->Get('motto');
	$mycoins = $user->Get('credits');
	$myduckets = $user->Get('activity_points');
	$myportada = $user->Get('portada');
	$mydiamonds = $user->Get('vip_points');
	$myonline = $user->Get('last_online');
	echo $row['username'];
	echo $row['AchievementScore'];
	require_once 'extra/header.php';


?>
<body style="font: 13px 'open sans', sans-serif;    background: url();    text-shadow: 0 .02rem .1rem rgba(0,0,0,.1);">
 
<?php include("extra/menu.php"); ?>
<center>
<div class="container">
</div>
</center>
<div class="container">
<div class="row">
<div class="col-sm-8">
<?php
				$query = $db->query("SELECT * FROM ranks WHERE id >= '".RANKMIN."' ORDER BY id DESC");
				while($ranktype = $query->fetch_array()){
				$color[1] = "red";
				$color[2] = "cyan";
				$color[3] = "green";
				$color[4] = "orenge";
				$color[5] = "yellow";
				
				$e = " ".$color[rand(0,5)];
			?> 

<ul class="list-group"> <li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i> <?php echo $ranktype['name']; ?></li>
<li class="list-group-item media v-middle">

<?php	
						$query2 = $db->query("SELECT * FROM users WHERE rank = '{$ranktype['id']}'");
						if($query2->num_rows > 0){
							while($staffuser = $query2->fetch_array()){
								if($staffuser['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}
									
					?>		

<div class="container">
<div class="panel panel-default paper-shadow" data-z="0.5" style="box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.0); border: 0px solid transparent; border-radius: -100px; ">
<div class="panel-heading" style=" color: #fff;border-radius: 500px; padding: 1px;     padding-top: 1px;image-rendering: pixelated; position: relative; background: url(<?php echo PATH ?>/public/images/hotel/me/me_h.png) left bottom/90%; z-index: 99;">
<div class="row">
<div class="col-sm-6">
<div class="parallax overflow-hidden bg-blue-400 page-section third">
<div class="container parallax-layer" data-opacity="true">
<div class="media v-middle">
<div class="media-left text-center">
<div style="
    position: relative;
    text-align: center;
    width: 100px;
    height: 100px;
    border-radius: 100px;
        background: #ddd;
    background: -webkit-linear-gradient(left top, #797979, #fff);
    background: -o-linear-gradient(bottom right, #797979, #fff);
    background: -moz-linear-gradient(bottom right, #797979, #fff);
    background: linear-gradient(to bottom right, #797979, #fff);

    overflow: hidden;


">

<img src="<?php echo AVATARIMAGE . $staffuser['look']; ?>&direction=2&head_direction=2&size=l" style="margin-top: -41px;margin-left: -11px;"></div>
</div>
<div class="media-body">
<h1 class="text-white text-display-1 margin-v-0" style="color: #fff; text-transform: uppercase; font-family: 'Raleway', sans-serif; font-weight: 100; font-size: 27px; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.25);">
<?php if ($ranktype['name']=="Fondatori") echo '<img src="http://hubixhotel.eu/c_images/album1584/FOU.gif" />';?>
<?php if ($ranktype['name']=="Gestori") echo '<img src="http://hubixhotel.eu/c_images/album1584/GEST.gif" />';?>
<?php if ($ranktype['name']=="Amministratori Generali") echo '<img src="http://hubixhotel.eu/c_images/album1584/SADM.gif" />'; ?>
<?php if ($ranktype['name']=="Amministratori") echo '<img src="http://hubixhotel.eu/c_images/album1584/ADM.gif" />'; ?>
<?php if ($ranktype['name']=="Moderatori") echo '<img src="http://hubixhotel.eu/c_images/album1584/MOD.gif" />'; ?>
<?php if ($ranktype['name']=="Arbitri") echo '<img src="http://hubixhotel.eu/c_images/album1584/ARB.gif" />'; ?><?php echo $staffuser['username']; ?> <img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/> </i></span></h1>
<p class="text-subhead">
<span class="label label-success arrowed" style=" background-color: rgba(0, 0, 0, 0.48); text-transform: uppercase; font-weight: 100; ">
<img src="public/images/icons/id.png"> <b>Ruolo:</b> <?php echo $user->filtertext($staffuser['rank_lijst']); ?></span>
<br>
<span class="label label-success arrowed" style=" background-color: rgba(0, 0, 0, 0.48); text-transform: uppercase; font-weight: 100; ">
<img src="http://i.imgur.com/LfNKAPI.png"> <b>Motto:</b> <?php echo $user->filtertext($staffuser['motto']); ?></span>
<br>
 <span class="label label-success arrowed" style=" background-color: rgba(0, 0, 0, 0.48); text-transform: uppercase; font-weight: 100; ">
 <img src="public/images/hotel/staff/ua.png"> Ultima connessione: <?php echo $user->GetLast($staffuser['last_online']); ?></span>
								
								
								
						</div></div></div></div>	</div></div></div>	</div></div>
								<hr>
								

<?php }
							}else{ echo '<i>Nessun utente ha questo rank</i>'; }?>	

</ul> 
<?php
				}
			?>


</div>
<div class="col-sm-4">
<li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-heart-o"></i> Chi siamo?
</li>
<div class="panel panel-default paper-shadow" data-z="0.5" style="
    padding: 15px;
">

Questo è il team che gestisce l'hotel, ti aiuteranno in ogni modo necessario .<br>
<br><b><font color="red">Fondatori: </font></b><br>
Sono responsabili della programmazione , l'aggiornamento e coordinazione dell'hotel.<br>
<br><b><font color="red">Managers: </font> </b><br>
Sono responsabili di gestire lo staff all'interno dell'Hotel.<br><br>
<b><font color="red"> Amministratori Generali: </font></b>
<br>Essi sono responsabile della gestione degli utenti,ogni amministratore ha un ruolo diverso!<br><br>
<b><font color="blue"> Amministratori: </font></b><br>
Essi sono responsabili della creazione e l'apertura di giochi all'interno dell'hotel per intrattenere gli utenti.<br><br>
<b><font color="blue">Moderatori: </font></b><br>
Si occupano di moderare l'hotel bannando, infrazionando o avvertendo gli utenti che violano il regolamento<br><br>
<b><font color="blue"> Aiutanti: </font></b><br>
Si occupano di aiutare gli utenti in difficoltà e possono essere considerati degli aspiranti MOD (da non confondere con i MOD in prova)<br><br>
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