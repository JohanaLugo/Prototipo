{{-- inicio header --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Calculadora</title>
    <style>
       .header-b {
            background-color:#D6DBDF;
            overflow-y: scroll;
             overflow-x: hidden;
        }
        .div-b {
            
            border-radius: 10px;
            position: relative;
            height: 100px;
            width: 1100px;
            right: 0px;
            left: 125px;
            background-color:#85C1E9;
        }
        .nav-b {
            border-radius: 10px;
            position: relative;
            height: auto;
            right: 0px;
            left: 175px;
            width: 1000px;
            background-color:#eeeeee

		
        }
        .content-b{
            background-color:#D6DBDF
        }
        .esp-b{
            background-color:#D6DBDF	
        }
        .footer-b {
            border-radius: 10px;
            position: relative;
            height: ;
            width: 1100px;
            right: 0px;
            left: 125px;
            background-color:#2E86C1; 
				
        }

              table, td {
       
      }
      table {
        width:100%;
      }
      td {
          padding: 1;

      }
      
body {
    font-family: "Segoe UI", sans-serif;
    font-size:100%;
}


.sidebar {
    position:fixed;
    height: 100%;
    width: 0;
    top: 0;
    left: 0;
    z-index: 1;
    background-color: #82b3c9;
    overflow-x: hidden;
    transition: 0.4s;
    padding: 1rem 0;
    box-sizing:border-box;
}

.sidebar .boton-cerrar {
    
    position: absolute;
    top: 0.5rem;
    right: 1rem;
    font-size: 2rem;
    display: block;
    padding: ;
    line-height: 1.5rem;
    margin: 0;
    height: 32px;
    width: 32px;
    text-align: center;
    vertical-align: top;
}

.sidebar ul, .sidebar li{
    margin:0;
    padding:0;
    list-style:none inside;
}

.sidebar ul {
    
    margin: 4rem auto;
    display: block;
    width: 90%;
    min-width:200px;
}

.sidebar a {
    
    display: block;
    font-size: 110%;
    color: #000051;
    text-decoration: none;
    
}

.sidebar a:hover{
    
    color:#fff;
    background-color: #0d47a1;

}

h1 {
    color:#f90;
    font-size:180%;
    font-weight:normal;
}
#contenido {
    transition: opacity 0.9s ease-in-out;
    
    padding: 1rem;
}

.abrir-cerrar {
    position:fixed;
    color: #2E88C7;
    font-size:1rem;

}

#abrir {

}
#cerrar {
    display:none;
     padding: 600px;
    
    
}
}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="header-b">
{{-- FIN header --}}


{{-- INICIO barra --}}
<div id="sidebar" class="sidebar">

<ul class="menu">

<li><a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a><h3>✾&nbspMᴏᴠɪᴍɪᴇɴᴛᴏ&nbsp✾</h3></li>

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

{{-- INICIO div --}}
<div align="center" class="div-b" id="div">
<h1 style="font-size: 350% ; color: black">❃ 🇨​🇦​🇱​🇨​🇺​🇱​🇦​🇩​🇴​🇷​🇦​ 🇨​🇮​🇪​🇳​🇫​🇮​́🇸​🇮​🇨​🇦 ❃​</h1>
</div>
{{-- FIN div --}}

{{-- inicio esp --}}
<div class="esp-b" id="">
<div>
<br>
</div> 
{{-- FIN esp --}}

{{-- inicio nav --}}
<nav class="nav-b" id="nav">
<h2 align="center" >✩ 🇲​🇴​🇻​🇮​🇲​🇮​🇪​🇳​🇹​🇴​  🇷​🇪​🇨​🇹​🇮​🇱​🇮​́🇳​🇪​🇴​ 🇺​🇳​🇮​🇫​🇴​🇷​🇲​🇪​ ✩</h2>
<br>
<p border=3px>En física, un movimiento es rectilíneo uniforme cuando un objeto viaja en una trayectoria recta a una velocidad constante,​ dado que su aceleración es nula.
    <br>
