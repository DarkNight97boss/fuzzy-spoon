<?php
$online = $bdd->query("SELECT id FROM users WHERE online = '1'");
$online = $online->rowCount();
$visites = $bdd->query("SELECT id FROM retrophp_visites");
$visites = $visites->rowCount();
$bans = $bdd->query("SELECT id FROM bans");
$bans = $bans->rowCount();
$inscrits = $bdd->query("SELECT id FROM users");
$inscrits = $inscrits->rowCount();
$record = $bdd->query("UPDATE server_status SET record_connect = '".safe($online,'SQL')."' WHERE record_connect <= '".safe($online,'SQL')."'");
?>