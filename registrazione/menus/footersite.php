<center>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Hubix Home -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-1704945880512542"
     data-ad-slot="5137768512"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>
<br /><br />
<style class="cp-pen-styles">body {
  font-family: Roboto;
}
.player {
  position: relative;
  background-color: #ffffff;
  width: 100%;
  height: 125px;
  border-radius: 3px;
  border-bottom: 6px solid #1E88E5;
  box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.5);
  z-index: 1;
}
.player:hover .mask {
  background-color: rgba(255, 255, 255, 0.1);
  -webkit-transition: all 1s;
  transition: all 1s;
}
.player .like {
  position: absolute;
  width: 35px;
  height: 35px;
  top: 15px;
  right: 20px;
  z-index: 15;
  font-size: 1.5em;
  vertical-align: middle;
  line-height: 38px;
  color: #f2f2f2;
  border-radius: 50%;
  text-align: center;
  cursor: pointer;
}
.player .icon-heart {
  display: block;
}
.player .mask {
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: 2;
  -webkit-transition: all 1s;
  transition: all 1s;
}
.player-info {
  position: absolute;
  left: 0;
  bottom: 0;
  z-index: 4;
  list-style: none;
  color: #262626;
  -webkit-transform: scale(1);
          transform: scale(1);
}
.player-info li {
  margin-bottom: 7px;
}
.player-info li:nth-child(1) {
  font-size: 1.5em;
}
.player-info li:nth-child(2) {
  font-size: 1.2em;
}
.player-info li:nth-child(3) {
  font-size: .9em;
}
.player .info-two {
  left: auto;
  right: 4.5%;
  z-index: 1;
  color: #f2f2f2;
}
.player .info-two li:nth-child(2) {
  float: right;
}
.player .info-two li:nth-child(3) {
  display: inline-block;
  float: right;
  clear: both;
}
.player #play-button {
  box-sizing: border-box;
  position: absolute;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: #1E88E5;
  box-shadow: 0 8px 25px 6px rgba(0, 0, 0, 0.5);
  right: 40px;
  bottom: 90px;
  z-index: 5;
  cursor: pointer;
  -webkit-transition: all 70ms;
  transition: all 70ms;
  border: none;
}
.player #play-button:hover {
  width: 70px;
  height: 70px;
  box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.5);
  right: 45px;
  bottom: 95px;
  -webkit-transition: all 70ms;
  transition: all 70ms;
}
.player #play-button .icon-play {
  position: absolute;
  font-size: 1.5em;
  left: 52%;
  top: 50%;
  -webkit-transform: translate(-48%, -50%);
          transform: translate(-48%, -50%);
  -webkit-transition: all 70ms;
  transition: all 70ms;
  color: #ffffff;
}
.player #play-button:hover .icon-play {
  font-size: 1.2em;
  -webkit-transition: all 70ms;
  transition: all 70ms;
}
.player #play-button .icon-cancel {
  position: absolute;
  font-size: 1.6em;
  left: 50%;
  top: 49%;
  -webkit-transform: translate(-50%, -51%);
          transform: translate(-50%, -51%);
  color: #ffffff;
}
.control-row {
  position: absolute;
  bottom: -1px;
  width: 100%;
  height: 130px;
  background-color: #ffffff;
  overflow: hidden;
  z-index: 3;
}
.control-row #pause-button {
  box-sizing: border-box;
  position: absolute;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: #f2f2f2;
  left: 40px;
  bottom: 25px;
  z-index: 5;
  cursor: pointer;
  border: none;
  -webkit-transform: scale(0);
          transform: scale(0);
  display: none;
  -webkit-animation: scale-animation 0.4s;
          animation: scale-animation 0.4s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-delay: .3s;
          animation-delay: .3s;
}
.control-row #pause-button .icon-pause {
  position: absolute;
  font-size: 1.5em;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transition: all .1s;
  transition: all .1s;
  color: #424242;
}
.control-row #pause-button .icon-play {
  position: absolute;
  font-size: 1.5em;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transition: all .1s;
  transition: all .1s;
  color: #424242;
}
.control-row .seek-field {
  bottom: 67px;
  left: 148px;
  position: absolute;
  width: 170px;
  z-index: 5;
  -webkit-transform: scale(0);
          transform: scale(0);
  display: none;
  -webkit-animation: scale-animation 0.4s;
          animation: scale-animation 0.4s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-delay: .3s;
          animation-delay: .3s;
}
.control-row .volume-field {
  bottom: 67px;
  right: 127px;
  position: absolute;
  width: 50px;
  z-index: 5;
  -webkit-transform: scale(0);
          transform: scale(0);
  display: none;
  -webkit-animation: scale-animation 0.4s;
          animation: scale-animation 0.4s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-delay: .3s;
          animation-delay: .3s;
}
.control-row .volume-icon {
  width: 20px;
  height: 20px;
  position: absolute;
  border-radius: 50%;
  bottom: 58px;
  right: 185px;
  z-index: 5;
  font-size: 1.2em;
  display: none;
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-animation: scale-animation 0.4s;
          animation: scale-animation 0.4s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-delay: .3s;
          animation-delay: .3s;
}
.control-row .volume-icon .icon-volume-up {
  color: #424242;
}
.like-active {
  color: #ef5350;
  -webkit-animation: scale-animation 0.4s;
          animation: scale-animation 0.4s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}
@-webkit-keyframes scale-animation {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes scale-animation {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  50% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
.waves-animation-one {
  position: absolute;
  width: 100%;
  height: 80px;
  border-radius: 50%;
  background-color: #1E88E5;
  z-index: 3;
  left: 42.5%;
  bottom: 20%;
  -webkit-transform: scale(0);
          transform: scale(0);
  -webkit-animation: waves-animation-one 0.25s;
          animation: waves-animation-one 0.25s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-delay: .3s;
          animation-delay: .3s;
  display: none;
}
@-webkit-keyframes waves-animation-one {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  99% {
    -webkit-transform: scale(7.8);
            transform: scale(7.8);
  }
  100% {
    -webkit-transform: scale(7.8);
            transform: scale(7.8);
  }
}
@keyframes waves-animation-one {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  99% {
    -webkit-transform: scale(7.8);
            transform: scale(7.8);
  }
  100% {
    -webkit-transform: scale(7.8);
            transform: scale(7.8);
  }
}
.waves-animation-two {
  position: absolute;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: #5c6bc0;
  z-index: 3;
  right: 40px;
  bottom: 35px;
  -webkit-transform: scale(7.8);
          transform: scale(7.8);
  display: none;
  -webkit-animation: waves-animation-two 0.2s;
          animation: waves-animation-two 0.2s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}
@-webkit-keyframes waves-animation-two {
  to {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
}
@keyframes waves-animation-two {
  to {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
}
.info-active {
  -webkit-animation: info-active-animation 3s;
          animation: info-active-animation 3s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-delay: .37s;
          animation-delay: .37s;
}
@-webkit-keyframes info-active-animation {
  to {
    bottom: 56.5%;
  }
}
@keyframes info-active-animation {
  to {
    bottom: 56.5%;
  }
}
.play-active {
  -webkit-animation: play-animation 0.3s;
          animation: play-animation 0.3s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}
@-webkit-keyframes play-animation {
  0% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
  }
  98% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    -webkit-transform: translate(-200px, 65px);
            transform: translate(-200px, 65px);
  }
  99% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    -webkit-transform: translate(-200px, 65px) scale(0);
            transform: translate(-200px, 65px) scale(0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    -webkit-transform: translate(0, 65px) scale(1);
            transform: translate(0, 65px) scale(1);
  }
}
@keyframes play-animation {
  0% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
  }
  98% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    -webkit-transform: translate(-200px, 65px);
            transform: translate(-200px, 65px);
  }
  99% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    -webkit-transform: translate(-200px, 65px) scale(0);
            transform: translate(-200px, 65px) scale(0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
    -webkit-transform: translate(0, 65px) scale(1);
            transform: translate(0, 65px) scale(1);
  }
}
.play-inactive {
  -webkit-animation: play-inactive 1s;
          animation: play-inactive 1s;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
}
@-webkit-keyframes play-inactive {
  from {
    -webkit-transform: translate(0, 65px);
            transform: translate(0, 65px);
  }
}
@keyframes play-inactive {
  from {
    -webkit-transform: translate(0, 65px);
            transform: translate(0, 65px);
  }
}
input[type="range"] {
  -webkit-appearance: none;
  width: 100%;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
input[type="range"]:focus {
  outline: none;
}
input[type="range"] + .thumb {
  display: none;
}
input[type="range"]::-webkit-slider-runnable-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 0px 0px 0px transparent, 0px 0px 0px transparent;
  background: #f2f2f2;
  border-radius: 0;
  border: 0px solid #000101;
}
input[type="range"]::-webkit-slider-thumb {
  box-shadow: 0px 0px 0px transparent, 0px 0px 0px transparent;
  border: 0px solid transparent;
  height: 18px;
  width: 18px;
  border-radius: 50%;
  background: #009688;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -7px;
}
input[type="range"]:focus::-webkit-slider-runnable-track {
  background: #f2f2f2;
}
input[type="range"]::-moz-range-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 0px 0px 0px transparent, 0px 0px 0px transparent;
  background: #f2f2f2;
  border-radius: 0;
  border: 0px solid #000101;
}
input[type="range"]::-moz-range-thumb {
  box-shadow: 0px 0px 0px transparent, 0px 0px 0px transparent;
  border: 0px solid transparent;
  height: 18px;
  width: 18px;
  border-radius: 50%;
  background: #009688;
  cursor: pointer;
}
input[type="range"]::-ms-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  border-width: 39px 0;
  color: transparent;
  padding-top: 5px;
}
input[type="range"]::-ms-fill-lower {
  background: #f2f2f2;
  border: 0px solid transparent;
  border-radius: 0;
  box-shadow: 0px 0px 0px transparent, 0px 0px 0px transparent;
}
input[type="range"]::-ms-fill-upper {
  background: #f2f2f2;
  border: 0px solid transparent;
  border-radius: 0x;
  box-shadow: 0px 0px 0px transparent, 0px 0px 0px transparent;
}
input[type="range"]::-ms-thumb {
  box-shadow: 0px 0px 0px transparent, 0px 0px 0px transparent;
  border: 0px solid transparent;
  height: 18px;
  width: 18px;
  border-radius: 50%;
  background: #009688;
  cursor: pointer;
  margin-top: 1px;
}
input[type="range"]::-ms-tooltip {
  display: none;
}
input[type="range"]::-ms-ticks {
  display: none;
}
input[type="range"]:focus::-ms-fill-lower {
  background: #f2f2f2;
}
input[type="range"]:focus::-ms-fill-upper {
  background: #f2f2f2;
}
</style>
	<script>
