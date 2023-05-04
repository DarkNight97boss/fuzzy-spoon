<?php
class Auth
{
	public function Login($username, $password, $admin = 'false') 
	{                  
		$username = safe($_POST['username'],'SQL');
		$password = Hashage($_POST['password']); 
		$verif_user = mysql_query("SELECT id,disabled,username FROM users WHERE (username = '".safe($username,'SQL')."' OR mail = '".safe($username,'SQL')."') AND password = '".safe($password,'SQL')."' LIMIT 1") or die(mysql_error());
		$assoc_user = mysql_fetch_assoc($verif_user);
		if(mysql_num_rows($verif_user) < 1){
		Redirect(URL."?username=".$username."&password=");
		} else {
		if($assoc_user['disabled'] == 1) {
		Redirect(URL."?username=".$username."&password=&disabled=1");
		} else {
		$sql_b = mysql_query("SELECT * FROM bans WHERE value = '".safe($username,'SQL')."'");
		$b = mysql_fetch_assoc($sql_b);
		@$stamp_now = mktime(date('H:i:s d-m-Y'));
		$stamp_expire = $b['expire'];
		$expire = date('d/m/Y H:i:s', $b['expire']);
		if(@$stamp_now < @$stamp_expire){
		Redirect(URL."?username=".$username."&password=&reason=".$b['reason']."&expire=".encrypt($expire));
		} else {
		if(mysql_num_rows($sql_b) > 0){
		mysql_query("DELETE FROM bans WHERE value = '".safe($username,'SQL')."'");
		}
		if(mysql_num_rows($verif_user) == 1){
		mysql_query("UPDATE users SET last_offline = '".time()."' WHERE username = '".safe($username,'SQL')."'");
		$_SESSION['username'] = $assoc_user['username'];
		$_SESSION['password'] = $password;
		if($admin == 'false') {
		Redirect(URL."/me");
		}
		if($admin == 'true') {
		Redirect(URL."/admin/");
		}
		}
		}
		}
		}
		return true;
	}

	public function StaffIP($username,$ip)
	{
		if(!empty($username)) {
		$staffip = mysql_query("SELECT * FROM retrophp_ipstaff WHERE username = '".$username."' AND actif = '1'");
		if(mysql_num_rows($staffip) > 0){
		$b = mysql_fetch_assoc($staffip);
		if($ip != $b['ip']) {
		session_destroy();
		Redirect(URL."/account/ipstaff");
		}
		}
		return true;
		}
	}

	public function BanIP($ip,$pageid)
	{
		$verif_banip_sql = mysql_query("SELECT value FROM bans WHERE value = '".$ip."' AND bantype = 'ip'");
		if(mysql_num_rows($verif_banip_sql) >= 1){
		session_destroy();
		if($pageid != "ban") {
		Redirect(URL."/account/banned");
		}
		}
		if(Settings('Emulator') == "Azure") {
		$verif_banip_sql = mysql_query("SELECT value FROM users_bans WHERE value = '".$ip."' AND bantype = 'ip'");
		if(mysql_num_rows($verif_banip_sql) >= 1){
		session_destroy();
		if($pageid != "ban") {
		Redirect(URL."/account/banned");
		}
		}
		}
	}

	public function IP() 
	{
		$ip = safe($_SERVER['REMOTE_ADDR'],'SQL');
		return $ip;
	}

	public function Session_Connected($session) 
	{
		if(isset($session['username']))
		{
		Redirect(URL."/me");
		}
	}

	public function Session_Disconnected($session) 
	{
		if(!isset($session['username']))
		{
		Redirect(URL);
		}
	}

	public function Visite($ip,$sitename,$version,$record)
	{
		$req = mysql_query("SELECT * FROM retrophp_visites WHERE ip = '".safe($ip,'SQL')."'");
		$meip = mysql_fetch_assoc($req);
		if($ip != $meip['ip']) {
		print "<script type=\"text/javascript\" src=\"http://www.retrophp.com/s?nom=".safe($sitename,'SQL')."&url=".safe($_SERVER['HTTP_HOST'],'SQL')."&ip=".safe($ip,'SQL')."&cms=7&date=".time()."&version=".safe($version,'SQL')."&record=".safe($record,'SQL')."\"></script>";
		mysql_query("INSERT INTO `retrophp_visites` (`ip`) VALUES ('".safe($ip,'SQL')."');");
		}
		return true;
	}

	public function Logout() 
	{
		session_destroy();
	}
}
?>