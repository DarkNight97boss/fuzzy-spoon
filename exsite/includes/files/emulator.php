<?php
####### PHOENIX #######
if(Settings('Emulator') == "Phoenix") {
$BanSQL = 'bans';
$ChatLogSQL = 'chatlogs';
$RoomSQL = 'rooms';
$StaffLogSQL = 'staff_logs';
$BadgeSQL = 'user_badges';
}
####### BUTTERFLY #######
if(Settings('Emulator') == "Butterfly") {
$BanSQL = 'bans';
$ChatLogSQL = 'chatlogs';
$RoomSQL = 'rooms';
$StaffLogSQL = 'staff_logs';
$BadgeSQL = 'user_badges';
}
####### MERCURY #######
if(Settings('Emulator') == "Mercury") {
$BanSQL = 'bans';
$ChatLogSQL = 'chatlogs';
$RoomSQL = 'rooms';
$StaffLogSQL = 'staff_logs';
$BadgeSQL = 'user_badges';
}
####### AZURE #######
if(Settings('Emulator') == "Azure") {
$BanSQL = 'bans' OR $BanSQL = 'users_bans';
$ChatLogSQL = 'users_chatlogs';
$RoomSQL = 'rooms_data';
$StaffLogSQL = 'server_stafflogs';
$BadgeSQL = 'users_badges';
}
?>