<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Control;
/* GRAVEDAD */
Route::get('/gravitacion', [Control::class,'inicio'])->name('gravitacion');
Route::post('/calcular', [Control::class,'taza'])->name('calcular');

Route::get('/gravitacion', [Control::class,'inicio'])->name('gravitacion');
Route::post('/masa', [Control::class,'interes'])->name('uña');

Route::get('/gravitacion', [Control::class,'inicio'])->name('gravitacion');
Route::post('/distancia', [Control::class,'juancho'])->name('juanchos');

Route::get('/gravitacion', [Control::class,'inicio'])->name('gravitacion');
Route::post('/ge', [Control::class,'espe'])->name('espe');

/* CAIDA */

Route::get('/caidalib', [Control::class,'pimienta'])->name('caida libre');
Route::post('/caida1', [Control::class,'vertical'])->name('caida1');

Route::get('/caidalib', [Control::class,'pimienta'])->name('caida libre');
Route::post('/caida2', [Control::class,'vertical2'])->name('caida2');

Route::get('/caidalib', [Control::class,'pimienta'])->name('caida libre');
Route::post('/caida3', [Control::class,'vertical3'])->name('caida3');

Route::get('/caidalib', [Control::class,'pimienta'])->name('caida libre');
Route::post('/caida4', [Control::class,'vertical4'])->name('caida4');

/*MOVIMIENTO RECTILINEO UNIFORMEMENTE ACELERADO*/
Route::get('/mrua', [Control::class,'mrua'])->name('mrua');
Route::post('/calc', [Control::class,'cel'])->name('cuchara');

Route::get('/mrua', [Control::class,'mrua'])->name('mrua');
Route::post('/libro', [Control::class,'español'])->name('libro');

Route::get('/mrua', [Control::class,'mrua'])->name('mrua');
Route::post('/gato', [Control::class,'venado'])->name('gato');

/* MOVIMIENTO RECTILINEO UNIFORME */

Route::get('/mru', [Control::class,'sal'])->name('mru');
Route::post('/cuerdas', [Control::class,'cuerda'])->name('cuerdas');

Route::get('/mru', [Control::class,'sal'])->name('mru');
Route::post('/vmedia', [Control::class,'victor'])->name('vmedia');

/*PÁGINA PRINCIPAL*/

Route::get('/', function () {
    return view('index');
});

/*PRUEBA*/

Route::get('/res', function () {
    return view('resmru');
});

/*MOVIMIENTO CIRCULAR UNIFORME*/

Route::get('/mcu', [Control::class,'mcu'])->name('mcu');
Route::post('/form1', [Control::class,'tele'])->name('form1');

Route::get('/mcu', [Control::class,'mcu'])->name('mcu');
Route::post('/form2', [Control::class,'caja'])->name('form2');

Route::get('/mcu', [Control::class,'mcu'])->name('mcu');
Route::post('/form3', [Control::class,'calculadora'])->name('form3');

Route::get('/mcu', [Control::class,'mcu'])->name('mcu');
Route::post('/form4', [Control::class,'cargador'])->name('form4');

/*MOVIMIENTO CIRCULAR UNIFORMEMENTE ACELERADO*/

Route::get('/mcua', [Control::class,'boton'])->name('mcua');
Route::post('/firme', [Control::class,'silla'])->name('firme');

Route::get('/mcua', [Control::class,'boton'])->name('mcua');
Route::post('/form2', [Control::class,'salchicha'])->name('form2');

Route::get('/mcua', [Control::class,'boton'])->name('mcua');
Route::post('/form3', [Control::class,'mesa'])->name('form3');

Route::get('/mcua', [Control::class,'boton'])->name('mcua');
Route::post('/form4', [Control::class,'calenton'])->name('form4');

Route::get('/mcua', [Control::class,'boton'])->name('mcua');
Route::post('/form5', [Control::class,'pato'])->name('form5');

Route::get('/mcua', [Control::class,'boton'])->name('mcua');
Route::post('/form6', [Control::class,'piso'])->name('form6');

/*TIRO PARABOLICO*/

Route::get('/tirop', [Control::class,'mochila'])->name('tirop');
Route::post('/vela', [Control::class,'enchufe'])->name('vela');

Route::get('/tirop', [Control::class,'mochila'])->name('tirop');
Route::post('/tapa', [Control::class,'cesto'])->name('tapa');

Route::get('/tirop', [Control::class,'mochila'])->name('tirop');
Route::post('/cuadro', [Control::class,'toalla'])->name('cuadro');

Route::get('/tirop', [Control::class,'mochila'])->name('tirop');
Route::post('/cuadro', [Control::class,'ultima'])->name('cuadro');

Route::get('/tirop', [Control::class,'mochila'])->name('tirop');
Route::post('/porfin', [Control::class,'ultima'])->name('porfin');

/*TIRO VERTICAL*/

Route::get('/tirovertical', [Control::class,'palo'])->name('tirovertical');
Route::post('/form1', [Control::class,'tacon'])->name('form1');

Route::get('/tirovertical', [Control::class,'palo'])->name('tirovertical');
Route::post('/form2', [Control::class,'perfume'])->name('form2');

Route::get('/tirovertical', [Control::class,'palo'])->name('tirovertical');
Route::post('/form3', [Control::class,'algodon'])->name('form3');

Route::get('/tirovertical', [Control::class,'palo'])->name('tirovertical');
Route::post('/form4', [Control::class,'bata'])->name('form4');

Route::get('/tirovertical', [Control::class,'palo'])->name('tirovertical');
Route::post('/form5', [Control::class,'camisa'])->name('form5');

Route::get('/tirovertical', [Control::class,'palo'])->name('tirovertical');
Route::post('/form6', [Control::class,'alex'])->name('form6');

Route::get('/tirovertical', [Control::class,'palo'])->name('tirovertical');
Route::post('/form7', [Control::class,'marin'])->name('form7');








































/* fdf */