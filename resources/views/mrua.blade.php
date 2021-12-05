@extends('templates.master')

@section ('header')
@stop

@section ('div')
<h1 style="font-size: 270% ; color: black" align="center">𐐪 🇲​🇴​🇻​🇮​🇲​🇮​🇪​🇳​🇹​🇴​ 🇷​🇪​🇨​🇹​🇮​🇱​🇮​́🇳​🇪​🇴​​ 🇺​🇳​🇮​🇫​🇴​🇷​🇲​🇪​🇲​🇪​🇳​🇹​🇪​ 🇦​🇨​🇪​🇱​🇪​🇷​🇦​🇩​🇴 𐑂</h1>
@stop

@section ('nav')
<br>
<div class="content-b" float=""><h4>Aceleracion</h4>
<form action="{{route('cuchara')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="Velocidad" class="form-label">v=</label>
        <input type="text" class="round" name="Velocidad" id="Velocidad" placeholder="Escriba la Velocidad">
        &nbsp &nbsp
        <label for="Tiempo" class="form-label">t=</label>
        <input type="text" class="round" name="Tiempo" id="Tiempo" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Aceleracion</h4>
<form action="{{route('libro')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vf" class="form-label">Velocidad final=</label>
        <input type="text" class="round" name="vf" id="vf" placeholder="Escriba la Velocidad Final">
        &nbsp &nbsp
        <label for="vi" class="form-label">Velocidad inicial=</label>
        <input type="text" class="round" name="vi" id="vi" placeholder="Escriba la Velocidad Inicial">
        &nbsp &nbsp
        <label for="t" class="form-label">t=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>   
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Aceleracion</h4>
<form action="{{route('gato')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vf" class="form-label">Velocidad final=</label>
        <input type="text" class="round" name="vf" id="vf" placeholder="Escriba la Velocidad Final">
        &nbsp
        <label for="vi" class="form-label">Velocidad inicial=</label>
        <input type="text" class="round" name="vi" id="vi" placeholder="Escriba la Velocidad Inicial">
        </div>
        <div class="mb-3">
        <label for="ti" class="form-label">Tiempo inicial=</label>
        <input type="text" class="round" name="ti" id="ti" placeholder="Escriba el Tiempo Inicial">
        &nbsp
        <label for="tf" class="form-label">Tiempo final=</label>
        <input type="text" class="round" name="tf" id="tf" placeholder="Escriba el Tiempo Final">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>   
</form>

<br>

@stop

@section ('footer')
@stop