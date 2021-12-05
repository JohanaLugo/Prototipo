@extends('templates.master')

@section ('header')
@stop

@section ('div')
<h1 style="font-size: 400% ; color: black" align="center">──── ❝ R ᥱ s ᥙ ᥣ t ᥲ d o ❞ ────</h1>
@stop

@section ('nav')
<br>
<br>
<br>
<h1 style="font-size: 300% ; color: #A96F0B">{{$res}}</h1>
<br>
<br>
<input type="button" onclick="history.back()" name="volver atrás" value="Volver atrás" class="boton">
@stop

@section ('footer')
@stop