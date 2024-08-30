@extends('adminlte::page')
@section('title', 'Consultores')
@section('content_header')
    <h1>Consultores</h1>
@stop
@section('content')
    <a href="{{route('Consultores.create')}}" class="btn btn-primary">Nuevo Consultor</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Cédula</th>
            <th>Profesión</th>
            <th>Experiencia</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($consultores as $consultor)
                <tr>
                    <td>{{$consultor->id}}</td>
                    <td>{{$consultor->nombre . ' ' . $consultor->apellido}}</td>
                    <td>{{$consultor->ci}}</td>
                    <td>{{$consultor->profesion}}</td>
                    <td>{{$consultor->experiencia}}</td>
                    <td>{{$consultor->email}}</td>
                    <td>{{$consultor->telefono}}</td>
                    <td>{{$consultor->direccion}}</td>
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
