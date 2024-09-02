@extends('adminlte::page')
@section('title', 'Consultores')
@section('content_header')
    <h1>Consultores</h1>
@stop
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{route('Consultores.create')}}" class="btn btn-primary">Agregar Consultor</a>
        <form action="{{ route('Consultores.index') }}" method="GET" class="form-inline ml-auto">
            <div class="input-group">
                <input type="text" name="search" class="form-control form-control-sm" placeholder="Buscar consultor..." value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-secondary btn-sm" type="submit">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                </div>
            </div>
        </form>
    </div>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">ID</th>
            <th>Nombre completo</th>
            <th>Cédula</th>
            <th>Profesión</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($consultores as $consultor)
                <tr>
                    <td>{{$consultor->id}}</td>
                    <td>{{$consultor->nombre . ' ' . $consultor->apellido}}</td>
                    <td>{{$consultor->ci}}</td>
                    <td>{{$consultor->profesion}}</td>
                    <td>{{$consultor->email}}</td>
                    <td>{{$consultor->telefono}}</td>
                    <td>
                        <a href="{{route('Consultores.edit', $consultor)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('Consultores.show', $consultor)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('Consultores.destroy', $consultor)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este Consultor?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
