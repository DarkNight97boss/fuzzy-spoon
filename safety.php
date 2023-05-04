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
	$page = "Suggerimenti per la sicurezza!";
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
 
<?php include("extra/menu.php"); ?>

<div class="container">
<div class="row">
<div class="col-sm-8">
<ul class="list-group"> <li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i> Suggerimenti per la sicurezza!</li>
<div class="panel panel-default paper-shadow" data-z="0.5">
<div class="cover overlay cover-image-full hover" style="height: 100px;">
<span class="img icon-block height-100 bg-lightred" style="background-image: url(public/images/hotel/security/wpid-lpromo_kitchenbundle2.png);background-position: 00px -090px;background-repeat: no-repeat;"></span>
</div>
<br /><br /><br /><br /><br /><br />
<div class="panel-body">
<p> <b>1.Suggerimenti sulla propria sicurezza</b><br/>
Proteggere le informazioni personali Non si sa mai chi si sta realmente parlando, per questo ti raccomandiamo di non dare il tuo indirizzo, il tuo numero di telefono o le proprie foto personali.
<br/><br>
<b>2.Amicizie virtuali</b><br/>
Non accettare mai l'amicizia di una persona che si conosce solo su internet, le persone online non sono sempre chi dicono. 
<br/><br/>
<b>3.Non accettare incontri reali</b><br/>
Non accettare le richieste da persone sconosciute che vogliona la tua foto o il tuo volto in webcam, le proprie immagini che vanno su internet possono sfuggire di controllo, possono essere modificate e anche trasmesse o pubblicate su altri siti. Possono essere utilizzati anche contro di te in la forma di minaccia o forse anche peggio. Pensa bene prima di mostrare una tua foto la tua faccia dal computer!<br/>
<br/><b>4.Relazioni virtuali</b><br/>
Non abbi paura di suonare l'allarme se qualcuno ti fa paura, intimidisce o fa cose strane e sbagliate contro di te, devi immediatamente riferire a un moderatore e fare una denuncia. <br/>
<br/><b>5.Utilizzare una password sicura</b><br/>
Utilizzare una password sicura, una combinazione di almeno otto cifre, lettere, numeri e codici random, e lettere maiuscole. <br/>
<br/><b>6.Non pubblicizzare altri Hotel</b><br/>
Ci sono molti altri alberghi come Hubix, ma in esse non possiamo garantire la propria sicurezza o la qualita', quindi non fare il rilascio di altri link esterni, fai diventare Hubix hotel il migliore possibile, quindi rimani con noi!
</div>
<hr class="margin-none">
</div>
</div>
<div class="col-sm-4">
<li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i> Sempre in sicurezza!</li>
<div class="panel panel-default paper-shadow" data-z="0.5">
<div class="panel-body">
<p>
Questa e' una pagina che ti porta verso il Supporto al giocatore che si occupa di aiutare gli utenti in difficoltà e di proteggere ulteriormente la propria sicurezza.  <br/><br/>
<img src="public/images/hotel/security/franksplaca.gif" style="float:left"/> Il team Amministratori di Hubix ritiene che l'Aiuto e' importante per tutti, quindi ha ideato questo ulteriore metodo per garantire la sicurezza in hotel.</p>
</div>
</div>
<li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-star-o"></i> Moderazione e sicurezza</li>
<div class="panel panel-default paper-shadow" data-z="0.5">
<div class="panel-body">
<p>
<img src="public/images/hotel/security/pixelsom.png" style="float:right;"/>Hai visto qualcosa o qualcuno rompere l'etichetta di Hubix o minacciare gli utenti? Non tacere, chiedi immediatamente aiuto e segnalalo a un moderatore o a un membro dell'amministrazione, che ti aiutera' sempre!</p>
</div>
</div>
</div>
</div></div></div>
</div>
<div class="container">
<hr>
<?php include("extra/footer.php"); ?>
