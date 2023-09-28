@extends('layouts.admin')

<!-- Contenido que solo se muestra si el usuario tiene los permisos 'verTodo' o 'Crear' -->
@section('contenido')

<form action="{{url('/usuarios')}}" method="post" enctype="multipart/form-data">
    @csrf

    @include('usuarios.form', ['mode'=>'Añadir', 'action'=>'nuevo'])

    @endsection