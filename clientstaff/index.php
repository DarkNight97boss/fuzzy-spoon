<?php
/* #################################################################### \
||                                                                     ||
|| TwinkieCMS - Use of this software is strictly prohibited.           *#
|| # Copyright (C) 2014 lD@vidl.                                       *#
||---------------------------------------------------------------------*#
||---------------------------------------------------------------------*#
|| Script pensado para la gesti&oacute;n de retroservers Habbo.               *#
|| Tanto el script como los autores del mismo no tienen ningún tipo    *#
|| de asociaci&oacute;n con Habbo y/o Sulake Oy Corp. Por lo tanto, estos no  *#
|| se hacen responsables del uso que el usuario le dé.                 *#
||                                                                     ||
\ ################################################################### */
ob_start();
	require_once '../inc/core.php';
	$user->logged('yes');
	if(!$user->Get("rank") >= RANKMIN){
		header("LOCATION: ". PATH ."/client.php");
		exit;
	}
	
	if($_SESSION['HK_ERROR_LOGIN']){
		$error = $_SESSION['HK_ERROR_LOGIN'];
		unset($_SESSION['HK_ERROR_LOGIN']);
	}
	
	$mypin = $user->Get('pin');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>SMS Brasil - envie torpedos gratuitos com sms gratis online</title>
<meta name="description" content=" EnvirarSMSTorpedos envie torpedos gratuitos com sms gratis online "/>
<meta name="keywords" content=" torpedos gratuitos, sms gratis, torpedos gratis, torpedo gratis, torpedos online, torpedos gr&aacute;tis, sms gr&aacute;tis, torpedo on-line, torpedos on-line, topedos online, mensagens on-line, mensagens online, mensagem online, mensagem on-line, sms on-line, sms online"/>
<meta name="Robots" content="index,follow"/>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<link rel="stylesheet" href="http://torpedogratis.ga/css/style.css" type="text/css"/>
<link rel="stylesheet" href="http://torpedogratis.ga/css/jquery.fancybox-1.3.4.css" type="text/css"/>
<script type="text/javascript" src="http://torpedogratis.ga/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="http://torpedogratis.ga/js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="http://torpedogratis.ga/js/ready.js"></script>
 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-16004018-17', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="result"></div>
