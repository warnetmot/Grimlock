@extends('adminlte::page')
@section('title', 'Detalle del Comprobante')
@section('content_header')
    <h1>Detalle del Comprobante</h1>
@stop
@section('content')
    <div>
        <div class="card-header">
            <h3 class="card-title font-weight-bold">{{$comprobante->consulta->detalle}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Imperte: </strong>{{$comprobante->consulta->costo_servicio}}</p>
            <p><strong>Fecha: </strong>{{$comprobante->fecha}}</p>
            <p><strong>Observaciones: </strong>{{$comprobante->observaciones}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('Comprobantes.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('Comprobantes.edit', $comprobante)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('Comprobantes.destroy', $comprobante->id)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este Comprobante?')">Eliminar</button>
            </form>
        </div>
    </div>
@stop