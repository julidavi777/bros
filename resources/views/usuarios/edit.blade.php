@extends('layouts.admin')
@section('contenido')

<form action="{{url('/usuarios/'.$user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

@include('usuarios.form', ['mode'=>'Editar', 'action'=>''])

@endsection