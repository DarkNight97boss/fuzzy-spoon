<div id="header-content">
<div class="container_24">
<div class="grid_24">
<a href="<?php print URL; ?>">
<div class="habbologo"></div>
</a>
<div class="onlineBox">
<div class="arrow"></div>
<b><?php print $online; ?></b> Utente connessi
</div>

<div class="hotel">
    
</div>
<?php if(empty($user)) { ?>
<?php if($pageid == 'index') { ?>
<div class="bg_login_adow">
    
</div>

<form method="post" style="    margin: 0;">
<label for="administrationInHeader" style="
    position:absolute;
    margin-top: 11px;
    color: #fff;
    right: 400px;
    ">Utente</label>
<input name="username" type="text" id="administrationInHeader" placeholder="Email" style="
    padding: 0px 12px;
    height: 33px;
    line-height: 0;
    width: 182px;
    right: 301px;
    border: 2px solid #41798B;
    border-radius: 4px;
    line-height: 18px;
	font-size: 12px;
	margin-top: 31px;
" autofocus required><label for="password" style="
    position:absolute;
    margin-top: 11px;
    color: #fff;
    right: 204px;
    ">Password</label><input name="password" type="password" id="administrationInHeader" placeholder="Password" style="
    padding: 0px 12px;
    height: 33px;
    line-height: 0;
    width: 180px;
    right: 111px;
    border: 2px solid #41798B;
    border-radius: 4px;
    line-height: 18px;
	font-size: 12px;
	margin-top: 31px;
" required><input id="active_box" type="checkbox" value="1" checked="1" style="
    position: absolute;
    margin-top: 68px;
    color: #FFCC00;
    right: 464px;
    font-size: 11px;
    height: 11px;
"><label for="active_box" style="
    position: absolute;
    margin-top: 67px;
    color: #FFCC00;
    right: 341px;
    font-size: 11px;
">Rimani connesso</label><a href="#" style="
    position:absolute;
    margin-top: 65px;
    color: #FFCC00;
    right: 184px;
    font-size: 11px;
    ">Password dimenticata?</a><button type="submit" class="button raised green" id="checkInHeader" style="
    padding: 0px 28px;
    width: auto;
    line-height: 0px;
    border-radius: 3px;
    margin: 31px -28px 0px;
    font-size: 16px;
    border: 1px solid #069;
    height: 33px;
    background-color: #419ACC;
">Accedi</button>
</form>	
<?php } ?>			
<?php } else { ?> 
<a href="<?php print URL; ?>/client" target="_blank" class="button raised green" id="checkInHeader">
<div class="center" style="line-height: 32px;" fit="">Accedi</div>
<paper-ripple fit=""></paper-ripple>
</a>
<?php } ?>  
<style>
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}
#header-content {
  background: #435363;
  -webkit-animation: bg 5s infinite alternate;
  -moz-animation: bg 5s infinite alternate;
  -o-animation: bg 5s infinite alternate;
  animation: bg 5s infinite alternate;
}
#header-content ul ul {
  background: #515151;
  -webkit-animation: bg 5s infinite alternate;
  -moz-animation: bg 5s infinite alternate;
  -o-animation: bg 5s infinite alternate;
  animation: bg 5s infinite alternate;
}
@-webkit-keyframes bg {
  0% { background: #069; }
  100% { background: #046380; }
}
@-moz-keyframes bg {
  0% { background: #069; }
  100% { background: #046380; }
}
@-o-keyframes bg {
  0% { background: #069; }
  100% { background: #046380; }
}
@keyframes bg {
  0% { background: #069; }
  100% { background: #046380; }
}
</style> 
<ul>
                        <li class="selected" style="position:relative">
                        <?php if(empty($user)) { ?>
                            <a href="<?php print URL; ?>"> 
                            <?php if($pageid == 'index') { ?>                               
                            <i class="icon fa fa-user"></i>Benvenut@  
                            <?php } else { ?>
                            <i class="icon fa fa-user"></i>Registrarse
                            <?php } ?>                                                         
                            </a>
                            <?php } else { ?>
                            <a style="cursor:pointer;" href="<?php print URL; ?>">
                                <i class="icon fa fa-user"></i>
                                <?php print $user['username']; ?>
                                <i class="iconRight fa fa-angle-down"></i>
                            </a>
                            <ul style="position:relative">
                                <li>
                                    <a href="<?php print URL; ?>/profile">Preferencias</a>
                                    <a href="<?php print URL; ?>/account/logout">Desconectar</a>
                                </li>
                            </ul>
                            <?php } ?>
						</li>
                        <li>
                            <a style="cursor:pointer;">
                                <i class="icon fa fa-users"></i>
                                Community
                                <i class="iconRight fa fa-angle-down"></i>
                            </a>
                            <ul style="position:relative">
                                <li>
                                    <a href="<?php print URL; ?>/news">Notizie</a>
									<a href="<?php print URL; ?>/staff">Staff</a>
                                </li>
                            </ul>
                        </li>
                        <<li>
                            <a href="#">
                                <i class="icon fa fa-shopping-cart"></i>
                                Shop
                                <i class="iconRight fa fa-angle-down"></i>
                            </a>
                            <ul style="position:relative">
                                <li>
                                    <a href="<?php print URL; ?>/boutique">Compra diamanti</a>
									<a href="<?php print URL; ?>/classic">Compra VIP</a>
									<a href="<?php print URL; ?>/premium">Compra VIP premium</a>
									<a href="<?php print URL; ?>/badges">Compra badge </a>
                                </li>
                            </ul>
                        </li>

                        <?php if($user['rank'] >= '7') { ?>
                        <li>
                        <a style="cursor:pointer;" href="<?php print URL; ?>/admin/">
                                <i class="icon fa fa-gear"></i>
                                Administracion ACP
                            </a>
                        </li>
                        <?php } ?>
												                    </ul>
                </div>
            </div>
        </div>