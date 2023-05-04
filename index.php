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
	$user->logged('no');
?>
<!DOCTYPE html>
<html lang="no">
<head>
<meta charset="utf-8" />
<title>Benvenuto su Hubix Hotel</title>
<link rel="shortcut icon" href="/login/favicon.ico" />
<link rel="stylesheet" href="/login/css/all.css" />
<link rel="stylesheet" href="/login/css/login.css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic|Ubuntu+Condensed:400italic,400" />
<link rel="stylesheet" href="/habin/login/css/animate.min.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
</head>
<?php if(MAINTENANCE == 1) header("LOCATION: ". PATH ."/manutenzione");  ?>
<body style="background-image:url(http://ecotechitsolutions.com/wp-content/uploads/2014/07/body_bg.jpg)">
	<header id="page-header">
		<div class="container">
			<h1><a href="index"><img src="hubixlogo.png" alt="Hubix Hotel" /></a></h1>
			<form action="submit.php" method="post" class="login"> 
				<div class="form-input"style="margin-top:22px;">
					<span>Nome utente</span>
					<input class="input-text" type="text" name="username" id="username" placeholder="Il tuo nome utente" autofocus required />
				</div>
				<div class="form-input"style="margin-top:22px;">
					<span>Password</span>
					<input type="password" class="input-text" name="password" id="password" type="password" placeholder="La tua password" required />
				</div>
				<div id="form-submit">
					<input type="submit" name="login" class="button" value="Entra!" />
				</div>
			</form>
			<div id="header-online" style="margin-left: 150px;">
                        <div class="arrow"></div>
                        <b><?php echo $user->GetOns(); ?></b> utenti online
			</div>
		</div>
		<div style="margin-top: 40px;margin-left: 805px;position: absolute;float: left;"><span class="vl"></span></div>
	</header>
	<div class="container">
<div class="row">
	<a href="registrazione/registrati.php" id="register-button">
		<span class="top">Registrati,</span>
		<span class="bottom">è gratis!</span>
	</a>
	<div id="register-slogan">
		<h1>Cos'è Hubix Hotel?</h1>
		<h2>Hubix Hotel è un mondo virtuale per i giocatori che hanno compiuto più di 13 anni</h2>
		<p><a href="registrazione/registrati.php">Crea il tuo personaggio e il design della tua camera nel modo in cui vuoi!</a></p>
	</div>
	<div class="clearfix"></div>
</div>
<div class="row news-list">
	<h2>Le ultime notizie da Hubix Hotel</h2>
			<?php
						$getNews = mysql_query("SELECT * FROM `cms_news_new` WHERE `campaign` = '0' ORDER BY `id` DESC LIMIT 3");
						
						
						while($newsinfo = mysql_fetch_array($getNews)) 
							
					{
							echo '
							<div class="news-list-article">
		<h3><a href="#">'.$newsinfo['title'].'</a></h3>
		<p>'.$newsinfo['shortstory'].'</p>
	</div>

	
	
		
	
							';
echo '

 ';
						}
						?>
<p class="news-list-all"><i class="fa fa-arrow-right"></i> <a href="/news">Leggi le altre news!</a></p>
</div></div>
	<footer id="page-footer">
		<div class="container">
			<div class="col social">
				<h3>Segui Hubix</h3>
				<center><p class="social-facebook"><a href="https://www.facebook.com/WorldGiBBo" title="Segui Hubix Facebook" target="_blank"></p><img src="http://i.imgur.com/cB77XpA.png" alt="Hubix su Facebook" /></a></center>
			</div>
			<div class="col copyright">
				<p>&copy; 2016 - Hubix Hotel.</p>
				<p><b style=" color: #006FBF; ">HubixCMS </b><b style=" color: #A11C00; "></b> v4 <b style=" color: #A11C00; text-decoretion: overline;">BETA</b> | Made with <i class="fa fa-heart-o"></i> by <strong>JAlf</strong></font></p>
				<p>Hubix Hotel non e' affiliato, riconosciuto, sponsorizzato o approvato da Sulake Corporation Oy o dalle societa' affiliate.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</footer>
	<div id="login-illustration"></div>
	<script src="/login/js/jquery-2.1.1.min.js"></script>
	<script src="/login/js/login.js"></script>
</body>
</html>