<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

$pageid = "index";
include './init.php';

if(isset($_POST['username']) && isset($_POST['password'])){
        if(!empty($_POST['username']) || !empty($_POST['password'])) {
            $password = isset($_POST['password']) ? Hashage($_POST['password']) : '';
            $username = isset($_POST['username']) ? safe($_POST['username'],'SQL') : '';
            $Auth::Login($username, $password);
        }else{
            $erreurmess = 'Gracias por llenar los espacios en blanco .' AND $erreurc = true;
        }
}
if(isset($_GET['username'])) {
$username = safe($_GET['username'],'SQL');
    if(@$_GET['disabled'] == '1') {
        $erreurmess = "Su cuenta ha sido desactivada. Si es nuestro error, por favor, póngase en contacto con nosotros : en @".Settings('Court_Url') AND $erreurc = true;
    } else {
    if(isset($_GET['reason']) AND isset($_GET['expire'])) {
        $reason = safe($_GET['reason'],'SQL');
        $expire = safe($_GET['expire'],'SQL');
        $erreurmess = "Su cuenta ha sido restringido por la siguiente razón : ".$reason.". Expiración de Baneo: ".decrypt($expire) AND $erreurc = true;
    } else {
        $erreurmess = "Utente o passwrod incorretti." AND $erreurc = true;
    }
    }
}

include './includes/files/register.php';

$Auth::Session_Connected($_SESSION);

$pagename = "¡Haz amig@s, diviertete y date a conocer.";
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title>Hubix - Index</title>
<link type="text/css" href="<?php print URL; ?>/web/css/material.css?<?php print UPDATE; ?>" rel="stylesheet">
<style>input:-webkit-autofill{-webkit-box-shadow:0 0 0px 1000px white inset;}#header-content{background:#435363;-webkit-animation:bg 5s infinite alternate;-moz-animation:bg 5s infinite alternate;-o-animation:bg 5s infinite alternate;animation:bg 5s infinite alternate;}#header-content ul ul{background:#515151;-webkit-animation:bg 5s infinite alternate;-moz-animation:bg 5s infinite alternate;-o-animation:bg 5s infinite alternate;animation:bg 5s infinite alternate;}@-webkit-keyframes bg{0%{background:#069;}100%{background:#046380;}}@-moz-keyframes bg{0%{background:#069;}100%{background:#046380;}}@-o-keyframes bg{0%{background:#069;}100%{background:#046380;}}@keyframes bg{0%{background:#069;}100%{background:#046380;}}</style>

<style type="text/css">#login-errors {
    width: 100%;
    height: auto;
    background-color: #fc6621;
    color: #fff;
    font-size: 17px;
    font-weight: bold;
    text-align: center;
    line-height: 35px;
}</style>
<?php if(@$erreurc == true) { ?>
<div id="login-errors">
<div align="center">
<?php print @$erreurmess; ?>
</div></div>
<?php } ?>

<?php if(Settings('Maintenance') == 'true') { ?>
<div id="login-errors">
<div align="center">
L'hotel è in manutenzione! Riprova più tardi.
</div></div>
<?php } ?>
<?php @$do2 = safe($_GET['staffip'],'SQL'); if($do2 == "true") { ?>
<div id="login-errors">
<div align="center">
Non hai diritti di connetterti a questo acccount,si prega di utilizzarne un altro.
</div></div>
<?php } ?>
<?php @$do2 = safe($_GET['changePwd'],'SQL'); if($do2 == "true") { ?>
<div id="login-errors">
<div align="center">
E'stato appena inviato un messaggio contenente un link che consente di modificare la vostra password.
</div></div>
<?php } ?>

<?php include './templates/header.php'; ?>

		 						 <script type="text/rocketscript">

     (function ($) {
         $.support.placeholder = ('placeholder' in document.createElement('input'));
     })(jQuery);


     //fix for IE7 and IE8
     $(function () {
         if (!$.support.placeholder) {
             $("[placeholder]").focus(function () {
                 if ($(this).val() == $(this).attr("placeholder")) $(this).val("");
             }).blur(function () {
                 if ($(this).val() == "") $(this).val($(this).attr("placeholder"));
             }).blur();

             $("[placeholder]").parents("form").submit(function () {
                 $(this).find('[placeholder]').each(function() {
                     if ($(this).val() == $(this).attr("placeholder")) {
                         $(this).val("");
                     }
                 });
             });
         }
     });
 </script><div id="gradient_bg_adow" style="background: linear-gradient(white,#E6E6E6);">
       <div class="container_24">
            			<div class="grid_13">
