<?php 
if(isset($_POST['bean_name']) && isset($_POST['bean_email']) && isset($_POST['bean_password']))
{
$username = safe($_POST['bean_name'],'SQL');
$email = safe($_POST['bean_email'],'SQL');
$password = safe($_POST['bean_password'],'SQL');
$email_check = preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $email);
$tmp_sql = $bdd->query("SELECT id FROM users WHERE username = '".safe($username,'SQL')."' LIMIT 1") or die(mysql_error());
$tmp = $tmp_sql->rowCount();
$tmp_sql_2 = $bdd->query("SELECT id FROM users WHERE mail = '".safe($email,'SQL')."' LIMIT 1") or die(mysql_error());
$tmp_2 = $tmp_sql_2->rowCount();
if(isset($username) && isset($email) && isset($password)) {
$failure = false;
if($tmp > 0){
$message1['username'] = "Ce pseudo est déjà utilisé.";
$failure = true; }

elseif(strlen($email) < 6){
$message2['email'] = "Merci d'indiquer une adresse email valide";
$failure = true;
} elseif($email_check !== 1){
$message2['email'] = "Merci d'indiquer une adresse email valide";
$failure = true;
}

elseif($tmp_2 > 0){
$message2['email'] = "Cette adresse email existe déjà.";
$failure = true; }
elseif(strlen($password) < 6){
$message3['password'] = "Ton mot de passe doit avoir au moins 6 caractères.";
$failure = true;
}
if($failure == false){
$password = Hashage($password);
$Db->InsertSQL('users', array(
    'username' => $username,
    'password' => $password,
    'mail' => $email,
    'rank' => Settings('Rank'),
    'credits' => Settings('Credits'),
    'activity_points' => Settings('Pixels'),
    'look' => Settings('Look_Boy'),
    'gender' => 'M',
    'motto' => Settings('Mission'),
    'account_created' => time(),
    'ip_last' => $Auth->IP(),
    'ip_reg' => $Auth->IP(),
    'last_offline' => time(),
));
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
Redirect(URL."/me");
exit();
}
} 
}
?>