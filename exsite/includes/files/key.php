<?php
if(empty($rtp_user['user_key'])) {
$bdd->exec("UPDATE retrophp_users SET user_key = '".GENERATE_KEY."' WHERE uid = '".safe($user['id'],'SQL')."'");
}
?>