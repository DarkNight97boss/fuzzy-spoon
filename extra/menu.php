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
					
?>
<?php /*<title><?php echo SHORTNAME; ?> - <?php echo $page; ?></title>

<div class="navbar navbar-default navbar-static-top" data-z="0" data-z="0" data-animated role="navigation" style="position: fixed; margin-top: -0px; width: 100%;">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only"><?php echo SHORTNAME; ?></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<div class="navbar-brand navbar-brand-logo">
<a href="" class="svg" style="width: 188px;height: 34px;background-image: url(http://habbofont.com/font/orenje/<?php echo SHORTNAME; ?>.gif);"> </a>
</div>
</div>
 
<div class="collapse navbar-collapse" id="main-nav" style=" text-transform: uppercase; ">
<ul class="nav navbar-nav navbar-nav-margin-left">
<li> <a href="home">
<?php echo $myusername; ?>
</a> </li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Community <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="community">Community</a> </li>

<li><a href="staff">Staff</a> </li>

<li><a href="staff2">Altri Staff</a> </li>

</ul>
</li>
<li> <a href="news">
News
</a> </li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Security <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="safety">Siurezza</a> </li>

</ul>
</li>
<?php if($user->Get('rank') >= RANKMIN){ ?><li> <a href="/hk">
<font style="color:#FF0000"><b>HK</B></font></a></li><?php } ?>
</ul>
<div class="navbar-right">
<ul class="nav navbar-nav navbar-nav-bordered navbar-nav-margin-right">
 
<li class="dropdown user">
<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left m-t-n-xs m-r-xs" style="width: 32px;height: 32px;overflow: hidden;border: 1px solid #4FB5D0;border-radius: 100%;margin-top: 10px;margin-right: 07px;">
<img alt="<?php echo $myusername; ?>" src="<?php echo AVATARIMAGE . $mylook; ?>&amp;direction=3&amp;head_direction=3&amp;gesture=sml&amp;size=b" style="margin-top: -31px;margin-left: -18px;">
</span> <?php echo $myusername; ?> <b class="caret">
</b> </a>
<ul class="dropdown-menu" role="menu">
<li><a class="dropdown-toggle" href="impostazioni"><i class="fa fa fa-cogs"></i> Impostazioni</a> </li>
<li><a class="dropdown-toggle" data-toggle="modal" data-target=".bs-example-modal-sm" href="#"><i class="fa fa-sign-out"></i> Esci</a> </li>
</ul>
</li>
</ul> <a href="/client" target="_blank" class="navbar-btn btn btn-success">Entra in <?php echo SHORTNAME; ?> </a>
<a href="online.php" id="on" data-toggle="tooltip" data-placement="right" title="onlines" class="btn btn-default btn-stroke"><?php echo $user->GetOns(); ?> utenti online</a>
</div>
</div>
</div>
</div>
 
<div class="modal fade bs-example-modal-sm" style="padding-top: 15%;" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog ">
<div class="modal-content">
<div class="modal-header"><h4 style=" text-transform: uppercase; "><i class="fa fa-lock"></i> &iquest;Desea salir de <?php echo SHORTNAME; ?>?</h4></div>
<div class="modal-body"><i class="fa fa-question-circle"></i> &iquest;De verdad quiere salir de <?php echo SHORTNAME; ?> ?. Vuelva pronto</div>
<div class="modal-footer"><a href="logout" class="btn btn-danger btn-block">Esci</a></div>
</div>
</div>
</div>
<br /><br /><br /><br /> */?>