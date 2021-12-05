<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Control extends Controller
{
    /* GRAVEDAD */
    function inicio(){
        return view ('grav');
    }function taza(Request $request){
        $Masa1 = $request->input('Masa1');
        $Distancia = $request->input('Distancia');
        $Masa2 = $request->input('Masa2');
        
            $r =0.0000000000667*(($Masa2*$Masa1)/($Distancia*$Distancia));
                   return view('resultado',["res"=>$r]);
        }function interes(Request $request){
        $fuerza2 = $request->input('fuerza2');
        $Distancia2 = $request->input('Distancia2');
        $Masa3 = $request->input('Masa3');
        
            $r =$fuerza2*($Distancia2*$Distancia2)/(0.0000000000667 * $Masa3);
                   return view('resultado',["res"=>$r]);
        }function aron(Request $request){
        $fuerza3 = $request->input('fuerza3');
        $Masa4 = $request->input('Masa4');
        $Masa5 = $request->input('Masa5');

            $r =(0.0000000000667*$Masa5*$Masa4)/$fuerza3;
                   return view('resultado',["res"=>$r]);
        }function juancho(Request $request){
        $fuerza3 = $request->input('fuerza3');
        $Masa4 = $request->input('Masa4');
        $Masa5 = $request->input('Masa5');

            $r =sqrt(((0.0000000000667)*$Masa5*$Masa4)/$fuerza3); 
                   return view('resultado',["res"=>$r]);
        }function espe(Request $request){
        $dis = $request->input('dis');
        $Masa10 = $request->input('Masa10');

    $r =0.0000000000667*($Masa10/($dis*$dis)); 
                   return view('resultado',["res"=>$r]);
        }
    /* CAIDA */

    function pimienta(){
     return view ('caida');
    }function vertical(Request $request){
            $velf = $request->input('velf');
            $veli = $request->input('veli');
            $ges = $request->input('ges');

        $r =($velf-$veli)/$ges; 
                   return view('resultado',["res"=>$r]);
       
    }function vertical2(Request $request){
        $velf = $request->input('velf');
        $veli = $request->input('veli');
        $tiempo = $request->input('tiempo');

        $r =(($velf-$veli)/2)*$tiempo; 
               return view('resultado',["res"=>$r]);
   
    }function vertical3(Request $request){
        $ges = $request->input('ges');
        $veli = $request->input('veli');
        $tiempo = $request->input('tiempo');

        $r =($ges+$veli)*$tiempo; 
           return view('resultado',["res"=>$r]);

    }function vertical4(Request $request){
        $ges = $request->input('ges');
        $veli = $request->input('veli');
        $tiempo = $request->input('tiempo');

        $r = ($veli*$tiempo)-.5*($ges*($tiempo*$tiempo)); 
           return view('resultado',["res"=>$r]);
}

        /*MOVIMIENTO RECTILINEO UNIFORMEMENTE ACELERADO*/
        function cel(Request $request){
            $Velocidad = $request->input('Velocidad');
            $Tiempo = $request->input('Tiempo');
        
        $r = $Velocidad/$Tiempo;
    
    return view('resultado',["res"=>$r]);
        }function mrua(){
        return view ('mrua');
}function español(Request $request){
        $vf = $request->input('vf');
        $vi = $request->input('vi');
        $t = $request->input('t');
        $r=($vf-$vi)/$t;
                   return view('resultado',["res"=>$r]);
       
    }function venado(Request $request){
        $vf = $request->input('vf');
        $vi = $request->input('vi');
        $ti = $request->input('ti');
        $tf = $request->input('tf');
        $r=($vf-$vi)/($tf-$ti);

                   return view('resultado',["res"=>$r]);
       
    }
           /* MOVIMIENTO RECTILINEO UNIFORME*/
    function sal(){
        return view ('mru');
    }
        function cuerda(Request $request){
        $Distancia = $request->input('Distancia');
        $Tiempo = $request->input('Tiempo');

    $r =$Distancia/$Tiempo; 
                   return view('resultado',["res"=>$r]);
        }
    function victor(Request $request){
        $Distanciai = $request->input('Distanciai');
        $Distanciaf = $request->input('Distanciaf');
        $Tiempoi = $request->input('Tiempoi');
        $Tiempof = $request->input('Tiempof');
        $g=$Distanciaf-$Distanciai;
        $a=$Tiempof-$Tiempoi;
        $r=$g/$a;


                   return view('resultado',["res"=>$r]);}
/*MOVIMIENTO CIRCULAR UNIFORME*/
function mcu(){
        return view ('mcu');
        }
        function tele(Request $request){
        $s = $request->input('s');
        $ra = $request->input('ra');
        $r=($s/$ra);
            return view('resultado',["res"=>$r]);
}function caja(Request $request){
        $p = $request->input('p');
        $ra = $request->input('ra');
        $r=($p/$ra);
            return view('resultado',["res"=>$r]);
}function calculadora(Request $request){
        $p = $request->input('p');
        $ra = $request->input('ra');
        $r=($p*$ra);
            return view('resultado',["res"=>$r]);
}function cargador(Request $request){
        $p = $request->input('p');
        $ra = $request->input('ra');
        $r=(($p*$p)*$ra);
            return view('resultado',["res"=>$r]);
}
/*MOVIMIENTO CIRCULAR UNIFORMEMENTE ACELERADO*/
    function boton(){
        return view ('mcua');
        }

        function silla(Request $request){
        $w = $request->input('w');
        $t = $request->input('t');
        $r=($w/$t);
            return view('resultado',["res"=>$r]);
}
function plancha(Request $request){
        $wf = $request->input('wf');
        $wi = $request->input('wi');
        $t = $request->input('t');
        $r=($wf-$wi)/$t;
            return view('resultado',["res"=>$r]);
}function salchicha(Request $request){
    $wf = $request->input('wf');
        $wi = $request->input('wi');
        $t = $request->input('t');
        $r=(($wf+$wi)/2)*$t;
            return view('resultado',["res"=>$r]);
}function mesa(Request $request){
        $p = $request->input('p');
        $wi = $request->input('wi');
        $t = $request->input('t');
        $a = $request->input('a');
        $r=$p+($wi*$t)+(0.5*($a*($t*$t)));
            return view('resultado',["res"=>$r]);
}function calenton(Request $request){
        $wi = $request->input('wi');
        $t = $request->input('t');
        $a = $request->input('a');
        $r=$wi+($a*$t);
            return view('resultado',["res"=>$r]);
}function pato(Request $request){
        $wi = $request->input('wi');
        $p = $request->input('p');
        $a = $request->input('a');
        $r=($wi*$wi)+2*($a*$p);
            return view('resultado',["res"=>$r]);
}function piso(Request $request){
        $ra = $request->input('ra');
        $a = $request->input('a');
        $r=$ra*$a;
            return view('resultado',["res"=>$r]);
}
/*TIRO PARABOLICO*/
    function enchufe(Request $request){
        $xi = $request->input('xi');
        $vox = $request->input('vox');
        $t = $request->input('t');
        $r=($xi+($vox*$t));
                   return view('resultado',["res"=>$r]);
    }function mochila(){
        return view ('tirop');
    }function cesto(Request $request){
        $yi = $request->input('yi');
        $voy = $request->input('voy');
        $t = $request->input('t');
        $g = $request->input('g');
        $ola=$voy*$t;
        $rito=$t*$t;
        $r=($yi+$ola)-(.5*($g*$rito));
                   return view('resultado',["res"=>$r]);
    }function toalla(Request $request){
        $vi = $request->input('vi');
        $t = $request->input('t');
        $g = $request->input('g');
        $r=$vi-($g*$t);
                   return view('resultado',["res"=>$r]);
    }function ultima(Request $request){
        $vi = $request->input('vi');
        $g = $request->input('g');
        $r=($vi*$vi)/$g*2;
                   return view('resultado',["res"=>$r]);
    }
    /*TIRO VERTICAL*/
function palo(){
        return view ('tirovertical');
        }function tacon(Request $request){
        $vo = $request->input('vo');
        $t = $request->input('t');
        $g = $request->input('g');
        $rito=$g*($t*$t);
        $r=($vo*$t)-(0.5*$rito);
            return view('resultado',["res"=>$r]);
}function perfume(Request $request){
        $vo = $request->input('vo');
        $vf = $request->input('vf');
        $t = $request->input('t');
        $r=(($vo-$vf)/2)*$t;
            return view('resultado',["res"=>$r]);
}function algodon(Request $request){
        $vo = $request->input('vo');
        $g = $request->input('g');
        $r=($vo*$vo)/(2*$g);
            return view('resultado',["res"=>$r]);
}function bata(Request $request){
        $vo = $request->input('vo');
        $g = $request->input('g');
        $t = $request->input('t');
        $r=$vo-($g*$t);
            return view('resultado',["res"=>$r]);
}function camisa(Request $request){
        $vo = $request->input('vo');
        $g = $request->input('g');
        $h = $request->input('h');
        $r=($vo*$vo)-2*($g*$h);
            return view('resultado',["res"=>$r]);
}function alex(Request $request){
        $vo = $request->input('vo');
        $g = $request->input('g');
        $r=$vo/$g;
            return view('resultado',["res"=>$r]);
}function marin(Request $request){
        $h = $request->input('h');
        $g = $request->input('g');
        $cinto=2*($g*$h);
        $r=sqrt($cinto);
            return view('resultado',["res"=>$r]);
}







































}

















































































































/* ROJOS */