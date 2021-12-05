@extends('templates.master')

@section ('header')
@stop

@section ('div')
<h1 style="font-size: 350% ; color: black" align="center">𐐪 🇨​🇦​🇮​́🇩​🇦​ 🇱​🇮​🇧​🇷​🇪​​ 𐑂</h1>
@stop

@section ('nav')
<br>
<div class="content-b"><h4>Tiempo</h4>
<form action="{{route('caida1')}}" method="POST">
    {{csrf_field()}}
    
    <div class="mb-3">
        <label for="velf" class="form-label">Velocidad final=</label>
        <input type="text" class="round" name="velf" id="velf" placeholder="Escriba la Velocidad final">
    &nbsp &nbsp &nbsp
        <label for="veli" class="form-label">Velocidad inicial=</label>
        <input type="text" class="round" name="veli" id="veli" placeholder="Escriba la Velocidad inicial">
    </div>
    <div class="mb-3">
        <label for="ges" class="form-label">G=</label>
        <input type="text" class="round" name="ges" id="ges" placeholder="Escriba la Gravedad Específica">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Altura Maxima</h4>
<form action="{{route('caida2')}}" method="POST">
    {{csrf_field()}}
<div class="mb-3">
        <label for="velf" class="form-label">Velocidad final=</label>
        <input type="text" class="round" name="velf" id="velf" placeholder="Escriba la Velocidad final">
    &nbsp &nbsp &nbsp
        <label for="veli" class="form-label">Velocidad inicial=</label>
        <input type="text" class="round" name="veli" id="veli" placeholder="Escriba la Velocidad inicial">
    </div>
    <div class="mb-3">
        <label for="tiempo" class="form-label">T=</label>
        <input type="text" class="round" name="tiempo" id="tiempo" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Obtener velocidad final</h4>
<form action="{{route('caida3')}}" method="POST">
    {{csrf_field()}}
<div class="mb-3">
        <label for="ges" class="form-label">G=</label>
        <input type="text" class="round" name="ges" id="ges" placeholder="Escriba la Gravedad Específica">
    &nbsp &nbsp &nbsp
        <label for="veli" class="form-label">Velocidad inicial=</label>
        <input type="text" class="round" name="veli" id="veli" placeholder="Escriba la Velocidad inicial">
    &nbsp &nbsp &nbsp
        <label for="tiempo" class="form-label">T=</label>
        <input type="text" class="round" name="tiempo" id="tiempo" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>
</form>

<br>
<hr>
<br>

<div class="content-b"><h4>Obtener altura especifica5</h4>
<form action="{{route('caida4')}}" method="POST">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="ges" class="form-label">G=</label>
        <input type="text" class="round" name="ges" id="ges" placeholder="Escriba la Gravedad Específica">
    &nbsp &nbsp &nbsp
        <label for="veli" class="form-label">Velocidad inicial=</label>
        <input type="text" class="round" name="veli" id="veli" placeholder="Escriba la Velocidad inicial">
    &nbsp &nbsp &nbsp
        <label for="tiempo" class="form-label">T=</label>
        <input type="text" class="round" name="tiempo" id="tiempo" placeholder="Escriba el Tiempo">
    </div>
    <button type="submit" class="btn btn-primary">Calcular</button>

    
</form>
<br>
@stop

@section ('footer')
@stop