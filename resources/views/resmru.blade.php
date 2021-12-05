@extends('templates.master')

@section ('header')
@stop

@section ('nav')
<h1>{{$res}}</h1>
<br>
<br>
<input type="button" onclick="history.back()" name="volver atrás" value="Volver atrás" class="boton">
@stop

@section ('footer')
@stop