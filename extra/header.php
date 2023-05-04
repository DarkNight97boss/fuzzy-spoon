<?php
/* #################################################################### \
||                                                                     ||
|| HubixCMS - La distribuzione di questo CMS è severamente proibita    *#
|| # Copyright (C) 2016 JAlf (Giovanni aka giovanni256)                *#
||																	   *#
||																	   *#
|| Questo script è stato realizzato in esclusiva per Hubix Hotel.      *#
||                                                                     ||
\ ################################################################### */
ob_start();
	require_once 'inc/core.php';
					
$pageName = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html>
    <head>
	<title><?php echo SHORTNAME; ?> - <?php echo $page; ?></title>
        <?php header("Content-Type: text/html; charset=iso-8859-1",true); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Marcelo Conceição, Wellington Morees">
<meta name="description" content="Fa&#xE7;a o seu check-in no maior Hotel virtual do mundo DE GRA&#xC7;A! Voc&#xEA; poder&#xE1; fazer novos amigos, jogar e criar seus pr&#xF3;prios jogos, bater papo, construir seus quartos e muito mais!">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo SHORTNAME; ?>">
<meta property="og:title" content="<?php echo SHORTNAME; ?>">
<meta property="og:description" content="Fa&#xE7;a o seu check-in no maior Hotel virtual do mundo DE GRA&#xC7;A! Voc&#xEA; poder&#xE1; fazer novos amigos, jogar e criar seus pr&#xF3;prios jogos, bater papo, construir seus quartos e muito mais!">
<meta name="keywords" content="<?php echo SHORTNAME; ?>, <?php echo SHORTNAME; ?> hotel, <?php echo SHORTNAME; ?> jogar, <?php echo SHORTNAME; ?> entrar, <?php echo SHORTNAME; ?> online, , habbo, habblethotel, habblive, habb, lella, lellahotel,lella hotel, habbinfo, habbinfo hotel, habblive, habblive hotel, habbolatino, habbletlatino, habblet, habblethotel, crazzy, habb, habbhotel , furnis , mobs, client, cliente, client hotel, clienthotel, atualizado, catalogo, mania hotel, habbobr, forever hotel, habblive, cammex, equipe cammex, equipe pixels, pixels, subisto, equipe subisto, crazzy, equipe crazzy, habbo biz, habbo pirata, habblet, habbolella, habbo biz, habbo pirata, habbinfo, habbid, como ganhar dinheiro no habbo, habbo forever, habbonados, habbonight, habbo biz, habbo hotel biz, habbo pirata, novo habbo, hotel habbo, hotel pirata habbo, hotel moedas gratis, hebbo hotel, habbo hotel do futuro"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="public/css/vendor.min.css" rel="stylesheet">
<link href="public/css/theme-core.min.css" rel="stylesheet">
<link href="public/css/module-essentials.min.css" rel="stylesheet"/>
<link href="public/css/module-material.min.css" rel="stylesheet"/>
<link href="public/css/module-layout.min.css" rel="stylesheet"/>
<link href="public/css/module-navbar.min.css" rel="stylesheet"/>
<link href="public/css/main.css" rel="stylesheet"/>
<link href="public/css/giovanni.css" rel="stylesheet"/>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=pt-BR" type="text/css"/>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
<script src="public/js/vendor-core.min.js"></script>
<script src="public/js/module-essentials.min.js"></script>
<script src="public/js/module-material.min.js"></script>
<script src="public/js/module-layout.min.js"></script>
<script src="public/js/theme-core.min.js"></script>
        
        <link rel="import" href="https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html">
        <link type="text/css" href="web/css/material.css" rel="stylesheet">
		<link type="text/css" href="../registrazione/materialize/css/materialgio2.css" rel="stylesheet">
		<link type="text/css" href="giovanni/player/player2.css" rel="stylesheet">
        <script type="text/javascript" src="web/js/smoothscroll.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>
		
		<link rel='stylesheet prefetch' href='//codepen.io/assets/reset/normalize.css'><link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400'><link rel='stylesheet prefetch' href='https://www.googledrive.com/host/0B8ExDrngxZU8OXRZbnNYMGx1VW8'><link rel='stylesheet prefetch' href='https://www.googledrive.com/host/0B8ExDrngxZU8YjNQS19zaHBPcms'>

		<?php if(MAINTENANCE == 1 && $user->Get('rank') < 5) header("LOCATION: ". PATH ."/manutenzione"); ?>
		
    </head>
    
    <body>
    	<div id="header-content">
            <div class="container_24">
                <div class="grid_24">
                    <a href="home">
                        <div class="habbologo"></div>
                    </a>
                    <div class="onlineBox">
                        <div class="arrow"></div>
                        <b><?php echo $user->GetOns(); ?></b> utenti online
                    </div>
                    <div class="hotel"></div>
                    <?php if($user->Get('rank') >= RANKMIN){ ?><a href="/hk" target="_blank" class="button raised red" id="administrationInHeader">
                        <div class="center" fit>Amministrazione</div>
                        <paper-ripple fit></paper-ripple>
                    </a><?php } ?>
                    <a href="client.php" target="_blank" class="button raised green" id="checkInHeader">
                        <div class="center" fit>Entra</div>
                        <paper-ripple fit></paper-ripple>
                    </a>
                    <ul>
                        <li class="dropdown user">
							<a href="home">
                                <i class="icon fa fa-user"></i>
                                <?php echo $myusername; ?>
                                <i class="iconRight fa fa-angle-down"></i>
                            </a>
							<ul class="dropdown-menu" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
