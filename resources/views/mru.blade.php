@extends('templates.master')

@section ('header')
@stop

@section ('div')
<h1 style="font-size: 350% ; color: black" align="center" >𐐪 🇲​🇴​🇻​🇮​🇲​🇮​🇪​🇳​🇹​🇴​ 🇷​🇪​🇨​🇹​🇮​🇱​🇮​́🇳​🇪​🇴​ 🇺​🇳​🇮​🇫​🇴​🇷​🇲​🇪​ 𐑂</h1>
@stop

@section ('nav')
<br>
<div class="content-b"><h4>Velocidad instantanea</h4>
<form action="{{route('cuerdas')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="Distancia" class="form-label">X=</label>
        <input type="text" class="round" name="Distancia" id="Distancia" placeholder="Escriba la  Distancia">
    &nbsp
    &nbsp
    &nbsp
        <label for="Tiempo" class="form-label">t=</label>
        <input type="text" class="round" name="Tiempo" id="Tiempo" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>


<br>
<hr>
<br>

<div class="content-b"><h4>Velocidad media</h4>
<form action="{{route('vmedia')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="Distanciai" class="form-label">Xi=</label>
        <input type="text" class="round" name="Distanciai" id="Distanciai" placeholder="Escriba la  Distancia inicial">
    &nbsp
        <label for="Distanciaf" class="form-label">Xf=</label>
        <input type="text" class="round" name="Distanciaf" id="Distanciaf" placeholder="Escriba la  Distancia final">
    &nbsp
        <label for="Tiempoi" class="form-label">ti</label>
        <input type="text" class="round" name="Tiempoi" id="Tiempoi" placeholder="Escriba el Tiempo inicial">
    &nbsp
        <label for="Tiempof" class="form-label">tf</label>
        <input type="text" class="round" name="Tiempof" id="Tiempof" placeholder="Escriba el Tiempo final">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<br>
@stop

@section ('footer')
@stop