@extends('templates.master')

@section ('header')
@stop

@section ('div')
<h1 style="font-size: 350% ; color: black" align="center">𐐪 🇲​🇴​🇻​🇮​🇲​🇮​🇪​🇳​🇹​🇴​ 🇨​🇮​🇷​🇨​🇺​🇱​🇦​🇷​ 🇺​🇳​🇮​🇫​🇴​🇷​🇲​🇪 𐑂</h1>
@stop

@section ('nav')
<br>
<div class="content-b"><h4>Posicion Rotacional</h4>
<form action="{{route('form1')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="s" class="form-label">Longitud de Arco=</label>
        <input type="text" class="round" name="s" id="s" placeholder="Escriba la Longitud">
    &nbsp &nbsp
        <label for="ra" class="form-label">r=</label>
        <input type="text" class="round" name="ra" id="ra" placeholder="Escriba el Radio">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Velocidad Angular</h4>
<form action="{{route('form2')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="p" class="form-label">Posición=</label>
        <input type="text" class="round" name="p" id="p" placeholder="Escriba la Posición">
    &nbsp &nbsp
        <label for="ra" class="form-label">r=</label>
        <input type="text" class="round" name="ra" id="ra" placeholder="Escriba el Radio">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Velocidad Tangencial</h4>
<form action="{{route('form3')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="p" class="form-label">Velocidad Angular=</label>
        <input type="text" class="round" name="p" id="p" placeholder="Escriba la Velocidad Angular">
    &nbsp &nbsp
        <label for="ra" class="form-label">r=</label>
        <input type="text" class="round" name="ra" id="ra" placeholder="Escriba el Radio">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Aceleracion centrípeta</h4>
<form action="{{route('form4')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="p" class="form-label">Velocidad Angular=</label>
        <input type="text" class="round" name="p" id="p" placeholder="Escriba la Velocidad Angular">
    &nbsp &nbsp
        <label for="ra" class="form-label">r=</label>
        <input type="text" class="round" name="ra" id="ra" placeholder="Escriba el Radio">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<br>
@stop

@section ('footer')
@stop