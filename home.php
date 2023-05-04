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
	$page = "Home";
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
<style type='text/css'>h2{color:#fff;font-family:'Raleway',sans-serif;font-weight:300;font-size:30px;text-transform:uppercase;margin-top:8px;}.carousel-inner a{color:#fff;text-decoretion:none;}</style>
<body style="font: 13px 'open sans', sans-serif;    background: url();    text-shadow: 0 .02rem .1rem rgba(0,0,0,.1);">
 
<?php include("extra/menu.php"); ?>

<style type='text/css'>.list-group-item-moeda{color:#fff;background-color:#E2AE1D;}.list-group-item-diamantes{color:#fff;background-color:#865E89;}.list-group-item-duckets{color:#fff;background-color:#CC35A9;}.btn-glyphicon{padding:8px;background:#ffffff;margin-right:4px;}.icon-btn{padding:1px 15px 3px 2px;border-radius:50px;}.aligned{text-align:center;padding-bottom:28%;}.aligned_input{text-align:center;padding-bottom:-10%;}.aligned_text{text-align:center;font-size:88%;}.no:hover{background:none;}.no:active{background:none;}#seconds{font-size:10px;}.btn-custom{background-color:black;color:white;transition-property:background,opacity;transition-duration:0.5s;}.btn-custom:hover,.btn-custom:active,.btn-custom:focus{cursor:pointer;opacity:0.5;color:white;//background-color:white;}</style>
<script>

var status = 0;
function Play(music,id) {
    var audio = $("#"+id); 
	if(status == 0 || status == 2)
	{     
		if(status == 0) audio.attr("src", music);
		audio[0].play();
		$("#play").attr("class","glyphicon glyphicon-pause aligned")
		status = 1;
	} else if(status == 1) {    
		audio[0].pause();
		$("#play").attr("class","glyphicon glyphicon-play aligned")
		status = 2;
	}
}
function Stop(music,id) {
	var audio = $("#"+id);
	audio.attr("src", '');
	$("#play").attr("class","glyphicon glyphicon-play aligned")
	status = 0;
}
function Restart(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",0)
}
function VolumeUp(music,id) {
	var audio = $("#"+id);
	var volume = $("#"+id).prop("volume")+0.1;
	if(volume > 1) volume = 1;
    $("#"+id).prop("volume",volume);
}
function VolumeDown(music,id) {
	var audio = $("#"+id);
	var volume = $("#"+id).prop("volume")-0.1;
	if(volume < 0) volume = 0;
    $("#"+id).prop("volume",volume);
}
function Forward5(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",audio.prop("currentTime")+5);
}
function Backward5(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",audio.prop("currentTime")-5);
}
function Forward1(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",audio.prop("currentTime")+1);
}
function Backward1(music,id) {
	var audio = $("#"+id);
	audio.prop("currentTime",audio.prop("currentTime")-1);
}
</script>
<div class="container">
<div class="panel panel-default paper-shadow" data-z="0.5" style="box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.0); border: 0px solid transparent; border-radius: 5px; ">
<div class="panel-heading" style=" color: #fff;border-radius: 5px; padding: 10px;     padding-top: 10px;image-rendering: pixelated; position: relative; background: url(<?php echo PATH?>/public/images/hotel/me/me_h.png) left bottom/100%; z-index: 99;">
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
<img src="<?php echo AVATARIMAGE . $mylook; ?>&direction=2&head_direction=2&size=l" style="margin-top: -41px;margin-left: -11px;"></div>
</div>
<div class="media-body">
<h1 class="text-white text-display-1 margin-v-0" style="color: #fff; text-transform: uppercase; font-family: 'Raleway', sans-serif; font-weight: 100; font-size: 27px; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.25);"><?php echo $myusername; ?></h1>
<p class="text-subhead">
<span class="label label-success arrowed" style=" background-color: rgba(0, 0, 0, 0.48); text-transform: uppercase; font-weight: 100; ">
<?php echo $mymotto; ?></span>
<span class="label label-success arrowed" style=" background-color: rgba(0, 0, 0, 0.48); text-transform: uppercase; font-weight: 100; ">

<img src="public/images/hotel/staff/ua.png"> Ultimo accesso: <?php echo $user->GetLast($myonline); ?></span>

<br>


										 <span class="label label-success arrowed" style=" background-color: rgba(0, 0, 0, 0.48); text-transform: uppercase; font-weight: 100; font-size: 10px;    margin-top: 4px;    padding: 1px;"> 

<img src="public/images/hotel/me/creditos.png"> <?php echo $user->filtertext($mycoins); ?> Crediti</span>
<span class="label label-success arrowed" style=" background-color: rgba(0, 0, 0, 0.48); text-transform: uppercase; font-weight: 100; font-size: 10px;    margin-top: 4px;    padding: 1px;"> 

<img src="public/images/hotel/community/duckets.png"> <?php echo $user->filtertext($myduckets); ?> Duckets</span>


<span class="label label-success arrowed" style=" background-color: rgba(0, 0, 0, 0.48); text-transform: uppercase; font-weight: 100; font-size: 10px;    margin-top: 4px;    padding: 1px;"> 

<img src="public/images/hotel/me/diamantes.png"> <?php echo $user->filtertext($mydiamonds); ?> Diamanti</span>


<?php
								$badge = $db->query("SELECT * FROM user_badges WHERE user_id = '{$user->Get('id')}' AND badge_slot > '0' LIMIT 5");
								$i = 0;
								if($badge->num_rows > 0){
									while($badges = $badge->fetch_array()){ ?>
								<div class="badge"<?php if($i == "4"){ echo 'style="margin-right:0px!important"'; } ?>><img src="<?php echo BADGEURL . $badges['badge_id']; ?>.gif"></div>
								<?php $i++;
								} }else{ echo '<br><br><span class="label label-success arrowed" style=" background-color: rgba(0, 0, 0, 0.48); text-transform: uppercase; font-weight: 100; ">

 <i style="font-size:13px;">Non hai nessun distintivo in uso </i></span>'; } 
								?>



            </div>
            <div class="media-right">
			
            </div>
        </div>
    </div>
</div>


</div>

       


 <div class="col-sm-6"><p class="text-right"><br><br><br><a href="/client" style=" text-shadow: 0 .http://images.habbo.com/c_images/DEV_tests/val12_1ad.pngrem .1rem rgba(0,0,0,.20);    font-weight: bold;font-size: 24px; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.25); font-weight: 600; padding-top: 10px; */ " target="_blank" class="btn btn-success btn-lg">Entra su <?php echo SHORTNAME; ?> <span class="glyphicon glyphicon-forward" aria-hidden="true" style=" font-size: 18px; left: 4px; "></span></a></p>


</div>
    </div>



</div>
</div>




    <div class="row" style=" margin-bottom: 16px; ">
	<?php if(MAINTENANCE == 1) echo '
<div class="grid_9" style="width:100%">
                <div id="contentBox" class="activity" style="background-color:#990000">
                    <div class="head">
                        <div class="badgeImage habbo"></div>
                        <font color="white">Modalità di manutenzione attiva
						<br>
                        <span class="date" style="font color=white"><font color="white"><b>Hubix Hotel</b> è in manutenzione. La riapertura è prevista per il giorno <b>'.GIORNOMANUTENZIONE.' alle ore '.ORAMANUTENZIONE.'.</font></b></span>
                        </font>
                    </div>
                </div>
            </div>'?>
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
				<?php } }else{ echo '<i>Non ci sono notizie</i>'; } ?>
   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Precedente</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Successivo</span>
  </a>
</div>

</div>


        <div class="col-sm-4">

   <div class="col-md-14 col-lg-14">
<div class="panel panel-default paper-shadow" data-z="0.5" style="
    overflow: overlay;
">
                                              



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
" class="fb-like-box" data-href="http://www.facebook.com/WorldGiBBo" data-width="345" data-height="300" data-show-faces="true" data-stream="true" data-show-border="false" data-header="false"></div>
                                        <script type="text/javascript"></script>

</div>
    </div>
</div>
</div>





<div class="row">
<div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item" style=" text-transform: uppercase; "><i class="fa fa-home"></i> Top Stanze</li>
<li class="list-group-item media v-middle">
<?php 	
								$result = $db->query("SELECT * FROM rooms ORDER BY users_now DESC LIMIT 5");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ ?>

<div class="media-left">
<div data-toggle="tooltip" data-placement="right" title="HapoloEventos" class="icon-block half img-circle bg-grey-200" style=" overflow: hidden; ">
<img alt="HapoloEventos" src="public/images/hotel/me/room_icon_open.gif" style="margin-top: -11px;margin-left: -08px;">
</div>
</div>
<div class="media-body">
<h4 class="text-subhead margin-none">
<spam class="link-text-color"><?php echo $data['caption']; ?></spam> <img data-toggle="tooltip" data-placement="left" title="Offline " src="public/images/hotel/staff/on.gif"/>

</h4>
<div class="text-light text-caption">
<img data-toggle="tooltip" data-placement="left" title="Users on" style="vertical-align:bottom;margin:0px 1px 0px 1px" src="public/images/hotel/index/user.gif"/> <b> <?php echo $data['users_now']; ?> </b> utenti dentro</td>
</div>
</div>
<div class="media-right">
</div>
    <div class="media-right">
    </div><br>
	   <?php } }else{ echo '<i>Non ci sono stanze aperte</i>'; } ?>

   </li>

  </ul>
   </div>

