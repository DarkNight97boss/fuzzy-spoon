<?php

//set local variables

$dbhost = "localhost"; //Database Host
$dbuser = "root"; //Database User
$dbpass = "xxx"; //Database Password
$dbname = "xxx"; //Database Name



//connect 

$dbgio = mysql_pconnect($dbhost,$dbuser,$dbpass); 

mysql_select_db("$dbname",$dbgio); 

?>