<li><a class="dropdown-toggle" href="impostazioni"><i class="fa fa fa-cogs"></i> Impostazioni</a> </li>
<li><a class="dropdown-toggle" data-toggle="modal" data-target=".bs-example-modal-sm" href="#"><i class="fa fa-sign-out"></i> Esci</a> </li>
</ul>
                        </li>
						
                        <li class="dropdown user">
							<a href="home">
                                <i class="icon fa fa-users"></i>
                                Community
                                <i class="iconRight fa fa-angle-down"></i>
                            </a>
							<ul class="dropdown-menu" role="menu">
<li><a class="dropdown-toggle" href="community"><i class="fa fa fa-users"></i> Community</a> </li>
<li><a class="dropdown-toggle" href="staff"><i class="fa fa fa-heart"></i> Staff</a> </li>
<li><a class="dropdown-toggle" href="altristaff"><i class="fa fa fa-paper-plane"></i> Altri staff</a> </li>
<li><a class="dropdown-toggle" href="safety"><i class="fa fa fa-shield"></i> Sicurezza</a> </li>
<li><a class="dropdown-toggle" href="faq"><i class="fa fa fa-question-circle"></i> FAQ</a> </li>
<li><a class="dropdown-toggle" href="terminiecondizioni"><i class="fa fa fa-gavel"></i> Condizioni</a> </li>
</ul>
                        </li>
						<?php if ($pageName == "news.php") {echo '<li class="selected">';} else echo '<li>'?>
                            <a href="news">
                                <i class="icon fa fa-newspaper-o"></i>
                                News
                            </a>
                        </li>
                        <?php if ($pageName == "shop.php") {echo '<li class="selected">';} else echo '<li>'?>
                            <a href="shop">
                                <i class="icon fa fa-shopping-cart"></i>
                                Hubix Shop
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<div class="modal fade bs-example-modal-sm" style="padding-top: 15%;" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog ">
<div class="modal-content">
<div class="modal-header"><h4 style=" text-transform: uppercase; "><i class="fa fa-lock"></i> Logout</h4></div>
<div class="modal-body"><i class="fa fa-question-circle"></i> Vuoi veramente uscire da Hubix Hotel? <br />Tutti i tuoi dati verranno salvati!</div>
<div class="modal-footer"><a href="logout" class="btn btn-danger btn-block">Esci</a></div>
</div>
</div>
</div>
<script type="text/javascript"  charset="utf-8">
// Place this code snippet near the footer of your page before the close of the /body tag
// LEGAL NOTICE: The content of this website and all associated program code are protected under the Digital Millennium Copyright Act. Intentionally circumventing this code may constitute a violation of the DMCA.
                           
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';k O=\'\',1S=\'2a\';1C(k i=0;i<12;i++)O+=1S.U(z.H(z.I()*1S.D));k 2c=3,2D=\'2X\',2E=\'2X\',2G=B(e){k o=!1,i=B(){q(j.1e){j.2O(\'2L\',t);C.2O(\'27\',t)}J{j.2Y(\'2K\',t);C.2Y(\'2J\',t)}},t=B(){q(!o&&(j.1e||3B.2A===\'27\'||j.34===\'2N\')){o=!0;i();e()}};q(j.34===\'2N\'){e()}J q(j.1e){j.1e(\'2L\',t);C.1e(\'27\',t)}J{j.2I(\'2K\',t);C.2I(\'2J\',t);k n=!1;2V{n=C.6A==6h&&j.21}2T(a){};q(n&&n.2U){(B r(){q(o)F;2V{n.2U(\'11\')}2T(t){F 2b(r,50)};o=!0;i();e()})()}}};C[\'\'+O+\'\']=(B(){k e={e$:\'2a+/=\',57:B(t){k d=\'\',l,a,i,s,c,r,n,o=0;t=e.t$(t);17(o<t.D){l=t.X(o++);a=t.X(o++);i=t.X(o++);s=l>>2;c=(l&3)<<4|a>>4;r=(a&15)<<2|i>>6;n=i&63;q(2Q(a)){r=n=64}J q(2Q(i)){n=64};d=d+T.e$.U(s)+T.e$.U(c)+T.e$.U(r)+T.e$.U(n)};F d},V:B(t){k n=\'\',l,c,d,s,a,i,r,o=0;t=t.1z(/[^A-4W-5k-9\\+\\/\\=]/g,\'\');17(o<t.D){s=T.e$.1D(t.U(o++));a=T.e$.1D(t.U(o++));i=T.e$.1D(t.U(o++));r=T.e$.1D(t.U(o++));l=s<<2|a>>4;c=(a&15)<<4|i>>2;d=(i&3)<<6|r;n=n+N.P(l);q(i!=64){n=n+N.P(c)};q(r!=64){n=n+N.P(d)}};n=e.n$(n);F n},t$:B(e){e=e.1z(/;/g,\';\');k n=\'\';1C(k o=0;o<e.D;o++){k t=e.X(o);q(t<1q){n+=N.P(t)}J q(t>5u&&t<5D){n+=N.P(t>>6|5B);n+=N.P(t&63|1q)}J{n+=N.P(t>>12|2j);n+=N.P(t>>6&63|1q);n+=N.P(t&63|1q)}};F n},n$:B(e){k o=\'\',t=0,n=5v=1y=0;17(t<e.D){n=e.X(t);q(n<1q){o+=N.P(n);t++}J q(n>4X&&n<2j){1y=e.X(t+1);o+=N.P((n&31)<<6|1y&63);t+=2}J{1y=e.X(t+1);2h=e.X(t+2);o+=N.P((n&15)<<12|(1y&63)<<6|2h&63);t+=3}};F o}};k r=[\'5G==\',\'6p\',\'6k=\',\'6j\',\'6r\',\'6y=\',\'6z=\',\'6t=\',\'6v\',\'5K\',\'5V=\',\'6w=\',\'4a\',\'4b\',\'49=\',\'48\',\'46=\',\'47=\',\'4c=\',\'4d=\',\'4i=\',\'4h=\',\'4g==\',\'4e==\',\'4f==\',\'45==\',\'44=\',\'3U\',\'3V\',\'3T\',\'3S\',\'3Q\',\'3R\',\'3W==\',\'3X=\',\'42=\',\'43=\',\'41==\',\'40=\',\'3Y\',\'3Z=\',\'4j=\',\'4k==\',\'4F=\',\'4G==\',\'4E==\',\'4D=\',\'4B=\',\'4C\',\'4H==\',\'4I==\',\'4N\',\'4M==\',\'4L=\'],f=z.H(z.I()*r.D),w=e.V(r[f]),y=w,M=1,p=\'#4J\',a=\'#4K\',v=\'#4A\',g=\'#4z\',R=\'\',W=\'4p!\',Y=\'4q 2t 4o 4n 1E. 4l 4m?\',b=\'4r 4s 4x 4y 4w 3P 4t 4u 4O&3D; 2u 3j a 3i 3g&3l; 2t 3q 2u 38 39 3a, 3b 3c 3m 3O 1E 3F?\',s=\'3E 3I, 3J 3N 1E. 3M 3L!\',o=0,u=0,n=\'3K.3v\',l=0,Q=t()+\'.2p\';B h(e){q(e)e=e.1J(e.D-15);k n=j.2F(\'3u\');1C(k o=n.D;o--;){k t=N(n[o].1F);q(t)t=t.1J(t.D-15);q(t===e)F!0};F!1};B m(e){q(e)e=e.1J(e.D-15);k t=j.3s;x=0;17(x<t.D){1i=t[x].1G;q(1i)1i=1i.1J(1i.D-15);q(1i===e)F!0;x++};F!1};B t(e){k o=\'\',t=\'2a\';e=e||30;1C(k n=0;n<e;n++)o+=t.U(z.H(z.I()*t.D));F o};B i(o){k i=[\'3y\',\'3H==\',\'3x\',\'3w\',\'2r\',\'3C==\',\'3G=\',\'3r==\',\'3d=\',\'3e==\',\'36==\',\'37==\',\'3f\',\'3o\',\'3p\',\'2r\'],a=[\'2o=\',\'3h==\',\'4v==\',\'59==\',\'61=\',\'5Z\',\'5Y=\',\'5W=\',\'2o=\',\'5X\',\'62==\',\'66\',\'6b==\',\'4P==\',\'69==\',\'67=\'];x=0;1B=[];17(x<o){c=i[z.H(z.I()*i.D)];d=a[z.H(z.I()*a.D)];c=e.V(c);d=e.V(d);k r=z.H(z.I()*2)+1;q(r==1){n=\'//\'+c+\'/\'+d}J{n=\'//\'+c+\'/\'+t(z.H(z.I()*20)+4)+\'.2p\'};1B[x]=1V 1U();1B[x].1W=B(){k e=1;17(e<7){e++}};1B[x].1F=n;x++}};B Z(e){};F{2e:B(e,a){q(5U j.G==\'5M\'){F};k o=\'0.1\',a=y,t=j.1c(\'1s\');t.1k=a;t.8.1f=\'1H\';t.8.11=\'-1h\';t.8.S=\'-1h\';t.8.1v=\'28\';t.8.1d=\'5L\';k d=j.G.2q,r=z.H(d.D/2);q(r>15){k n=j.1c(\'1T\');n.8.1f=\'1H\';n.8.1v=\'1o\';n.8.1d=\'1o\';n.8.S=\'-1h\';n.8.11=\'-1h\';j.G.5I(n,j.G.2q[r]);n.19(t);k i=j.1c(\'1s\');i.1k=\'2x\';i.8.1f=\'1H\';i.8.11=\'-1h\';i.8.S=\'-1h\';j.G.19(i)}J{t.1k=\'2x\';j.G.19(t)};l=5N(B(){q(t){e((t.24==0),o);e((t.1Z==0),o);e((t.1P==\'2s\'),o);e((t.1M==\'2v\'),o);e((t.1N==0),o)}J{e(!0,o)}},1X)},1Q:B(t,u){q((t)&&(o==0)){o=1;C[\'\'+O+\'\'].1K();C[\'\'+O+\'\'].1Q=B(){F}}J{k b=e.V(\'5O\'),l=j.5T(b);q((l)&&(o==0)){q(2D==\'2C\'){k d=\'5R=\';d=e.V(d);q(h(d)){q(l.1A.1z(/\\s/g,\'\').D==0){C[\'\'+O+\'\'].1K()}}};o=1}J{k p=!1;q(o==0){q(2E==\'2C\'){q(!C[\'\'+O+\'\'].2n){k r=[\'5P==\',\'5Q==\',\'6c=\',\'6d=\',\'6B=\'],c=r.D,a=r[z.H(z.I()*c)],n=a;17(a==n){n=r[z.H(z.I()*c)]};a=e.V(a);n=e.V(n);i(z.H(z.I()*2)+1);k m=1V 1U(),s=1V 1U();m.1W=B(){i(z.H(z.I()*2)+1);s.1F=n;i(z.H(z.I()*2)+1)};s.1W=B(){o=1;i(z.H(z.I()*3)+1);C[\'\'+O+\'\'].1K()};m.1F=a;i(z.H(z.I()*3)+1);C[\'\'+O+\'\'].2n=!0};C[\'\'+O+\'\'].1Q=B(){F}}}}}},1K:B(){q(u==1){k M=2y.6s(\'2z\');q(M>0){F!0}J{2y.6g(\'2z\',(z.I()+1)*1X)}};k c=\'6f==\';c=e.V(c);q(!m(c)){k h=j.1c(\'6o\');h.1Y(\'6n\',\'6l\');h.1Y(\'2A\',\'1m/6m\');h.1Y(\'1G\',c);j.2F(\'5H\')[0].19(h)};58(l);j.G.1A=\'\';j.G.8.14+=\'K:1o !13\';j.G.8.14+=\'1u:1o !13\';k R=j.21.1Z||C.2H||j.G.1Z,f=C.56||j.G.24||j.21.24,r=j.1c(\'1s\'),y=t();r.1k=y;r.8.1f=\'2g\';r.8.11=\'0\';r.8.S=\'0\';r.8.1d=R+\'1x\';r.8.1v=f+\'1x\';r.8.2d=p;r.8.29=\'5a\';j.G.19(r);k d=\'<a 1G="5b://5f.5e" 8="E-1a:10.5c;E-1g:1j-1l;16:54;">53 1E 4U 4T 4S 4Q</a>\';d=d.1z(\'4R\',t());d=d.1z(\'4V\',t());k i=j.1c(\'1s\');i.1A=d;i.8.1f=\'1H\';i.8.1t=\'1I\';i.8.11=\'1I\';i.8.1d=\'52\';i.8.1v=\'51\';i.8.29=\'2k\';i.8.1N=\'.6\';i.8.2W=\'35\';i.1e(\'4Y\',B(){n=n.5g(\'\').5h().5z(\'\');C.2B.1G=\'//\'+n});j.1L(y).19(i);k o=j.1c(\'1s\'),L=t();o.1k=L;o.8.1f=\'2g\';o.8.S=f/7+\'1x\';o.8.5C=R-5t+\'1x\';o.8.5m=f/3.5+\'1x\';o.8.2d=\'#5i\';o.8.29=\'2k\';o.8.14+=\'E-1g: "5o 5s", 1r, 1n, 1j-1l !13\';o.8.14+=\'5r-1v: 5p !13\';o.8.14+=\'E-1a: 6a !13\';o.8.14+=\'1m-1p: 1w !13\';o.8.14+=\'1u: 5q !13\';o.8.1P+=\'33\';o.8.2R=\'1I\';o.8.5n=\'1I\';o.8.5j=\'2l\';j.G.19(o);o.8.5l=\'1o 5E 5F -5w 4Z(0,0,0,0.3)\';o.8.1M=\'2w\';k x=30,Z=22,w=18,Q=18;q((C.2H<2P)||(5d.1d<2P)){o.8.2S=\'50%\';o.8.14+=\'E-1a: 55 !13\';o.8.2R=\'6q;\';i.8.2S=\'65%\';k x=22,Z=18,w=12,Q=12};o.1A=\'<2Z 8="16:#6x;E-1a:\'+x+\'1R;16:\'+a+\';E-1g:1r, 1n, 1j-1l;E-1O:6u;K-S:1b;K-1t:1b;1m-1p:1w;">\'+W+\'</2Z><2M 8="E-1a:\'+Z+\'1R;E-1O:5S;E-1g:1r, 1n, 1j-1l;16:\'+a+\';K-S:1b;K-1t:1b;1m-1p:1w;">\'+Y+\'</2M><5J 8=" 1P: 33;K-S: 0.32;K-1t: 0.32;K-11: 23;K-2i: 23; 2m:3k 3z #3A; 1d: 25%;1m-1p:1w;"><p 8="E-1g:1r, 1n, 1j-1l;E-1O:2f;E-1a:\'+w+\'1R;16:\'+a+\';1m-1p:1w;">\'+b+\'</p><p 8="K-S:68;"><1T 3n="T.8.1N=.9;" 3t="T.8.1N=1;"  1k="\'+t()+\'" 8="2W:35;E-1a:\'+Q+\'1R;E-1g:1r, 1n, 1j-1l; E-1O:2f;2m-5A:2l;1u:1b;5y-16:\'+v+\';16:\'+g+\';1u-11:28;1u-2i:28;1d:60%;K:23;K-S:1b;K-1t:1b;" 6e="C.2B.6i();">\'+s+\'</1T></p>\'}}})();2G(B(){q(j.G){j.G.8.1M=\'2w\'};q(j.1L(\'26\')){j.1L(\'26\').8.1M=\'2s\';j.1L(\'26\').8.1P=\'2v\'};2b(\'C[\\\'\\\' + O + \\\'\\\'].2e(C[\\\'\\\' + O + \\\'\\\'].1Q, C[\\\'\\\' + O + \\\'\\\'].5x)\',2c*1X)});',62,410,'||||||||style|||||||||||document|var||||||if|||||||||Math||function|window|length|font|return|body|floor|random|else|margin|||String|qqqQSYIaYTis|fromCharCode|||top|this|charAt|decode||charCodeAt||||left||important|cssText||color|while||appendChild|size|10px|createElement|width|addEventListener|position|family|5000px|thisurl|sans|id|serif|text|geneva|0px|align|128|Helvetica|DIV|bottom|padding|height|center|px|c2|replace|innerHTML|spimg|for|indexOf|AdBlock|src|href|absolute|30px|substr|AmZRcSPLSO|getElementById|visibility|opacity|weight|display|lbMzkwdBWY|pt|mkFZRVdESe|div|Image|new|onerror|1000|setAttribute|clientWidth||documentElement||auto|clientHeight||babasbmsgx|load|60px|zIndex|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789|setTimeout|kxljoobeaT|backgroundColor|bab|300|fixed|c3|right|224|10000|15px|border|ranAlready|ZmF2aWNvbi5pY28|jpg|childNodes|cGFydG5lcmFkcy55c20ueWFob28uY29t|hidden|che|per|none|visible|banner_ad|sessionStorage|babn|type|location|yes|aDefOne|aDefTwo|getElementsByTagName|StfFTpbWRY|innerWidth|attachEvent|onload|onreadystatechange|DOMContentLoaded|h1|complete|removeEventListener|640|isNaN|marginLeft|zoom|catch|doScroll|try|cursor|no|detachEvent|h3|||5em|block|readyState|pointer|YWRzLnlhaG9vLmNvbQ|YWRzLnp5bmdhLmNvbQ|far|funzionare|Hubix|potresti|disattivare|Y2FzLmNsaWNrYWJpbGl0eS5jb20|cHJvbW90ZS5wYWlyLmNvbQ|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|ci|YmFubmVyLmpwZw|ricavare|aiutarci|1px|ograve|il|onmouseover|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YXMuaW5ib3guY29t|spendiamo|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|styleSheets|onmouseout|script|kcolbdakcolb|YWQuZm94bmV0d29ya3MuY29t|anVpY3lhZHMuY29t|YWRuLmViYXkuY29t|solid|CCC|event|YS5saXZlc3BvcnRtZWRpYS5ldQ|agrave|Ho|perfavore|YWdvZGEubmV0L2Jhbm5lcnM|YWQubWFpbC5ydQ|capito|ho|moc|entrare|Fammi|disabilitato|tuo|solo|RGl2QWRC|RGl2QWRD|RGl2QWRB|RGl2QWQz|RGl2QWQx|RGl2QWQy|QWRJbWFnZQ|QWREaXY|YmFubmVyX2Fk|YWRCYW5uZXI|YWRUZWFzZXI|Z2xpbmtzd3JhcHBlcg|QWRCb3gxNjA|QWRDb250YWluZXI|RGl2QWQ|QWRzX2dvb2dsZV8wNA|QWRGcmFtZTE|QWRGcmFtZTI|QWRBcmVh|QWQ3Mjh4OTA|QWQzMDB4MTQ1|QWQzMDB4MjUw|QWRGcmFtZTM|QWRGcmFtZTQ|QWRzX2dvb2dsZV8wMg|QWRzX2dvb2dsZV8wMw|QWRzX2dvb2dsZV8wMQ|QWRMYXllcjI|QWRMYXllcjE|YWRiYW5uZXI|YWRBZA|Che|succede|usando|stai|Benvenuto|Sembra|Sul|nostro|una|piccola|NDY4eDYwLmpwZw|abbiamo|sito|web|FFFFFF|adb8ff|YmFubmVyaWQ|YWRzbG90|YWRzZXJ2ZXI|YWRfY2hhbm5lbA|YmFubmVyYWQ|IGFkX2JveA|cG9wdXBhZA|YWRzZW5zZQ|EEEEEE|777777|c3BvbnNvcmVkX2xpbms|b3V0YnJhaW4tcGFpZA|Z29vZ2xlX2Fk|pubblicit|bGFyZ2VfYmFubmVyLmdpZg|revenue|FILLVECTID1|lost|recapture|and|FILLVECTID2|Za|191|click|rgba||40px|160px|Block|black|18pt|innerHeight|encode|clearInterval|NzIweDkwLmpwZw|9999|http|5pt|screen|com|blockadblock|split|reverse|fff|borderRadius|z0|boxShadow|minHeight|marginRight|Arial|normal|12px|line|Black|120|127|c1|8px|TFYRPbIUid|background|join|radius|192|minWidth|2048|14px|24px|YWQtbGVmdA|head|insertBefore|hr|YWQtY29udGFpbmVy|468px|undefined|setInterval|aW5zLmFkc2J5Z29vZ2xl|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|500|querySelector|typeof|YWQtY29udGFpbmVyLTE|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWQtbGFyZ2UucG5n|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn||c2t5c2NyYXBlci5qcGc|c3F1YXJlLWFkLnBuZw||||ZmF2aWNvbjEuaWNv|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|35px|d2lkZV9za3lzY3JhcGVyLmpwZw|16pt|YmFubmVyX2FkLmdpZg|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|onclick|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|setItem|null|reload|YWQtaGVhZGVy|YWQtZnJhbWU|stylesheet|css|rel|link|YWRCYW5uZXJXcmFw|45px|YWQtaW1n|getItem|YWQtbGI|200|YWQtZm9vdGVy|YWQtY29udGFpbmVyLTI|999|YWQtaW5uZXI|YWQtbGFiZWw|frameElement|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28'.split('|'),0,{}))
 
</script>

