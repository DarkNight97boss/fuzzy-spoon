<?php
if(file_exists("./includes/settings.inc.php") or file_exists("../includes/settings.inc.php")){
define('PORT','3306'); if(mysql_connect(HOST.':'.PORT,USERNAME,PASSWORD) && mysql_select_db(DATABASE)){try {
$bdd = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DATABASE, USERNAME, PASSWORD);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e) { print "Une erreur est survenue."; }
}else{ if(file_exists("./install/error.php")){ include './install/error.php'; 
} else { print "Une erreur est survenue."; } die; $bdd = null; } } else { @header("Location: install/"); }
?>