El movimiento rectilíneo uniforme se designa frecuentemente con el acrónimo MRU, aunque en algunos países es MRC, por movimiento rectilíneo constante.
<br>
El MRU se caracteriza por:
<br>
<li>Movimiento que se realiza sobre una línea recta.</li>
<li>Velocidad constante; implica magnitud y dirección constantes.</li>
<li>La magnitud de la velocidad recibe el nombre de celeridad o rapidez sin aceleración.</li>
</p>
<br>
<div align="center">
<img  src="https://cdn.discordapp.com/attachments/916114996767895552/916118461434970152/Movimiento_rectilineo_image006.png"  alt="">
</div>
<br>
<hr>
<br>
<h2 align="center">✩ 🇲​🇴​🇻​🇮​🇲​🇮​🇪​🇳​🇹​🇴​ 🇷​🇪​🇨​🇹​🇮​🇱​🇮​́🇳​🇪​🇴​ 🇺​🇳​🇮​🇫​🇴​🇷​🇲​🇪​🇲​🇪​🇳​🇹​🇪​ 🇦​🇨​🇪​🇱​🇪​🇷​🇦​🇩​🇴 ✩​</h2>
<br>
<p>En física, el movimiento rectilíneo uniformemente acelerado (MRUA),  es aquel en el que un móvil se desplaza sobre una trayectoria recta estando sometido a una aceleración constante.
<br>
También puede definirse como el movimiento que realiza una partícula que partiendo del reposo es acelerada por una fuerza constante.
<br>
El Movimiento Rectilíneo Uniformemente Acelerado (MRUA) es un caso particular del movimiento uniformemente acelerado (MUA).</p>
<br>
<div align="center">
<img src="https://cdn.discordapp.com/attachments/916114996767895552/916123592658415676/movimiento-rectilC3ADneo-uniformemente-variado-mruv2.png" alt="">
</div>
<br>
<hr>
<br>
<h2 align="center">✩ 🇲​🇴​🇻​🇮​🇲​🇮​🇪​🇳​🇹​🇴​ 🇨​🇮​🇷​🇨​🇺​🇱​🇦​🇷​ 🇺​🇳​🇮​🇫​🇴​🇷​🇲​🇪 ✩​</h2>
<br>
<p>En física, el movimiento circular uniforme (M.C.U.) es el que describe un cuerpo que se mueve alrededor de un eje de giro con un radio y una velocidad angular (ω) constantes, trazando una circunferencia y con una aceleración centrípeta.
En este movimiento la dirección varia en cada instante, un ejemplo de este movimiento es una rueda de automóvil que gira a una ω constante.</p>
<br>
<div align="center">
<img src="https://cdn.discordapp.com/attachments/916114996767895552/916124420219752578/image.png" alt="">
</div>
<br>
<hr>
<br>
<h2 align="center">✩ 🇲​🇴​🇻​🇮​🇲​🇮​🇪​🇳​🇹​🇴​ 🇨​🇮​🇷​🇨​🇺​🇱​🇦​🇷​ 🇺​🇳​🇮​🇫​🇴​🇷​🇲​🇪​🇲​🇪​🇳​🇹​🇪​ 🇦​🇨​🇪​🇱​🇪​🇷​🇦​🇩​🇴​ ✩</h2>
<br>
<p>El movimiento circular uniformemente acelerado (M.C.U.A) es un movimiento que se caracteriza por tener una trayectoria que describe un circulo cuya velocidad angular y velocidad tangencial del objeto aumentan o disminuyen constantemente dependiendo de la dirección o signo de las aceleraciones correspondientes. 
<br>
En el movimiento circular uniformemente acelerado afectan 3 aceleraciones diferentes: aceleración angular, aceleración tangencial y aceleración centrípeta, y en el vector velocidad del objeto varían todos los componentes, es decir, varia el modulo o magnitud, la dirección y el sentido.</p>
<br>
<div align="center">
<img src="https://cdn.discordapp.com/attachments/916114996767895552/916125101844467762/movimiento-circular-uniformemente-acelerado.png" alt="">
</div>
<br>
<hr>
<br>
<h2 align="center">✩ 🇨​🇦​🇮​́🇩​🇦​ 🇱​🇮​🇧​🇷​🇪​ ✩</h2>
<br>
<p>En física, se denomina caída libre al movimiento de un cuerpo bajo la acción exclusiva de un campo gravitatorio. Esta definición formal excluye a todas las caídas reales influenciadas en mayor o menor medida por la resistencia aerodinámica del aire, así como a cualquier otra que tenga lugar en el seno de un fluido; sin embargo, es frecuente también referirse coloquialmente a estas como caídas libres, aunque los efectos de la densidad del medio no sean por lo general despreciables.</p>
<br>
<div align="center">
<img src="https://cdn.discordapp.com/attachments/916114996767895552/916125867405615144/caida-libre.png" alt="">
</div>
<br>
<hr>
<br>
<h2 align="center">✩ 🇹​🇮​🇷​🇴​ 🇵​🇦​🇷​🇦​🇧​🇴​́🇱​🇮​🇨​🇴​ ✩</h2>
<br>
<p>El tiro parabólico es un movimiento que resulta
de la unión de dos movimientos: El movimiento
rectilíneo uniforme (componentes horizontal) y,
el movimiento vertical (componente vertical)
que se efectúa por la gravedad y el resultado de
este movimiento es una parábola.
<br>
El tiro parabólico, es la resultante de la suma vectorial de
un movimiento horizontal uniforme y de un movimiento
vertical rectilíneo uniformemente variado. El tiro parabólico
es de dos clases: tiro horizontal y, tiro oblicuo</p>
<br>
<div align="center">
<img src="https://cdn.discordapp.com/attachments/916114996767895552/916126496932909126/movimiento-parabolico.png" alt="">
</div>
<br>
<hr>
<br>
<h2 align="center">✩ 🇹​🇮​🇷​🇴​ 🇻​🇪​🇷​🇹​🇮​🇨​🇦​🇱​ ✩</h2>
<br>
<p>Es un movimiento uniformemente acelerado, es un movimiento sujeto a la aceleración de la gravedad (g), sólo que ahora la aceleración se opone al movimiento inicial del objeto.
 <br>
