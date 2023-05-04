<?php
define("IN_HOLOCMS", TRUE);
@session_start();

mysql_connect("localhost", "root", "lamammadigalici") or die("Erro em conexão com o MySQL"); 
mysql_select_db("hubt") or die("Banco de dados inexistente");
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);
error_reporting(0);
?>