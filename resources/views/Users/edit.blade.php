@extends('adminlte::page')
@section('title', 'Modificar Usuario')
@section('content_header')
    <h1>Modificar datos del Usuario</h1>
@stop
@section('content')
    <form action="{{route('Users.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre del usuario: </label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Correo electrónico: </label>
                    <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}" required>
                </div>
            </div>
        </div>
        <a href="{{route('Users.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop