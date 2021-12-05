{{-- INICIO barra --}}
<div id="sidebar" class="sidebar">

<ul class="menu">
<li><a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a><a href="/"><h3>❄ 𝕄𝕖𝕟𝕦́ ❄</h3></a></li>

<hr>
<li><h3>✾&nbspMᴏᴠɪᴍɪᴇɴᴛᴏ&nbsp✾</h3></li>

<hr>
<li><a href="mru">⭑ MRU ⭑</a></li>

<hr>

<li><a href="mrua">⭑ MRUA ⭑</a></li>

<hr>

<li><a href="mcu">⭑ MCU ⭑</a></li>

<hr>

<li><a href="mcua">⭑ MCUA ⭑</a></li>

<hr>

<li><h3>✾&nbspCᴀɪ́ᴅᴀ&nbsp✾</h3></li>

<hr>
<li><a href="caidalib">⭑ Caída libre ⭑</a></li>

<hr>

<li><h3>✾&nbspTɪʀᴏs&nbsp✾</h3></li>

<hr>
<li><a href="tirop">⭑ Tiro parabólico ⭑</a></li>

<hr>

<li><a href="tirovertical">⭑ Tiro vertical ⭑</a></li>

<hr>

<li><h3>✾&nbspGʀᴀᴠɪᴛᴀᴄɪᴏ́ɴ&nbsp✾</h3></li>

<hr>
<li><a href="gravitacion">⭑ Gravitación Universal ⭑</a></li>
</ul>
</div>
<div id="contenido">
<button id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()">⭐🇲​🇪​🇳​🇺​⭐</button><a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()"></a>


</div>
<script>
function mostrar() {
    document.getElementById("sidebar").style.width = "300px";
    document.getElementById("contenido").style.marginLeft = "300px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline"; 
    document.getElementById("div").style.filter="blur(3px)  grayscale(1)";  
    document.getElementById("nav").style.filter="blur(3px)  grayscale(1)";
    document.getElementById("fo").style.filter="blur(3px)  grayscale(1)";
    document.getElementById("con").style.filter="blur(3px)  grayscale(1)"; 

}
function ocultar() {
    document.getElementById("sidebar").style.width = "0";
    document.getElementById("contenido").style.marginLeft = "0";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
    document.getElementById("div").style.filter="none";  
    document.getElementById("nav").style.filter="none";
    document.getElementById("fo").style.filter="none";
    document.getElementById("con").style.filter="none";
}
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"69e2ee73ffaa3687","version":"2021.9.0","r":1,"token":"f0aa520dc035432cb9fe5438c4f03b8b","si":100}'></script>
{{-- FIN barra --}}