@extends('adminlte::page')
@section('title', 'Comprobante')
@section('content_header')
    <h1>Nivel de Comprobante</h1>
@stop
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <a href="{{route('Comprobantes.create')}}" class="btn btn-primary">Agregar Comprobante</a>
    <form action="{{ route('Comprobantes.index') }}" method="GET" class="form-inline ml-auto">
        <div class="input-group">
            <input type="text" name="search" class="form-control form-control-sm" placeholder="Buscar comprobante..." value="{{ request('search') }}">
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
            <th width="30px">Nro.</th>
            <th>Detalle</th>
            <th>Importe</th>
            <th>Fecha</th>
            <th>Observaciones</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($comprobantes as $comprobante)
                <tr>
                    <td>{{$comprobante->id}}</td>
                    <td>{{$comprobante->consulta->detalle}}</td>
                    <td>{{$comprobante->consulta->costo_servicio}}</td>
                    <td>{{$comprobante->fecha}}</td>
                    <td>{{$comprobante->observaciones}}</td>
                    <td>
                        <a href="{{route('Comprobantes.edit', $comprobante)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('Comprobantes.show', $comprobante)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('Comprobantes.destroy', $comprobante->id)}}" method="POST" style="display: inline">
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
