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
	$page = "News";
	$tab  = "2";
	$myusername = $user->Get('username');
	$mylook = $user->Get('look');
	$mymotto = $user->Get('motto');
	$mycoins = $user->Get('credits');
	$myduckets = $user->Get('activity_points');
	$mydiamonds = $user->Get('vip_points');
	echo $row['username'];
	require_once 'extra/header.php';
	
		$getid = $user->filtertext($_GET['id']);
	
	if(empty($getid)){
		$news_new = $db->query("SELECT * FROM cms_news_new ORDER BY id DESC LIMIT 1");
		$news_info = $news_new->fetch_array();
		$getid = $news_info['id'];
	}else{
		$news_new = $db->query("SELECT * FROM cms_news_new WHERE id = '{$getid}' LIMIT 1");
		$news_info = $news_new->fetch_array();
	}
	
	?>
<body style="font: 13px 'open sans', sans-serif;    background: url();    text-shadow: 0 .02rem .1rem rgba(0,0,0,.1);">
 
<?php include("extra/menu.php"); ?>
<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="panel panel-default" data-open="false">
<div class="panel-heading panel-collapse-trigger">
<h4 class="panel-title">Ultima notizia</h4>
</div>
<div class="panel-body list-group">
<ul class="list-group list-group-menu">
 <?php
							$result = $db->query("SELECT * FROM cms_news_new ORDER BY id DESC");
							if($result->num_rows > 0){
								echo '';
								while($data = $result->fetch_array()){
									if($data['id'] == $getid){
										$k = "";
									}
									echo '<li class="list-group-item"><a class="link-text-color" href="'. PATH .'/news?id='.$data[id].'">'.$data['title'].'&nbsp;&raquo;</a></li>';
									unset($k);
								}
								echo '';
								
							}else{
								echo '<i></i>';
							}
						?>  				
</ul>
</div>
</div>
</div>
<div class="col-sm-9">
<div class="panel panel-default paper-shadow" data-z="0.5">
<div class="panel-heading">
<h4 class="text-headline"><?php echo $news_info['title']; ?></h4>
</div>
<div class="panel-body">
<?php echo $news_info['story']; ?>
</div>
</div>
<hr>

<div class="panel panel-default paper-shadow" data-z="0.5" style="
    overflow: initial;
">
<div id="infos">

<div style="width:305px; height:56px; margin-top:11px; float:left; margin-left:10px; font-size: 12px; color:#666666;">
<div style="margin-top:2px;">Autore: <b><a><?php echo $news_info['author']; ?>	</a></b>
<br>
</div>

<div style="margin-top:2px;">Pubblicato il <b><?php echo date('d/m/Y', $news_info['time']); ?></b></div>

</div>

<div style="width:1px;height: 60px;background: #D3D6DB; float:left; margin-top:12px;"></div>
<div style="width:400px; height:69px; float:left;">
<div style="width:125px; height:60px; float:right; margin-right:4px;     margin-top: 11px;">
</div>
</div>
<div style="width: 100%; height:5px;"></div>
<div style="width: 100%; height:auto; overflow:hidden; padding:5px 0px 5px 7px" id="avaliar_news">
</div>
</div>
</div>

</div>
<style type='text/css'>.fb_iframe_widget,.fb_iframe_widget span,.fb_iframe_widget iframe[style]{width:100%!important;}.box-avatar2>img{margin-left:-15px;margin-top:-30px;border-radius:100px;-webkit-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-moz-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-ms-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-o-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);transition:all .8s cubic-bezier(.190,1.000,.220,1.000)}.box-avatar2:hover>img{margin-top:-20px;-webkit-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-moz-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-ms-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-o-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);transition:all .8s cubic-bezier(.190,1.000,.220,1.000)}.eita{margin-top:50px}.fuck-adblock{margin:50px 0 0}.home>li>a:hover,.home>li>a:focus{text-decoretion:none;color:#fff;background-color:#000}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{background-image:none;filter:none;background-color:#4c5566;color:#fff}.avatar img{border-radius:500px;background-color:#fff;margin-top:-31px;margin-left:-18px;}.huge{font-size:35px;font-weight:100}.home>li>a:hover,.home>li>a:focus{text-decoretion:none;color:#fff;background-color:#000}.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus{background-image:none;filter:none;background-color:#4c5566;color:#fff}#colorfill{width:135px;height:35px}.box-avatar{position:relative;text-align:center;width:130px;height:130px;border-radius:100px;background-color:#eee;overflow:hidden}.box-avatar>img{max-width:100%;vertical-align:middle;border-radius:100px;-webkit-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-moz-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-ms-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-o-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);transition:all .8s cubic-bezier(.190,1.000,.220,1.000)}.box-avatar:hover>img{margin-top:-20px;-webkit-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-moz-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-ms-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);-o-transition:all .8s cubic-bezier(.190,1.000,.220,1.000);transition:all .8s cubic-bezier(.190,1.000,.220,1.000)}.nav>li>a .avatar{width:32px;height:32px;overflow:hidden;border:1px solid #4FB5D0;}.box-avatar2.no{position:relative;text-align:center;width:35px;height:35px;border-radius:100px;background-color:#B31F17;overflow:hidden;float:left;margin:4px;}.box-avatar2.yes{position:relative;text-align:center;width:35px;height:35px;border-radius:100px;background-color:#66C331;overflow:hidden;float:left;margin:4px;}.red-tooltip+.tooltip>.tooltip-inner{background-color:#f00;}.red-tooltip+.tooltip>.tooltip-arrow{border-bottom-color:#f00;}</style>
</div></div></div>
</div>
<div class="container">
<hr>
<?php include("extra/footer.php"); ?>
