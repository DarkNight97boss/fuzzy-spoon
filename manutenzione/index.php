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
	require_once '../inc/core.php';
	?>
<html>
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Hubix Hotel | Manutenzione</title>

<meta name="description" content=""><link rel="stylesheet" type="text/css" href="mantenimiento/main-66f55605d9ee2b8f3c571910eb12c551.css">
</head>

<body>
<header>

<div class="wrapper"> <a href="<?php echo PATH; ?>"><img src="../logogrande.gif" style="margin-top: 20px;margin-left: 10PX;"/></a></div>

</header>

<div class="page-content">
<div class="wrapper" style="position:relative">
<div class="card-wrapper"><div class="card left" style="height:370px; width:800px">

<h1>Hubix Hotel è in manutenzione!</h1>

<p>Siamo in manutenzione, non preoccupatevi, cerchiamo di tornare il presto possibile!</p>
<p>Stiamo sistemando dei problemi per migliorare la vostra comodezza ed il vostro conforto sul nostro sito!</p>
<p>L'Hotel dovrebbe riaprire il <b><?php echo GIORNOMANUTENZIONE; ?> alle ore <?php echo ORAMANUTENZIONE; ?></b></p>
<img src="//habboo-a.akamaihd.net/maintenance/habboWeb_error-ebecbcd43a969fd176de350b5e85fe81.png" alt=""/>
</div></div>

<div class="card-wrapper"><div class="card right" style="height:370px; width:300px">
<script>
                                            (function(e, a, f) {
                                                var c, b = e.getElementsByTagName(a)[0];
                                                if (e.getElementById(f)) {
                                                    return
                                                }
                                                c = e.createElement(a);
                                                c.id = f;
                                                c.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
                                                b.parentNode.insertBefore(c, b)
                                            }(document, "script", "facebook-jssdk"));
                                        </script>
                                        <div style="
    border-radius: 100px;
" class="fb-like-box" data-href="http://www.facebook.com/WorldGiBBo" data-width="294" data-height="365" data-show-faces="true" data-stream="true" data-show-border="false" data-header="false"></div>
                                        <script type="text/javascript"></script>

</div></div></div> </div>

<footer class="footer"><div class="wrapper"><div class="footer__media">
<p class="footer__media__label" translate="">Segui Hubix</p>
<ul><li class="footer__media__item"><a href="https://www.facebook.com/WorldGiBBo" class="icon__button"><span class="icon--facebook--footer"></span></a></li></ul></div>
<div class="footer__content"><ul class="footer__nav"><li class="footer__nav__item"><a href="../terminiecondizioni">Termini e Condizioni</a></li>
<li class="footer__nav__item"><a href="../safety">Safety</a></li>
<li class="footer__nav__item"><a href="../accessoadmin.php">Accesso agli Amministratori</a></li></ul>
<p class="footer__copyright">&copy; 2016 - Hubix Hotel.<br /><b style=" color: #006FBF; ">HubixCMS </b><b style=" color: #A11C00; "></b> v4 <b style=" color: #A11C00; text-decoretion: overline;">BETA</b> | Made with <i class="fa fa-heart-o"></i> by <strong>JAlf</strong></font><br />Hubix Hotel non e' affiliato, riconosciuto, sponsorizzato o approvato da Sulake Corporation Oy o dalle societa' affiliate.</p><a href="<?php echo PATH; ?>" class="footer__sulake" style="margin-top: 30px;"><img src="logo.gif" style="margin-top: 20px;margin-left: 10PX;"/></a>
</div></div> </footer></body></html>