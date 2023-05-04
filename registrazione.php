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
	$user->logged('no');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="public/css/index.css">
  <title><?php echo SHORTNAME; ?> || DIVI&EacuteRTETE CON TODOS TUS AMIGOS</title>
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
       <a href="#"><div class="logo_h"><img src="public/images/logo-h.png"></div></a>
       <div class="online"><p><b><b><?php echo $user->GetOns(); ?></b></b> Ciudadanos explorendo</p></div>
    </div>
	<?php if($_SESSION['REGISTER_ERROR']){ ?>
	<center>
	<div style="background-color:red;width:100%;padding:4px;margin-top:40px;color:white">
      <font color="white"><FONT FACE="Raleway"><?php echo $_SESSION['REGISTER_ERROR']; ?></FONT></font>
    </div>
	</center>
	<?php } ?>
	
 </div>
       
  <div class="page">
  <div class="right">
        <img src="public/images//3.png" style="float:right;margin-right:60px;border: solid 20px rgba(0, 0, 0, 0.18);">
		  <a href="index"><button class="form__submit" onmouseover="javascript:this.style.backgroundColor=&#39;#119A80&#39;" onmouseout="javascript:this.style.backgroundColor=&#39;#0C7D67&#39;;" style="cursor:pointer;margin-top:-300px;margin-right:300px;">INICIAR SESI&Oacute;N</button></a>
		<div style="background:rgba(0, 0, 0, 0.41);width:100%;font-family: &#39;Ubuntu&#39;;height:100px;position:absolute;z-index:3;margin-top:321px;padding:10px;color:white;margin-left:-260px;width:700px;"><center><b>&iquest;Qu&eacute es <?php echo SHORTNAME; ?> Hotel?</b><br><?php echo SHORTNAME; ?> Hotel es un mundo virtual para los jugadores mayores de 13 a&ntilde;os, el cual puede crear su propio car&aacutecter y el dise&ntilde;o de su habitaci&oacuten de la manera deseada. Usted puede conocer a nuevos amigos, una fiesta, cuidar de las mascotas virtuales, jugar y crear sus propios juegos y completar tareas.! Llama a tus amig@s y <b><a href="registro"><font color="white">&UacuteNETE</font></a></b> a nuestra comunidad <b>GRATIS</b>.</center> </div>
    </div>
    
    <div class="left">
      <div class="right_hotel"><img src="public/images//bg_hotel.out.png"></div>
      <div id="phone" style="margin-top:-20px;margin-left:200px;">
          <div id="ecran">
            <div id="triangle">
			<div id="round" style="margin-top:10px;"></div>
                 <div align="center">
			  <img style="margin-top:-13px;" src="http://habbofont.com/font/habbo/<?php echo SHORTNAME; ?>.gif">
			  <img style="margin-top:10px;" src="http://habbofont.com/font/habbo/movil.gif"></div>
              <div id="login_form">
				<form method="post" style="margin-top:-50px;" action="<?php echo PATH; ?>/register_submit.php">
                <input type="text" class="input_text" name="reg.username" placeholder="Nombre de Usuario">
                <input type="mail" class="input_text" name="reg.mail" placeholder="Email">
                <input type="password" class="input_text" name="reg.password" placeholder="Contrase&ntilde;a">
                <input type="password" class="input_text" name="reg.password2" placeholder="Repite la contrase&ntilde;a">
                <input type="submit" id="input_button" value="Registrarme" style="background-color:#18bc9c;">
            </form>
              </div>
            </div>
          </div> 
          <div id="bouton_home"></div>
      </div>
	  
    </div>
	
  </div>
  
  



</body></html>
<?php if($_SESSION['REGISTER_ERROR']){ unset($_SESSION['REGISTER_ERROR']);unset($_SESSION['REG_USERNAME']);unset($_SESSION['REG_MAIL']);unset($_SESSION['REG_PASSWORD']);unset($_SESSION['REG_PASSWORD2']);} ?>
<?php ob_end_flush(); ?>