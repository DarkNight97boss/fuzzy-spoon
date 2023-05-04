<?php
/* #################################################################### \
||                                                                     ||
|| TwinkieCMS - Use of this software is strictly prohibited.           *#
|| # Copyright (C) 2014 lD@vidl.                                       *#
||---------------------------------------------------------------------*#
||---------------------------------------------------------------------*#
|| Script pensado para la gestión de retroservers Habbo.               *#
|| Tanto el script como los autores del mismo no tienen ningún tipo    *#
|| de asociación con Habbo y/o Sulake Oy Corp. Por lo tanto, estos no  *#
|| se hacen responsables del uso que el usuario le dé.                 *#
||                                                                     ||
\ ################################################################### */
ob_start();
	require_once '../inc/core.php';
	
	if($user->clients_login())
	{
		header("Location: ".PATH."/staffclient.php");
		exit;
	}
	else
	{
			header("Location: ".PATH."/clientstaff/index.php?rememberme=false&focus=login-password");
			exit;
	}
ob_end_flush();
?>