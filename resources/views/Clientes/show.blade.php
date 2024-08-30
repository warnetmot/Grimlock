@extends('adminlte::page')

@section('title', 'Detalle del Cliente')

@section('content_header')
    <h1>Detalle del Cliente</h1>
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Información del Cliente</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Nombre</th>
                        <td>{{ $clientes->nombre }}</td>
                    </tr>
                    <tr>
                        <th>Apellido</th>
                        <td>{{ $clientes->apellido }}</td>
                    </tr>
                    <tr>
                        <th>Cédula de Identidad</th>
                        <td>{{ $clientes->ci }}</td>
                    </tr>
                    <tr>
                        <th>Empresa</th>
                        <td>{{ $clientes->empresa ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Teléfono</th>
                        <td>{{ $clientes->telefono }}</td>
                    </tr>
                    <tr>
                        <th>Correo Electrónico</th>
                        <td>{{ $clientes->correo }}</td>
                    </tr>
                    <tr>
                        <th>Dirección</th>
                        <td>{{ $clientes->direccion ?? 'N/A' }}</td>
                    </tr>
                    <tr>
                        <th>Género</th>
                        <td>{{ ucfirst($clientes->genero) }}</td>
                    </tr>
                    <tr>
                        <th>Fecha de Creación</th>
                        <td>{{ $clientes->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th>Última Actualización</th>
                        <td>{{ $clientes->updated_at->format('d/m/Y H:i') }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-4">
                <a href="{{ route('Clientes.edit', $clientes->id) }}" class="btn btn-primary btn-sm mx-2">
                    <i class="fas fa-edit"></i> Actualizar Cliente
                </a>
                
                <form action="{{ route('Clientes.destroy', $clientes->id) }}" class="mx-2" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Cliente?')">
                        <i class="fas fa-trash-alt"></i> Eliminar Cliente
                    </button>
                </form>

                <a href="{{ route('Clientes.index') }}" class="btn btn-secondary btn-sm mx-2">
                    <i class="fas fa-arrow-left"></i> Volver a la Lista
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
