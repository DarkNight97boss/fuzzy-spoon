<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Habbo Material</title>
        
        <link rel="import" href="https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html">
        <link type="text/css" href="web/css/material.css" rel="stylesheet">
        
        <script src="web/js/jquery.js"></script>
        <script type="text/javascript" src="web/js/smoothscroll.js"></script>
    </head>
    
    <body>
    	<div id="header-content">
            <div class="container_24">
                <div class="grid_24">
                    <a href="">
                        <div class="habbologo"></div>
                    </a>
                    <div class="onlineBox">
                        <div class="arrow"></div>
                        <b>1337</b> Habbos online
                    </div>
                    <div class="hotel"></div>
                    <a href="" target="_blank" class="button raised red" id="administrationInHeader">
                        <div class="center" fit>Administration</div>
                        <paper-ripple fit></paper-ripple>
                    </a>
                    <a href="" target="_blank" class="button raised green" id="checkInHeader">
                        <div class="center" fit>Ins Hotel einchecken</div>
                        <paper-ripple fit></paper-ripple>
                    </a>
                    <ul>
                        <li class="selected">
                            <a href="">
                                <i class="icon fa fa-user"></i>
                                Sonay
                                <i class="iconRight fa fa-angle-down"></i>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="icon fa fa-users"></i>
                                Community
                                <i class="iconRight fa fa-angle-down"></i>
                            </a>
                            <!--<ul style="position:relative">
                                <li>
                                    <a href="">Management</a>
                                </li>
                            </ul>-->
                        </li>
                        <li>
                            <a href="">
                                <i class="icon fa fa-shopping-cart"></i>
                                Habbo-Shop
                                <i class="iconRight fa fa-angle-down"></i>
                            </a>
                            <!--<ul style="position:relative">
                                <li>
                                    <a href="">Taler</a>
                                </li>
                            </ul>-->
                        </li>
                        <li>
                            <a href="ts3server://ts.habbo.so?nickname=USERNAME">
                                <i class="icon fa fa-microphone"></i>
                                Teamspeak³
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container_24">
            <div class="grid_15">
                <div id="contentBox" style="background:url(web/img/me/view_generic.png) center center;height:140px;padding:0;">
                    <div class="overlay">
                        <div style="background-image:url(https://www.habbo.de/habbo-imaging/avatarimage?figure=wa-3211-63-1408.fa-1201-63.hr-3278-1395-40.ca-3187-73.hd-190-1391.sh-295-1408.lg-3023-1429.ch-3030-1408&direction=2&head_direction=3&action=wav&size=l&gesture=sml);" class="profile-header__avatar__image"></div>
                        <div class="profile-header__avatar__position">
                            <span style="font-size:25px;">Willkommen Sonay!</span>
                            <div class="motto"><b>Motto:</b> ,,Zeit ist nur eine Illusion!"</div>
                            <div class="lastLogin"><b>Letzter Login:</b> 14.02.2016 19:03 Uhr"</div>
                            <div class="creditsAvailable">
                                <div class="credits">
                                    <div class="creditsIcon"></div>
                                    1337
                                </div>
                                <div class="duckets">
                                    <div class="ducketsIcon"></div>
                                    1337
                                </div>
                                <div class="diamonds">
                                    <div class="diamondsIcon"></div>
                                    1337
                                </div>
                            </div>
                        </div>
                        <a href="" target="_blank" class="button raised green" id="profileCheckIn">
                            <div class="center" fit>Einchecken</div>
                            <paper-ripple fit></paper-ripple>
                        </a>
                    </div>
                </div>
                
                <link type="text/css" href="web/css/newsslider.css" rel="stylesheet">
                <script type="text/javascript" src="web/js/promo.js"></script>
                <div class="news" style="margin-bottom:10px">
                    <div id="promo-box">
                        <div id="promo-bullets"></div>
                        <div class="promo-container" style="background-image:url(https://habboo-a.akamaihd.net/web_images/habbo-web-articles/fansite_icehabbo.png);">
                            <div class="promo-content-container">
                                <div class="promo-content">
                                    <div class="title">Willkommen im Habbo.so</div>
                                    <div class="body">Herzlich Willkommen</div>
                                </div>
                            </div>
                            <div class="promo-link-container">
                                <a href="" target="_blank" class="button raised green" id="newsButton">
                                    <div class="center" fit>Weiterlesen &raquo;</div>
                                    <paper-ripple fit></paper-ripple>
                                </a>
                            </div>
                        </div>
                        <div class="promo-container" style="background-image:url(https://habboo-a.akamaihd.net/web_images/habbo-web-articles/fansite_icehabbo.png);display:none;">
                            <div class="promo-content-container">
                                <div class="promo-content">
                                    <div class="title">Lol</div>
                                    <div class="body">Cool</div>
                                </div>
                            </div>
                            <div class="promo-link-container">
                                <a href="" target="_blank" class="button raised green" id="newsButton">
                                    <div class="center" fit>Weiterlesen &raquo;</div>
                                    <paper-ripple fit></paper-ripple>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contentBox">
                    <div class="title red">
                        Hotcampaigns
                    </div>
                </div>
            </div>
            <div class="grid_9">
                <div id="contentBox" class="activity">
                    <div class="head">
                        <div class="badgeImage fansite"></div>
                        Offizielle Info
                        <br>
                        <span class="date">Hotelmanagement</span>
                    </div>
                    <div class="text">
                        <p>Das <b>HabboSO</b> ist nun für alle Besucher freigegeben. <b>Die Registration wurde aktiviert</b> und steht nun als Funktion auf dem Index zur Verfügung.</p>
                        <p></p>
                        <p>Natürlich haben wir die wichtigste Funktion für die Kommunikation nicht vergessen, die News. </p>
                        <p><b>Das Newsfeature wird aktuell noch angepasst und optimiert.</b> Sobald die Arbeiten abgeschlossen sind schalten wir dieses Feature auf.</p>
                        <p></p>
                        <p><b>Wir wünschen euch einen angenehmen Aufenthalt im HabboSO.</b></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>