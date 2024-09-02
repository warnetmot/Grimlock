@extends('adminlte::page')
@section('title', 'Editar Formación')
@section('content_header')
    <h1>Editar Formación</h1>@stop
@section('content')

    <form action="{{ route('Formaciones.update', $formacion->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="consultor_id">Nombre del Consultor: </label>
                    <select name="consultor_id" id="consultor_id" class="form-control">
                        @foreach($consultores as $consultor)
                        <option value="{{ $consultor->id }}" @if($consultor->id == $formacion->consultor_id) selected @endif>
                        {{ $consultor->nombre . ' ' . $consultor->apellido }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label for="especialidad">Especialidad: </label>
                    <input type="text" id="especialidad" name="especialidad" class="form-control" value="{{ $formacion->especialidad }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="nivel">Nivel: </label>
                    <select name="nivel" id="nivel" class="form-control" value="{{ $formacion->nivel }}" required>>
                        <option value="Licenciatura">Licenciatura</option>
                        <option value="Diplomado">Diplomado</option>
                        <option value="Maestria">Maestría</option>
                        <option value="Doctorado">Doctorado</option>
                        <option value="Doctorado PH">Doctorado PH</option>
                    </select>
                    {{-- <input type="date" id="nivel" name="nivel" class="form-control" value="{{ $formacion->nivel }}" required> --}}
                </div>
            </div>
            <div class="col-md-7">
                <div class="form-group">
                    <label for="institucion">Institución: </label>
                    <input type="text" id="institucion" name="institucion" class="form-control" value="{{ $formacion->institucion }}" required>
                </div>
            </div>
        </div>

        <a href="{{route('Formaciones.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop