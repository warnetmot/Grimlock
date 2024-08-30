@extends('adminlte::page')

@section('title', 'Crear Consulta')

@section('content_header')
    <h1>Crear Nueva Consulta</h1>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario de Creación</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('Consultas.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="detalle">Detalle</label>
                            <input type="text" name="detalle" id="detalle" class="form-control form-control-sm" required>
                            @error('detalle')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="costo_servicio">Costo del Servicio</label>
                            <input type="number" name="costo_servicio" id="costo_servicio" class="form-control form-control-sm" step="0.01" required>
                            @error('costo_servicio')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tiempo_ejecucion">Tiempo de Ejecución (horas)</label>
                            <input type="text" name="tiempo_ejecucion" id="tiempo_ejecucion" class="form-control form-control-sm" required>
                            @error('tiempo_ejecucion')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="consultor_id">Consultor</label>
                            <select name="consultor_id" id="consultor_id" class="form-control form-control-sm" required>
                                @foreach ($consultores as $consultor)
                                    <option value="{{ $consultor->id }}">{{ $consultor->nombre }} {{ $consultor->apellido }}</option>
                                @endforeach
                            </select>
                            @error('consultor_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cliente_id">Cliente</label>
                            <select name="cliente_id" id="cliente_id" class="form-control form-control-sm" required>
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                                @endforeach
                            </select>
                            @error('cliente_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