function Ascoltatori() 
{ 
var xmlHttp; 
try 
  { 
  // Firefox, Opera 8.0+, Safari 
  xmlHttp=new XMLHttpRequest(); 
  } 
catch (e) 
  { 
  // Internet Explorer 
  try 
    { 
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); 
    } 
  catch (e) 
    { 
    try 
      { 
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); 
      } 
    catch (e) 
      { 
      alert("Il tuo  browser non supporta a pieno questa funzionalità!"); 
      return false; 
      } 
    } 
  } 
  xmlHttp.onreadystatechange=function() 
    { 
    if(xmlHttp.readyState==4) 
      { 
      document.getElementById("aggascoltatori").innerHTML=xmlHttp.responseText; 
      setTimeout('Ascoltatori()', 3000); //tempo di refresh generale  
      } 
    } 
  xmlHttp.open("GET","../../giovanni/player/ascoltatori.php",true); 
  xmlHttp.send(null); 
  } 
  setTimeout('Ascoltatori()', 3000); 
</script>
<script>
function Canzone() 
{ 
var xmlHttp; 
try 
  { 
  // Firefox, Opera 8.0+, Safari 
  xmlHttp=new XMLHttpRequest(); 
  } 
catch (e) 
  { 
  // Internet Explorer 
  try 
    { 
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); 
    } 
  catch (e) 
    { 
    try 
      { 
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP"); 
      } 
    catch (e) 
      { 
      alert("Il tuo  browser non supporta a pieno questa funzionalità!"); 
      return false; 
      } 
    } 
  } 
  xmlHttp.onreadystatechange=function() 
    { 
    if(xmlHttp.readyState==4) 
      { 
      document.getElementById("aggcanzone").innerHTML=xmlHttp.responseText; 
      setTimeout('Canzone()', 3000); //tempo di refresh generale  
      } 
    } 
  xmlHttp.open("GET","../../giovanni/player/canzone.php",true); 
  xmlHttp.send(null); 
  } 
  setTimeout('Canzone()', 3000); 
</script>
  <div class="player">
    <div class="like waves-effect waves-light">
    </div>
    <div class="mask"></div>
    <ul class="player-info info-one">
      <li>Royal Radio</li>
      <li><div id="aggcanzone"></div></li>
      <li><div id="aggascoltatori"></div>RoyalRadio.it</li>
    </ul>
    <ul class="player-info info-two">
      <li>RoyalRadio.it</li>
      <li>Hubix Hotel</li>
    </ul>
    <div id="play-button" class="unchecked">
      <i class="icon icon-play"></i>
    </div>
    <div class="control-row">
      <div class="waves-animation-one"></div>
      <div class="waves-animation-two"></div>
      <div id="pause-button">
        <i class="icon"></i>
      </div>
      <div class="volume-icon">
        <i class="icon-volume-up"></i>
      </div>
      <div class="volume-field">
        <input type="range" min="0" max="100" value="100" step="1" oninput="audio.volume = this.value/100" onchange="this.oninput()">
      </div>
    </div>
  </div>
