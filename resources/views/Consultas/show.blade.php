@extends('adminlte::page')

@section('title', 'Detalles de la Consulta')

@section('content_header')
    <h1>Detalles de la Consulta</h1>
@stop

@section('content')
<div class="container">
    <h3>Consulta: {{ $consulta->detalle }}</h3>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $consulta->id }}</td>
            </tr>
            <tr>
                <th>Detalle</th>
                <td>{{ $consulta->detalle }}</td>
            </tr>
            <tr>
                <th>Costo del Servicio</th>
                <td>${{ number_format($consulta->costo_servicio, 2) }}</td>
            </tr>
            <tr>
                <th>Tiempo de Ejecución</th>
                <td>{{ $consulta->tiempo_ejecucion }} horas</td>
            </tr>
            <tr>
                <th>Consultor</th>
                <td>{{ $consulta->consultor->nombre }} {{ $consulta->consultor->apellido }}</td>
            </tr>
            <tr>
                <th>Cliente</th>
                <td>{{ $consulta->cliente->nombre }} {{ $consulta->cliente->apellido }}</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4">
                <a href="{{ route('Consultas.edit', $consulta->id) }}" class="btn btn-primary btn-sm mx-2">
                    <i class="fas fa-edit"></i> Actualizar Consulta
                </a>
                
                <form action="{{ route('Consultas.destroy', $consulta->id) }}" class="mx-2" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Cliente?')">
                        <i class="fas fa-trash-alt"></i> Eliminar Consulta
                    </button>
                </form>

                <a href="{{ route('Consultas.index') }}" class="btn btn-secondary btn-sm mx-2">
                    <i class="fas fa-arrow-left"></i> Volver a la Lista
                </a>
            </div>
  
</div>
@stop

