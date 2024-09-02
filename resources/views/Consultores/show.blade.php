@extends('adminlte::page')
@section('title', 'Detalle del Consultor')
@section('content_header')
    <h1>Detalle del Consultor</h1>
@stop
@section('content')
    <div >
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$consultor->nombre . ' ' . $consultor->apellido}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cédula: </strong>{{$consultor->ci}}</p>
            <p><strong>Profesión: </strong>{{$consultor->profesion}}</p>
            <p><strong>Años de experiencia: </strong>{{$consultor->experiencia}}</p>
            <p><strong>Correo electrónico: </strong>{{$consultor->email}}</p>
            <p><strong>Teléfono: </strong>{{$consultor->telefono}}</p>
            <p><strong>Dirección: </strong>{{$consultor->direccion}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('Consultores.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('Consultores.edit', $consultor->id)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('Consultores.destroy', $consultor)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este Consultor?')">Eliminar</button>
            </form>
        </div>
    </div>
@stop