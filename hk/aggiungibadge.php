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
	require_once '../inc/core.php';
	require_once '../inc/databasegiovanni.php';
	$user->logged('yes');
	$user->hk();
	$tab = "4";
	$page = "HK Aggiungi Badge";
	require_once 'templates/header.php';
		
	if(isset($_POST['aggiungibadge'])){
	if(empty($_POST['shortcode']) || empty($_POST['titolo']) || empty($_POST['descrizione'])){
			$_SESSION['HK_ERROR_RETURN'] = "Riempi tutti i campi!";	
			header("LOCATION: ". HK ."/aggiungibadge.php");		
		}
	
	$shortcodebadge = $_POST['shortcode'];
	$titolo = $_POST['titolo'];
	$descrizione = $_POST['descrizione'];
		
		$checkbadge = mysql_query("SELECT COUNT(code) AS esiste FROM badge_definitions WHERE code = '$shortcodebadge'") or die(mysql_error()); 
			$qcb = mysql_fetch_assoc($checkbadge);
			if ($qcb['esiste']==1) {
				$_SESSION['HK_ERROR_RETURN'] = "Questo codice esiste già!";
				header("LOCATION: ". HK ."/aggiungibadge.php");		
			}
		else {
	$result = mysql_query("INSERT INTO badge_definitions (code) VALUES ('$shortcodebadge')") or die(mysql_error());
		
$filename = '../gamedata/external_flash_texts.txt'; 
$badgename = "badge_name_$shortcodebadge=$titolo";
$badgedesc = "badge_desc_$shortcodebadge=$descrizione";
$somecontent = "\r\n$badgename\r\n$badgedesc"; 

$target_dir = "../c_images/album1584/";
$target_file = $target_dir . basename($_FILES["userfile"]["name"]);
$nomefile = $_FILES["userfile"]["name"];
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
print_r($_FILES);
// Check file size
if ($_FILES["userfile"]["size"] > 15000000) {
echo "Too big.";
$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
    header("LOCATION: ". HK ."/aggiungibadge.php");
}
}

// Verifica che il file esista e sia riscrivibile 
if (is_writable($filename)) { 

    // In questo esempio apriamo $filename in append mode. 
    // Il puntatore del file è posizionato in fondo al file 
    // è qui che verrà posizionato $somecontent quando eseguiremo fwrite(). 
    if (!$handle = fopen($filename, 'a')) { 
	$_SESSION['HK_GOOD_RETURN'] = "Il badge è stato caricato CORRETTAMENTE!";
	header("LOCATION: ". HK ."/aggiungibadge.php");
         exit; 
    } 

    // Scrive $somecontent nel file aperto. 
    if (!fwrite($handle, $somecontent) ===FALSE) { 
	$_SESSION['HK_GOOD_RETURN'] = "Il badge è stato caricato CORRETTAMENTE!";
	header("LOCATION: ". HK ."/aggiungibadge.php");
        exit; 
    } 

    fclose($handle); 
	}
	header("LOCATION: ". HK ."/aggiungibadge.php");
	$_SESSION['HK_GOOD_RETURN'] = "Il badge è stato caricato CORRETTAMENTE!";
	
	}
	}
	
?>
<?php if ($user->Get('rank') > 5) : ?>
		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
			
				<div id="box">
					<div class="title red"><b>ATTENZIONE - SCRIPT FUNZIONANTE / ATTIVO</b></div>
					<div class="content-box" id="addban">	
						<center><strong>Per eseguire correttamente gli script riempi tutti i campi e, una volta terminato, sul client esegui il seguente comando :update badge_definitions.
						                
										</strong></center>
					</div>
				</div>
				<div id="box">
					<div class="title red"><b>ATTENZIONE - SCRIPT FUNZIONANTE / ATTIVO</b></div>
					<div class="content-box" id="addban">	
						<center><strong>PS: IL NOME DEL FILE .GIF (BADGE) DEVE ESSERE UGUALE AL SHORTCODE</strong></center>
					</div>
				</div>
				
				
				<div id="box">
					<div class="title grey"><b>Aggiungi Distintivo</b></div>
					<div class="content-box" id="addban">	
						<form action="<?php echo HK; ?>/aggiungibadge.php" method="post" name="aggiungibadge" id="aggiungibadge" enctype="multipart/form-data">
							<table width='100%' cellspacing='0' cellpadding='5' align='center' border='0'>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Titolo</b><div class='graytext'>Titolo del badge</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type='text' name="titolo" id="titolo" value="" size='30' class='textinput'></td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Descrizione</b><div class='graytext'>Descrizione del badge</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="descrizione" id="descrizione" style="margin-top: 10px;" value=""><br /><br>
								</td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>Shortcode</b><div class='graytext'>Codice del badge</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="text" name="shortcode" id="shortcode" style="margin-top: 10px;" placeholder="Ad esempio HS1"><br /><br>
								</td>
								</tr>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>File GIF</b><div class='graytext'>File del badge</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="file" name="userfile" id="userfile" required></td>
								</tr>
								<tr><td align="center" class="tablesubheader" colspan="2"><input type="submit" name="aggiungibadge" value="Aggiungi il distintivo" class="realbutton" accesskey="s"></td></tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
		</div>

				</div>
	</div>
	<?php else : header("Location: nonautorizzato.php"); ?>
        <?php endif; ?>
<?php ob_end_flush(); ?>