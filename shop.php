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
	$page = "Shop";
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
<ul class="list-group"> <li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i>Acquista Diamanti</li>
<li class="list-group-item media v-middle">	
<div class="container">
<div class="row">
<div class="parallax overflow-hidden bg-blue-400 page-section third">
<div class="container parallax-layer" data-opacity="true">
<div class="media v-middle">
<div class="media-left text-center">
<center><h1>Diamanti</h1></center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HAGJQMXDP4ADE">
<table>
<tr><td><input type="hidden" name="on0" value="Diamanti">Diamanti</td></tr><tr><td><select name="os0">
	<option value="2500 Diamanti">2500 Diamanti €3,00 EUR</option>
	<option value="5000 Diamanti">5000 Diamanti €4,00 EUR</option>
	<option value="10000 Diamanti">10000 Diamanti €7,00 EUR</option>
	<option value="20000 Diamanti">20000 Diamanti €13,00 EUR</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Il tuo nome utente">Il tuo nome utente</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
<img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
</div></div></div></div></div><br /><br /><br />
<div class="container">
<li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i>Acquista Distintivi</li>
<li class="list-group-item media v-middle">	
<div class="container">
<div class="row">
<div class="parallax overflow-hidden bg-blue-400 page-section third">
<div class="container parallax-layer" data-opacity="true">
<div class="media v-middle">
<div class="media-left text-center">
<center><h1>Distintivi</h1></center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="LSMNXK2UDWT9E">
<table>
<tr><td><input type="hidden" name="on0" value="Distintivi">Distintivi</td></tr><tr><td><select name="os0">
	<option value="1 Distintivo">1 Distintivo €0,50 EUR</option>
	<option value="2 Distintivi">2 Distintivi €0,80 EUR</option>
	<option value="5 Distintivi">5 Distintivi €2,00 EUR</option>
	<option value="7 Distintivi">7 Distintivi €2,60 EUR</option>
	<option value="10 Distintivi">10 Distintivi €3,50 EUR</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Nome utente e codici badge">Nome utente e codici badge</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
<img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>


</div>
</div></div></div></div>
<hr>
</ul> 


</div>
<div class="col-sm-4">
<li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-heart-o"></i> Come funziona?
</li>
<div class="panel panel-default paper-shadow" data-z="0.5" style="
    padding: 15px;
">
<br><b><font color="red">Diamanti: </font></b><br>
I diamanti servono per comprare dei furni esclusivi in Hubix Hotel.<br>
Tramite il sistema di pagamento offerto da PayPal, nell'arco di 48h riceverai i tuoi diamanti che ti verranno accreditati dal nostro staff.
Inoltre, riceverai un distintivo esclusivo se il tuo acquisto sarà di almeno 7€! 
<br><br>
<b><font color="blue">Distintivi: </font></b><br>
I distintivi sono il metodo di riconoscimento su Hubix Hotel.<br>
Acquista un distintivo o mandacene uno per fartelo caricare personalmente!<br>
Per questa procedura verrai contattato da un membro dello staff di Hubix.<br><br>
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