@extends('templates.master')

@section ('header')
@stop

@section ('div')
<h1 style="font-size: 350% ; color: black" align="center">𐐪 🇬🇷🇦​🇻​🇮​🇹​🇦​🇨​🇮​🇴​́🇳​ 🇺​🇳​🇮​🇻​🇪​🇷​🇸​🇦​🇱​ 𐑂</h1>
@stop

@section ('nav')
<br>
<div class="content-b"><h4>Gravedad</h4>
<form action="{{route('calcular')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="Masa1" class="form-label">m1=</label>
        <input type="text" class="round" name="Masa1" id="Masa1" placeholder="Escriba la Masa 1">
    &nbsp &nbsp
        <label for="Distancia" class="form-label">D=</label>
        <input type="text" class="round" name="Distancia" id="Distancia" placeholder="Escriba la Distancia">
    &nbsp &nbsp
        <label for="Masa2" class="form-label">m2=</label>
        <input type="text" class="round" name="Masa2" id="Masa2" placeholder="Escriba la Masa 2">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Masa</h4>
<form action="{{route('uña')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="fuerza2" class="form-label">F=</label>
        <input type="number" class="round" name="fuerza2" id="fuerza2" placeholder="Escriba la Fuerza">
    &nbsp &nbsp
        <label for="Distancia2" class="form-label">D=</label>
        <input type="number" class="round" name="Distancia2" id="Distancia2" placeholder="Escriba la Distancia">
    &nbsp &nbsp
        <label for="Masa3" class="form-label">M=</label>
        <input type="number" class="round" name="Masa3" id="Masa3" placeholder="Escriba la Masa">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Distancia</h4>
<form action="{{route('juanchos')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="fuerza3" class="form-label">F=</label>
        <input type="number" class="round" name="fuerza3" id="fuerza3" placeholder="Escriba la Fuerza">
    &nbsp &nbsp
        <label for="Masa4" class="form-label">m1=</label>
        <input type="number" class="round" name="Masa4" id="Masa4" placeholder="Escriba la Masa 1">
    &nbsp &nbsp
        <label for="Masa5" class="form-label">m2=</label>
        <input type="number" class="round" name="Masa5" id="Masa5" placeholder="Escriba la Masa 2">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Gravedad Especifica</h4>
<form action="{{route('espe')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="dis" class="form-label">D=</label>
        <input type="number" class="round" name="dis" id="dis" placeholder="Escriba la Distancia">
    &nbsp &nbsp &nbsp &nbsp
        <label for="Masa10" class="form-label">m2=</label>
        <input type="number" class="round" name="Masa10" id="Masa10" placeholder="Escriba la Masa 2">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
    
</form>
<br>
@stop

@section ('footer')
@stop