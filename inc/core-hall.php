<?php
define("IN_HOLOCMS", TRUE);
@session_start();

mysql_connect("localhost", "root", "root") or die("Erro em conex�o com o MySQL"); 
mysql_select_db("original") or die("Banco de dados inexistente");
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
error_reporting(0);
?>