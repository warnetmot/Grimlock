@extends('adminlte::page')
@section('title', 'Crear Formación')
@section('content_header')
    <h1>Agregar Formación</h1>
@stop
@section('content')
    <form action="{{route('Formaciones.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="consultor_id">Nombre del Consultor: </label>
                    <select name="consultor_id" id="consultor_id" class="form-control">
                        @foreach($consultores as $consultor)
                        <option value="{{ $consultor->id }}">{{ $consultor->nombre . ' ' . $consultor->apellido }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label for="especialidad">Especialidad: </label>
                    <input type="text" id="especialidad" name="especialidad" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="nivel">Nivel: </label>
                    <select name="nivel" id="nivel" class="form-control" required>>
                        <option value="Licenciatura">Licenciatura</option>
                        <option value="Diplomado">Diplomado</option>
                        <option value="Maestria">Maestría</option>
                        <option value="Doctorado">Doctorado</option>
                        <option value="Doctorado PH">Doctorado PH</option>
                    </select>
                    {{-- <input type="text" id="nivel" name="nivel" class="form-control" required> --}}
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label for="institucion">Institución: </label>
                    <input type="text" id="institucion" name="institucion" class="form-control" required>
                </div>
            </div>
        </div>

        <a href="{{route('Formaciones.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop