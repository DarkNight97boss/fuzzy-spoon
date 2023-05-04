<?php

//set local variables

$dbhost = "localhost"; //Database Host
$dbuser = "root"; //Database User
$dbpass = "HubixManagement"; //Database Password
$dbname = "hubixtk"; //Database Name



//connect 

$dbgio = mysql_pconnect($dbhost,$dbuser,$dbpass); 

mysql_select_db("$dbname",$dbgio); 

?>