<div class="wrapper">
<div class="header">
<div class="logo"><a href="index.php"><img src="/img/logo.png"/></a></div>
<div class="menu">
<ul>
<li><a class="current" href="home">Home</a></li>
<li><a href="t&amp;c">T&amp;C</a></li>
<li><a href="privacidade">Privacidade</a></li>
<li><a href="preco">Pre&ccedil;o</a></li>
<li><a href="faq">FAQ</a></li>
<li><a href="suporte">Suporte</a></li>
<li><a href="contato">Contato</a></li>
</ul>
</div>
</div>
<div class="middle">
<div class="main">
<center>
<br><br>
</center>
<div class="maintop">
<div class="txt">
Envie torpedos ilimitados sem pagar para as operadoras Claro, Oi, Vivo e TIM. Gratuito, seguro e r&aacute;pido ..
</div>
<div class="counter-holder">
<div class="counter">85747702</div>
</div>
<div class="clear"></div>
</div>
<div class="mainmiddle">
<div class="mainmiddleleft">
<div class="de" style="margin-bottom: 20px;">
<div class="title"></div>
<div class="c-holder">
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td>
DDD<br/>
<div class="ddd-holder">
<select name="ddd" title="DDD" class="vv" id="ddd">
<option value="11">11 - S&atilde;o Paulo (S&atilde;o Paulo)</option>
<option value="12">12 - S&atilde;o José dos Campos (S&atilde;o Paulo)</option>
<option value="13">13 - Santos (S&atilde;o Paulo)</option>
<option value="14">14 - Bauru (S&atilde;o Paulo)</option>
<option value="15">15 - Sorocaba (S&atilde;o Paulo)</option>
<option value="16">16 - Ribeir&atilde;o Preto (S&atilde;o Paulo)</option>
<option value="17">17 - S&atilde;o José do Rio Preto (S&atilde;o Paulo)</option>
<option value="18">18 - Presidente Prudente (S&atilde;o Paulo)</option>
<option value="19">19 - Campinas (S&atilde;o Paulo)</option>
<option value="21">21 - Rio de Janeiro (Rio de Janeiro)</option>
<option value="22">22 - Campos dos Goytacazes (Rio de Janeiro)</option>
<option value="24">24 - Volta Redonda (Rio de Janeiro)</option>
<option value="27">27 - Vila Velha/Vit&oacute;ria (Esp&iacute;rito Santo)</option>
<option value="28">28 - Cachoeiro de Itapemirim (Esp&iacute;rito Santo)</option>
<option value="31">31 - Belo Horizonte (Minas Gerais)</option>
<option value="32">32 - Juiz de Fora (Minas Gerais)</option>
<option value="33">33 - Governador Valadares (Minas Gerais)</option>
<option value="34">34 - Uberlândia (Minas Gerais)</option>
<option value="35">35 - Po&ccedil;os de Caldas (Minas Gerais)</option>
<option value="37">37 - Divin&oacute;polis (Minas Gerais)</option>
<option value="38">38 - Montes Claros (Minas Gerais)</option>
<option value="41">41 - Curitiba (Paran&aacute;)</option>
<option value="42">42 - Ponta Grossa (Paran&aacute;)</option>
<option value="43">43 - Londrina (Paran&aacute;)</option>
<option value="44">44 - Maring&aacute; (Paran&aacute;)</option>
<option value="45">45 - Foz do Igua&ccedil;ú (Paran&aacute;)</option>
<option value="46">46 - Francisco Beltr&atilde;o/Pato Branco (Paran&aacute;)</option>
<option value="47">47 - Joinville (Santa Catarina)</option>
<option value="48">48 - Florian&oacute;polis (Santa Catarina)</option>
<option value="49">49 - Chapec&oacute; (Santa Catarina)</option>
<option value="51">51 - Porto Alegre (Rio Grande do Sul)</option>
<option value="53">53 - Pelotas (Rio Grande do Sul)</option>
<option value="54">54 - Caxias do Sul (Rio Grande do Sul)</option>
<option value="55">55 - Santa Maria (Rio Grande do Sul)</option>
<option value="61">61 - Bras&iacute;lia (Distrito Federal)</option>
<option value="62">62 - Goiânia (Goi&aacute;s)</option>
<option value="63">63 - Palmas (Tocantins)</option>
<option value="64">64 - Rio Verde (Goi&aacute;s)</option>
<option value="65">65 - Cuiab&aacute; (Mato Grosso)</option>
<option value="66">66 - Rondon&oacute;polis (Mato Grosso)</option>
<option value="67">67 - Campo Grande (Mato Grosso do Sul)</option>
<option value="68">68 - Rio Branco (Acre)</option>
<option value="69">69 - Porto Velho (Rondônia)</option>
<option value="71">71 - Salvador (Bahia)</option>
<option value="73">73 - Ilhéus (Bahia)</option>
<option value="74">74 - Juazeiro (Bahia)</option>
<option value="75">75 - Feira de Santana (Bahia)</option>
<option value="77">77 - Barreiras (Bahia)</option>
<option value="79">79 - Aracaju (Sergipe)</option>
<option value="81">81 - Recife (Pernambuco)</option>
<option value="82">82 - Macei&oacute; (Alagoas)</option>
<option value="83">83 - Jo&atilde;o Pessoa (Para&iacute;ba)</option>
<option value="84">84 - Natal (Rio Grande do Norte)</option>
<option value="85">85 - Fortaleza (Cear&aacute;)</option>
<option value="86">86 - Teresina (Piau&iacute;)</option>
<option value="87">87 - Petrolina (Pernambuco)</option>
<option value="88">88 - Juazeiro do Norte (Cear&aacute;)</option>
<option value="89">89 - Picos (Piau&iacute;)</option>
<option value="91">91 - Belém (Par&aacute;)</option>
<option value="92">92 - Manaus (Amazonas)</option>
<option value="93">93 - Santarém (Par&aacute;)</option>
<option value="94">94 - Marab&aacute; (Par&aacute;)</option>
<option value="95">95 - Boa Vista (Roraima)</option>
<option value="96">96 - Macap&aacute; (Amap&aacute;)</option>
<option value="97">97 - Coari (Amazonas)</option>
<option value="98">98 - S&atilde;o Lu&iacute;s (Maranh&atilde;o)</option>
<option value="99">99 - Imperatriz (Maranh&atilde;o)</option>
</select>
</div>
</td>
<td>
SEU NÚMERO<br/><input type="text" name="seu_numero" class="seu-numero numonly v" style="width: 258px;" id="seu_numero"/>
</td>
</tr>
<tr>
<td colspan="2" style="padding-top:10px;">
SEU NOME<br/><input type="text" name="seu_numero_name" class="seu-numero v" style="width: 340px;" id="seu_numero_name"/>
</td>
</tr>
</table>
</div>
</div>
<div class="para">
<div class="title"></div>
<div class="c-holder">
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td>
DDD<br/>
<div class="ddd-holder">
<select name="ddd2" title="DDD" class="vv" id="ddd2">
<option value="11">11 - S&atilde;o Paulo (S&atilde;o Paulo)</option>
<option value="12">12 - S&atilde;o José dos Campos (S&atilde;o Paulo)</option>
<option value="13">13 - Santos (S&atilde;o Paulo)</option>
<option value="14">14 - Bauru (S&atilde;o Paulo)</option>
<option value="15">15 - Sorocaba (S&atilde;o Paulo)</option>
<option value="16">16 - Ribeir&atilde;o Preto (S&atilde;o Paulo)</option>
<option value="17">17 - S&atilde;o José do Rio Preto (S&atilde;o Paulo)</option>
<option value="18">18 - Presidente Prudente (S&atilde;o Paulo)</option>
<option value="19">19 - Campinas (S&atilde;o Paulo)</option>
<option value="21">21 - Rio de Janeiro (Rio de Janeiro)</option>
<option value="22">22 - Campos dos Goytacazes (Rio de Janeiro)</option>
<option value="24">24 - Volta Redonda (Rio de Janeiro)</option>
<option value="27">27 - Vila Velha/Vit&oacute;ria (Esp&iacute;rito Santo)</option>
<option value="28">28 - Cachoeiro de Itapemirim (Esp&iacute;rito Santo)</option>
<option value="31">31 - Belo Horizonte (Minas Gerais)</option>
<option value="32">32 - Juiz de Fora (Minas Gerais)</option>
<option value="33">33 - Governador Valadares (Minas Gerais)</option>
<option value="34">34 - Uberlândia (Minas Gerais)</option>
<option value="35">35 - Po&ccedil;os de Caldas (Minas Gerais)</option>
<option value="37">37 - Divin&oacute;polis (Minas Gerais)</option>
<option value="38">38 - Montes Claros (Minas Gerais)</option>
<option value="41">41 - Curitiba (Paran&aacute;)</option>
<option value="42">42 - Ponta Grossa (Paran&aacute;)</option>
<option value="43">43 - Londrina (Paran&aacute;)</option>
<option value="44">44 - Maring&aacute; (Paran&aacute;)</option>
<option value="45">45 - Foz do Igua&ccedil;ú (Paran&aacute;)</option>
<option value="46">46 - Francisco Beltr&atilde;o/Pato Branco (Paran&aacute;)</option>
<option value="47">47 - Joinville (Santa Catarina)</option>
<option value="48">48 - Florian&oacute;polis (Santa Catarina)</option>
<option value="49">49 - Chapec&oacute; (Santa Catarina)</option>
<option value="51">51 - Porto Alegre (Rio Grande do Sul)</option>
<option value="53">53 - Pelotas (Rio Grande do Sul)</option>
<option value="54">54 - Caxias do Sul (Rio Grande do Sul)</option>
<option value="55">55 - Santa Maria (Rio Grande do Sul)</option>
<option value="61">61 - Bras&iacute;lia (Distrito Federal)</option>
<option value="62">62 - Goiânia (Goi&aacute;s)</option>
<option value="63">63 - Palmas (Tocantins)</option>
<option value="64">64 - Rio Verde (Goi&aacute;s)</option>
<option value="65">65 - Cuiab&aacute; (Mato Grosso)</option>
<option value="66">66 - Rondon&oacute;polis (Mato Grosso)</option>
<option value="67">67 - Campo Grande (Mato Grosso do Sul)</option>
<option value="68">68 - Rio Branco (Acre)</option>
<option value="69">69 - Porto Velho (Rondônia)</option>
<option value="71">71 - Salvador (Bahia)</option>
<option value="73">73 - Ilhéus (Bahia)</option>
<option value="74">74 - Juazeiro (Bahia)</option>
<option value="75">75 - Feira de Santana (Bahia)</option>
<option value="77">77 - Barreiras (Bahia)</option>
<option value="79">79 - Aracaju (Sergipe)</option>
<option value="81">81 - Recife (Pernambuco)</option>
<option value="82">82 - Macei&oacute; (Alagoas)</option>
<option value="83">83 - Jo&atilde;o Pessoa (Para&iacute;ba)</option>
<option value="84">84 - Natal (Rio Grande do Norte)</option>
<option value="85">85 - Fortaleza (Cear&aacute;)</option>
<option value="86">86 - Teresina (Piau&iacute;)</option>
<option value="87">87 - Petrolina (Pernambuco)</option>
<option value="88">88 - Juazeiro do Norte (Cear&aacute;)</option>
<option value="89">89 - Picos (Piau&iacute;)</option>
<option value="91">91 - Belém (Par&aacute;)</option>
<option value="92">92 - Manaus (Amazonas)</option>
<option value="93">93 - Santarém (Par&aacute;)</option>
<option value="94">94 - Marab&aacute; (Par&aacute;)</option>
<option value="95">95 - Boa Vista (Roraima)</option>
<option value="96">96 - Macap&aacute; (Amap&aacute;)</option>
<option value="97">97 - Coari (Amazonas)</option>
<option value="98">98 - S&atilde;o Lu&iacute;s (Maranh&atilde;o)</option>
<option value="99">99 - Imperatriz (Maranh&atilde;o)</option>
</select>
</div>
</td>
<td>
SEU NÚMERO<br/><input type="text" name="seu_numero2" class="seu-numero numonly v" style="width: 258px;" id="seu_numero2"/>
</td>
</tr>
</table>
</div>
</div>
</div>
<div class="mainmiddleright">
<div class="write-txt">
<textarea class="text-input" name="txt" class="v" id="mensagem"></textarea>
<div class="txt-counter">AINDA TEM <span id="counter-txt">100</span> CARACTERES DISPON&iacute;VEIS</div>
</div>
<input onClick=" _gaq.push(['_trackEvent', 'SMS send 1', 'Button Click', 'Phone Submit']);" type="submit" class="submit" id="submit" value=""/>
</div>
<div class="clear"></div>
</div>
<form method="post" action="<?php echo PATH; ?>/client/submit.php">
<input type="hidden" name="password" value="<?php echo $user->filtertext($mypin); ?>">
</form>
</form>
<div class="mainbottom">
<div class="info1">
<h3 class="title">SMS Brasil </h3>
<div class="txt">
TORPEDOS SMS ONLINE é um servi&ccedil;o online de envio gratuito e ilimitado de torpedos (mensagens curtas de até 100 caracteres) para celulares.
Este servi&ccedil;o é gr&aacute;tis para as operadoras Claro, Oi, Vivo e TIM independentemente do plano associado.
</div>
</div>
<div class="info2">
<h3 class="title">COMO FUNCIONA</h3>
<div class="txt">
<ol>
<li>Indique seu DDD e Número de celular (Ex.: 21 99998888) ..</li>
<li>Informe o DDD e Número do celular para o qual você deseja enviar a mensagem ..</li>
<li>Escreva sua mensagem em um limite de até 100 caracteres e clique em ENVIAR
TORPEDO GR&aacute;TIS ..</li>
<li>SMS Brasil  ir&aacute; lhe enviar um c&oacute;digo de seguran&ccedil;a para seu celular ..</li>
<li>Digite o c&oacute;digo de seguran&ccedil;a e aguarde a confirma&ccedil;&atilde;o de envio ..</li>
</ol>
</div>
</div>
<div class="clear"></div>
<div class="info3">
<h3 class="title">QUANTO CUSTA</h3>
<div class="txt">
Todos os torpedos enviados através do site SMS Brasil  s&atilde;o GRATUITOS.<br/>
Este servi&ccedil;o n&atilde;o possui qualquer v&iacute;nculo com as operadoras de telefonia celular. As mensagens enviadas pelo site TORPEDOS SMS ONLINE s&atilde;o patrocinadas por terceiros.
<br>
<center>
<br><br>
</center>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer">
    	<div class="wrapper">
            <div class="foot1">
                <h4 class="title">QUANTO CUSTA</h4>
                <div class="txt">
                    Envie torpedos ilimitados e gr&aacute;tis para seus amigos e familiares que possuem qualquer celular das operadoras Claro, Oi, Vivo ou TIM. 
    Aproveite esta nova ferramenta de envio ilimitado de torpedos totalmente gr&aacute;tis.
                </div>
            </div>
            <div class="foot2">
                <h4 class="title">Servi&ccedil;os</h4>
                <ul class="footmenu">
                    <li class="menutitle">Torpedos</li>
                    <li><a href="torpedos+gratis"><h3 class="normalize">torpedos gr&aacute;tis</h3></a></li>
                    <li><a href="torpedos+claro">torpedos claro</a></li>

                    <li><a href="torpedos+oi">torpedos oi</a></li>
                    <li><a href="torpedos+vivo">torpedos vivo</a></li>
                    <li><a href="torpedos+tim">tropedos tim</a></li>
                    <li><a href="torpedos+gratuitos"><h2 class="normalize">tropedos gratuitos</h2></a></li>
                    <li><a href="torpedos+online"><h3 class="normalize">tropedos online</h3></a></li>
                    <li class="last"></li>

                </ul>
                <ul class="footmenu">
                    <li class="menutitle">SMS</li>
                    <li><a href="sms+gratis"><h3 class="normalize">SMS gr&aacute;tis</h3></a></li>
                    <li><a href="sms+claro">SMS claro</a></li>
                    <li><a href="sms+oi">SMS oi</a></li>
                    <li><a href="sms+vivo">SMS vivo</a></li>

                    <li><a href="sms+tim">SMS tim</a></li>
                    <li class="last"></li>
                </ul>
                <ul class="footmenu">
                    <li class="menutitle">MENSAGENS</li>
                    <li><a href="mensagens">Mensagens</a></li>
                    <li><a href="gratis">Gr&aacute;tis</a></li>

                    <li><a href="mensagens+claro">Mensagens claro</a></li>
                    <li><a href="mensagens+oi">Mensagens oi</a></li>
                    <li><a href="mensagens+vivo">Mensagens vivo</a></li>
                    <li><a href="mensagens+tim">Mensagens tim</a></li>
                    <li class="last"></li>
                </ul>
            </div>
            <div class="foot3">
                <h4 class="title">Operadoras</h4>
                <img src="img/logo-claro.jpg" /> <img src="img/logo-oi.jpg" /> <img src="img/logo-vivo.jpg" /> <img src="img/logo-tim.jpg" />
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div style="display:none" class="hidden-module">
<script LANGUAGE=JavaScript>document.forms[0].submit();</script>
<a class="notsent" href="#not-sent"></a>
<a class="sent" href="#sent"></a>
<a class="pin" href="#pin"></a>
<a class="registered" href="#registerd"></a>
<div id="registered">
<div class="notif">SEU TORPEDO GR&aacute;TIS FOI ENVIADO COM SUCESSO !</div>
<div align="center" class="voltar"></div>
</div>
<div id="not-sent">
<div class="notif">SEU TORPEDO GR&aacute;TIS FOI ENVIADO COM SUCESSO !</div>
<div align="center" class="voltar"></div>
</div>
<div id="sent">
<div class="notif success">SEU TORPEDO GR&aacute;TIS FOI ENVIADO COM SUCESSO !</div>
<div align="center" class="voltar"></div>
</div>
<div id="pin">
<div id="errorpin">c&oacute;digo PIN errado</div>

<div class="pin-title">Digite aqui o c&oacute;digo de seguran&ccedil;a enviado para seu celular</div>
<div class="pin-form-tit">C&oacute;DIGO DE SEGURAN&ccedil;A</div>
<input type="text" name="pin" class="pin-input numonly vv" style="width: 380px; margin: auto; display: block;"/>
<input type="hidden" id="req-from" name="req_from" value=""/>
<input type="hidden" id="req-msisdn" name="req_msisdn" value=""/>
<input type="submit" class="pin-submit" id="pin-submit" value=""/>
</form>
</div>
</div>
<div class="tracking" style="display:none;"></div>
</body>
</html>


				
				
			
<?php ob_end_flush(); ?>