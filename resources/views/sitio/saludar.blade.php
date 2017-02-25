@extends('layouts.app')
@section('contenido')
<p>Hola {!! $elNombre !!} saludos desde una plantilla</p>
<a href={!!url('/hola/index')!!}>Ir a Index</a>
@stop


