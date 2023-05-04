<?php
/* #################################################################### \
||                                                                     ||
|| TwinkieCMS - Use of this software is strictly prohibited.           *#
|| # Copyright (C) 2014 lD@vidl.                                       *#
||---------------------------------------------------------------------*#
||---------------------------------------------------------------------*#
|| Script pensado para la gesti&oacuten de retroservers Habbo.               *#
|| Tanto el script como los autores del mismo no tienen ning&uacuten tipo    *#
|| de asociaci&oacuten con Habbo y/o Sulake Oy Corp. Por lo tanto, estos no  *#
|| se hacen responsables del uso que el usuario le d&eacute.                 *#
||                                                                     ||
\ ################################################################### */
ob_start();
	require_once 'inc/core.php';
	$user->logged('no');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="public/css/index.css">
  <title>Hubix - Divertiti con noi!</title>
  <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
  <link href="public/login.css" rel="stylesheet" <link="" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="public/js/jquery.min.js"></script><style type="text/css"></style>
  <script src="public/script.js"></script>
  <link rel="shortcut icon" href="favicon.ico">
<style>
.form__submit {
    box-shadow: 0 3px 0 1px rgba(0,0,0,.3);
    background-color: #0C7D67;
    border-color: #18BC9C;
    font-size: 16px;
    padding: 12px 24px;
    float: right;
	line-height: 1.2;
    color: #fff;
    border-radius: 5px;
    border-width: 2px;
    border-style: solid;
    text-transform: uppercase;
    display: inline-block;
    text-align: center;
    margin-bottom: 4px;
}
</style></head>

 
 
<body>
<div class="nav">
    <div class="nav_content">
       <a href="#"><div class="logo_h"><img src="http://habbofont.com/font/jungle/Hubix.gif"></div></a>
       <div class="online"><p><b><b><?php echo $user->GetOns(); ?></b></b> Utenti online!</p></div>
    </div>
	<?php if($_SESSION['LOGIN_ERROR']){ ?>
	<center>
	<div style="background-color:red;width:100%;padding:4px;margin-top:40px;color:white">
      <font color="white"><FONT FACE="Raleway"><?php echo $_SESSION['LOGIN_ERROR']; ?></FONT></font>
    </div>
	</center>
	<?php } ?>
	
 </div>
  <div class="page">
  <div class="right">
        <img src="public/images/3.png" style="float:right;margin-right:60px;border: solid 20px rgba(0, 0, 0, 0.18);">
		  <a href="registrazione"><button class="form__submit" onmouseover="javascript:this.style.backgroundColor=&#39;#119A80&#39;" onmouseout="javascript:this.style.backgroundColor=&#39;#0C7D67&#39;;" style="cursor:pointer;margin-top:-300px;margin-right:300px;">REGISTRATI GRATIS</button></a>
		<div style="background:rgba(0, 0, 0, 0.41);width:100%;font-family: &#39;Ubuntu&#39;;height:100px;position:absolute;z-index:3;margin-top:321px;padding:10px;color:white;margin-left:-260px;width:700px;"><center><b>Cos'è Hubix Hotel?</b><br>Hubix Hotel è un mondo virtuale per i giocatori che hanno compiuto più di 13 anni, possono creare il proprio personaggio e il design della vostra camera nel modo desiderato. Si possono incontrare nuovi amici, creare una festa, giocare e creare i propri giochi e completare le attività offerte dallo Staff! Chiama i tuoi amici e digli di <b><a href="registrazione"><font color="white">unirsi</font></a></b> alla nostra community <b>GRATIS</b>.</center> </div>
    </div>
    
    <div class="left">
      <div class="right_hotel"><img src="public/images/bg_hotel.out.png"></div>
      <div id="phone" style="margin-top:-20px;margin-left:200px;">
          <div id="ecran">
            <div id="triangle">
              <div id="round"></div>
              <div align="center">
			  <img style="margin-top:20px;" src="http://habbofont.com/font/habbo/Hubix.gif"<?php echo SHORTNAME; ?>.gif">
			  <img style="margin-top:43px;" src="http://habbofont.com/font/habbo/Mobile.gif"></div>
              <div id="login_form">
            <form autocomplete="off" method="post" action="<?php echo PATH; ?>/submit.php">
            	<div class="input-box username"><input type="text" class="input_text" placeholder="Nome Utente" name="username"></div>
                <div class="input-box password"><input type="password" class="input_text" placeholder="Password" name="password"></div>
               <b> <input type="submit" id="input_button" value="Accedi" name="login" style="background-color:#18bc9c;"></b>             
			  </form>			  
			  <a href="registrazione"><button id="input_button" style="float:left;margin-top:340px;margin-left:-243px;">Registrami</button></a>
              </div>
            </div>
			
          </div> 
		  
          <div id="bouton_home"></div>
      </div>

    </div>
	
  </div>
  
  
 

				


</body>
</html>

<?php if($_SESSION['LOGIN_ERROR']){ unset($_SESSION['LOGIN_ERROR']); unset($_SESSION['LOGIN_USERNAME']); unset($_SESSION['LOGIN_PASSWORD']);} ?>
<?php ob_end_flush(); ?>