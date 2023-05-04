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
	session_start();
	error_reporting(0);
	
	function SacarIP() {
		if($_SERVER) {
			if($_SERVER["HTTP_X_FORWARDED_FOR"]) {
				$realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
			} elseif ($_SERVER["HTTP_CLIENT_IP"]) {
				$realip = $_SERVER["HTTP_CLIENT_IP"];
			} else {
				$realip = $_SERVER["REMOTE_ADDR"];
			}
		} else {
			if(getenv("HTTP_X_FORWARDED_FOR")) {
				$realip = getenv("HTTP_X_FORWARDED_FOR");
			} elseif(getenv("HTTP_CLIENT_IP")) {
				$realip = getenv("HTTP_CLIENT_IP");
			} else {
				$realip = getenv("REMOTE_ADDR");
			}
		}
		return $realip;
	}
	$realip = SacarIP();
	define('USER_IP', $realip);
	
	define ( 'SEPARATOR', DIRECTORY_SEPARATOR );
	define ( 'DIR', __DIR__ );
	define ( 'WEB', true );
	define ( 'TwinkieCMS', true );
	
	define('CHARSET','UTF-8');
	header('Content-type: text/html; charset='.CHARSET);
	
	// LOADER
	require_once 'conn.php';
	$conn = new conn();
	$db = $conn->database();
	
	// USERS
	require_once 'functions.php';
	$user = new Users();
	
	// =)
	global $db;
	$a = $db->query("SET NAMES 'utf8'");
	
	function filter($str) {
		global $db;
		$str = $db->escape_string(htmlspecialchars($str));
		$str = stripslashes(htmlspecialchars($str));
		$texto = trim($str); // Eliminamos espacios en blanco o caracteres al principio y final del post
		$texto = htmlspecialchars($texto); // funciona casi igual que htmlentities
		$texto = str_replace("INSERT","IN-SER-T",$texto);  // Remplazamos palabras que podrian ser usadas para alterar la BD
		$texto = str_replace("DELETE","DE-LE-TE",$texto);
		$texto = str_replace("TRUNCATE","TRUN-CA-TE",$texto);
		$texto = str_replace("SELECT","SE-LEC-T",$texto);
		$texto = str_replace("ALTER","AL-TER",$texto);
		$texto = str_replace("UPDATE","UP-DA-TE",$texto);
		$texto = str_replace("inert","IN-SER-T",$texto);  // Remplazamos palabras que podrian ser usadas para alterar la BD
		$texto = str_replace("delete","DE-LE-TE",$texto);
		$texto = str_replace("truncate","TRUN-CA-TE",$texto);
		$texto = str_replace("select","SE-LEC-T",$texto);
		$texto = str_replace("alter","AL-TER",$texto);
		$texto = str_replace("update","UP-DA-TE",$texto);
		$texto = str_replace("script","",$texto);
		$texto = str_replace("SCRIPT","",$texto);
		$texto = str_replace('"','&#34;',$texto);
		$texto = str_replace("'","&#39;",$texto);
		$texto = str_replace("<","&#60;",$texto);
		$texto = str_replace(">","&#62;",$texto);
		$texto = str_replace("(","",$texto);
		$str = str_replace(")","",$texto);
		return $str;
	}
	
	if($newsstate == true) {
		function filternews($str) {
			$texto = str_replace("INSERT","IN-SER-T",$str);  // Remplazamos palabras que podrian ser usadas para alterar la BD
			$texto = str_replace("DELETE","DE-LE-TE",$texto);
			$texto = str_replace("TRUNCATE","TRUN-CA-TE",$texto);
			$texto = str_replace("SELECT","SE-LEC-T",$texto);
			$texto = str_replace("ALTER","AL-TER",$texto);
			$texto = str_replace("UPDATE","UP-DA-TE",$texto);
			$texto = str_replace("inert","IN-SER-T",$texto);  // Remplazamos palabras que podrian ser usadas para alterar la BD
			$texto = str_replace("delete","DE-LE-TE",$texto);
			$texto = str_replace("truncate","TRUN-CA-TE",$texto);
			$texto = str_replace("select","SE-LEC-T",$texto);
			$texto = str_replace("alter","AL-TER",$texto);
			$texto = str_replace("update","UP-DA-TE",$texto);
			$texto = str_replace("script","",$texto);
			$texto = str_replace("SCRIPT","",$texto);
			$texto = str_replace('"','',$texto);
			$texto = str_replace("'","",$texto);
			$texto = str_replace("location","",$texto);
			$texto = str_replace("í","&iacute;",$texto);
			$texto = str_replace("á","&aacute;",$texto);
			$texto = str_replace("ó","&oacute;",$texto);
			$texto = str_replace("ú","&uacute;",$texto);
			$texto = str_replace("é","&eacute;",$texto);
			$texto = str_replace("ñ","&ntilde;",$texto);
			$texto = str_replace("Í","&Iacute;",$texto);
			$texto = str_replace("Á","&Aacute;",$texto);
			$texto = str_replace("Ó","&Oacute;",$texto);
			$texto = str_replace("Ú","&Uacute;",$texto);
			$texto = str_replace("É","&Eacute;",$texto);
			$texto = str_replace("Ñ","&Ntilde;",$texto);
			return $str;
		}
	}else{
		if(isset($_POST) || isset($_GET) || isset($_REQUEST) || isset($_COOKIE)){
				foreach($_POST as $key => $p)
				{
					$_POST[$key] = htmlentities(filter($p));
					$_POST[$key] = filter($p);
					$_POST[$key] = filter(html_entity_decode($p));
				}
				
				//Filtro las entradas vía GET
				foreach($_GET as $key => $g)
				{	
					$_GET[$key] = filter($g);
				}
			foreach($_COOKIE as $key => $s)
				{	
					$_COOKIE[$key] = filter($s);
				}
				//Filtro las entradas vía REQUEST
				foreach($_REQUEST as $key => $k)
				{
					$_REQUEST[$key] = filter($k);
				}
			}
			if(isset($_GET)){
				
				//Filtro las entradas vía GET
				foreach($_GET as $key => $f)
				{	
					$_GET[$key] = strip_tags(htmlentities(filter($f)));
				}
			}
	}
?>