</div>

<div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item" style=" text-transform: uppercase; "><i class="fa fa-area-chart"></i> Statistiche</li>
<li class="list-group-item media v-middle">

<div class="media-body">

<div class="text-light text-caption">
<i class="fa fa-user"></i><b> <?php echo $user->GetCount('users'); ?> </b> utenti registrati</td><br>
<i class="fa  fa-user-times"></i><b> <?php echo $user->GetCount('bans'); ?> </b> utenti bannati</td><br>
<i class="fa fa-users"></i><b> <?php echo $user->GetOns(); ?> </b> utenti online</td><br>
<i class="fa fa-cloud"></i><b> <?php echo $user->GetCount('furniture'); ?> </b> furni</td><br>
<i class="fa fa-home"></i><b> <?php echo $user->GetCount('rooms'); ?> </b> stanze</td><br>
<i class="fa fa-heart"></i><b> <?php echo $user->GetCount('groups'); ?> </b> gruppi</td><br>

</div>
</div>
<div class="media-right">
</div>
    <div class="media-right">
    </div>
   </li>
  </ul>
   </div>

</div>

<div class="col-sm-4">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item" style=" text-transform: uppercase; "><i class="fa fa-area-chart"></i> I miei dati</li>
<li class="list-group-item media v-middle">

<div class="media-body">

<div class="text-light text-caption">
<i class="fa fa-user"></i> <b>ID</b>: <?php echo $user->filtertext($myid); ?></td><br>
<i class="fa fa-graduation-cap"></i> <b>Rank</b>: <?php echo $user->filtertext($myrank); ?></td><br>
<?php

$result = $db->query("SELECT * FROM user_stats WHERE id = '".$row['id']."'");
									while($data = $result->fetch_array()){
$row = $db->query("SELECT * FROM users WHERE id = '$id'");


?>
<i class="fa fa-plus"></i> <b>Punti ricompensa:</b> <?php echo $data['AchievementScore']; ?></td><br>
			<?php } ?>
<i class="fa fa-home"></i> <b>Stanze:</b> <?php echo $user->GetCount('rooms'); ?></td><br>
<i class="fa fa-heart"></i> <b>Gruppi:</b> <?php echo $user->GetCount('groups'); ?></td><br>

</div>
</div>
<div class="media-right">
</div>
   </li>
  </ul>
   </div>
</div>
</div>
</div>
<br /><br />

<?php include("registrazione/menus/footersite.php"); ?>