@extends('adminlte::page')
@section('title', 'Formación')
@section('content_header')
    <h1>Nivel de Formación</h1>
@stop
@section('content')
    <a href="{{route('Formaciones.create')}}" class="btn btn-primary">Nueva Formación</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre del Consultor</th>
            <th>Especialidad</th>
            <th>Nivel</th>
            <th>Institución</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($formaciones as $formacion)
                <tr>
                    <td>{{$formacion->id}}</td>
                    <td>{{$formacion->consultor->nombre . ' ' . $formacion->consultor->apellido}}</td>
                    <td>{{$formacion->especialidad}}</td>
                    <td>{{$formacion->nivel}}</td>
                    <td>{{$formacion->institucion}}</td>
                    <td>
                        <a href="{{route('Formaciones.edit', $formacion)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('Formaciones.show', $formacion)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('Formaciones.destroy', $formacion->id)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta Formación?')">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
