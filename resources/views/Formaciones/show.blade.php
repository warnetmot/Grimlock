@extends('adminlte::page')
@section('title', 'Detalle de la Formación')
@section('content_header')
    <h1>Detalle de la Formación</h1>
@stop
@section('content')
    <div>
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$formacion->consultor->nombre . ' ' . $formacion->consultor->apellido}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Especialidad: </strong>{{$formacion->especialidad}}</p>
            <p><strong>Nivel: </strong>{{$formacion->nivel}}</p>
            <p><strong>Institución: </strong>{{$formacion->institucion}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('Formaciones.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('Formaciones.edit', $formacion)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('Formaciones.destroy', $formacion->id)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta Formación?')">Eliminar</button>
            </form>
        </div>
    </div>
@stop