@extends('templates.master')

@section ('header')
@stop

@section ('div')
<h1 style="font-size: 350% ; color: black" align="center">𐐪 🇹​🇮​🇷​🇴​ 🇵​🇦​🇷​🇦​🇧​🇴​́🇱​🇮​🇨​🇴​ 𐑂</h1>
@stop

@section ('nav')
<br>
<div class="content-b"><h4>Posicion</h4>
<form action="{{route('vela')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="xi" class="form-label">Posicion inicial en X=</label>
        <input type="text" class="round" name="xi" id="xi" placeholder="Escriba la Posicion inicial en X">
    &nbsp &nbsp
        <label for="vox" class="form-label">Velocidad inicial en X=</label>
        <input type="text" class="round" name="vox" id="vox" placeholder="Escriba la Velocidad inicial en X">
    </div>
    <div class="mb-3">
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Posicion </h4>
<form action="{{route('tapa')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="yi" class="form-label">Posicion inicial en Y=</label>
        <input type="text" class="round" name="yi" id="yi" placeholder="Escriba la Posicion inicial en Y">
    &nbsp &nbsp
        <label for="voy" class="form-label">Velocidad inicial en Y=</label>
        <input type="text" class="round" name="voy" id="voy" placeholder="Escriba la Velocidad inicial en Y">
    </div>
    <div class="mb-3">
        <label for="t" class="form-label">T=</label>
        <input type="text" class="round" name="t" id="t" placeholder="Escriba la Tiempo">
    &nbsp &nbsp
        <label for="g" class="form-label">G=</label>
        <input type="text" class="round" name="g" id="g" placeholder="Escriba la Gravedad">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Velocidad en Y</h4>
<form action="{{route('cuadro')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vi" class="form-label">Velocidad inicial en Y=</label>
        <input type="text" class="round" name="vi" id="vi" placeholder="Escriba la Velocidad inicial en Y">
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

<div class="content-b"><h4>Altura Maxima</h4>
<form action="{{route('porfin')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="vi" class="form-label">Velocidad en Y=</label>
        <input type="text" class="round" name="vi" id="vi" placeholder="Escriba la Velocidad en Y">
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