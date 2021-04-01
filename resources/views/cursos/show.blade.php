@extends('layouts.plantilla')
@section('tittle','Curso ' .$curso->name)
@section('content')
<h1>Bienvenido al curso {{$curso->name}}
</h1>
<a href="{{route('cursos.index')}}">Volver a cursos</a>
<label for="">De la categoria {{$curso->categoria}}</label>
<p for="">De la categoria {{$curso->description}}</p>
@endsection
