@extends('adminlte::page')
@section('title', 'Editar Comprobante')
@section('content_header')
    <h1>Editar Comprobante</h1>@stop
@section('content')

    <form action="{{ route('Comprobantes.update', $comprobante->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="consulta_id">Detalle: </label>
                    <select name="consulta_id" id="consulta_id" class="form-control">
                        @foreach($consultas as $consulta)
                        <option value="{{ $consulta->id }}" @if($consulta->id == $consulta->consulta_id) selected @endif>
                        {{ $consulta->detalle }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="especialidad">Importe: </label>
                    <select name="consulta_id" id="consulta_id" class="form-control">
                        @foreach($consultas as $consulta)
                        <option value="{{ $consulta->id }}">{{ $consulta->costo_servicio }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="fecha">Fecha: </label>
                    <input type="date" id="fecha" name="fecha" class="form-control" value="{{ $comprobante->fecha }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="observaciones">Observaciones: </label>
                    <input type="text" id="observaciones" name="observaciones" class="form-control" value="{{ $comprobante->observaciones }}" required>
                </div>
            </div>
        </div>

        <a href="{{route('Comprobantes.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop