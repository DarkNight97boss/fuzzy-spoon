<?php
class User
{
	public function RtpUser($userid,$hoteid,$userlook,$username,$gkey,$page)
	{
		if(!empty($username)) {
		$retrophp_users = mysql_query("SELECT * FROM retrophp_users WHERE uid = '".$userid."'");
		if(mysql_num_rows($retrophp_users) < 1){
		if($hoteid != '0') {
		$hote_id = mysql_query("SELECT * FROM users WHERE hote_id = '".$hoteid."'");
		$hote = mysql_fetch_assoc($hote_id);
		$recup = mysql_query("SELECT * FROM retrophp_users WHERE uid = '".$hote['id']."'");
		$recupkey = mysql_fetch_assoc($recup);
		mysql_query("INSERT INTO `retrophp_users` (`uid`, `user_key`, `renamed`, `gender_register`, `mail_verified`) VALUES ('".$userid."', '".$recupkey['user_key']."', '1', '1', '1');");
		} else {
		mysql_query("INSERT INTO `retrophp_users` (`uid`, `user_key`, `renamed`, `gender_register`) VALUES ('".$userid."', '".".$gkey."."', '1', '1');");
		}
		}
		if(empty($userlook)) {
		mysql_query("UPDATE retrophp_users SET gender_register = '0' WHERE uid = '".$userid."'");
		if($page == "gender") {
		Redirect(URL."/client");
		}
		}
		$chaine_user = $username;
		preg_match('#^((.|\s)+)_#', $chaine_user, $matches_user);
		if(nl2br($matches_user[1]."_") == "user_") {
		mysql_query("UPDATE retrophp_users SET renamed = '0' WHERE uid = '".$userid."'");
		if($page == "renamed") {
		Redirect(URL."/client");
		}
		}
		}
		return true;
	}

	public function Verif($renamed,$gender_register)
	{
		if($renamed == 0) {
		Redirect(URL."/client");
		}
 		if($gender_register == 0) {
		Redirect(URL."/client");
		}
		return true;
	}
	
	public function StarPass($uid,$username,$prix,$code) 
	{
		mysql_query("UPDATE users SET seasonal_currency = seasonal_currency + ".$prix." WHERE id = '".$uid."'");
		mysql_query("INSERT INTO `retrophp_payment` (`user_id`, `pseudo`, `statut`, `nombres`, `type`, `code`, `operation` , `remis`) VALUES ('".$uid."', '".$username."', 'Valide', '".$prix."', 'diamants', '".$code."', 'Achat de diamants', '1');");
		return true;
	}

	public function Token() 
	{
		$token = bin2hex(mcrypt_create_iv(10, MCRYPT_DEV_RANDOM));
		return $token;
	}

	public function Expire($userid)
	{
		$verif_date = mysql_query("SELECT * FROM retrophp_abonnement WHERE `timestamp_expire` <= '".time()."' AND `user_id` = '".$userid."'");
		if(mysql_num_rows($verif_date) >= 1){
		mysql_query("DELETE FROM `retrophp_abonnement` WHERE `user_id` = '".$userid."'");
		mysql_query("UPDATE users SET rank = '1' WHERE `id` = '".$userid."' AND rank <= '3'");
		}
	}

	public function AddLogs($pseudo,$action)
	{
		mysql_query("INSERT INTO retrophp_stafflog (pseudo,action,date) VALUES ('".$pseudo."','".$action."','".time()."')");
	}

	function Avatar($figure,$style, $action = ''){
		$style = explode(",", $style);
		if($style[0] == "s"){ $style[6] = "1"; }else{ $style[6] = "0"; }
		if($style[3] == "sml"){ $style[7] = "1"; }else{ $style[7] = "0"; }
		
		return Settings('Avatarimage')."avatarimage?figure=".$figure."&size=".$style[0]."&direction=".$style[1]."&head_direction=".$style[2]."&crr=".$style[5]."&action=".$action."&gesture=".$style[3]."&frame=".$style[4]."&headonly=".$style[5];
	}
}
?>