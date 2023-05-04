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
	require_once 'inc/core.php';
	$user->logged('yes');
	$page = "Comunidad";
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
</br>
<div class="row">
<div class="col-sm-13">
<div class="panel panel-default paper-shadow" data-z="0.5">
<ul class="list-group">
<li class="list-group-item list-group-item-moeda" style=" text-transform: uppercase; "><i class="fa fa-check-square"></i> users online</li>
<?php 	global $db;
								$result = $db->query("SELECT * FROM users WHERE online = '1' ORDER BY id ASC");
								if($result->num_rows > 0){
									while($data = $result->fetch_array()){ 
									if($data['online'] == "1"){
									$status = "on";
								}else{	
									$status = "of";
								}?>
<div class="media-left">
<div data-toggle="tooltip" data-placement="right" title="HOBB" class="icon-block half img-circle bg-grey-200" style=" overflow: hidden; ">
<a href=""><img alt="HOBB" src="<?php echo AVATARIMAGE . $data['look']; ?>&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;size=b" style="margin-top: -11px;margin-left: -08px;"></a>
</div>
<h4 class="text-subhead margin-none">
<spam class="link-text-color"><?php echo $data['username']; ?></spam> <img data-toggle="tooltip" data-placement="left" title="<?php echo $status; ?> " src="public/images/hotel/staff/<?php echo $status; ?>.gif"/>
</h4>

</div>
						<?php } } else{ echo '<center><b style="color:red">No hay usuarios online</b></center>'; } ?>	
					
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