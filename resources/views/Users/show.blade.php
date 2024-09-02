@extends('adminlte::page')
@section('title', 'Detalle del Usuario')
@section('content_header')
    <h1>Detalle del Usuario</h1>
@stop
@section('content')
    <div >
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$user->name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Correo electrónico: </strong>{{$user->email}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('Users.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('Users.edit', $user->id)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('Users.destroy', $user)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este Usuario?')">Eliminar</button>
            </form>
        </div>
    </div>
@stop