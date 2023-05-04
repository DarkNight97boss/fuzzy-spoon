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
	$page = "FAQ";
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
<ul class="list-group"> <li class="list-group-item list-group-item" style=" text-transform: uppercase; "><i class="fa fa-gavel"></i> Frequently Asked Questions</li>
<div class="panel panel-default paper-shadow" data-z="0.5">
<div class="cover overlay cover-image-full hover" style="height: 100px;">
<span class="img icon-block height-100 bg-lightred" style="background-image: url(public/images/hotel/security/lpromo_gen15_08.png);background-position: 00px -090px;background-repeat: no-repeat;"></span>
</div>
<br /><br /><br /><br /><br /><br />
<div class="panel-body">
<p><strong>COS'E' HUBIX HOTEL?</strong>
	<br>Hubix Hotel è un gioco online che ti consente di creare il tuo personaggio e le tue stanze e di partecipare a giochi ed eventi esclusivi organizzati dal nostro staff.
	<br>Hubix Hotel non fa parte e non e' affiliato e/o collegato in alcun modo con la Sulake Corporation Oy.
	<br>Le modifiche ai file e al materiale di questo sito web possono richiedere fino a 60 giorni. L'utente e' responsabile dell'utilizzo del sito web.
	<br>
	<br />
	<strong>COSA SONO I DIAMANTI?</strong>
	<br>I Diamanti sono le monete esclusive di Hubix Hotel. Servono per comprare dei furni non usuali; se vuoi comprarne clicca <a href="shop">qui</a>.
	<br />
	<br />
	<strong>SERVIZI EXTRA</strong>
	<br>Upgrades e miglioramenti sono disponibili su questo sito web in cambio di un corrispettivo in denaro.
	<br>I pagamenti avvengono in modo sicuro sul network PayPal, non gestito e non affiliato con Hubix Hotel. Il network e' protetto da certificati SSL a 128 e 256 bit, per garantire una maggior sicurezza all'utente che acquista un upgrade.
	<br>Successivamente al pagamento, l'upgrade verra' inserito da un Gestore o Fondatore di Hubix Hotel. Il processo puo' richiedere 24 ore circa, per verificare se il pagamento e' stato correttamente effettuato ed accreditato.
	<br />
	<br />
	<strong>COME CONTATTO LO STAFF?</strong>
	<br>Lo staff di Hubix Hotel è sempre disponibile per ogni tua richiesta.
	<br>Se vuoi parlare con uno dei fondatori di Hubix Hotel, scrivici all'indirizzo email staff@hubixhotel.eu.
	<br />
	<br />
	<br /></p>
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