<h1 style="
    color: #525252;
    font-size: 18px;
    width: 461px;
">Hubix, è un gioco virtuale per tutti i ragazzi. Potrai conoscere e chattare con nuovi amici e rimanere sicuro 24/24h e 7/7 giorni. 
Potrai creare fantastiche stanze, grazie alla nostra varia gamma di furni!</h1>
<img src="http://i58.tinypic.com/264ksc2.gif">
			</div>					
					            <div class="grid_11" style="float:right;">
<h1 style="
    color: #525252;
    font-size: 36px;
    width: 461px;
    margin-top: 6px;
">Registrati qui! <xs style="background: #4CAF50;box-shadow: 0px 2px rgba(0,0,0,.2);color: white;font-size: 14px;    padding: 3px 7px 1px;border-radius: 3px;margin-top: 11px;margin-left: 138px;position: absolute;">GRATIS</xs></h1>
<p style="    margin-top: -19px;">Non hai un account? Registrati ore!</p>
<form class="form form--left registration-form" method="post">
<p style="
    margin: 0px 0px 4px;
    font-size: 12px;
    color: #333;
	width: 400px;
"<p id="registp"><b>Attenzione:</b> Non dovete fornire le vostre informazioni personali a persone estranee!</p><br>
<input name="bean_name" type="text" value="" placeholder="Nome utente" style="
    padding: 0px 12px;
    height: 39px;
    width: auto;
    right: 111px;
    border: 1px solid #bdc7d8;
    border-radius: 4px;
    line-height: 19px;
    font-size: 18px;
	margin-bottom: 8px;
    width: 384px;
" maxlength="25" required><i class="icon fa fa-user" style="
    margin-left: -23px;    opacity: 0.7;
"></i>
<p style="
    margin: 0px 0px 7px;
    font-size: 12px;
    color: #333;
	width: 372px;
"> Per favore utilizza un indirizzo email valido.</p>
<input name="bean_email" type="email" value="" placeholder="Email" style="
    padding: 0px 12px;
    height: 39px;
    width: auto;
    right: 111px;
    border: 1px solid #bdc7d8;
    border-radius: 4px;
    line-height: 19px;
    font-size: 18px;
	margin-bottom: 8px;
    width: 384px;
" required><i class="icon fa fa-envelope" style="
    margin-left: -23px;    opacity: 0.7;
"></i>
<p style="
    margin: 0px 0px 7px;
    font-size: 12px;
    color: #333;
    width: 372px;
"> Utilizza almeno 6 caretteri,includi una lettera, un numero e un carattere speciale.</p>
<input name="bean_password" type="password" placeholder="Password" style="
    padding: 0px 12px;
    height: 39px;
    width: auto;
    right: 111px;
    border: 1px solid #bdc7d8;
    border-radius: 4px;
    line-height: 19px;
    font-size: 18px;
	margin-bottom: 8px;
    width: 384px;
" autocomplete="new-password" required>
<i class="icon fa fa-lock" style="
    margin-left: -23px;    opacity: 0.7;
"></i>
<p style="
    font-size: 11px;
    margin: 0px 0px 7px;
    width: 273px;
    color: #333;
    width: 270px;
">Non è possibile registrarsi? <a href="https://localhost/staffs" target="_blank" style="color:#069">Contatta un amministratore</a>.</p>
<button type="submit" class="button raised green" id="checkInHeader" style="
    padding: 4px 76px;
    width: auto;
    border-radius: 5px;
    font-size: 18px;
    border: 1px solid #069;    height: 40px;
">Registrami ore»</button></form>
<paper-ripple fit=""></paper-ripple>
                    </div>
                </div></div>

<?php include './templates/footer.php'; ?>

</div>
</body></html>