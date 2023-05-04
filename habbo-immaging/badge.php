<?php 
$target = "/c_images/album1584/"; 
$weeds = array('.', '..'); 
$directories = array_diff(scandir($target), $weeds);   
foreach($directories as $value) 
{ 
$gifkill=str_replace('.gif', '', $value); 
$gif2kill=str_replace('.GIF', '', $gifkill); 
$uppercasewords=ucwords($gif2kill); 
if(is_file($target.$value)) 
{ 
echo "INSERT INTO `hubixtk`.`badge_definitions` (`code`, `required_right`) VALUES ('".$uppercasewords."', '');<br />"; 
} 
} 
?>