<audio id="audio-player" ontimeupdate="SeekBar()" ondurationchange="CreateSeekBar()" preload="auto" loop autoplay>
  <source src="http://streaming.radionomy.com/RoyalRadioOfficial" type="audio/ogg">
  <source src="http://streaming.radionomy.com/RoyalRadioOfficial" type="audio/mpeg">
</audio>
<script src='//assets.codepen.io/assets/common/stopExecutionOnTimeout.js?t=1'></script><script src='https://code.jquery.com/jquery-2.1.1.min.js'></script><script src='https://www.googledrive.com/host/0B8ExDrngxZU8YUg1NWFNMzlrMkk'></script>
<script>var audio = document.getElementById('audio-player');
$(document).ready(function () {
    $('#play-button').click(function () {
        if ($(this).hasClass('unchecked')) {
            $(this).addClass('play-active').removeClass('play-inactive').removeClass('unchecked');
            $('.info-two').addClass('info-active');
            $('#pause-button').addClass('scale-animation-active');
            $('.waves-animation-one, #pause-button, .seek-field, .volume-icon, .volume-field, .info-two').show();
            $('.waves-animation-two').hide();
            $('#pause-button').children('.icon').addClass('icon-pause').removeClass('icon-play');
            setTimeout(function () {
                $('.info-one').hide();
            }, 400);
            audio.play();
            audio.currentTime = 0;
        } else {
            $(this).removeClass('play-active').addClass('play-inactive').addClass('unchecked');
            $('#pause-button').children('.icon').addClass('icon-pause').removeClass('icon-play');
            $('.info-two').removeClass('info-active');
            $('.waves-animation-one, #pause-button, .seek-field, .volume-icon, .volume-field, .info-two').hide();
            $('.waves-animation-two').show();
            setTimeout(function () {
                $('.info-one').show();
            }, 150);
            audio.pause();
            audio.currentTime = 0;
        }
    });
    $('#pause-button').click(function () {
        $(this).children('.icon').toggleClass('icon-pause').toggleClass('icon-play');
        if (audio.paused) {
            audio.play();
        } else {
            audio.pause();
        }
    });
    $('#play-button').click(function () {
        setTimeout(function () {
            $('#play-button').children('.icon').toggleClass('icon-play').toggleClass('icon-cancel');
        }, 350);
    });
    $('.like').click(function () {
        $('.icon-heart').toggleClass('like-active');
    });
});
function CreateSeekBar() {
    var seekbar = document.getElementById('audioSeekBar');
    seekbar.min = 0;
    seekbar.max = audio.duration;
    seekbar.value = 0;
}
function EndofAudio() {
    document.getElementById('audioSeekBar').value = 0;
}
function audioSeekBar() {
    var seekbar = document.getElementById('audioSeekBar');
    audio.currentTime = seekbar.value;
}
function SeekBar() {
    var seekbar = document.getElementById('audioSeekBar');
    seekbar.value = audio.currentTime;
}
audio.addEventListener('timeupdate', function () {
    var duration = document.getElementById('duration');
    var s = parseInt(audio.currentTime % 60);
    var m = parseInt(audio.currentTime / 60 % 60);
    duration.innerHTML = m + ':' + s;
}, false);
Waves.init();
Waves.attach('#play-button', [
    'waves-button',
    'waves-float'
]);
Waves.attach('#pause-button', [
    'waves-button',
    'waves-float'
]);
//# sourceURL=pen.js
</script>
<div id="box">
<footer class="page-footer white">
	<div class="container1">
		<div class="row1">
			<div class="col l6 s12">
				<h5 class="white-text"><b>Hubix Hotel</b></h5>
				<p class="white-textgio text-lighten-4">Hubix Hotel non e' affiliato, riconosciuto, sponsorizzato o approvato da Sulake Corporation Oy o dalle societa' affiliate.</p>
				<p class="white-textgio text-lighten-4">Tutti i diritti riservati.</p>
			</div>
			<div class="col l4 offset-l2 s12">
				<h5 class="white-text"><b><a href="home.php"><center><img src="http://habbofont.com/font/wiebelgiebel/hUBIX.gif"></a></b></h5></center>
				<p class="white-textgio text-lighten-4"><a href="staff" target="_blank">Staff</a> / <a href="terminiecondizioni" target="_blank"> Termini e Condizioni di utilizzo</a> / <a href="safety" target="_blank"> Safety</a></p>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container1">
			<font color="white"><b style=" color: #fff; ">HubixCMS </b><b style=" color: #A11C00; "></b> v4 <b style=" color: #A11C00; text-decoretion: overline;">BETA</b> | Made with <i class="fa fa-heart-o"></i> by <strong>JAlf</strong></font>
			<div class="white-text text-lighten-4 right">&copy Hubix Hotel 2012 - 2016</div>
		</div>
	</div>
</footer>
</div>