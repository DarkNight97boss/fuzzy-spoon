<?php
ob_start();
	require_once 'inc/core.php';
	$user->logged('yes');
	$user->cstaff_login();
	if($_SESSION['HK_ERROR_LOGIN']){
		$error = $_SESSION['HK_ERROR_LOGIN'];
		unset($_SESSION['HK_ERROR_LOGIN']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo SHORTNAME; ?> ~ Home</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="hk/images/favicon.ico" type="image/vnd.microsoft.icon">
	<link type="text/css" href="clientstaff/grafica1.css" rel="stylesheet">
    <script src="clientstaff/codice.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<?php if($error){ ?>
	<script>
		$(document).ready(function(){
		  $("#close").click(function(){
			$("#overlay").fadeOut()
		  });
		});
		$(document).ready(function(){
			$("#overlay").fadeIn()
		});
	</script>
	<?php } ?>
</head>
<body>
	<?php if($error){ ?>
	<div id="overlay" style="display: none;">
		<div id="type">
			<div id="alert"><div id="close">X</div><?php echo $error; ?></div>
		</div>
	</div>
	<?php } ?>
	<div id="body">
<hgroup>
  <h1>Entra nel Client</h1>
  <h3>Fai parte dello staff di Hubix Hotel. Inserisci la password del client per entrare!</h3>
</hgroup>
<form action="clientsub.php" method="post">
  <div class="group">
    <input type="password" name="password" id="login-pass"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <button type="submit" class="button buttonBlue">Entra
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer><a href="http://hubixhotel.eu/" target="_blank"><img src="logogrande.gif"></a>
  <p>Uno script made by <a href="http://hubixhotel.eu" target="_blank">Hubix Hotel</a> - JAlf</p>
</footer>
<?php require_once 'hk/templates/footer.php'; ?>
<?php ob_end_flush(); ?>