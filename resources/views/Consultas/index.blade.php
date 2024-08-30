@extends('adminlte::page')

@section('title', 'Consultas')

@section('content_header')
    <h1>Consultas</h1>
@stop

@section('content')
    <a href="{{ route('Consultas.create') }}" class="btn btn-primary">Agregar Consulta</a></br></br>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Detalle</th>
                <th>Costo del Servicio</th>
                <th>Tiempo de Ejecución</th>
                <th>Consultor</th>
                <th>Cliente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultas as $consulta)
                <tr>
                    <td>{{ $consulta->id }}</td>
                    <td>{{ $consulta->detalle }}</td>
                    <td>${{ number_format($consulta->costo_servicio, 2) }}</td>
                    <td>{{ $consulta->tiempo_ejecucion }} horas</td>
                    <td>{{ $consulta->consultor->nombre ?? 'No asignado' }}</td>
                    <td>{{ $consulta->cliente->nombre ?? 'No asignado' }}</td>
                    <td>
                        <a href="{{ route('Consultas.edit', $consulta->id) }}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('Consultas.show', $consulta->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('Consultas.destroy', $consulta->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta Consulta?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
