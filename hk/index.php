<?php
ob_start();
	require_once '../inc/core.php';
	$user->logged('yes');
	$user->hk_login();
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
	<link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" href="css/manage.css" type="text/css"/>
	<link rel="stylesheet" href="css/manage-login.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="fonts/Brannboll_Fet/stylesheet.css">
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
		<div id="content">
			<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
			<div id="login-box">
				Per entrare  nell' <b>housekeeping</b> di <?php echo SHORTNAME; ?> devi mettere il tuo <b>codice segreto</b> che ti hanno dato i gestori</br>
				<form action="<?php echo HK; ?>/submit.php" method="post">
					<input type="password" name="password" id="login-pass" placeholder="PIN">
					<label class="login-field-icon fui-lock" for="login-pass"></label>
					<input type="submit" value="Entra">
				</form>
			</div>
		</div>
<?php require_once 'templates/footer.php'; ?>
<?php ob_end_flush(); ?>