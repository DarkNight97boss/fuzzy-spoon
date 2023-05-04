<?php
if(@$_SESSION['username']) {
$username = safe($_SESSION['username'],'SQL');
$sql = $bdd->query("SELECT * FROM users WHERE username = '".$username."' LIMIT 1");
$row = $sql->rowCount();
if($row > 0) {
$user = $sql->fetch(PDO::FETCH_ASSOC);
$bdd->exec("UPDATE users SET ip_last = '".safe($_SERVER["REMOTE_ADDR"],'SQL')."' WHERE id = '".$user['id']."'");
$retrophp_users = $bdd->query("SELECT * FROM retrophp_users WHERE uid = '".$user['id']."'");
$rtp_user = $retrophp_users->fetch(PDO::FETCH_ASSOC);
} else {
session_destroy();
Redirect(URL);
}
}
?>