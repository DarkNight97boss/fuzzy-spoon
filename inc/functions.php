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
|| se Fazn responsables del uso que el usuario le dé.                 *#
||                                                                     ||
\ ################################################################### */

class Users{
	public function GetLast($a){
		if(!empty($a) || !$a == ''){
			if(is_numeric($a)){
				$date = $a;
				$date_now = time();
				$difference = $date_now - $date;
				if($difference <= '59'){ $echo = 'In questo momento'; }
				elseif($difference <= '3599' && $difference >= '60'){ 
					$minuti = date('i', $difference);
					if($minuti[0] == 0) { $minuti = $minuti[1]; }
					if($minuti == 1) { $minuti_str = 'minuto fa'; }
					else { $minuti_str = 'minuti fa'; }
					$echo = ' '.$minuti.' '.$minuti_str;//minuti
				}elseif($difference <= '82799' && $difference >= '3600'){
					$ore = date('G', $difference);
					if($ore == 1) { $ore_str = 'ora fa'; }
					else { $ore_str = 'ore fa'; }
					$echo = ' '.$ore.' '.$ore_str;//minuti
				}elseif($difference <= '518399' && $difference >= '82800'){
					$dias = date('j', $difference);
					if($dias == 1) { $dias_str = 'Giorno fa'; }
					else { $dias_str = 'Giorni fa'; }
					$echo = ' '.$dias.' '.$dias_str;//minuti
				}elseif($difference <= '2678399' && $difference >= '518400'){
					$settimana = floor(date('j', $difference) / 7).'<!-- WTF -->';
					if($settimana == 1) { $settimana_str = 'settimana'; }
					else { $settimana_str = 'settimane'; }
					$echo = '  '.floor($settimana).' '.$settimana_str;//minuti
				}else { $echo = 'Hace '.date('n', $difference).' mesi'; }
				return $echo;
			}else{ return $a; }
		}else{ return 'A&uacute;n no se ha conectado'; }
	}
	public function filtertext($str) {
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
		$texto = str_replace("insert","IN-SER-T",$texto);  // Remplazamos palabras que podrian ser usadas para alterar la BD
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
	
	function HoloHash($password, $username=''){
			$password = sha1(md5($password));
			$encrypt = '$6$rounds=4567$52$ñññ';
			$another = 'ñ%81290*//*asg';
			$another2 = 'ñ%81290*//*va';
			$another3 = 'ñ%81290*//*235';
			$another4 = 'ñ%8ñññññXD0*//*fsaf';
			$password = md5(sha1("sha512" . md5($password) . $another));
			$password = md5(sha1("sha250" . md5($password) . $another2));
			$password = md5(sha1("sha512" . md5($password) . $another3));
			$password = md5(sha1("sha512" . md5($password) . $another4));
			$password = hash('gost', $password);
			$password = hash('whirlpool', $password);
			$password = hash('sha512', $password);
			return $password;
	}
	
	function rankname($a){
		global $db;
		$aaa = $db->query("SELECT name FROM ranks WHERE id = '{$a}' LIMIT 1");
		$aa = $aaa->fetch_array();
		return $aa['name'];
	}
	
	public function logged_in(){
		if(isset($_POST['username']) && isset($_POST['password'])){
			$username = $this->filtertext($_POST['username']);
			$password = $this->filtertext($_POST['password']);
			$_SESSION['LOGIN_USERNAME'] = $username; 
			$_SESSION['LOGIN_PASSWORD'] = $password; 
			if(empty($username) || empty($password)){
				$login['error']['text'] = "Por favor rellena todos los datos";
				$_SESSION['LOGIN_ERROR'] = $login['error']['text'];
				return false;
			}elseif($this->try_login($username, $this->HoloHash($password, $username))){
				if(MAINTENANCE == 1 && $_SESSION['rank'] < 5) { return false; }
				return true;
				
			}else{
				$login['error']['text'] = "Nombre o contraseña incorrectos";
				$_SESSION['LOGIN_ERROR'] = $login['error']['text'];
				return false;
			}
		}
	}
	public function try_login($username, $password){
		global $db;
		$username = $this->filtertext($username);
		$password = $this->filtertext($password);
		$result = $db->query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'
													or mail = '{$username}' AND password = '{$password}'");
		
		if($result->num_rows > 0){
			$row = $result->fetch_array();
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			if(MAINTENANCE == 1 && $row['rank'] < 5) { return false; }
			return true;
		}else{
			$row = null;
			return false;
		}
	}
	public function CheckBanned($u, $ip){
		global $db;
		$H = date('H');
		$i = date('i');
		$s = date('s');
		$m = date('m');
		$d = date('d');
		$Y = date('Y');
		$j = date('j');
		$n = date('n');
		$today = $d;
		$month = $m;
		$year = $Y;
		global $db;
		$u = $this->filtertext($u);
		$ip = $this->filtertext($ip);
		$checkban = $db->query("SELECT * FROM bans WHERE value = '{$u}' or value = '{$ip}' LIMIT 1");
		if($checkban->num_rows < 1){ return false;} else {
			$bandata = $checkban->fetch_array();
			$reason = $bandata['reason'];
			$expire = $bandata['expire'];
			$xbits = explode(" ", $expire);
			$xtime = explode(":", $xbits[1]);
			$xdate = explode("-", $xbits[0]);
			$stamp_now = mktime(date('H'),date('i'),date('s'),$today,$month,$year);
			$datetoex = date("d-m-y",$expire);
			if($stamp_now < $expire){
				$login_error = "Has sido banedo por esta razón: \"".$reason."\". Tu baneo expira el: ".$datetoex.".";
				return $login_error;
			} else { 
				$db->query("DELETE FROM bans WHERE value = '{$u}' OR value = '{$ip}' LIMIT 1");
				return false;
			}
		}
	}
	
	public function GetInfo(){
		// IS BANNED?
		if($this->CheckBanned($_SESSION['username'], USER_IP)){
			$error = $this->CheckBanned($_SESSION['username'], USER_IP);
			$_SESSION['LOGIN_ERROR'] = $error;
			$bu = $_SESSION['username'];
			unset($_SESSION['username']);
			unset($_SESSION['password']);
			
				header("LOCATION: ". PATH ."/?username=". $bu ."&rememberme=false&focus=login-username");
					exit;
		}else{
			return true;
		}
		
	}
	public function Get($a){
		global $db;
		$result = $db->query("SELECT {$a} FROM users WHERE username = '". $this->filtertext($_SESSION['username']) ."' AND password = '". $this->filtertext($_SESSION['password']) ."' LIMIT 1");
		$data = $result->fetch_array();
		return $data[$a];
	}
	
	
	public function logged($a){
	
		if($a == "allow"){
			if(!$this->try_login($_SESSION['username'], $_SESSION['password'])){
				$guest = true;
			}else{
				$this->GetInfo();
				global $db;
				if($this->Get('rank') >= RANKMIN){
					$dbStats= array();
					$dbStats['action'] = $_SERVER['PHP_SELF'];
					$dbStats['message'] = 'Nombre: '.$this->Get('username').', Rango: '.$this->Get('rank').' IP: '.USER_IP;
					$dbStats['note'] = $_SERVER['PHP_SELF'];
					$dbStats['userid'] = $this->Get('id');
					$dbStats['username'] = $this->Get('username');
					$dbStats['targetid'] = "0";
					$dbStats['timestamp'] = time();
					$query = $db->insertInto('stafflogs', $dbStats);
				}
			}
		}elseif($a == "no"){
			if($this->try_login($_SESSION['username'], $_SESSION['password'])){
				header("LOCATION: ". PATH ."/home");
			}
		}elseif($a == "yes"){
			if(!$this->try_login($_SESSION['username'], $_SESSION['password'])){
				header("LOCATION: ". PATH ."/index.php");
			}else{
				$this->GetInfo();
				global $db;
				if($this->Get('rank') >= RANKMIN){
					$dbStats= array();
					$dbStats['action'] = $_SERVER['PHP_SELF'];
					$dbStats['message'] = 'Nome: '.$this->Get('username').', Rank: '.$this->Get('rank').' IP: '.USER_IP;
					$dbStats['note'] = $_SERVER['PHP_SELF'];
					$dbStats['userid'] = $this->Get('id');
					$dbStats['username'] = $this->Get('username');
					$dbStats['targetid'] = "0";
					$dbStats['timestamp'] = time();
					$query = $db->insertInto('stafflogs', $dbStats);
				}
			}
		
		}else{
			header("LOCATION: ". PATH ."/index.php");
		}
	}
	
	public function hk(){
		if($this->Get('rank') >= RANKMIN){
			if($_SESSION['HK_CHECKED'] == true){
				return true;
			}else{
			header("LOCATION: ". HK ."/index.php");
				return false;
			}
		}else{
			header("LOCATION: ". HK ."/index.php");
			return false;
		}
	}
	
	public function clientstaff(){
		if($this->Get('rank') >= RANKMIN){
			if($_SESSION['CSTAFF_OK'] == true){
				return true;
			}else{
			header("LOCATION: ". HK ."/index.php");
				return false;
			}
		}else{
			header("LOCATION: ". HK ."/index.php");
			return false;
		}
	}
	
	public function GetOns(){
		global $db;
		$result = $db->query("SELECT * FROM server_status");
		$data = $result->fetch_array();
		return $data['users_online'];
	}
	
	public function hk_login(){
		if($this->Get("rank") >= RANKMIN){
			if($_SESSION['HK_CHECKED'] == true){
				header("LOCATION: ". HK ."/main.php");
				return true;
			}elseif(isset($_POST['password'])){
				if($this->filtertext($_POST['password']) == HKPASS){
					$_SESSION['HK_CHECKED'] = true;
					return true;
				}else{
					$_SESSION['HK_ERROR_LOGIN'] = "Il codice segreto non è valido!";
					return false;
				}
				
			}else{
				return false;
			}
		}else{
			header("LOCATION: ". PATH ."/index.php");
			return false;
		}
	}
	
	public function cstaff_login(){
		if($this->Get("rank") >= RANKMIN){
			if($_SESSION['CSTAFF_OK'] == true){
				header("LOCATION: ". PATH ."/staffclient.php");
				return true;
			}elseif(isset($_POST['password'])){
				if($this->filtertext($_POST['password']) == $this->Get("pin")){
					$_SESSION['CSTAFF_OK'] = true;
					return true;
				}else{
					$_SESSION['HK_ERROR_LOGIN'] = "Il codice segreto non è valido!";
					return false;
				}
				
			}else{
				return false;
			}
		}else{
			header("LOCATION: ". PATH ."/home.php");
			return false;
		}
	}
	
	public function client_login(){
		if($this->Get("rank") >= 1){
			if($_SESSION['CLIENT_PIN_NOW'] == true){
				header("LOCATION: ". PATH ."/client.php");
				return true;
			}elseif(isset($_POST['password'])){
				if(strlen($this->filtertext($_POST['password'])) < "4"){
					$_SESSION['HK_ERROR_LOGIN'] = "Tu pin es invalida";
					return false;
				}
				elseif($this->filtertext($_POST['password']) == $this->Get("pin")){
					$_SESSION['CLIENT_PIN_NOW'] = true;
					return true;
				}else{
					$_SESSION['HK_ERROR_LOGIN'] = "Tu pin es invalida";
					return false;
				}
				
			}else{
				return false;
			}
		}else{
			header("LOCATION: ". PATH ."/index.php");
			return false;
		}
	}
	
	public function clients_login(){
		if($this->Get("rank") >= 1){
			if($_SESSION['CLIENT_PIN_NOW'] == true){
				header("LOCATION: ". PATH ."/staffclient.php");
				return true;
			}elseif(isset($_POST['password'])){
				if(strlen($this->filtertext($_POST['password'])) < "4"){
					$_SESSION['HK_ERROR_LOGIN'] = "Tu pin es invalida";
					return false;
				}
				elseif($this->filtertext($_POST['password']) == $this->Get("pin")){
					$_SESSION['CLIENT_PIN_NOW'] = true;
					return true;
				}else{
					$_SESSION['HK_ERROR_LOGIN'] = "Tu pin es invalida";
					return false;
				}
				
			}else{
				return false;
			}
		}else{
			header("LOCATION: ". PATH ."/index.php");
			return false;
		}
	}
	
	public function ComprobateExist($a){
		global $db;
		$result = $db->query("SELECT * FROM users WHERE username = '{$a}' OR mail = '{$a}' LIMIT 1");
		if($db->num_rows($result) > 0){
			return true;
		}else{
			return false;
		}
		
	}
	public function GenerateTicket(){
		$sessionKey = 'CERBERUS-'.rand(9,999).'/'.substr(sha1(time()).'/'.rand(9,9999999).'/'.rand(9,9999999).'/'.rand(9,9999999),0,33);
		return $sessionKey;
		
	}
	
	public function AddUser($username, $email, $password, $facebook_id, $facebook, $look){
		global $db;
		$dbRegister = array();
		$dbRegister['username'] = $username;
		$dbRegister['password'] = $password;
		$dbRegister['mail'] = $email;
		$dbRegister['rank'] = 1;
		$dbRegister['look'] = $look;
		$dbRegister['credits'] = CREDITSTART;
		$dbRegister['activity_points'] = PIXELSTART;
		$dbRegister['gender'] = 'm';
		$dbRegister['motto'] = MOTTO;
		$dbRegister['account_created'] = time();
		$dbRegister['last_online'] = time();
		$dbRegister['ip_last'] = USER_IP;
		$dbRegister['ip_reg'] = USER_IP;
		$dbRegister['facebook_id'] = $facebook_id;
		$dbRegister['facebook'] = $facebook;
		$query = $db->insertInto('users', $dbRegister);
		$id = $db->insert_id();
		$dbInfo = array();
		$dbInfo['user_id'] = $id;
		$query = $db->insertInto('user_info', $dbInfo);
		return true;
	}
	
	public function AddTicket($id,$ticket){
		global $db;
		$dbQuery= array();
		$dbQuery['userid'] = $id;
		$dbQuery['sessionticket'] = $ticket;
		$dbQuery['ipaddress'] = USER_IP;
		$query = $db->insertInto('user_tickets', $dbQuery);
		return true;
	}
	
	public function GetCount($a){
		global $db;
		$result = $db->query("SELECT COUNT(id) AS total FROM {$a}");
		$data = $result->fetch_array();
		return $data['total'];
	}
	
	public function GenerateCaptcha(){
		#generate a random string of 5 characters
		$string = substr(md5(rand()*time()),0,5);

		#make string uppercase and replace "O" and "0" to avoid mistakes
		$string = strtoupper($string);
		$string = str_replace("O","B", $string);
		$string = str_replace("0","C", $string);

		#save string in session "captcha" key
		$_SESSION["captcha"]=strtoupper($string);
		return $string;
	}
	
public function FilterTextEmoji($a){
			$a = stripslashes(htmlspecialchars($a));
			$a = trim($a);
			$a = str_replace('"','&#34;',$a);
			$a = str_replace("'","&#39;",$a);
			$a = str_replace("<script","",$a);
			$a = str_replace("(","",$a);
			$a = str_replace(")","",$a);
			$a = str_replace(':D','<img src="/public/images/icons/emojis/carita_sonriente.png" width="24" height="24">',$a);
			$a = str_replace(':P','<img src="/public/images/icons/emojis/carita_lengua3.png" width="24" height="24">',$a);
			$a = str_replace('*guino*','<img src="/public/images/icons/emojis/carita_guino.png" width="24" height="24">',$a);
			$a = str_replace(':|','<img src="/public/images/icons/emojis/carita_plana2.png" width="24" height="24">',$a);
			$a = str_replace('x_x','<img src="/public/images/icons/emojis/carita_xx.png" width="24" height="24">',$a);
			$a = str_replace('*risa*','<img src="/public/images/icons/emojis/carita_sonriente2.png" width="24" height="24">',$a);
			$a = str_replace('*gallery*','<img src="/public/images/icons/emojis/carita_corezon.png" width="24" height="24">',$a);
			$a = str_replace('*heart*','<img src="/public/images/icons/emojis/carita_corezon.png" width="24" height="24">',$a);
			$a = str_replace('<3','<img src="/public/images/icons/emojis/carita_corezon.png" width="24" height="24">',$a);
			$a = str_replace(':poop:','<img src="/public/images/icons/emojis/carita_poop.png" width="24" height="24">',$a);
			$a = str_replace('*triste*','<img src="/public/images/icons/emojis/carita_triste.png" width="24" height="24">',$a);
			$a = str_replace('XD','<img src="/public/images/icons/emojis/carita_sonriente3.png" width="24" height="24">',$a);
			$a = str_replace('*lengua*','<img src="/public/images/icons/emojis/carita_lengua2.png" width="24" height="24">',$a);
			$a = str_replace(';P','<img src="/public/images/icons/emojis/carita_lengua1.png" width="24" height="24">',$a);
			$a = str_replace(':O','<img src="/public/images/icons/emojis/carita_ooh.png" width="24" height="24">',$a);
			$a = str_replace('*sexy*','<img src="/public/images/icons/emojis/carita_sonriente4.png" width="24" height="24">',$a);
			$a = str_replace(':*','<img src="/public/images/icons/emojis/carita_kiss1.png" width="24" height="24">',$a);
			$a = str_replace('*kiss*','<img src="/public/images/icons/emojis/carita_kiss.png" width="24" height="24">',$a);
			$a = str_replace('O_O','<img src="/public/images/icons/emojis/carita_ooh1.png" width="24" height="24">',$a);
			$a = str_replace('^_^','<img src="/public/images/icons/emojis/carita_sonriente5.png" width="24" height="24">',$a);
			$a = str_replace(':@','<img src="/public/images/icons/emojis/carita_enojado.png" width="24" height="24">',$a);
			$a = str_replace('Q.Q','<img src="/public/images/icons/emojis/carita_triste2.png" width="24" height="24">',$a);
			$a = str_replace(':/','<img src="/public/images/icons/emojis/carita_triste1.png" width="24" height="24">',$a);
			$a = str_replace('*love*','<img src="/public/images/icons/emojis/carita_ojos.png" width="24" height="24">',$a);
			$a = str_replace('-_-','<img src="/public/images/icons/emojis/carita_plana.png" width="24" height="24">',$a);
			$a = str_replace('*angel*','<img src="/public/images/icons/emojis/carita_angel.png" width="24" height="24">',$a);
			$a = str_replace('*lentes*','<img src="/public/images/icons/emojis/carita_lentes.png" width="24" height="24">',$a);
			$a = str_replace('*applause*','<img src="/public/images/icons/emojis/carita_applause.png" width="24" height="24">',$a);
			$a = str_replace('*god*','<img src="/public/images/icons/emojis/carita_god.png" width="24" height="24">',$a);
			$a = str_replace('*strong*','<img src="/public/images/icons/emojis/carita_strong.png" width="24" height="24">',$a);
			$a = str_replace('*decepcionado*','<img src="/public/images/icons/emojis/carita_decepcion.png" width="24" height="24">',$a);
			$a = str_replace('*sinpalabras*','<img src="/public/images/icons/emojis/carita_sinpalabras.png" width="24" height="24">',$a);
			$a = str_replace('*star*','<img src="/public/images/icons/emojis/carita_star.png" width="24" height="24">',$a);
			$a = str_replace('*contodo*','<img src="/public/images/icons/emojis/carita_golpe.png" width="24" height="24">',$a);
			return $a;  
		}
		
	public function register_now(){
		if(isset($_POST['reg_username']) && isset($_POST['reg_mail']) && isset($_POST['reg_password'])){
			$user = $this->filtertext($_POST['reg_username']);
			$mail = $this->filtertext($_POST['reg_mail']);
			$password = $this->filtertext($_POST['reg_password']);
			$avatarimage = $this->filtertext($_POST['avatarlook']);
			$_SESSION['REG_USERNAME'] = $user;
			$_SESSION['REG_MAIL'] = $mail;
			$_SESSION['REG_PASSWORD'] = $password;
		
			if(empty($user) || empty($mail) || empty($password)){
				$_SESSION['REGISTER_ERROR'] = "<li>Por favor, rellene los datos</li>";
				return false;
			}else{
				// USERNAME CHECK
				$filter = preg_replace("/[^a-z\d\-=\?!@:\.]/i", "", $user);
				if($user !== $filter || strlen($user) < 2 || strlen($user) > 18){
					$error_1 = "<li>Coloque um nome valido (Min: 2 Caract. Max 18 Caract.)</li>";
				}elseif($this->ComprobateExist($user)){
					$error_1 = "<li>Este nombre ya está en uso</li>";
				}
				// MAIL CHECK
				$email_check = preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $mail);
				if($email_check !== 1){
					$error_2 = "<li>Coloque un correo electrónico válido</li>";
				}elseif($this->ComprobateExist($mail)){
					$error_2 = "<li>Este correo electrónico ya está en uso</li>";
				}
				// PASSWORD CHECK
				if(strlen($password) < 6 || strlen($password) > 32){
					$error_3 = "<li>Coloca una contraseña válida (debe tener al menos 6 caracteres)  </li>";
				}
				if($avatarimage !== $_POST['avatarlook'] || empty($avatarimage)){
					$avatarimage = 'hr-893-45.hd-208-1.ch-225-83.lg-285-83.sh-290-1408.ha-1003-1408.fa-1202-80.ca-1819';
				}	
					
				if(!empty($error_1) || !empty($error_2) || !empty($error_3) || !empty($error_4)){
					$_SESSION['REGISTER_ERROR'] = $error_1 . $error_2 . $error_3 . $error_4;
					return false;
				}else{
					$password3 = $this->HoloHash($password, $user);
					$this->AddUser($user, $mail, $password3, '', '', $avatarimage);
					$_SESSION['username'] = $user;
					$_SESSION['password'] = $password3;
					if(!empty($_SESSION['refer'])){
						$execute = $db->query("UPDATE users SET refer_count = refer_count + '1' WHERE ".$this->filtertext($_SESSION['refer_type'])." = '".$this->filtertext($_SESSION['refer'])."' LIMIT 1");
					}
					header("LOCATION: ". PATH ."/home");
					return true;
				}
			}
		}
	}
	public function GenerateForgotTicket(){
		$data = "ST-";
		for ($i=1; $i<=6; $i++){
			$data = $data . rand(0,9);
		}
		$data = $data . "-";
		for ($i=1; $i<=20; $i++){
			$data = $data . rand(0,9);
		}
		$data = $data . "-habbo-forgot";
		$data = $data . rand(0,5);
		return $data;
	}
	
}
?>