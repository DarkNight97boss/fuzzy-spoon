<?php
/* #################################################################### \
||                                                                     ||
|| TwinkieCMS - Use of this software is strictly prohibited.           *#
|| # Copyright (C) 2014 lD@vidl.                                       *#
||---------------------------------------------------------------------*#
||---------------------------------------------------------------------*#
|| Script pensado para la gesti�n de retroservers Habbo.               *#
|| Tanto el script como los autores del mismo no tienen ning�n tipo    *#
|| de asociaci�n con Habbo y/o Sulake Oy Corp. Por lo tanto, estos no  *#
|| se hacen responsables del uso que el usuario le d�.                 *#
||                                                                     ||
\ ################################################################### */
ob_start();
	require_once 'inc/core.php';
	
	if($user->cstaff_login())
	{
		header("Location: staffclient.php");
		exit;
	}
	else
	{
			header("Location: ".PATH."/clientstaff.php?rememberme=false&focus=login-password");
			exit;
	}
?>
<?php ob_end_flush(); ?>