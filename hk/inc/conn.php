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

	class conn{
		
		public static $config;
		// MYSQLI CONFIG
		var $host     = '127.0.0.1';
		var $port     = '3306';
		var $username = 'root';
		var $password = 'HubixManagement';
		var $database = 'hubix';
	
		final function __construct(){
			try{
				self::getconfig();
				self::definevars();
			}
			catch(Exception $e)
			{
				trigger_error('Error in '. __FUNCTION__ . ' more info: '. $e->getMessage);
			}
		}
		final function getconfig(){
			
			if (file_exists( __DIR__ . DIRECTORY_SEPARATOR . 'config.php')){
				require_once( __DIR__ . DIRECTORY_SEPARATOR . 'config.php');
				self::$config = $config;
			}
			else{
				die('No se a podido encontrar el archivo config.php');
				
			}
		}
		final function definevars(){
			foreach(self::$config as $var => $value){
				if(!defined($var))
					define($var, $value);
			}
		}
		final function database(){
				require_once(__DIR__ . DIRECTORY_SEPARATOR . 'database.php');
				return new Database($this->host, $this->port, $this->username,
									$this->password, $this->database);
				
		}
	}
?>