A diferencia de la caída libre, que opera solo de bajada, el tiro vertical comprende subida y bajada de los cuerpos u objetos.
<br>
Caracteristicas:
<li>La velocidad inicial siempre es diferente a cero.</li>
<li>Mientras el objeto sube, el signo de su velocidad (V) es positivo.</li>
<li>Su velocidad es cero cuando el objeto  alcanza su altura máxima.</li>
<li>Cuando comienza a descender, su velocidad será negativa.</li>
</p>
<br>
<div align="center">
<img src="https://cdn.discordapp.com/attachments/916114996767895552/916127187772506132/objeto2BLVA.png" alt="">
</div>
<br>
<hr>
<br>
<h2 align="center">✩ 🇬​🇷​🇦​🇻​🇮​🇹​🇦​🇨​🇮​🇴​́🇳​ 🇺​🇳​🇮​🇻​🇪​🇷​🇸​🇦​🇱​ ✩</h2>
<br>
<p>La ley de gravitación universal es una ley física clásica que describe la interacción gravitatoria entre distintos cuerpos con masa.
<br>
Establece una relación proporcional de la fuerza con que se atraen dos objetos con masa. La fuerza con que se atraen dos cuerpos tenía que ser proporcional al producto de sus masas dividido por la distancia entre ellos al cuadrado.
<br>
 La ley de la gravitación universal predice que la fuerza ejercida entre dos cuerpos de masas m1 y m2 separados una distancia  es igual al producto de sus masas e inversamente proporcional al cuadrado de la distancia.</p>
<br>
<div align="center">
<img src="https://cdn.discordapp.com/attachments/916114996767895552/916127625016127498/ley-de-gravitacion-universal-e1559250122299.png" alt="" height="230">
</div>
<br>
<br>
</nav>
{{-- FIN nav --}}

{{-- inicio content --}}
<div class="content-b" id="con">
<div>
<br>
</div>    
{{-- FIN content --}}

    {{-- inicio footer --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
<footer class="footer-b"; align="center" id="fo">
<table class="default">

    <td><h4 style="font-size: 100% ; color:white";>Johana Camila Lugo Sánchez</h4></td>
    <td><h4 style="font-size: 100% ; color:white";>Aarón Isaac Pacheco Girón</h4></td>

    <td><h4 style="font-size: 100% ; color:white";>Daniela Karina Garcia Dorado</h4></td>
    <td><h4 style="font-size: 100% ; color:white";>Luis Angel Hernandez Jimenez</h4></td>

</table>
<h4 style="font-size: 100% ; color:white";>Grupo 5°F</h4>
    <h4 style="font-size: 100% ; color:white";>Centro de Bachillerato Tecnológico Industrial y de Servicios #122</h4>
    <br>
</footer>
</html>
{{-- FIN footer --}}