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
require_once '../inc/core-hall.php';
	require_once '../inc/core.php';
	$user->logged('yes');
	$user->hk();
	$tab = "1";
	$page = "HK Main";
	require_once 'templates/header.php';
?>
		<div id="hk-body">
			<div id="body">
				<div id="content">
					<div id="logo"><div class="text"><?php echo SHORTNAME; ?></div></div>
					<div id="column">
						<div id="column-1">
							<div id="box">
								<div class="title">Gerenciar Hall da Fama</div>
								<div class="content-box"><form method="post">

<h1>Dar Pontos de Eventos </h1>
<strong>Pontos de Eventos</strong>
<br><input name="nomejogador" type="text" placeholder="Nome" />
<br>
<strong>Total de ponto a dar (1)</strong>
<br><input name="pontosevento" type="text"  placeholder="Pontos"/>
<br><br>
<input name="darponto" class="btn btn-success btn-smal" value="Inserir pontos de Eventos" type="submit" />
</form>
<?php
if (isset($_POST['darponto'])) {
$nomejogador = $_POST['nomejogador'];
$pontosevento = $_POST['pontosevento'];
$check = mysql_num_rows(mysql_query("SELECT nome FROM rankevento WHERE nome = '$nomejogador'"));
if($check==0){
$adduser = mysql_query("insert into rankevento(nome, pontos) values('$nomejogador', '$pontosevento')");
echo("<div style='background-color:#EAF8E7; border:1px solid #70CD74;'>Usuário inserido no ranking pois não havia nenhum pont</div>.");
}else{
$updatepontos = mysql_query("UPDATE rankevento SET nome = '$nomejogador', pontos = pontos+'$pontosevento' WHERE nome = '$nomejogador'") or die(mysql_error());
echo("<div style='background-color:#EAF8E7; border:1px solid #70CD74;'>Pontos de $nomejogador foram atualizados</div>");
}
}
?><br>
<!-- PROMOÇÕES -->

<form method="post">
<hr>
<h1>Dar Pontos de Promo&ccedil;&otilde;es </h1>
<strong>Pontos de Promo&ccedil;&otilde;es</strong>
<br><input name="nome" type="text" placeholder="Nome" />
<br>
<strong>Total de ponto a dar (1)</strong>
<br><input name="pontos" type="text"  placeholder="Pontos"/>
<br><br>
<input name="dar" class="btn btn-success btn-smal" value="Inserir pontos de campanha" type="submit" />
</form>
<?php
if (isset($_POST['dar'])) {
$nome = $_POST['nome'];
$pontos = $_POST['pontos'];
$check = mysql_num_rows(mysql_query("SELECT nome FROM rankcampanha WHERE nome = '$nome'"));
if($check==0){
$adduser = mysql_query("insert into rankcampanha(nome, pontos) values('$nome', '$pontos')");
echo("<div style='background-color:#EAF8E7; border:1px solid #70CD74;'>Usuário inserido no ranking pois não havia nenhum pont</div>.");
}else{
$updatepontos = mysql_query("UPDATE rankcampanha SET nome = '$nome', pontos = pontos+'$pontos' WHERE nome = '$nome'") or die(mysql_error());
echo("<div style='background-color:#EAF8E7; border:1px solid #70CD74;'>Pontos de $nome foram atualizados</div>");
}
}
?><br><hr>



<?php if($user_rank > 8 && $logged_in == true){ ?>
<h1>Resetar todos pontos no Ranking</h1>
<form method="post">
<input name="tirar" value="Resetar toda pontuação" type="submit" />
</form>
<?php
if (isset($_POST['tirar'])) {
$sql = mysql_query("DELETE FROM rankcampanha") or die(mysql_error());
echo("<div style='background-color:#EAF8E7; border:1px solid #70CD74;'>O ranking foi resetado com sucesso</div>");
}
?>
<?php } ?></div>
									</div>
							
						</div>
						
					</div>
				
				</div>
			</div>
		</div>
	</div>
<?php ob_end_flush(); ?>