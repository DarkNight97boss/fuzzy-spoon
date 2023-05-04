<?php
/* #################################################################### \
||                                                                     ||
|| TwinkieCMS - Use of this software is strictly prohibited.           *#
|| # Copyright (C) 2014 lD@vidl.                                       *#
||---------------------------------------------------------------------*#
||---------------------------------------------------------------------*#
|| Script pensado para la gestión de retroservers Habbo.               *#
|| Tanto el script como los autores del mismo no tienen ningún tipo    *#
|| de asociación con Habbo y/o Sulake Oy Corp. Por lo tanto, estos no  *#
|| se hacen responsables del uso que el usuario le dé.                 *#
||                                                                     ||
\ ################################################################### */
ob_start();
	$newsstate = true;
	require_once '../inc/core.php';
	$user->logged('yes');
	$user->hk();
	$tab = "2";
	$page = "HK News";
	require_once 'templates/header.php';
	$action = $user->filtertext($_GET['action']);
	$getid = $user->filtertext($_GET['id']);
	
	if($action == "add"){
		if(isset($_POST['title']) && isset($_POST['story']) && isset($_POST['shortstory']) && isset($_POST['image'])){
			$title = $user->filtertext($_POST['title']);
			$story = $user->filtertext($_POST['story']);
			$shortstory = filternews($_POST['shortstory']);
			$image = $user->filtertext($_POST['image']);
			if(empty($title) || empty($story) || empty($shortstory) || empty($image)){
				$_SESSION['HK_ERROR_RETURN'] = "Debes rellenar todos los datos :)";
				header("LOCATION: ". HK ."/news.php");
			}else{
				$dbQuery= array();
				$dbQuery['title'] = $title;
				$dbQuery['story'] = $shortstory;
				$dbQuery['shortstory'] = $story;
				$dbQuery['campaignimg'] = $image;
				$dbQuery['time'] = time();
				$dbQuery['author'] = $user->Get('username');
				$dbQuery['look'] = $user->Get('look');
				$query = $db->insertInto('cms_news_new', $dbQuery);
				$_SESSION['HK_GOOD_RETURN'] = "Noticia creada con exito";
				header("LOCATION: ". HK ."/news.php");
			}
		}
	}
	if($action == "upnews" && !empty($getid)){
		if(isset($_POST['title']) && isset($_POST['story']) && isset($_POST['shortstory']) && isset($_POST['image'])){
			$title = $user->filtertext($_POST['title']);
			$story = $user->filtertext($_POST['story']);
			$shortstory = $_POST['shortstory'];
			$image = $user->filtertext($_POST['image']);
			$querynow = $db->query("UPDATE cms_news_new SET title = '{$title}',
															story = '{$shortstory}',
															shortstory = '{$story}',
															campaignimg = '{$image}' WHERE id = '{$getid}' LIMIT 1");
			$_SESSION['HK_GOOD_RETURN'] = "Noticia editada con exito";
			header("LOCATION: ". HK ."/news.php");											
		}
	}
	if($action == "err" && !empty($getid)){
			$querynow = $db->query("DELETE FROM cms_news_new WHERE id = '{$getid}' LIMIT 1");
			$_SESSION['HK_GOOD_RETURN'] = "Noticia eliminada con exito";
			header("LOCATION: ". HK ."/news.php");				
	}
	?>
		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
				
			<div id="column-1">
			<?php if($action == "edit" && !empty($getid)){ 
					$newsf = $db->query("SELECT * FROM cms_news_new WHERE id = '". $getid ."'");
					$news_edit = $newsf->fetch_array();
			?>
				
				<div id="box" style="width: 908px;display: inline-block;">
					<div class="title cyan"><b>Edita la notizia (ID: <?php echo $getid; ?>)</b></div>
					<div class="content-box" >
					<form action="<?php echo HK; ?>/news.php?action=upnews&id=<?php echo $getid; ?>" method="post" name="theAdminForm" id="theAdminForm">
						<table cellspacing="0" cellpadding="5" align="center" border="0">
							<tbody>
								<tr>
									<td class="tablerow1" width="20%" valign="middle"><b>Titolo</b><div class="graytext">Titolo della notizia</div></td>
									<td class="tablerow2" width="200px" valign="middle"><input style="width: 364px;" type="text" name="title" value="<?php echo $news_edit['title']; ?>" size="30" class="textinput" placeholder="Titolo"></td>
								</tr>
								<tr>
									<td class="tablerow1" width="20%" valign="middle"><b>Testoo corto</b><div class="graytext">Riassumi in breve</div></td>
									<td class="tablerow2" width="200px" valign="middle"><input style="width: 364px;" name="story" type="text" class="textinput" id="story" value="<?php echo $news_edit['shortstory']; ?>" placeholder="Riassumi in breve! =)" size="30"></td>
								</tr>
								<tr>
									<td class="tablerow1" width="20%" valign="middle"><b>Contenuto</b><div class="graytext">Contenuto della notizia<br><font color="green">HTML attivo.</font></div></td>
									
									
							
									<td class="tablerow2" width="200px" valign="middle"><textarea style="width: 364px;" name="shortstory" cols="120" rows="5" wrap="soft" id="editor1" class="multitext"><?php echo $news_edit['story']; ?></textarea></td>
								</tr>		<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
								<tr>
									<td class="tablerow1" width="20%" valign="middle"><b>Immagine <Campaña></b><div class="graytext">Immagini per le notiziea. Clicca <a href="https://www.google.com.ec/search?q=campaigns+habbo" target="_blank" style="color:gray">qua</a> per visualizzare.</div></td>
									<td class="tablerow2" width="80%" valign="middle"><br>
									En esta parte, solo cambiar el "NOMBREAQUI" por el nombre que hayas escojido de la pagina de muestras.<br><input style="width: 364px;" name="image" type="text" class="textinput" id="image" value="<?php echo $news_edit['campaignimg']; ?>" placeholder="Aqu&iacute; el url (.PNG, .GIF, ETC)" size="70">
									<div style="clear: both;"></div></td>
								</tr>
								<tr></tr>
								<tr><td align="center" class="tablesubheader" colspan="2"><input type="submit" name="submit" value="Publicar Noticia" class="realbutton" accesskey="s"></td></tr>
								</tbody>
							</table>	
						</form>
					</div>
				</div>
			
			<?php } else { ?>
				<div id="box" style="width: 908px;display: inline-block;">
					<div class="title orange"><b>Crea una news</b></div>
					<div class="content-box" >
					<form action="<?php echo HK; ?>/news.php?action=add" method="post" name="theAdminForm" id="theAdminForm">
						<table cellspacing="0" cellpadding="5" align="center" border="0">
							<tbody>
								<tr>
									<td class="tablerow1" width="20%" valign="middle"><b>Titolo</b><div class="graytext"></div></td>
									<td class="tablerow2" width="200px" valign="middle"><input style="width: 364px;" type="text" name="title" value="" size="30" class="textinput" placeholder="Titolo"></td>
								</tr>
								<tr>
									<td class="tablerow1" width="20%" valign="middle"><b>Testo corto</b><div class="graytext">riassumi in breve</div></td>
									<td class="tablerow2" width="200px" valign="middle"><input style="width: 364px;" name="story" type="text" class="textinput" id="story" value="" placeholder="Riassumi in breve! =)" size="30"></td>
								</tr>
								<tr>
									<td class="tablerow1" width="20%" valign="middle"><b>Contenuto</b><div class="graytext"><br><font color="green">HTML attivato.</font></div></td>
									<td class="tablerow2" width="200px" valign="middle"><textarea style="width: 364px;" name="shortstory" cols="120" rows="5" wrap="soft" id="editor1" class="multitext"></textarea></td>				
									<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
								</tr>
								<tr>
									<td class="tablerow1" width="20%" valign="middle"><b>Immagine <Campaña></b><div class="graytext">Immagini per le news. Clicca <a href="https://www.google.com.ec/search?q=campaigns+habbo" target="_blank" style="color:gray">qui</a> per visualizzare.</div></td>
									<td class="tablerow2" width="80%" valign="middle"><br>
									<br><input style="width: 364px;" name="image" type="text" class="textinput" id="image" placeholder="Link immagine (.PNG, .GIF, ETC)" size="70">
									<div style="clear: both;"></div></td>
								</tr>
								<tr></tr>
								<tr><td align="center" class="tablesubheader" colspan="2"><input type="submit" name="submit" value="Pubblica Notizia" class="realbutton" accesskey="s"></td></tr>
								</tbody>
							</table>	
						</form>
					</div>
				</div>
			<?php } ?>
			</div>
			
			
				<div id="box" style="height: 200px;width: 908px;display: inline-block;">
					<div class="title yellow"><b>Notizie dell'Hotel</b></div>
					<div class="content-box" style="padding-top:0px">
						<?php
							$result = $db->query("SELECT * FROM cms_news_new ORDER BY id DESC");
							if($result->num_rows > 0){
								echo '<ul style="padding: 0px 4px;">';
								while($data = $result->fetch_array()){
									if($data['id'] == $getid){
										$k = " class='selected'";
									}
									echo '<li'.$k.'>'.$data['title'].' &#187; <a href="'. HK .'/news.php?action=edit&id='.$data[id].'">(Edita)</a> | <a href="'. HK .'/news.php?action=err&id='.$data[id].'">(Elimina)</a></li>';
									unset($k);
								}
								echo '</ul>';
								
							}else{
								echo '<i>No hay news</i>';
							}
						?>
					</div>
				</div>
			
		</div>

	</div>
<?php ob_end_flush(); ?>