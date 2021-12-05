@extends('templates.master')

@section ('header')
@stop

@section ('div')
<h1 style="font-size: 350% ; color: black" align="center">𐐪 🇹​🇮​🇷​🇴​ 🇻​🇪​🇷​🇹​🇮​🇨​🇦​🇱​ 𐑂</h1>
@stop

@section ('nav')
<br>
<div class="content-b"><h4>Altura</h4>
<form action="{{route('form1')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vo" class="form-label">Velocidad Inicial=</label>
        <input type="text" class="round" name="vo" id="vo" placeholder="Escriba la Velocidad Inicial">
    &nbsp &nbsp
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    &nbsp &nbsp
        <label for="g" class="form-label">G=</label>
        <input type="text" class="round" name="g" id="g" placeholder="Escriba la Gravedad">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Altura</h4>
<form action="{{route('form2')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vo" class="form-label">Velocidad Inicial=</label>
        <input type="text" class="round" name="vo" id="vo" placeholder="Escriba la Velocidad Inicial">
    &nbsp &nbsp
        <label for="vf" class="form-label">Velocidad Final=</label>
        <input type="text" class="round" name="vf" id="vf" placeholder="Escriba la Velocidad Final">
    &nbsp &nbsp
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Altura Maxima</h4>
<form action="{{route('form3')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vo" class="form-label">Velocidad Inicial=</label>
        <input type="text" class="round" name="vo" id="vo" placeholder="Escriba la Velocidad Inicial">
    &nbsp &nbsp
        <label for="g" class="form-label">G=</label>
        <input type="text" class="round" name="g" id="g" placeholder="Escriba la Gravedad">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Velocidad Final</h4>
<form action="{{route('form4')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vo" class="form-label">Velocidad Inicial=</label>
        <input type="text" class="round" name="vo" id="vo" placeholder="Escriba la Velocidad Inicial">
    &nbsp &nbsp
        <label for="g" class="form-label">G=</label>
        <input type="text" class="round" name="g" id="g" placeholder="Escriba la Gravedad">
    &nbsp &nbsp
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Velocidad Final</h4>
<form action="{{route('form5')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vo" class="form-label">Velocidad Inicial=</label>
        <input type="text" class="round" name="vo" id="vo" placeholder="Escriba la Velocidad Inicial">
    &nbsp &nbsp
        <label for="g" class="form-label">G=</label>
        <input type="text" class="round" name="g" id="g" placeholder="Escriba la Gravedad">
    &nbsp &nbsp
        <label for="h" class="form-label">h=</label>
        <input type="text" class="round" name="h" id="h" placeholder="Escriba la Altura">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Tiempo de Subida</h4>
<form action="{{route('form6')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vo" class="form-label">Velocidad Inicial=</label>
        <input type="text" class="round" name="vo" id="vo" placeholder="Escriba la Velocidad Inicial">
    &nbsp &nbsp
        <label for="g" class="form-label">G=</label>
        <input type="text" class="round" name="g" id="g" placeholder="Escriba la Gravedad">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Velocidad Inicial</h4>
<form action="{{route('form7')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="h" class="form-label">h=</label>
        <input type="text" class="round" name="h" id="h" placeholder="Escriba la Altura">
    &nbsp &nbsp
        <label for="g" class="form-label">G=</label>
        <input type="text" class="round" name="g" id="g" placeholder="Escriba la Gravedad">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>
<br>
@stop

@section ('footer')
@stop