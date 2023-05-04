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
		
	if(isset($_POST['uploadfile'])){

    $target_dir = "uploads/";
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
    header("LOCATION: ". WEB ."/ok.php");
}
}
	}
	
?>
<?php if ($user->Get('rank') > 7) : ?>
		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>				
				
				<div id="box">
					<div class="title grey"><b>Aggiungi Distintivo</b></div>
					<div class="content-box" id="addban">	
						<form action="<?php echo HK; ?>/upload.php" method="post" name="aggiungibadge" id="aggiungibadge" enctype="multipart/form-data">
							<table width='100%' cellspacing='0' cellpadding='5' align='center' border='0'>
								<tr>
								<td class='tablerow1'  width='40%'  valign='middle'><b>File</b><div class='graytext'>File del badge</div></td>
								<td class='tablerow2'  width='60%'  valign='middle'><input type="file" name="userfile" id="userfile" required></td>
								</tr>
								
								<tr><td align="center" class="tablesubheader" colspan="2"><input type="submit" name="uploadfile" value="Aggiungi il distintivo" class="realbutton" accesskey="s"></td></tr>
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