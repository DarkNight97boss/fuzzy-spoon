<?php
// RetroPHP ne prend désormais pas en compte les divers problèmes que vous pouvez rencontrer sur votre CMS si celui-ci n'a pas été acheté sur RetroPHP. //
$cms = "Hubix"; // Ne pas toucher //
$version = "1"; // Ne pas toucher //

class Config
{
	public function Maintenance($pageid,$page,$urank) 
	{
		if($urank <= 5) {
		if($pageid != "maintenance") {
		if($page != "hk") {
		if(Settings('Maintenance') == "true") {
		Redirect(URL."/maintenance");
		}
		}
		}
		}
		return true;
		
	}
}
?>