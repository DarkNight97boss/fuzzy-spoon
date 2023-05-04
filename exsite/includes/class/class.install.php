<?php
class Install
{
	public function BaseSQL($nom,$emu) 
	{
		mysql_query("DROP TABLE IF EXISTS `ranks`;");
		foreach(explode(";", file_get_contents('sql/retrophp.sql')) as $query){ $result = mysql_query($query); }
		if($emu == "Azure") {
		$requete = mysql_query("SHOW TABLES LIKE 'bans'");
		if(mysql_num_rows($requete) == 0)
		{
		foreach(explode(";", file_get_contents('sql/bans.sql')) as $query){ $result = mysql_query($query); }
		}
		}
		mysql_query("INSERT INTO `retrophp_news` (`id`, `id_page`, `title`, `snippet`, `body`, `topstory_image`, `mini_text`, `auteur`, `date`) VALUES
		(1, 'retrophp', 'RetroPHP', 'Des nouveautés, des reproductions et bien plus encore.', '...', 'http://habboo-a.akamaihd.net/c_images/web_promo/lpromo_xmas14_bundle3.png', 'En savoir plus', 'Tyler', '".time()."');
		");
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		$site = str_replace("/install/","",$url);
		mysql_query("INSERT INTO `retrophp_settings` (`id`, `Name`, `Nickname`, `Url`, `Court_Url`, `Url_Images`, `C_Images`, `Avatarimage`, `Logo`, `Help_Link`, `Maintenance`, `Hotel`, `Emulator`, `Facebook`, `Twitter`, `Youtube`, `APP_ID`, `APP_SECRET`, `IDP`, `IDP_2`, `IDD`, `IDD_2`, `Prix_1`, `Prix_2`, `Prix_1_Euro`, `Prix_2_Euro`, `Prix_VIP`, `Prix_VIP_2`, `Description`, `Keyword`, `Build`, `Fondateur`, `Lang`, `Contact`, `Credits`, `Pixels`, `Jetons`, `Mission`, `Rank`, `Look_Boy`, `Look_Girl`) VALUES
		(1, '".$nom."', '".$nom."', '".$site."', 'habbo.fr', '".$site."/web-gallery', 'http://habboo-a.akamaihd.net/c_images', 'http://www.habbo.fr/habbo-imaging/', 'habbologo_whiteR.out.png', '#', 'false', 'true', '".$emu."', 'HabboFR', 'HabboFR', 'Habbo', '', '', '', '', '', '', 50, 130, '1,35', '2,68', 35, 80, 'fais-toi plein d\'amis, deviens célèbre! Séjourne GRATUITEMENT dans le plus grand hôtel virtuel au monde! Crée ton avatar pour jouer et faire de nouvelles rencontres...', 'virtuel, monde, réseau social, gratuit, communauté, avatar, chat, connecté, adolescence, jeu de rôle, rejoindre, social, groupes, forums, sécurité, jouer, jeux, amis, rares, ados, jeunes, collector, collectionner, créer, connecter, meuble, mobilier, animaux, déco, design, appart, décorer, partager, création, badges, musique, célébrité, chat vip, fun, sortir, mmo, mmorpg, jeu massivement multijoueur', 'RetroPHP', 'RetroPHP', 'fr_FR', 'community@retrophp.com', '9000000', 2, 1, '', 1, 'sh-295-62.hr-831-45.ch-215-92.hd-180-3.lg-280-64', 'hr-3012-45.sh-730-92.ch-824-92.hd-600-3.lg-710-64');
		");
		$requete = mysql_query("SHOW COLUMNS FROM users LIKE 'disabled';");
		if(mysql_num_rows($requete) == 0)
		{
		mysql_query("ALTER TABLE `users` ADD `disabled` INT(6) NOT NULL;");
		}
		$requete = mysql_query("SHOW COLUMNS FROM users LIKE 'seasonal_currency';");
		if(mysql_num_rows($requete) == 0)
		{
		mysql_query("ALTER TABLE `users` ADD `seasonal_currency` INT(11) NOT NULL DEFAULT '0' AFTER `credits`;");
		}
		mysql_close();
	}

	public function Update($version,$install) 
	{
		
	}
}
?>