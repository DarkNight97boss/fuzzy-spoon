<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

if(!defined('CORE')) die('Error core acces');

/*+===================================+
|             Sécurité                |
+===================================+*/
$injection = 'INSERT|UNION|SELECT|NULL|COUNT|FROM|LIKE|DROP|TABLE|WHERE|COUNT|COLUMN|TABLES|INFORMATION_SCHEMA|OR' ;
foreach($_GET as $getSearchs){
$getSearch = explode(" ",$getSearchs);
foreach($getSearch as $k=>$v){
if(in_array(strtoupper(trim($v)),explode('|',$injection))){
exit;
}
}
}

/*+===================================+
|          Configuration PHP          |
+===================================+*/
if(!headers_sent())
header('Content-Type: text/html; charset=utf-8');
ini_set('default_charset', 'utf-8');
if(function_exists('date_default_timezone_set')){
@date_default_timezone_set('Europe/Paris'); }
if(!defined('_MYSQL_REAL_ESCAPE_STRING_'))
define('_MYSQL_REAL_ESCAPE_STRING_', function_exists('mysql_real_escape_string'));
if(MODE_DEV == '1') { ini_set("display_errors",0); error_reporting(0); }

/*+===================================+
|       Configuration du site         |
+===================================+*/
define('URL', Settings('Url'));
define('UPDATE', mt_rand(500, 999));
define('GENERATE_KEY', md5(microtime().rand()));

/*+===================================+
|     Importation des librarys        |
+===================================+*/
include './includes/files/emulator.php';
include '../includes/files/emulator.php';

include './includes/class/class.db.php';
include '../includes/class/class.db.php';

include './includes/class/class.config.php';
include '../includes/class/class.config.php';

include './includes/class/class.auth.php';
include '../includes/class/class.auth.php';

include './includes/class/class.user.php';
include '../includes/class/class.user.php';

include './includes/class/class.install.php';
include '../includes/class/class.install.php';

include './includes/files/session.php';
include '../includes/files/session.php';

include './includes/files/data.php';
include '../includes/files/data.php';

include './includes/files/key.php';
include '../includes/files/key.php';

/*+===================================+
|   Initialisation des class          |
+===================================+*/
$Db = new Db(); //Bdd
$Config = new Config(); //Configuration
$Auth = new Auth(); //Authentification
$User = new User(); //Utilisateurs
$Install = new Install(); //Installation

/*+===================================+
|    Gestion des erreurs              |
+===================================+*/
if(!isset($_SERVER['REQUEST_URI']) OR empty($_SERVER['REQUEST_URI']))
{
if(substr($_SERVER['SCRIPT_NAME'], -9) == 'index.php' && empty($_SERVER['QUERY_STRING']))
$_SERVER['REQUEST_URI'] = dirname($_SERVER['SCRIPT_NAME']).'/';
else
{
$_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['QUERY_STRING']) AND !empty($_SERVER['QUERY_STRING']))
$_SERVER['REQUEST_URI'] .= '?'.$_SERVER['QUERY_STRING'];
}
}
if(!isset($_SERVER['HTTP_HOST']) OR empty($_SERVER['HTTP_HOST']))
$_SERVER['HTTP_HOST'] = @getenv('HTTP_HOST');
?>