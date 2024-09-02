@extends('adminlte::page')
@section('title', 'Crear Comprobante')
@section('content_header')
    <h1>Agregar Comprobante</h1>
@stop
@section('content')
    <form action="{{route('Comprobantes.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="consulta_id">Detalle: </label>
                    <select name="consulta_id" id="consulta_id" class="form-control">
                        @foreach($consultas as $consulta)
                        <option value="{{ $consulta->id }}">{{ $consulta->detalle }}</option>
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
                    <input type="date" id="fecha" name="fecha" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="observaciones">Observaciones: </label>
                    <input type="text" id="observaciones" name="observaciones" class="form-control" required>
                </div>
            </div>
        </div>

        <a href="{{route('Comprobantes.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop