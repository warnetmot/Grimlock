@extends('adminlte::page')
@section('title', 'Modificar Consultor')
@section('content_header')
    <h1>Modificar datos del Consultor</h1>
@stop
@section('content')
    <form action="{{route('Consultores.update', $consultor->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="{{$consultor->nombre}}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="apellido">Apellido: </label>
                    <input type="text" id="apellido" name="apellido" class="form-control" value="{{$consultor->apellido}}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ci">Cédula: </label>
                    <input type="text" id="ci" name="ci" class="form-control" value="{{$consultor->ci}}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="profesion">Profesion: </label>
                    <input type="text" id="profesion" name="profesion" class="form-control" value="{{$consultor->profesion}}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="experiencia">Experiencia en años: </label>
                    <input type="number" id="experiencia" name="experiencia" class="form-control" value="{{$consultor->experiencia}}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Correo electrónico: </label>
                    <input type="email" id="email" name="email" class="form-control" value="{{$consultor->email}}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="telefono">Teléfono: </label>
                    <input type="text" id="telefono" name="telefono" class="form-control" value="{{$consultor->telefono}}" required>
                </div>
            </div>
            <div class="col-md-9">
                <div class="form-group">
                    <label for="direccion">Dirección: </label>
                    <input type="text" id="direccion" name="direccion" class="form-control" value="{{$consultor->direccion}}" required>
                </div>
            </div>
        </div>
        <a href="{{route('Consultores.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop