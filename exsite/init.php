<?php
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|
#|                                                                        #|
#|                Développement de RetroPHP par Tyler                     #|
#|                                                                        #|
#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|#|

define('CORE','CORE');

@session_start();

/*+===================================+
|   Importation des librarys          |
+===================================+*/

@include("./includes/settings.inc.php");
@include("../includes/settings.inc.php");

@include("./includes/files/bdd.php");
@include("../includes/files/bdd.php");

@include("./includes/functions.php");
@include("../includes/functions.php");

#### Installation du CMS ####
$install = $bdd->query("SHOW TABLES LIKE 'retrophp_settings'"); 
$row_install = $install->rowCount(); if($row_install == 0) { Redirect("./install/"); }

@include("./includes/core.php");
@include("../includes/core.php");

$Config->Maintenance($pageid,$page,$user['rank']); //Check Maintenance
$Auth->Visite($Auth->IP(),Settings('Name'),$version,SystemConfig('record_connect')); //Visites
$User::RtpUser($user['id'],$user['hote_id'],$user['look'],$user['username'],GENERATE_KEY,$pageid); //Users
$Auth->StaffIP($user['username'],$Auth::IP()); //IP Staff
$Auth->BanIP($Auth::IP(),$pageid); //Ban IP
$Install->Update($version,'false'); //Update
?>